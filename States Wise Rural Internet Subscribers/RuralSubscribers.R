#Concerned Statewise road density Data is taken from 
#url -> http://www.trai.gov.in/WriteReadData/PIRReport/Documents/Indicator-Reports-Mar12082015.pdf
myvalues <- read.csv("RuralInternetSubscribers.csv")
#ordering the data 
high.order <- order(myvalues$RuralSubscribers, decreasing=TRUE)
education.high <- myvalues[high.order,]
#plotting the data
barplot(myvalues$RuralSubscribers, names.arg=myvalues$State, horiz=TRUE, las=2, cex.names=0.8, border=NA)
summary(myvalues)
