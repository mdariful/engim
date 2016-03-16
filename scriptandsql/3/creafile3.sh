#input voglio un comando linux e dovra mostrare quante volte è stato usato wc, find, bash_history

echo -e "Ciao inserisci un comando linux\n";
read comando;
variabile=$(history | grep $comando | wc -l);
echo -e "il comando $comando è stato utilizzato $variabile volta/e";
