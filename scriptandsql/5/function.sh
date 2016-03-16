#!/bin/bash
########
#read op1 and op2
#function script for addition
#######

sum() {
	echo -e "this is the addition function\n";
	echo -e "addition is $(($op1+$op2))";
}

read -p "operator 1: " op1;
read -p "operator 2: " op2;

sum $op1 $op2;

#echo -e "the addition is $(( $op1+$op2))";
