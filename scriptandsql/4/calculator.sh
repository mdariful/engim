#!/bin/bash
#bash calculator
input="yes"
while [[ $input = "yes" ]]
do
echo -e "Press [a] for Addition, [s] for subtraction, [m] for multiplication and [d] for division: "
read math;
case "$math" in 

            a)
			echo "Enter first no:"
			read num1
			echo "Enter second no:"
			read num2
			echo "$num1 + $num2 = `echo "$num1+$num2"|bc -l`"
		 ;;
            s)
			echo "Enter first no:"
                        read num1
                        echo "Enter second no:"
                        read num2
                        echo "$num1 - $num2 = `echo "$num1-$num2"|bc -l`"
                 ;;
           m)
			echo "Enter first no:"
                        read num1
                        echo "Enter second no:"
                        read num2
                        echo "$num1 * $num2 = `echo "$num1*$num2"|bc -l`"
                 ;;
            d)
                         echo "Enter first no:"
                        read num1
                        echo "Enter second no:"
                        read num2
                        echo "$num1 / $num2 = `echo "$num1/$num2"|bc -l`"
                 ;;

            *) 
		echo "Input error" 
		;;
        esac;
	echo "Do you want to calculate again(yes/no):"
	read input;
	echo "Thank you for using this program"
done
