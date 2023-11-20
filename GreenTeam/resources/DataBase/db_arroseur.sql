DROP DATABASE IF EXISTS db_arroseur;
CREATE DATABASE db_arroseur;
USE db_arroseur;

CREATE TABLE t_plante(
   idPlante INT AUTO_INCREMENT,
   plaNom VARCHAR(50)  NOT NULL,
   plaHumiditeConseiller DOUBLE,
   PRIMARY KEY(idPlante)
);

CREATE TABLE t_Capteur(
   idCapteur INT AUTO_INCREMENT,
   humTaux DOUBLE,
   idPlante INT,
   PRIMARY KEY(idCapteur),
   FOREIGN KEY(idPlante) REFERENCES t_plante(idPlante)
);
