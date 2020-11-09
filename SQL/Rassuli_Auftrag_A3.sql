/*CREATE DATABASE Auftragsverwaltung
;*/

USE Auftragsverwaltung
;
/* 

INSERT INTO Mitarbeiter
VALUES(2135, 'Wolpet', 'Alfred', 'am haidenberg 67', 'Fehraltorf', '22.12.1963')
;

ALTER TABLE tb_Artikel
ADD Verkaufspreis MONEY;


ALTER TABLE Mitarbeiter
ADD Stundenlohn SMALLMONEY;



UPDATE Mitarbeiter
SET Stundenlohn=56.00
WHERE Nachname='Oppliger'
;

UPDATE Mitarbeiter
SET Stundenlohn=54.00
WHERE Nachname='Schmid'
; 

UPDATE Mitarbeiter
SET Stundenlohn=55.00
WHERE Nachname='Wolpet'
;

UPDATE tb_Artikel
SET Verkaufspreis =15
WHERE Bezeichnung ='Schrauben'
;

UPDATE tb_Artikel
SET Verkaufspreis =18
WHERE Bezeichnung ='Nägel'
;
-----------------------
AUFGABE 4

SELECT Mitarbeiter.Nachname, Vorname
FROM Mitarbeiter
WHERE Ort='Wetzikon' AND Geburtstag < '1980'
;

AUFGABE 5

---------------------------
AUFGABE 6

SELECT SUM (AuftragNr)
FROM tb_Bearbeitet
;
----------------------------
AUFGABE 7

SELECT AVG(Verkaufspreis)
FROM tb_Artikel
;
------------------------------
AUFGABE 8

INSERT INTO tb_Auftrag
VALUES(565, 15)
;
-----------------------
AUFGABE 9 
UPDATE tb_Bearbeitet
SET

------------------
AUFGABE 10 

DELETE FROM Mitarbeiter
WHERE PersonalNr=1562;

------------------
AUFGABE 11  

SELECT MAX(AuftragNr)
FROM tb_Bearbeitet
WHERE AuftragNr=105 AND Zeit_in_Stunden=180
;

------------------

AUFGABE 12 

SELECT COUNT(PersonalNr)
FROM Mitarbeiter
;
------------------
*/
AUFGABE 13

SELECT COUNT(*)
FROM Mitarbeiter
WHERE Nachname LIKE %'LL'%
;
