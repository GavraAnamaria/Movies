drop table distributie;
drop table film;
drop table studio;
drop table persoana;

create table persoana
(id_persoana double,
 nume varchar(30),
 adresa varchar(30),
 sex char(1),
 data_nasterii date,
 castig_net double,
moneda varchar(4)
);

create table studio
(nume varchar(20),
 adresa varchar(50),
 id_presedinte double
);

create table film
(titlu varchar(20),
an double,
 durata varchar(7),
 gen varchar(7),
 studio varchar(20),
 id_producator double
);

create table distributie
(titlu_film varchar(20),
an_film double,
 id_actor double 
);



ALTER TABLE persoana ADD 
constraint pers_id_pk primary key(id_persoana);

ALTER TABLE film ADD 
	CONSTRAINT film_gen_ck CHECK (gen IN ('drama', 'comedie', 'SF', 'copii'));
	
ALTER TABLE persoana ADD 
  CONSTRAINT pers_sex_ck CHECK (sex IN ('M', 'F'));

ALTER TABLE studio ADD 
constraint stud_nume_pk primary key(nume);

ALTER TABLE studio ADD 
	CONSTRAINT st_id_pr_fk FOREIGN KEY (id_presedinte) REFERENCES persoana (id_persoana);
ALTER TABLE film ADD 
 constraint film_id_prod_fk foreign key (id_producator) references persoana(id_persoana);
  
ALTER TABLE film ADD 
  constraint film_pk primary key(titlu, an);
  
alter table film add
  constraint film_st_fk foreign key (studio)references studio(nume);

alter table distributie add
constraint distr_id_actor_fk foreign key (id_actor) references persoana(id_persoana);
  
  alter table distributie add
constraint distr_fk foreign key (titlu_film, an_film) references film(titlu, an);
  
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 128, 'John Green', 'Indiana, Statele Unite', 'M', '1983-02-11', 3400000, 'USD');    
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 202, 'Bob Miller', 'Londra, Regatul unit', 'M', '1979-06-17', 3000000, 'USD')  ;
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 184, 'Tom Ellis', 'Tara Galilor', 'M','1977-09-05', 4000000, 'EUR')            ;    
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 204, 'Johnny Bravo', 'Texas, Statele Unite', 'M', '1987-08-19', 2800000, 'USD')  ;  



insert into persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) values(17, 'Carl Rogers', 'Londra, UK', 'M', '1983-03-24', 1200000, 'RON')   ;
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 140, 'Mark Osborne', 'New Jersey, Statele Unite', 'M', '1970-09-11', 1500000, 'USD') ;   
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 166, 'John Mills', 'Londra, UK', 'M', '1969-11-29', 1200000, 'EUR')        ;
insert into persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) values (11, 'Hal B. Wallis',  'Texas, Statele Unite', 'M', ' 1953-05-14', 5000000, 'RON') ;  
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 162, 'Martin Lawrence', 'Berlin, Germania', 'M', '1993-05-16', 1750000, 'EUR');    




insert into persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) values (22, 'Humphrey Bogart',  'New York, Statele Unite', 'M', ' 1957-01-04', 700000, 'RON');     
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES (122, 'Naomi Scott', 'Chesterfield, UK', 'F', '1972-12-01', 100000, 'EUR') ;         
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 124, 'Jennifer Lawrence', 'Kentucky, SUA', 'F', '1995-06-21', 200000, 'RON');      
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 126, 'Sarah Miller', 'Washington,D.C., Statele Unite', 'F', '1998-12-21', 20000, 'USD'); 
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda )VALUES ( 182, 'Luke Wilson', 'Dallas, Texas, Statele Unite', 'M', '2000-11-11', 30000, 'USD')     ;
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 180, 'Tom Kenny', 'New York, Statele Unite', 'M', '1962-10-13', 20000, 'USD')   ;
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 200, 'Selena Gomez', 'Texas, Statele Unite', 'F', '1992-07-23', 500000, 'USD')   ;
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 186, 'Rob Newton', 'Oxford, UK', 'M', '1986-09-03', 900000, 'EUR')         ;
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 164, 'Will Smith', 'Philadelphia, Pennsylvania-SUA', 'M', '1967-04-07', 650000, 'USD');   
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 168, 'Justice Smith', 'LA, California, Statele Unite', 'M', '1996-08-08', 40000, 'USD');  
INSERT INTO persoana(id_persoana, nume, adresa , sex ,data_nasterii ,castig_net, moneda ) VALUES ( 220, 'Ben Hardy', 'Bournemouth, Regatul Unit', 'M', '1991-08-08', 100000, 'USD') ; 




Insert into studio(nume, adresa, id_presedinte) values('Warner Bros.',  ' Hollywood, Los Angeles,California, SUA', 184);
INSERT INTO studio(nume, adresa, id_presedinte) VALUES ('Disney', 'LA, California - SUA', 128);
INSERT INTO studio(nume, adresa, id_presedinte) VALUES ('BBC Films UK', 'London, Regatul Unit', 202);
INSERT INTO studio(nume, adresa, id_presedinte) VALUES ('Universal', 'Universal City, Statele Unite', 204);





insert into film(titlu,an,durata,gen,studio,id_producator) values('Barry', 2018, 240, 'comedie', 'Universal', 17);      
INSERT INTO film(titlu,an,durata,gen,studio,id_producator) VALUES ('Sponge Bob', 2013, 130, 'copii', 'Disney',140);    
INSERT INTO film(titlu,an,durata,gen,studio,id_producator) VALUES ('Detective Pikachu', 2019, 150, 'copii', 'Disney',140 );   
INSERT INTO film(titlu,an,durata,gen,studio,id_producator) VALUES ('Hotel Transilvania', 2017, 160, 'copii', 'Disney',140 );   
INSERT INTO film(titlu,an,durata,gen,studio,id_producator) VALUES ('X-men', 2020, 140, 'SF', 'Universal',140 )  ;             
INSERT INTO film(titlu,an,durata,gen,studio,id_producator) VALUES ('Passengers', 2016, 110, 'SF', 'Universal',166 );           
INSERT INTO film(titlu,an,durata,gen,studio,id_producator) VALUES ('Before i fall', 2017, 130, 'SF', 'Warner Bros.',166 );
INSERT INTO film(titlu,an,durata,gen,studio,id_producator) VALUES ('District 9', 2010, 120, 'SF', 'Warner Bros.',162 );
INSERT INTO film VALUES ('Bohemian Rhapsody', 2018, 140, 'drama', 'BBC Films UK',166);
INSERT INTO film VALUES ('Aladdin', 2019, 115, 'copii', 'Disney', 166);
INSERT INTO film VALUES ('Mr. Bean', 1998, 160, 'comedie', 'BBC Films UK',11);
INSERT INTO film VALUES ('The Notebook', 2004, 160, 'drama', 'BBC Films UK',11);
INSERT INTO film VALUES ('National Security', 2008, 90, 'SF', 'Universal',162) ;     
INSERT INTO film VALUES ('Independence Day', 2008, 160, 'SF', 'Warner Bros.',162);
INSERT INTO film VALUES ('Kung Fu Panda', 2011, 150, 'copii', 'Disney',17); 
INSERT INTO film VALUES ('Shrek', 2018, 110, 'copii', 'Warner Bros.',11);
INSERT INTO film VALUES ('Spectral', 2016, 110, 'SF', 'Universal',17)  ; 
INSERT INTO film VALUES ('Invasion', 2020, 150, 'SF', 'Universal',11);





INSERT INTO distributie VALUES ('National Security', 2008, 126);
INSERT INTO distributie VALUES ('National Security', 2008, 162);

INSERT INTO distributie VALUES ('Sponge Bob', 2013, 180);
INSERT INTO distributie VALUES ('Sponge Bob', 2013, 186);

INSERT INTO distributie VALUES ('Detective Pikachu', 2019, 122);
INSERT INTO distributie VALUES ('Detective Pikachu', 2019, 168);

INSERT INTO distributie VALUES ('Hotel Transilvania', 2017, 180);
INSERT INTO distributie VALUES ('Hotel Transilvania', 2017, 200);

INSERT INTO distributie VALUES ('X-men', 2020, 124);
INSERT INTO distributie VALUES ('X-men', 2020, 186);
INSERT INTO distributie VALUES ('X-men', 2020, 220);

INSERT INTO distributie VALUES ('Passengers', 2016, 124);
INSERT INTO distributie VALUES ('Passengers', 2016, 182);
INSERT INTO distributie VALUES ('Passengers', 2016, 200);

INSERT INTO distributie VALUES ('Before i fall', 2017, 124);
INSERT INTO distributie VALUES ('Before i fall', 2017, 182);
INSERT INTO distributie VALUES ('Before i fall', 2017, 168);

INSERT INTO distributie VALUES ('District 9', 2010, 122);
INSERT INTO distributie VALUES ('District 9', 2010, 162);

INSERT INTO distributie VALUES ('Aladdin', 2019, 122);
INSERT INTO distributie VALUES ('Aladdin', 2019, 164);

INSERT INTO distributie VALUES ('Mr. Bean', 1998, 22);
INSERT INTO distributie VALUES ('Mr. Bean', 1998, 220);
INSERT INTO distributie VALUES ('Mr. Bean', 1998, 186);

INSERT INTO distributie VALUES ('The Notebook', 2004, 182);
INSERT INTO distributie VALUES ('The Notebook', 2004, 126);

INSERT INTO distributie VALUES ('Independence Day', 2008, 180);
INSERT INTO distributie VALUES ('Independence Day', 2008, 164);
INSERT INTO distributie VALUES ('Independence Day', 2008, 200);

INSERT INTO distributie VALUES ('Barry', 2018, 124);
INSERT INTO distributie VALUES ('Barry', 2018, 126);

INSERT INTO distributie VALUES ('Kung Fu Panda', 2011, 162);
INSERT INTO distributie VALUES ('Kung Fu Panda', 2011, 186);

INSERT INTO distributie VALUES ('Shrek', 2018, 164);

INSERT INTO distributie VALUES ('Spectral', 2016, 220);

INSERT INTO distributie VALUES ('Bohemian Rhapsody', 2018, 220);
INSERT INTO distributie VALUES ('Bohemian Rhapsody', 2018,168);