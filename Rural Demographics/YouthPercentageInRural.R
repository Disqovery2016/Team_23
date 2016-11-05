#Concerned Statewise road density Data is taken from
#url -> http://rural.nic.in/sites/downloads/IRDR/1.%20Demographic%20Profile.xls
myvalues <- read.csv("DemographicRural.csv")
#ordering the data 
high.order <- order(myvalues$Rural, decreasing=TRUE)
education.high <- myvalues[high.order,]
#plotting the data
barplot(myvalues$Rural, names.arg=myvalues$State, horiz=TRUE, las=1, cex.names=0.6, border=NA)
summary(myvalues)
