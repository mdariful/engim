#!/bash/bin
echo -e "rubrica\n";
while :
do
	read -p"[Ii]per inserire, [Vv] per visualizzare [Cc] per cercare " a;
	case "$a" in
[Ii])
	read -p "Nome contatto " name;
	read -p "Numero di telefono " num;
	read -p "Indirizzo " address;
	echo "$name -- $num -- $addres" >> contatti
	;;
[Vv])
	if [ -a contatti ];
	then 
		more contatti
	else
		echo -e "Acnora nessun contatto inserito\n";
	fi
	;;
[Cc])
	read -p "Chi vuoi cercare?: " name;
	if [ -a contatti ];
	then
		grep "$name" contatti
	else
		echo -e "Ancora nessun contatto inserito\n";
	fi
	;;
	*) echo -e "grazie per aver usato la rubrica\n"
	exit
	;;
esac;
done
