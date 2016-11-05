#Concerned Statewise road density Data is taken from
#Data is in $'s
#url -> http://statisticstimes.com/economy/comparing-indian-states-and-countries-by-gdp-capita.php
myvalues <- read.csv("PerCapitaIncome.csv")
#ordering the data 
high.order <- order(myvalues$PerCapitaIncome, decreasing=TRUE)
education.high <- myvalues[high.order,]
#plotting the data
barplot(myvalues$PerCapitaIncome, names.arg=myvalues$State, horiz=TRUE, las=2, cex.names=0.8, border=NA)
summary(myvalues)
