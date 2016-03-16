#Esercizi sql
#es1: 03-12-2015 estrarre nome e densità abitativa delle province ordinate per densità abitativa arrotondare al secondo decimale
select row_number() over (order by id ASC) AS classifica, nome, sigla, ROUND(abitanti/superficie,2) AS "Densità" from provincia order by abitanti/superficie DESC;

#es2: 03-12-2015 Estrarre stringhe tipo "[nome]([sigla])" per ogni pronvicia esempi:Torino(TO)Savona(SV)
select concat(nome,'(',sigla,')') AS "nome e sigla" from provincia;

#es3: 03-12-2015 Estrarre stringhe tipo "Il sig. [n]. [cognome]" per ogni utente.
select concat("Il sig."," ",LEFT(nome,1),"."," ",cognome) AS "nome e cognome" from utente;

#es4 03-12-2015 estrare stringhe tipo "Il sig. [n]. [cognome] nato il [data_nascita]" per ogni utente.
select concat_ws(" ","Il sig.",concat(LEFT(nome,1),".")," ",cognome,"nato il",data_nascita) AS "nome e cognome" from utente;

#es5 03-12-2015 estrarre la descrizione degli articoli con iniziale maiuscola e resto minuscolo
SELECT concat(upper(left(descrizione,1)),lower(substring((descrizione),2))) AS Descrizione from articolo limit 10;

#es7 04-12-2015 Estrarre nome e superficie delle provincie con superficie compresa tra 500 e 1000 km^2
select nome, superficie from provincia where superficie BETWEEN 500 AND 1000;


#es8 04-12-2015 Estrarre nome e superficie delel provincie con densità abitativa tra 500 e 1000 ab/km^2
select nome, abitanti, superficie from provincia where (abitanti/superficie) BETWEEN 500 AND 1000;

#es9 04-12-2015 Estrarre nome e sigla delle provincia di AO, AT, PU, OT, OG, FC, BT, KR, VV, WC
select nome, sigla from provincia where sigla IN ("AO","AT","PU","OT","OG","FC","BT","KR","VV","WC");

#es10 04-12-2015 estrarre settore, descrizione e valore degli articoli con valore inferiore a 500€ o superiore a 2000€
select settore, descrizione, (quantita*prezzo) AS valore from articolo where (quantita>0) AND (quantità*prezzo NOT BETWEEN 50 AND 2000);

#es12 04-12-2015 Estrarre  settore, descrizione quantita e prezzo degli articoli del settore ristorativo
select settore, descrizione, quantita, prezzo from articolo where settore = "ristorativo";

#es13 04-12-2015 estrarre settore, descrizione, quantita e prezzo degli articoli la cui descrizione contiene la parola "legno"
select settore, descrizione, quantita, prezzo from articolo where descrizione like "%legno%";

#es14 04-12-2015 Estrarre settore, descrzione, quantita e prezzo degli articoli la cui descrizione contiene le parole "LEGNO" e "SCALPELLO"
select descrizione from articolo where descrizione like "%legno%" OR descrizione Like "%scalpello%";

#es15 04-12-2015 Estrarre nome e densità abitativa delle province ordinando per densità in ordine decrescente
select nome, abitanti/superficie AS densita from provincia order by densita desc;

#es16 09-12-2015 Estrarre cognome, nome, giorno, mese, anno della data di nascita degli utenti
select cognome, nome, EXTRACT(DAY FROM data_nascita) AS giorno, EXTRACT(MONTH FROM data_nascita) AS mese, EXTRACT(YEAR FROM data_nascita) AS ANNO from utente;
select cognome, nome, DAY(data_nascita) AS giorno, MONTH(data_nascita) AS mese, YEAR(data_nascita) AS anno from utente;

#es17 09-12-2015 Estrarre cognome, nome, giorno, mese, anno, giorno della settimana e nome del mese della data di nascita degli utenti
select cognome, nome, DAY(data_nascita) AS giorno, MONTH(data_nascita) AS mese, YEAR(data_nascita) AS anno, DAYNAME(data_nascita) AS giorno_della_settimana, MONTHNAME(data_nascita) AS NOME_MESE from utente;

#es18 09-12-2015 Estrarre cognome, nome, giorno, mese, anno(numerici), della data di nascita degli utenti nati in primavera; 
select nome, cognome, DAY(data_nascita) AS giorno, MONTH(data_nascita) AS mese, YEAR(data_nascita) AS anno from utente WHERE RIGHT(data_nascita,5) BETWEEN "03-21" AND "06-20";
select cognome, nome, DAY(data_nascita) AS giorno, MONTH(data_nascita) AS mese, YEAR(data_nascita) AS anno from utente where (MONTH(data_nascita) IN (4,5)) OR (MONTH(data_nascita) IN (3) AND DAY(data_nascita) >= 21) OR (MONTH(data_nascita) IN (6) AND DAY(data_nascita) <=20);


#es19 09-12-2015 Estrarre cognome, nome data di nascita(formato italiano "gg/mm/aaaa") degli utenti
select cognome, nome,DATE_FORMAT(data_nascita,GET_FORMAT(DATE,'EUR')) from utente;
select cognome, nome,DATE_FORMAT(data_nascita, '%d/%m/%Y') AS data_nascita from utente;

#es20 11-12-2015 Estrarre cognome, nome e data di nascita(formato italiano gg/mm/aaaa), età degli utenti
SELECT cognome,nome,DATE_FORMAT(data_nascita, '%d/%m/%Y') AS data_nascita, TIMESTAMPDIFF(YEAR,data_nascita,CURDATE()) AS ETà from utente;

#es21 11-12-2015 Estrre ID dall'autenticazione
select id from utente WHERE login = 'galy' and password =  md5('');


es22 16-12-2015 quanti tipi di articolo ci sono in magazzino?
select count(*) from articolo;

es22 16-12-2015 estrarre la data di nascita dell'utente più giovane.
select MAX(data_nascita) from utente;



es22 16-12-2015 Calcolare il valore totale del magazzino;
select sum(prezzo*quantita) from articolo;


es22 16-12-2015 Calcolare superficie totale numero di abitanti numero di comuni d'italia
select ROUND(sum(superficie),1), sum(abitanti), sum(comuni) from provincia;


es22 16-12-2015 calcolare:-superficie media e deviazione standard,-abitanti, comuni, delle provincie
select CONCAT(avg(superficie)," +- ",STD(superficie)) AS SUP_med_STD, CONCAT(avg(abitanti)," +- ",STD(abitanti)) AS ABI_med_STD, CONCAT(avg(comuni)," +- ",STD(comuni)) AS COM_med_STD from provincia;


es23 21-12-2015 Estrarre dati di provincie e regioni 
select * from regione join provincia ON provincia.regione=regione.id;


es24 21-12-2015 EStrarre dati di province e regioni di appartenenza: nome regione nome provincia sigla provincia dati geografici
select regione.nome as regione,provincia.nome as provincia ,provincia.sigla as sigla_prov, provincia.superficie as superficie, provincia.abitanti as abitanti FROM regione join provincia ON provincia.regione=regione.id;

es25 22-12-2015 Assegnare giocatore alla squadra relativa
update giocatore SET squadra=11 where id=16;



es26 22-12-2015 Estrarre suqadre e giocatori assegnati
select squadra.nome AS Squadra, squadra.citta, giocatore.altezza, giocatore.nome AS Nome, giocatore.cognome AS cognome from squadra join giocatore on giocatore.squadra=squadra.id ORDER BY squadra,cognome;


es27 22-12-2015 Estrarre tutte le suadre ed eventuali giocatori assegnati
select squadra.nome AS Squadra, squadra.citta, giocatore.altezza, giocatore.nome AS Nome, giocatore.cognome AS cognome from squadra LEFT join giocatore on giocatore.squadra=squadra.id ORDER BY cognome;


es27 22-12-2015 Estrarre tutti giocatori e le squadre dove eventualemente giocano 1-usando left join 2-usando right join
select giocatore.nome AS Nome, squadra.nome AS SQUADRA,squadra.citta from giocatore left join squadra on giocatore.squadra=squadra.id order by squadra;


select giocatore.nome AS Nome, squadra.nome AS SQUADRA,squadra.citta from squadra right join giocatore on giocatore.squadra=squadra.id order by squadra;



es27 22-12-2015 Estrarre la lista delle iscrizioni: titolo corso, cognome e nome allievo e data iscrizione




es28 15-12-2015	Estrarre la quantità di articoli per settore;
select settore,count(*) from articolo GROUP BY settore;


es29 15-12-2015 contare gli articoli per settore calcolare anche il valore
select settore,count(*) AS num_articoli,ROUND(SUM(quantita*prezzo),2) AS valore from articolo GROUP BY settore ORDER BY settore;


es30 15-12-2015 calcolare numero provincie comuni numero comuni superficie di ogni regione
select regione.nome as regione, count(*) as province,SUM(provincia.abitanti) as abitanti,SUM(provincia.comuni) as comuni, ROUND(sum(provincia.superficie),5) as superficie from regione join provincia on provincia.regione=regione.id group by regione;

es31 15-12-2015 calcolare numero provincie comuni numero comuni superficie di ogni regione, lista delle sigle di ogni regione
select regione.nome as regione, count(*) as province,SUM(provincia.abitanti) as abitanti,SUM(provincia.comuni) as comuni,ROUND(SUM(provincia.superficie),2) as superficie, GROUP_CONCAT(sigla) sigla from regione join provincia on provincia.regione=regione.id group by regione;

es32 15-12-2015 calcolare numero provincie comuni numero comuni superficie di ogni regione, lista delle sigle di ogni regione, densità di ogni regione
select regione.nome as regioneeee, count(*) as province,SUM(provincia.abitanti) as abitanti,SUM(provincia.comuni) as comuni,ROUND(SUM(provincia.superficie),2) as superficie, GROUP_CONCAT(sigla) sigla,provincia.abitanti/provincia.superficie as densita from regione join provincia on provincia.regione=regione.id group by regione order by densita;


es33 15-12-2015 estrarre lo storico dei passaggi di un utente.riportare cognome riportare stazione e dataora (in ordine temporale)
SELECT utente.cognome, stazione.nome, accesso.dataora FROM accesso JOIN tornello on accesso.tornello=tornello.id JOIN stazione ON tornello.stazione=stazione.id JOIN abbonamento ON accesso.abbonamento=abbonamento.id JOIN utente on abbonamento.utente=utente.id where utente.nome="ARIFUL ISLAM" LIMIT 120;

es34 per ogni utente estrarre -numero di passaggi
SELECT utente.nome, COUNT(tornello.numero) FROM accesso JOIN tornello on accesso.tornello=tornello.id JOIN stazione ON tornello.stazione=stazione.id JOIN abbonamento ON accesso.abbonamento=abbonamento.id JOIN utente on abbonamento.utente=utente.id GROUP BY utente.cognome;


es35 2016-01-19 
select YEAR(dataora) as anno, MONTH(dataora) as mese, count(*) as accessi,sum(esito) AS ok, sum(not esito) as not_ok from accesso GROUP BY anno,mese ORDER BY anno,mese;

es36 nome dellastazione numero del tornello numero di passaggi



es37 fanq social
CREATE TABLE utente(id int not null auto_increment primary key, login varchar(255) not null, password char(40) not null);
CREATE TABLE post(id int not null auto_increment primary key, dataora timestamp not null, testo text not null, utente int not null);
CREATE TABLE media(id int not null auto_increment primary key, descrizione text not null, post int not null);
CREATE TABLE fanq(id int not null auto_increment primary key, post int not null, utente int not null);

--------------------------20012016------------
https://gist.github.com/mdariful/009ae29c7baf19ea62da
GRANT ALL ON allievo.10.* TO softuser@'%';
CREATE TABLE utente2 LIKE soft2015.utente;
INTEST INTO utente2 SELECT * FROM soft2015.utente;
FLUSH PRIVILEGES;
CREATE TABLE utente(id INT NOT NULL PRIMARY KEY auto_increment, VARCHAR(255) NOT NULL, password CHAR(40) NOT NULL );
CREATE TABLE media(id int not null auto_increment primary key, descrizione varchar(255) not null, post int not null);
CREATE TABLE fanq(id int not null auto_increment primary key, post int not null, utente int not null);
CREATE TABLE post(id int not null auto_increment primary key, dataora timestamp not null, testo text not null, utente int not null);
ALTER TABLE post ADD COLUMN titolo VARCHAR(255) NOT NULLAFTER id;
OPTIMIZE table post;
ALTER TABLE post CHANGE field newfield type;
TRUNCATE TABLE post;//i dati contenuti all'interno viene svuotato
SHOW INDEXES FROM utente;
ALTER TABLE utente ADD INDEX login(login);
ALTER TABLE utente DROP INDEX login;
ALTER TABLE utente ADD UNIQUE INDEX login(login);
ALTER TABLE fanq ADD UNIQUE INDEX postutente(post,utente);//massimo un post per utente
