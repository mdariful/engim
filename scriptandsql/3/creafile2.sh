#!/bin/bash
echo -e "Quanti file vuoi creare\n";
read n;
if [[ $n -gt 10 || $n -le 0 ]]; then
        echo -e "numero errato";
        exit;
fi

for i in $( seq 1 $n ); do
        touch "$n";
	
        echo -e "vuoi dare i permessi al file $i ? Y/N \n";
        read perm;
        
	if [[ $perm == "Y" || $perm == "y" ]]; then
        chmod 764 "$n";

	fi

        echo -e "Padrone ho create il file $n\n";

        done

