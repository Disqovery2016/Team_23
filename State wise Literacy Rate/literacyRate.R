#Concerned Statewise Literacy Rate Data is taken from Census 2011
#url -> http://censusindia.gov.in/2011-prov-results/data_files/india/Final_PPT_2011_chapter6.pdf

myvalues <- read.csv("literacy.csv")
#ordering the data 
high.order <- order(myvalues$Literacy, decreasing=TRUE)
education.high <- myvalues[high.order,]
#plotting the data
barplot(myvalues$Literacy, names.arg=myvalues$State, horiz=TRUE, las=2, cex.names=0.8, border=NA)
summary(myvalues)
