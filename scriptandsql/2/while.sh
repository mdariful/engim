#!/bin/bash
#esercizio ciclo while
x=1;

while [ $x -le 5 ]
	do
	read -p "quante ciambelle vuoi? " a;
	echo -e "ne vuoi $a\nIterazione $x\n";
	x=$(( x+1 ));
	done
