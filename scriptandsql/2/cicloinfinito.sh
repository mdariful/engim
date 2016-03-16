#!/bin/bash
#crea file finchè non digito un certo carattere
while :
	do
	read -p "Padrone devo continuare? [Y/N]" a;
	if [[ $a = "N" || $a = "n" ]]; then
		break;
	fi
	done

echo -e "Ti ringrazio di aver fermato questo strazio\n";

