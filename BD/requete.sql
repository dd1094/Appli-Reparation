-- Requete pour afficher tout les incidents

SELECT idInc, CommCli, prenomCli, nomCli
from incident as i 
inner JOIN client as s
on i.idInc = s.idCli;

-- Requete pour afficher les incidents en fonction de leur état d'avancement
SELECT idInc, prenomCli, nomCli, libTypeApp, a.idTypeApp 
from incident as i 
INNER join appareil as a 
on i.idAppar = a.idAppar
INNER join client as c
on a.idCli = c.idCli
inner join typeappareil as ta 
on a.idTypeApp = ta.idTypeApp
where idEtatInc = 1;

SELECT idInc, prenomCli, nomCli, libTypeApp, a.idTypeApp from incident as i INNER join appareil as a on i.idAppar = a.idAppar INNER join client as c on a.idCli = c.idCli inner join typeappareil as ta on a.idTypeApp = ta.idTypeApp where idEtatInc = 1;


--Requete pour ajouter les différente panne dans la bdd

INSERT INTO `panne` (`idInc`, `idTypePanne`) VALUES ('5', '8');

--Requete pour séléctionner les type de panne possible en fonction du type d'appareil

select libelleidTypePanne, idTypePanne
from typepanne as tp
INNER join typeappareil as ta 
on tp.idTypeApp = ta.idTypeApp
where tp.idTypeApp = 3;

select libelleidTypePanne, idTypePanne from typepanne as tp INNER join typeappareil as ta  on tp.idTypeApp = ta.idTypeApp where tp.idTypeApp = 3;

--requete pour le diagnostique

SELECT idInc, CommCli, i.idAppar, prenomCli
from incident as i
INNER join appareil as a
on a.idAppar = i.idAppar
INNER join client as c
on a.idCli = c.idCli
where idInc = 2;

SELECT idInc, CommCli, i.idAppar, prenomCli from incident as i INNER join appareil as a on a.idAppar = i.idAppar INNER join client as c on a.idCli = c.idCli where idInc = 2;

--requete pour inserer les diiférentes panne d'un appareil

INSERT INTO `panne` (`idInc`, `idTypePanne`) VALUES ('3', '1');

--Reuquete pour connaitre la somme à payer pour l'incident

SELECT SUM(prixReparation)
from typepanne tp
inner join panne as p
on tp.idTypePanne = p.idTypePanne
where idInc = 2;

SELECT SUM(prixReparation) from typepanne tp inner join panne as p on tp.idTypePanne = p.idTypePanne where idInc = 2;

--Requete inserer le commentaire du technicien dans l'incident

UPDATE `incident` SET `commTech` = 'az' WHERE `incident`.`idInc` = 1;

--Requete pour lister les pannes selectionner

SELECT libelleidTypePanne
from TypePanne as tp
INNER JOIN panne as p
on tp.idTypePanne = p.idTypePanne
where idInc =3;

SELECT libelleidTypePanne from TypePanne as tp INNER JOIN panne as p on tp.idTypePanne = p.idTypePanne where idInc =3;

--Requete pour lister la liste des pannes selectionner par le technicien

SELECT libelleidTypePanne
from typepanne as tp
INNER join panne as p
on tp.idTypePanne = p.idTypePanne
where idInc = 6;

SELECT libelleidTypePanne from typepanne as tp INNER join panne as p on tp.idTypePanne = p.idTypePanne where idInc = 6;