create database asistencia;
use asistencia;

CREATE TABLE ESTUDIANTE (
  codiEstu INT NOT NULL AUTO_INCREMENT,
  nombEstu VARCHAR(20) NOT NULL,
  apelEstu VARCHAR(20) NOT NULL,
  fechNaciEst DATE NOT NULL,
  direEstu VARCHAR(40) NOT NULL,
  corrEstu VARCHAR(40) NOT NULL,
  PRIMARY KEY (codiEstu)
);

CREATE TABLE PADRE_FAMILIA (
  codiPadrFami INT NOT NULL AUTO_INCREMENT,
  nombPadrFami VARCHAR(20) NOT NULL,
  apelPadrFami VARCHAR(20) NOT NULL,
  telePadrFami VARCHAR(15) NOT NULL,
  corrPadrFami VARCHAR(40) NOT NULL,
  PRIMARY KEY (codiPadrFami)
);

CREATE TABLE ASISTENCIA (
  codiAsis INT NOT NULL AUTO_INCREMENT,
  fechAsis DATE NOT NULL,
  estaAsis VARCHAR(10) NOT NULL,
  codiEstu INT NOT NULL,
  PRIMARY KEY (codiAsis),
  FOREIGN KEY (codiEstu) REFERENCES ESTUDIANTE(codiEstu)
);

CREATE TABLE GRADO_SECCION (
  codiGradSecc INT NOT NULL AUTO_INCREMENT,
  gradGradSecc VARCHAR(10) NOT NULL,
  seccGradSecc VARCHAR(10) NOT NULL,
  PRIMARY KEY (codiGradSecc)
);

CREATE TABLE DOCENTE (
  codiDoce INT NOT NULL AUTO_INCREMENT,
  nombrDoce VARCHAR(20) NOT NULL,
  apelDoce VARCHAR(20) NOT NULL,
  teleDoce VARCHAR(15) NOT NULL,
  corrDoce VARCHAR(40) NOT NULL,
  PRIMARY KEY (codiDoce)
);

CREATE TABLE AÑO_ACADEMICO (
  codiAñoAcad INT NOT NULL AUTO_INCREMENT,
  inicAñoAcad DATE NOT NULL,
  finAñoAcad DATE NOT NULL,
  estAñoAcad VARCHAR(10) NOT NULL,
  PRIMARY KEY (codiAñoAcad)
);

CREATE TABLE TIENE (
  codiPadrFami INT NOT NULL,
  codiEstu INT NOT NULL,
  PRIMARY KEY (codiPadrFami, codiEstu),
  FOREIGN KEY (codiPadrFami) REFERENCES PADRE_FAMILIA(codiPadrFami),
  FOREIGN KEY (codiEstu) REFERENCES ESTUDIANTE(codiEstu)
);

CREATE TABLE ENSEÑA (
  codiDoce INT NOT NULL,
  codiGradSecc INT NOT NULL,
  PRIMARY KEY (codiDoce, codiGradSecc),
  FOREIGN KEY (codiDoce) REFERENCES DOCENTE(codiDoce),
  FOREIGN KEY (codiGradSecc) REFERENCES GRADO_SECCION(codiGradSecc)
);

CREATE TABLE MATRICULA (
  codiMatr INT NOT NULL AUTO_INCREMENT,
  fechaMatr DATE NOT NULL,
  estMatri VARCHAR(10) NOT NULL,
  codiGradSecc INT NOT NULL,
  codiEstu INT NOT NULL,
  codiAñoAcad INT NOT NULL,
  PRIMARY KEY (codiMatr),
  FOREIGN KEY (codiGradSecc) REFERENCES GRADO_SECCION(codiGradSecc),
  FOREIGN KEY (codiEstu) REFERENCES ESTUDIANTE(codiEstu),
  FOREIGN KEY (codiAñoAcad) REFERENCES AÑO_ACADEMICO(codiAñoAcad)
);
