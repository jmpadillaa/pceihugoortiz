-- Creación de la base de datos
CREATE DATABASE formulario_registro;

-- Creación de la tabla "Aspirante"
CREATE TABLE aspirante (
  id SERIAL PRIMARY KEY,
  nombres CHARACTER VARYING(50),
  apellidos CHARACTER VARYING(50),
  tipoidentificacion CHARACTER VARYING(20),
  identificacion CHARACTER VARYING(20),
  fechanacimiento DATE,
  fecharegistro TIMESTAMP WITHOUT TIME ZONE,
  genero CHARACTER VARYING(1),
  nacionalidad CHARACTER VARYING(50),
  estadocivil CHARACTER VARYING(20),
  definicionetnica CHARACTER VARYING(50),
  puebloindigena CHARACTER VARYING(50),
  tienehijos BOOLEAN,
  hijosninos CHARACTER VARYING(2),
  hijosadolescentes CHARACTER VARYING(2),
  hijosadultos CHARACTER VARYING(2),
  hijosgestacion CHARACTER VARYING(2),
  discapacidad BOOLEAN,
  tipodiscapacidad CHARACTER VARYING(50),
  porcentajediscapacidad CHARACTER VARYING(5),
  telefonopersonal CHARACTER VARYING(20),
  telefonofamiliar CHARACTER VARYING(20),
  correo CHARACTER VARYING(50),
  recibebono BOOLEAN,
  trabaja BOOLEAN,
  actividadlaboral CHARACTER VARYING(50),
  aniosrezago CHARACTER VARYING(50),
  ultimoAprobado CHARACTER VARYING(50),
  anioinscribe CHARACTER VARYING(50),
  convocatoria INTEGER(50),
  servicioeducativo CHARACTER VARYING(50),
  representante_id INTEGER,
  ubicacion_id INTEGER,
  CONSTRAINT representante_fk FOREIGN KEY (representante_id) REFERENCES public.representante(id),
  CONSTRAINT ubicacion_fk FOREIGN KEY (ubicacion_id) REFERENCES public.ubicacion(id)
);

-- Creación de la tabla "Representante"
CREATE TABLE representante (
  id SERIAL PRIMARY KEY,
  parentesco CHARACTER VARYING(50),
  nombres CHARACTER VARYING(50),
  apellidos CHARACTER VARYING(50),
  tipoidentificacion CHARACTER VARYING(50),
  identificacion CHARACTER VARYING(50),
  genero CHARACTER VARYING(1),
  estadocivil CHARACTER VARYING(20),
  fechanacimiento DATE,
  aspirante_id INTEGER
);

-- Creación de la tabla "Ubicacion"
CREATE TABLE ubicacion (
  id SERIAL PRIMARY KEY,
  provincia CHARACTER VARYING(50),
  zona CHARACTER VARYING(50),
  canton CHARACTER VARYING(50),
  distrito CHARACTER VARYING(50),
  parroquia CHARACTER VARYING(50),
  circuito CHARACTER VARYING(50),
  sector CHARACTER VARYING(50),
  direccion CHARACTER VARYING(100),
  aspirante_id INTEGER
);

CREATE TABLE inscriptor (
  id SERIAL PRIMARY KEY,
  nombres CHARACTER VARYING(50),
  apellidos CHARACTER VARYING(50),
  identificacion CHARACTER VARYING(50)
);

CREATE TABLE usuario (
  id SERIAL PRIMARY KEY,
  nombre CHARACTER VARYING(50),
  login CHARACTER VARYING(20),
  password CHARACTER VARYING(128),
  activo BOOLEAN
);