DROP DATABASE IF EXISTS COFONIE;

CREATE DATABASE IF NOT EXISTS COFONIE;
USE COFONIE;

# -----------------------------------------------------------------------------
#       TABLE : TYPE_INSTITUTION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TYPEINSTITUTION
 (
   idTypeInstitution int NOT NULL AUTO_INCREMENT ,
   libelleTypeInstitution CHAR(32) NULL  ,
   constraint pk_typeInstitution PRIMARY KEY (idTypeInstitution) 
    ) ENGINE = INNOBD;

    insert into typeInstitution values (1, 'executif');
    insert into typeInstitution values (2,'legislatif');
    insert into typeInstitution values (3,'judiciaire');
    insert into typeInstitution values (4,'pas de pouvoir');



# -----------------------------------------------------------------------------
#       TABLE : INSTITUTION
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS INSTITUTION
 (
   idInstitution int NOT NULL AUTO_INCREMENT ,
   libelleInstitution CHAR(32) NULL , 
   constraint pk_institution PRIMARY KEY (idInstitution) 
  ) ENGINE = INNOBD;



     insert into institution values (1,'President');
     insert into institution values (2,'Gouvernement');
     insert into institution values (3,'Parlement');
     insert into institution values (4,'Conseil constitutionnel');
     insert into institution values (5,'Juges');

# -----------------------------------------------------------------------------
#       TABLE : ROLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ROLEINSTITUTION
 (
   idRole int NOT NULL  AUTO_INCREMENT,
   idInstitution int NOT NULL  ,
   libelleRole CHAR(150) NULL  , 
   constraint pk_roleInstitution PRIMARY KEY (idRole) ,
   constraint fk_roleInstitution_institution FOREIGN KEY (idInstitution) REFERENCES INSTITUTION (idInstitution)
 ) ENGINE = INNOBD;
 


 insert into ROLEINSTITUTION values (1, 1,'Dissoudre l assemblée');
 insert into ROLEINSTITUTION values (2,1,'Recourir au référendum');
 insert into ROLEINSTITUTION values (3,1, 'Promulguer des lois');
 insert into ROLEINSTITUTION values (4,1,'Exercer les plien pouvoirs en cas de crise');
 insert into ROLEINSTITUTION values (5,1, 'Négocier des traités');

 insert into ROLEINSTITUTION values (6, 2, 'Défini la politique de la nation');
 insert into ROLEINSTITUTION values (7, 2, 'Conduit la politique de la nation');

 insert into ROLEINSTITUTION values (8, 3, 'Vote les lois dans le domaine énuméré par l article 34 de la constitution');

 insert into ROLEINSTITUTION values (9, 4 ,'Chargé de vérifier que les lois adoptées par le parlement respectent la constitution');

 insert into ROLEINSTITUTION values (10, 5, 'Pouvoir de sanctionner');


# -----------------------------------------------------------------------------
#       TABLE : APPARTENIR (ici nous aovns la talbe appartenir car une institution n appartient à aucun type or une clé étrangère ne peut etre null)
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS APPARTENIR
 (
   idInstitution int NOT NULL ,
   idTypeInstitution int not NULL  ,
   constraint pk_institution PRIMARY KEY (idInstitution, idTypeInstitution) ,
    constraint fk_institution_Institution FOREIGN KEY (idInstitution) REFERENCES INSTITUTION (idInstitution) ,
   constraint fk_institution_typeInstitution FOREIGN KEY (idTypeInstitution) REFERENCES TYPEINSTITUTION (idTypeInstitution) 

 ) ENGINE = INNOBD;

 insert into APPARTENIR values (1,1);
 insert into APPARTENIR values (2,1);
 insert into APPARTENIR values (3,2);
 insert into APPARTENIR values (5,3);

# -----------------------------------------------------------------------------
#       TABLE : ORGANES
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ORGANE
 (
   idOrgane int NOT NULL  AUTO_INCREMENT,
   libOrgane CHAR(32) NULL  ,
  nbrPersonnesOrgane int NULL  , 
   CONSTRAINT PK_ORGANES PRIMARY KEY (idOrgane) 
 ) ENGINE = INNOBD;

 insert into ORGANE values (1,'Assemblée nationale', 577);
 insert into ORGANE values (2,'Sénat', 321);

 # -----------------------------------------------------------------------------
#       TABLE : COMPRENDRE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS COMPRENDRE
 (
   idInstitution int NOT NULL  ,
   idOrgane int NOT NULL  , 
   constraint pk_comprendre PRIMARY KEY (idInstitution,idOrgane) ,
   constraint fk_comprendre_institution FOREIGN KEY (idInstitution) REFERENCES INSTITUTION (idInstitution),
   constraint fk_comprendre_organe FOREIGN KEY (idOrgane) REFERENCES ORGANE (idOrgane)
 ) ENGINE = INNOBD;

CREATE  INDEX I_FK_COMPRENDRE_INSTITUTION
     ON COMPRENDRE (idInstitution ASC);

CREATE  INDEX I_FK_COMPRENDRE_ORGANES
     ON COMPRENDRE (idOrgane ASC);

insert into COMPRENDRE values (3,1);
insert into COMPRENDRE values (3,2);

# -----------------------------------------------------------------------------
#       TABLE : TEXTE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS TEXTE
 (
   idTexte int NOT NULL AUTO_INCREMENT ,
   idInstitution int NOT NULL  ,
   titreTexte CHAR(32) NULL  ,
   voteFinalTexte int NULL  ,
   promulgationTexte boolean NULL  ,
   constraint pk_texte PRIMARY KEY (idTexte) ,
   constraint fk_texte_institution FOREIGN KEY (idInstitution) REFERENCES INSTITUTION (idInstitution) 
 ) ENGINE = INNOBD;

CREATE  INDEX I_FK_TEXTE_INSTITUTION
     ON TEXTE (idInstitution ASC);

insert into TEXTE values (1, 2, 'Texte Loi 1',0,0);
insert into TEXTE values (2, 2, 'Texte Loi 2',0,0);

insert into TEXTE values (3, 3, 'Texte Loi 3',0,0);
insert into TEXTE values (4, 3, 'Texte Loi 4',0,0);


# -----------------------------------------------------------------------------
#       TABLE : ARTICLE
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS ARTICLE
 (
   idTexte int NOT NULL  ,
   codeSeqArticle int NOT NULL  ,
   titreArticle CHAR(32) NULL  ,
   texteArtitcle CHAR(255) NULL  ,
   constraint pk_article PRIMARY KEY (idTexte,codeSeqArticle) ,
   constraint fk_article_texte FOREIGN KEY (idTexte) REFERENCES TEXTE (idtexte)
 ) ENGINE = INNOBD;

CREATE  INDEX I_FK_ARTICLE_TEXTE
     ON ARTICLE (idTexte ASC);

insert into ARTICLE values (1, 1, 'Article 1.1', 'Détail de l arrticle 1.1');
insert into ARTICLE values (1, 2, 'Article 1.2', 'Détail de l arrticle 1.2');
insert into ARTICLE values (1, 3, 'Article 1.3', 'Détail de l arrticle 1.3');

insert into ARTICLE values (2, 1, 'Article 2.1', 'Détail de l arrticle 2.1');
insert into ARTICLE values (2, 2, 'Article 2.2', 'Détail de l arrticle 2.2');
insert into ARTICLE values (2, 3, 'Article 2.3', 'Détail de l arrticle 2.3');
insert into ARTICLE values (2, 4, 'Article 2.4', 'Détail de l arrticle 2.4');

insert into ARTICLE values (3, 1, 'Article 3.1', 'Détail de l arrticle 3.1');
insert into ARTICLE values (3, 2, 'Article 3.2', 'Détail de l arrticle 3.2');

insert into ARTICLE values (4, 1, 'Article 4.1', 'Détail de l arrticle 4.1');
insert into ARTICLE values (4, 2, 'Article 4.2', 'Détail de l arrticle 4.2');
insert into ARTICLE values (4, 3, 'Article 4.3', 'Détail de l arrticle 4.3');



# -----------------------------------------------------------------------------
#       TABLE : AMENDEMENT
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS AMENDEMENT
 (
   idTexte int NOT NULL  ,
   codeSeqArticle int NOT NULL  ,
   codeSeqAmendement int NOT NULL  ,
   libelleAmendement CHAR(32) NULL  ,
   textAmendement CHAR(255) NULL  ,
   dateAmendement DATE NULL  , 
   constraint pk_amendement PRIMARY KEY (idTexte,codeSeqArticle,codeSeqAmendement) ,
   constraint fk_amendement_article FOREIGN KEY (idTexte,codeSeqArticle) REFERENCES ARTICLE (idTexte,codeSeqArticle) 
 ) ENGINE = INNOBD;




insert into AMENDEMENT values (1, 1, 1, 'Amendement 1 de l article 1.1', 'Détail de l amendement 1 de l arrticle 1.1', '2019-01-01');
insert into AMENDEMENT values (1, 1, 2, 'Amendement 2 de l article 1.1', 'Détail de l amendement 2 de l arrticle 1.1', '2022-01-01');
insert into AMENDEMENT values (1, 2, 1, 'Amendement 1 de l article 1.2', 'Détail de l amendement 1 de l arrticle 1.2', '2020-06-01');
insert into AMENDEMENT values (1, 2, 2, 'Amendement 2 de l article 1.2', 'Détail de l amendement 2 de l arrticle 1.2', '2020-07-01');
insert into AMENDEMENT values (1, 2, 3, 'Amendement 3 de l article 1.2', 'Détail de l amendement 1 de l arrticle 1.2', '2020-08-01');
insert into AMENDEMENT values (1, 3, 1, 'Amendement 1 de l article 1.3', 'Détail de l amendement 1 de l arrticle 1.3', '2023-09-01');

insert into AMENDEMENT values (2, 1, 1, 'Amendement 1 de l article 2.1', 'Détail de l amendement 1 de l arrticle 2.1', '2020-01-01');
insert into AMENDEMENT values (2, 1, 2, 'Amendement 2 de l article 2.1', 'Détail de l amendement 2 de l arrticle 2.1', '2020-02-01');
insert into AMENDEMENT values (2, 2, 1, 'Amendement 1 de l article 2.2', 'Détail de l amendement 1 de l arrticle 2.2', '2020-03-01');
insert into AMENDEMENT values (2, 3, 1, 'Amendement 1 de l article 2.3', 'Détail de l amendement 1 de l arrticle 2.3', '2020-04-01');
insert into AMENDEMENT values (2, 3, 2, 'Amendement 2 de l article 2.3', 'Détail de l amendement 2 de l arrticle 2.3', '2020-08-01');
insert into AMENDEMENT values (2, 3, 3, 'Amendement 3 de l article 2.3', 'Détail de l amendement 3 de l arrticle 2.3', '2023-09-01');
insert into AMENDEMENT values (2, 4, 1, 'Amendement 1 de l article 2.4', 'Détail de l amendement 1 de l arrticle 2.4', '2023-10-01');
insert into AMENDEMENT values (2, 4, 2, 'Amendement 2 de l article 2.4', 'Détail de l amendement 1 de l arrticle 2.4', '2023-11-01');

insert into AMENDEMENT values (3, 1, 1, 'Amendement 1 de l article 3.1', 'Détail de l amendement 1 de l arrticle 3.1', '2020-01-01');
insert into AMENDEMENT values (3, 1, 2, 'Amendement 2 de l article 3.1', 'Détail de l amendement 2 de l arrticle 3.1', '2020-02-01');

insert into AMENDEMENT values (4, 1, 1, 'Amendement 1 de l article 4.1', 'Détail de l amendement 1 de l arrticle 4.1', '2023-02-01');
insert into AMENDEMENT values (4, 1, 2, 'Amendement 2 de l article 4.1', 'Détail de l amendement 2 de l arrticle 4.1', '2023-03-01');
insert into AMENDEMENT values (4, 2, 1, 'Amendement 1 de l article 4.2', 'Détail de l amendement 1 de l arrticle 4.2', '2023-04-01');
insert into AMENDEMENT values (4, 2, 2, 'Amendement 2 de l article 4.2', 'Détail de l amendement 2 de l arrticle 4.2', '2023-08-01');
insert into AMENDEMENT values (4, 2, 3, 'Amendement 3 de l article 4.2', 'Détail de l amendement 3 de l arrticle 4.2', '2023-09-01');
insert into AMENDEMENT values (4, 3, 1, 'Amendement 1 de l article 4.3', 'Détail de l amendement 1 de l arrticle 4.3', '2023-10-01');
insert into AMENDEMENT values (4, 3, 2, 'Amendement 2 de l article 4.3', 'Détail de l amendement 1 de l arrticle 4.3', '2023-11-01');


# -----------------------------------------------------------------------------
#       TABLE : FAIREREFERENCE (reflexive)
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS FAIREREFERENCE
 (
   idTexte1 int NOT NULL  ,
   codeSeqArticle1 int NOT NULL  ,
   idTexte2 int NOT NULL  ,
   codeSeqArticle2 int NOT NULL  ,
   constraint pk_faireReference PRIMARY KEY (idTexte1,codeSeqArticle1,idtexte2,codeSeqArticle2) ,
   constraint fk_fairereference_article1 FOREIGN KEY (idTexte1,codeSeqArticle1) REFERENCES ARTICLE (codeTexte,codeSeqArticle),
   constraint fk_fairereference_article2 FOREIGN KEY (idTexte2,codeSeqArticle2) REFERENCES ARTICLE (idTexte,codeSeqArticle)
   )ENGINE = INNOBD ;


CREATE  INDEX I_FK_FAIRE_REFERENCE_ARTICLE1
     ON FAIREREFERENCE (idTexte1 ASC,codeSeqArticle1 ASC);

CREATE  INDEX I_FK_FAIRE_REFERENCE_ARTICLE2
     ON FAIREREFERENCE (idTexte2 ASC,codeSeqArticle2 ASC);

insert into FAIREREFERENCE values (1,1,1,3);
insert into FAIREREFERENCE values (1,1,2,1);
insert into FAIREREFERENCE values (1,2,3,1);
insert into FAIREREFERENCE values (4,1,2,4);

# -----------------------------------------------------------------------------
#       TABLE : VOTER
# -----------------------------------------------------------------------------

CREATE TABLE IF NOT EXISTS VOTER
 (
   idTexte int NOT NULL  ,
   codeSeqArticle int NOT NULL  ,
   jourVote date NOT NULL  ,
   idOrgane int NOT NULL  ,
   nbrVoixPour int NULL  ,
   nbrVoixContre int NULL , 
   constraint pk_voter PRIMARY KEY (idTexte,codeSeqArticle,jourVote,idOrgane) ,
   constraint fk_voter_article FOREIGN KEY (idTexte,codeSeqArticle) REFERENCES ARTICLE (idTexte,codeSeqArticle),
   constraint fk_voter_organe FOREIGN KEY (idOrgane) REFERENCES ORGANE (idOrgane)
 )ENGINE = INNOBD ;

CREATE  INDEX I_FK_VOTER_ARTICLE
     ON VOTER (idTexte ASC,codeSeqArticle ASC);

CREATE  INDEX I_FK_VOTER_ORGANES
     ON VOTER (idOrgane ASC);

insert into VOTER values (1,1,'2019-02-01',1,277,300);
insert into VOTER values (1,1,'2019-02-10',1,270,307);
insert into VOTER values (1,2,'2019-02-12',2,121,200);
insert into VOTER values (1,2,'2019-02-13',2,120,201);

# -----------------------------------------------------------------------------
#       TABLE : UTILISATEUR
# -----------------------------------------------------------------------------
 create table if not exists utilisateur
 (login char(32) not null,
  pwd char(32) not null,
  idRole int not null,
  constraint pk_user primary key (login),
  constraint fk_utilisateur_idRole foreign key (idRole) references ROLEINSTITUTION (idRole)
  )ENGINE=InnoDB DEFAULT CHARSET=utf8_encode;
  
  insert into utilisateur values ('admin1',MD5('Admin121!'));
  insert into utilisateur values ('admin2',MD5('Admin221!'));


# -----------------------------------------------------------------------------
#       Modèle Relationnel 
# -----------------------------------------------------------------------------
TYPEINSTITUTION (idTypeInstitution (PK), libelleTypeInstitution)
INSTITUTION (idInstitution (PK), libelleInstitution)
ROLEINSTITUTION (idRole (PK), idInstitution (FK), libelleRole)
APPARTENIR (idInstitution (FK), idTypeInstitution (FK)) -- Relation many-to-many entre INSTITUTION et TYPEINSTITUTION
ORGANE (idOrgane (PK), libOrgane, nbrPersonnesOrgane)
COMPRENDRE (idInstitution (FK), idOrgane (FK)) -- Relation many-to-many entre INSTITUTION et ORGANE
TEXTE (idTexte (PK), idInstitution (FK), titreTexte, voteFinalTexte, promulgationTexte)
ARTICLE (idTexte (FK), codeSeqArticle (PK), titreArticle, texteArtitcle)
AMENDEMENT (idTexte (FK), codeSeqArticle (FK), codeSeqAmendement (PK), libelleAmendement, textAmendement, dateAmendement)
FAIREREFERENCE (idTexte1 (FK), codeSeqArticle1 (FK), idTexte2 (FK), codeSeqArticle2 (FK)) -- Relation reflexive entre ARTICLE
VOTER (idTexte (FK), codeSeqArticle (FK), jourVote, idOrgane (FK), nbrVoixPour, nbrVoixContre)
