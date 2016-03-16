#creare uno script al quale passate un numero da tastiera e dovrà #creare n(che è il numero ricevuto) file chiamati fine-n0 file-n1
....
#!/bin/bash
echo -e "ciao quanti file vuoi creare?\n";
read n;
if [ $n -gt 10 ]; then
	echo -e "Troppi numeri, addio\n";
	exit;
fi
if [ $n -le 0 ]; then
	echo -e "Che cosa hai inserito maledetto!, addio\n";
	exit;
fi
for i in $( seq 1 $n ); do
	touch "file-$i";
	chmod 764 "file-$i";	
	echo -e "Padrone ho create file-$i\n";
sleep 1;
	done;
sleep 2;
	echo -e "Ho eseguito i tuoi ordini. LASCIAMI IN PACE\n";
