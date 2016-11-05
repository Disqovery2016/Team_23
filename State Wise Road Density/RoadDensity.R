#Concerned Statewise road density Data is taken from
#url -> http://morth.nic.in/index3.asp?sslid=1284&subsublinkid=590&lang=1
myvalues <- read.csv("roaddensity.csv")
#ordering the data 
high.order <- order(myvalues$RoadDensity, decreasing=TRUE)
education.high <- myvalues[high.order,]
#plotting the data
barplot(myvalues$RoadDensity, names.arg=myvalues$State, horiz=TRUE, las=2, cex.names=0.8, border=NA)
summary(myvalues)
