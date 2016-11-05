#Concerned Statewise road density Data is taken from annual reports of respective companies
myvalues <- read.csv("rival.csv")
#ordering the data 
high.order <- order(myvalues$Revenue, decreasing=TRUE)
education.high <- myvalues[high.order,]
#plotting the data
barplot(myvalues$Revenue, names.arg=myvalues$Rival, horiz=TRUE, las=1, cex.names=0.5, border=NA)
summary(myvalues)
