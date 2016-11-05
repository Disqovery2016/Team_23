#Concerned Statewise road density Data is taken from
#url -> http://www.trai.gov.in/WriteReadData/PIRReport/Documents/Indicator-Reports-Mar12082015.pdf
#Search for " Service Area wise number of Internet Subscribers at the end of Mar-15"
myvalues <- read.csv("internet.csv")
#ordering the data 
high.order <- order(myvalues$RuralGrowthRate, decreasing=TRUE)
education.high <- myvalues[high.order,]
#plotting the data
barplot(myvalues$RuralGrowthRate, names.arg=myvalues$State, horiz=TRUE, las=2, cex.names=0.8, border=NA)
summary(myvalues)
