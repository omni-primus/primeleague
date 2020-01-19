
--Erstellen der Tabellen

CREATE Table PrimeUser(
	Username char(20),
	eMail char(25),
	Freundescode  int,
);

ALTER TABLE PrimeUser
add Freundescode varchar(12)
ADD Primary key (PID)

CREATE TABLE Codes(
	Code char(6) not null primary key,
	Used char(3) not null,
);

ALTER TABLE Codes
add Person char(15)
add Pokemon char(15)

--Nicht automatische Daten einfügen

insert into PrimeUser (PID, Username, eMail, Freundescode)
values(1,'LovelyTheFirst', '@arcor.de', '315396240843')

select * from PrimeUser
select * from Codes

insert into Codes (Code, Used, Person, Pokemon)
values ('JZ12HK', 'no', 'LovelyTheFirst', 'Metagross')
insert into Codes (Code, Used, Person, Pokemon)
values ('UI09ZU', 'no', 'Kerberos', 'Marshtomp')
insert into Codes (Code, Used, Person, Pokemon)
values ('BH47YZ', 'no', 'Mandy', 'Kirlia')
insert into Codes (Code, Used, Person, Pokemon)
values ('IO75AQ', 'no', 'Nick', 'Hawlucha')
insert into Codes (Code, Used, Person, Pokemon)
values ('TG11EF', 'no', '', '')
	
update Codes
set Person= 'Kerberos'
where Pokemon = 'Marshtomp'

