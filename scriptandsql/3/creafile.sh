#!/bin/bash
echo -e "Inserire il nome del file\n";
read n;
	touch "$n";
	chmod 764 "$n";
	echo -e "Padrone ho create il file $n\n";
sleep 1;
