/*CREATE DATABASE Auftragsverwaltung
;*/

USE Auftragsverwaltung
;



INSERT INTO Mitarbeiter
VALUES(1562, 'Oppliger', 'Hans', 'Lauerbachstrasse 15', 'Wetzikon', '15.09.1960')
;

INSERT INTO Mitarbeiter
VALUES(1869, 'Schmid', 'Peter', 'Holunderweg 6', 'Uster', '27.05.1970')
;

INSERT INTO tb_Artikel
VALUES(11, 'Schrauben')
;

INSERT INTO tb_Artikel
VALUES(15, 'Nägel')
;
INSERT INTO tb_Artikel
VALUES(2, 'Muttern')
;

INSERT INTO tb_Auftrag
VALUES(105, '11')
;

INSERT INTO tb_Auftrag
VALUES(233, '15')
;

INSERT INTO tb_Auftrag
VALUES(325, '2')
;

INSERT INTO tb_Bearbeitet
VALUES(105, 1562, 1.25)
;

INSERT INTO tb_Bearbeitet
VALUES(105, 1460, 2.0)
;

INSERT INTO tb_Bearbeitet
VALUES(233, 1460, 0.75)
;

INSERT INTO tb_Bearbeitet
VALUES(233, 1869, 3.25)
;

INSERT INTO tb_Bearbeitet
VALUES(325, 1869, 3.0)
;*/