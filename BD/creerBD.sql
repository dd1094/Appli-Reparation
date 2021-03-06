drop database if exists projet;
create database projet ;

use projet;

        
CREATE TABLE Appareil
(
  idAppar   INT         NOT NULL AUTO_INCREMENT,
  idTypeApp INT         NOT NULL,
  idCli     INT         NOT NULL,
  PRIMARY KEY (idAppar)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Client
(
  idCli     INT         NOT NULL AUTO_INCREMENT,
  mdpCli    VARCHAR(30) NULL    ,
  prenomCli VARCHAR(30) NULL    ,
  nomCli    VARCHAR(30) NULL    ,
  mailCli   VARCHAR(30) NULL    ,
  PRIMARY KEY (idCli)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE EtatIncident
(
  idEtatInc  INT         NOT NULL AUTO_INCREMENT,
  libEtatInc VARCHAR(30) NULL    ,
  PRIMARY KEY (idEtatInc)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Incident
(
  idInc     INT         NOT NULL AUTO_INCREMENT,
  CommCli   VARCHAR(30) NULL    ,
  commTech  VARCHAR(30) NULL    ,
  idAppar   INT         NOT NULL,
  NumTech   INT         NOT NULL,
  idEtatInc INT         NOT NULL,
  PRIMARY KEY (idInc)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Panne
(
  idInc       INT NOT NULL,
  idTypePanne INT NOT NULL,
  PRIMARY KEY (idInc, idTypePanne)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE Technicien
(
  NumTech    INT         NOT NULL AUTO_INCREMENT,
  idenTech   VARCHAR(30) NULL    ,
  nomTech    VARCHAR(30) NULL    ,
  prenomTech VARCHAR(30) NULL    ,
  mdpTech    VARCHAR(30) NULL    ,
  PRIMARY KEY (NumTech)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE TypeAppareil
(
  idTypeApp  INT         NOT NULL AUTO_INCREMENT,
  libTypeApp VARCHAR(30) NULL    ,
  PRIMARY KEY (idTypeApp)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE TypePanne
(
  idTypePanne        INT         NOT NULL AUTO_INCREMENT,
  libelleidTypePanne VARCHAR(30) NULL    ,
  prixReparation     INT         NULL    ,
  idTypeApp          INT         NOT NULL,
  PRIMARY KEY (idTypePanne)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE Appareil
  ADD CONSTRAINT FK_TypeAppareil_TO_Appareil
    FOREIGN KEY (idTypeApp)
    REFERENCES TypeAppareil (idTypeApp);

ALTER TABLE Appareil
  ADD CONSTRAINT FK_Client_TO_Appareil
    FOREIGN KEY (idCli)
    REFERENCES Client (idCli);

ALTER TABLE Incident
  ADD CONSTRAINT FK_Appareil_TO_Incident
    FOREIGN KEY (idAppar)
    REFERENCES Appareil (idAppar);

ALTER TABLE Incident
  ADD CONSTRAINT FK_Technicien_TO_Incident
    FOREIGN KEY (NumTech)
    REFERENCES Technicien (NumTech);

ALTER TABLE Panne
  ADD CONSTRAINT FK_Incident_TO_Panne
    FOREIGN KEY (idInc)
    REFERENCES Incident (idInc);

ALTER TABLE TypePanne
  ADD CONSTRAINT FK_TypeAppareil_TO_TypePanne
    FOREIGN KEY (idTypeApp)
    REFERENCES TypeAppareil (idTypeApp);

ALTER TABLE Panne
  ADD CONSTRAINT FK_TypePanne_TO_Panne
    FOREIGN KEY (idTypePanne)
    REFERENCES TypePanne (idTypePanne);

ALTER TABLE Incident
  ADD CONSTRAINT FK_EtatIncident_TO_Incident
    FOREIGN KEY (idEtatInc)
    REFERENCES EtatIncident (idEtatInc);

INSERT INTO `technicien` (`NumTech`, `idenTech`, `nomTech`, `prenomTech`, `mdpTech`) VALUES (NULL, 'ddl', 'desanges', 'lukombo', 'azerty');
INSERT INTO `typeappareil` (`idTypeApp`, `libTypeApp`) VALUES (NULL, 'T??l??phone');
INSERT INTO `typeappareil` (`idTypeApp`, `libTypeApp`) VALUES (NULL, 'Tablette');
INSERT INTO `typeappareil` (`idTypeApp`, `libTypeApp`) VALUES (NULL, 'Ordinateur portable');
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'connecteur de charge endommag??', '20', '1');
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'connecteur de charge endommag??', '30', '2');
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'connecteur de charge endommag??', '40', '3');
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'haut-parleur interne endommag??', '20', '1');
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'haut-parleur interne endommag??', '30', '2');
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'connecteur ??cran endommag??', '10', '1');
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'connecteur ??cran endommag??', '20', '2');
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'connecteur ??cran endommag??', '30', '3');  
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'Batterie endommag??', '30', '1');
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'Batterie endommag??', '35', '2');      
INSERT INTO `typepanne` (`idTypePanne`, `libelleidTypePanne`, `prixReparation`, `idTypeApp`) VALUES (NULL, 'Batterie endommag??', '40', '3'); 
INSERT INTO `client` (`idCli`, `mdpCli`, `prenomCli`, `nomCli`, `mailCli`) VALUES (NULL, 'az', 'cristiano', 'ronaldo', 'r@gmail.com');
INSERT INTO `client` (`idCli`, `mdpCli`, `prenomCli`, `nomCli`, `mailCli`) VALUES (NULL, 'az', 'zlatan', 'ibra', 'i@gmail.com');    
INSERT INTO `appareil` (`idAppar`, `idTypeApp`, `idCli`) VALUES (NULL, '1', '1');
INSERT INTO `appareil` (`idAppar`, `idTypeApp`, `idCli`) VALUES (NULL, '1', '2');
INSERT INTO `client` (`idCli`, `mdpCli`, `prenomCli`, `nomCli`, `mailCli`) VALUES (NULL, 'az', 'Lebron', 'James', 'j@gmail.com');
INSERT INTO `client` (`idCli`, `mdpCli`, `prenomCli`, `nomCli`, `mailCli`) VALUES (NULL, 'az', 'steph', 'curry', 'c@gmail.com');
INSERT INTO `appareil` (`idAppar`, `idTypeApp`, `idCli`) VALUES (NULL, '2', '3');
INSERT INTO `appareil` (`idAppar`, `idTypeApp`, `idCli`) VALUES (NULL, '3', '4');
INSERT INTO `etatincident` (`idEtatInc`, `libEtatInc`) VALUES (NULL, 'En attente de diagnostic');
INSERT INTO `etatincident` (`idEtatInc`, `libEtatInc`) VALUES (NULL, 'En r??paration');
INSERT INTO `etatincident` (`idEtatInc`, `libEtatInc`) VALUES (NULL, 'Retourn??');
INSERT INTO `incident` (`idInc`, `CommCli`, `commTech`, `idAppar`, `NumTech`, `idEtatInc`) VALUES (NULL, "L\'??cran de mon tel bug", NULL, '1', '1', '1');
INSERT INTO `incident` (`idInc`, `CommCli`, `commTech`, `idAppar`, `NumTech`, `idEtatInc`) VALUES (NULL, 'Mon t??l??phone charge plus',NULL , '2', '1', '1');
INSERT INTO `incident` (`idInc`, `CommCli`, `commTech`, `idAppar`, `NumTech`, `idEtatInc`) VALUES (NULL, 'Mon ??cran ne se charge plus', NULL, '3', '1', '2');
INSERT INTO `incident` (`idInc`, `CommCli`, `commTech`, `idAppar`, `NumTech`, `idEtatInc`) VALUES (NULL, "L\'??cran de mon tel bug", NULL, '3', '1', '3');