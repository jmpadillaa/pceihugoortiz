<?php $this->setTitle('Registro') ?>

<link rel="stylesheet" href="public/css/style.css" media="screen">

<h3 class="my-3 text-center">Formulario de registro</h3>
<form method="post">
    <!--formulario datos del aspirante-->
    <div class="card">
        <h2>A. INFORMACIÓN DEL ASPIRANTE</h2>
        <p>
            * Llene exactamente como se encuentra en su documento de
            identificación
        </p>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="nombres">Nombres:</label>
            <div class="col-md-3">
                <input type="text" id="nombres" name="nombres" class="form-control" title="Sólo letras" required pattern="^[a-zA-Z\s]+$">
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="apellidos">Apellidos:</label>
            <div class="col-md-3">
                <input type="text" id="apellidos" name="apellidos" class="form-control" title="Sólo letras" required pattern="^[a-zA-Z\s]+$">
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="tipoIdentificacion">Documento:</label>
            <div class="col-md-3">
                <select id="tipoIdentificacion" name="tipoIdentificacion" class="form-control" required>
                    <option value="" disabled selected>Seleccione</option>
                    <option value="CEDULA">CÉDULA</option>
                    <option value="CEDULA_EXTRANJERA">CÉDULA EXTRANJERA</option>
                    <option value="CARNET_REFUGIADO">CARNET DE REFUGIADO</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                    <option value="NO_POSEE_DOCUMENTO">NO POSEE DOCUMENTO</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="identificacion">Número del documento:</label>
            <div class="col-md-3">
                <input type="text" id="identificacion" name="identificacion" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="fechaNacimiento">Fecha de nacimiento:</label>
            <div class="col-md-3">
                <input type="date" id="fechaNacimiento" name="fechaNacimiento" class="form-control fecha-nac" required data-target="#edad">
            </div>
            <div class="col-md-2" id="edad"></div>
        </div>
    </div>
    <!--formulario datos del representante-->
    <div class="card">
        <h2>B. DATOS DEL REPRESENTANTE LEGAL</h2>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="parentesco">Tipo de parentesco:</label>
            <div class="col-md-3">
                <select id="parentesco" name="representante[parentesco]" class="form-control" required title="Seleccione el tipo de parentesco">
                    <option value="">Seleccione el tipo de parentesco</option>
                    <option value="padre">Padre</option>
                    <option value="madre">Madre</option>
                    <option value="abuelo">Abuelo/a</option>
                    <option value="tio">Tío/a</option>
                    <option value="hermano">Hermano/a</option>
                    <option value="primo">Primo/a</option>
                    <option value="yerno">Yerno/Nuera</option>
                    <option value="cunado">Cuñado/a</option>
                    <option value="suegro">Suegro/a</option>
                    <option value="conyuge">Cónyuge</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="nombresRepresentante">Nombres:</label>
            <div class="col-md-3">
                <input type="text" id="nombresRepresentante" name="representante[nombres]" title="Sólo letras" class="form-control" required pattern="^[a-zA-Z\s]+$">
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="apellidosRepresentante">Apellidos:</label>
            <div class="col-md-3">
                <input type="text" id="apellidosRepresentante" name="representante[apellidos]" title="Sólo letras" class="form-control" required pattern="^[a-zA-Z\s]+$">
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="documentoRepresentante">Documento:</label>
            <div class="col-md-3">
                <select id="documentoRepresentante" name="representante[tipoIdentificacion]" class="form-control" required title="Seleccione un tipo de documento">
                    <option value="">Seleccione</option>
                    <option value="CEDULA">CÉDULA</option>
                    <option value="CEDULA_EXTRANJERA">CÉDULA EXTRANJERA</option>
                    <option value="CARNET_REFUGIADO">CARNET DE REFUGIADO</option>
                    <option value="PASAPORTE">PASAPORTE</option>
                    <option value="NO_POSEE_DOCUMENTO">NO POSEE DOCUMENTO</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="numeroidentificacionRepresentante">Número del documento:</label>
            <div class="col-md-3">
                <input type="text" id="numeroidentificacionRepresentante" name="representante[identificacion]" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="genero">Género:</label>
            <div class="col-md-3">
                <select id="genero" name="representante[genero]" class="form-control" required title="Seleccione el género">
                    <option value="">Seleccione el género</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="estadoCivil">Estado Civil:</label>
            <div class="col-md-3">
                <select id="estadoCivil" name="representante[estadoCivil]" class="form-control" required title="Seleccione el estado civil">
                    <option value="">Seleccione</option>
                    <option value="soltero">Soltero/a</option>
                    <option value="casado">Casado/a</option>
                    <option value="viudo">Viudo/a</option>
                    <option value="divorciado">Divorciado/a</option>
                    <option value="unionHecho">Unión de hecho</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="fechaNacimientoRepresentante">Fecha de nacimiento:</label>
            <div class="col-md-3">
                <input type="date" id="fechaNacimientoRepresentante" name="representante[fechaNacimiento]" class="form-control fecha-nac" required  data-target="#edadRep">
            </div>
            <div class="col-md-2" id="edadRep"></div>
        </div>
    </div>
    <!--formulario datos adicionales del aspirante-->
    <div class="card">
        <h2>C. DATOS ADICIONALES DEL ASPIRANTE</h2>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="generoAspirante">Género:</label>
            <div class="col-md-3">
                <select name="genero" class="form-control" required title="Seleccione su género">
                    <option value="">Seleccione</option>
                    <option value="M">Masculino</option>
                    <option value="F">Femenino</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="nacionalidad">Nacionalidad:</label>
            <div class="col-md-3">
                <select id="nacionalidad" name="nacionalidad" class="form-control toggle-name" data-target="#otraNacionalidad" required>
                    <option value="">Seleccione su nacionalidad</option>
                    <option value="ecuatoriano">Ecuatoriano/a</option>
                    <option value="colombiano">Colombiano/a</option>
                    <option value="venezuela">Venezolano/a</option>
                    <option value="argentina">Argentino/a</option>
                    <option value="espanol">Español/a</option>
                    <option value="brasil">Brasileño/a</option>
                    <option value="peru">Peruano/a</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="text" disabled placeholder="Otro" id="otraNacionalidad" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="estadoCivilAspirante">Estado Civil:</label>
            <div class="col-md-3">
                <select name="estadoCivil" class="form-control" required title="Seleccione su estado civil">
                    <option value="">Seleccione</option>
                    <option value="soltero">Soltero/a</option>
                    <option value="casado">Casado/a</option>
                    <option value="viudo">Viudo/a</option>
                    <option value="divorciado">Divorciado/a</option>
                    <option value="unionHecho">Unión de hecho</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="definicionEtnica">Autodefinición étnica:</label>
            <div class="col-md-3">
                <select id="definicionEtnica" name="definicionEtnica" class="form-control toggle-name" required title="Seleccione su etnia" data-target="#otraEtnia">
                    <option value="">Seleccione</option>
                    <option value="afrodescendiente">Afrodescendiente</option>
                    <option value="afroecuatoriano">Afroecuatoriano</option>
                    <option value="blanca">Blanca</option>
                    <option value="indigena">Indígena</option>
                    <option value="mestiza">Mestiza</option>
                    <option value="montubia">Montubia</option>
                    <option value="mulato">Mulato</option>
                    <option value="negro">Negro</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="text" placeholder="Otro" id="otraEtnia" disabled class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="puebloIndigena">Pueblo Indígena:</label>
            <div class="col-md-3">
                <select name="puebloIndigena" class="form-control toggle-name" required title="Seleccione su pueblo indígena" data-target="#otroPuebloIndigena">
                    <option value="">Seleccione</option>
                    <option value="achuar">Achuar</option>
                    <option value="andoa">Andoa</option>
                    <option value="ai">Ai (cofán)</option>
                    <option value="pai">Pai (Secoya)</option>
                    <option value="bai">Bai (Siona)</option>
                    <option value="shiwiar">Shiwiar</option>
                    <option value="shuar">Shuar</option>
                    <option value="wao">Wao</option>
                    <option value="sapara">Sápara</option>
                    <option value="awa">Awa</option>
                    <option value="chachi">Chachi</option>
                    <option value="eperara">Épera</option>
                    <option value="tsachi">Tsachila</option>
                    <option value="kichwa">Kichwa</option>
                    <option value="afroecuatoriano">Pueblo Afroecuatoriano</option>
                    <option value="montubio">Pueblo Montubio</option>
                    <option value="otro">Otro</option>
                </select>
            </div>
            <div class="col-md-3">
                <input type="text" placeholder="Otro" id="otroPuebloIndigena" disabled class="form-control" required>
            </div>
        </div>
    </div>
    <!--formulario de familiares-->
    <div class="card">
        <h2>D. DATOS FAMILIARES</h2>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="tieneHijos">¿Tiene hijos?</label>
            <div class="radio-group col-md-3">
                <input type="radio" id="tieneHijosSi" name="tieneHijos" value="true">
                <label class="col-form-label col-md-2" for="tieneHijosSi">Sí</label>
                <input type="radio" id="tieneHijosNo" name="tieneHijos" value="false" checked>
                <label class="col-form-label col-md-2" for="tieneHijosNo">No</label>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="nino">Tiene hijos de 0-5 años:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Cantidad" name="hijosNinos" class="form-control num-hijos" disabled required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="adolescente">Tiene hijos de 6-17 años:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Cantidad" name="hijosAdolescentes" class="form-control num-hijos" disabled required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="adultos">Tiene hijos de 18 años en adelante:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Cantidad" name="hijosAdultos" class="form-control num-hijos" disabled required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="gestacion">En estado de gestación:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Cantidad" name="hijosGestacion" class="form-control num-hijos" disabled required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="tieneDiscapacidad">¿Tiene discapacidad?</label>
            <div class="radio-group col-md-3">
                <input type="radio" id="tieneDiscapacidadSi" name="discapacidad" value="true">
                <label class="col-form-label col-md-2" for="tieneDiscapacidadSi">Sí</label>
                <input type="radio" id="tieneDiscapacidadNo" name="discapacidad" value="false" checked>
                <label class="col-form-label col-md-2" for="tieneDiscapacidadNo">No</label>

                <p class="help-block">
                    (VALIDADA MSP/CONADIS)
                </p>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="tipoDiscapacidad">Tipo de discapacidad:</label>
            <div class="col-md-3">
                <select name="tipoDiscapacidad" class="form-control discapacidad" disabled required title="Seleccione su tipo de discapacidad">
                    <option value="">Seleccione</option>
                    <option value="fisica">Física</option>
                    <option value="auditiva">Auditiva</option>
                    <option value="visual">Visual</option>
                    <option value="intelectual">Intelectual</option>
                    <option value="lenguaje">Lenguaje</option>
                    <option value="mental">Mental</option>
                    <option value="psicologica">Psicológica</option>
                    <option value="psicosocial">Psicosocial (Autismo)</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="porcentajeDiscapacidad">Porcentaje:</label>
            <div class="col-md-3">
                <input type="number" min="0" max="100" placeholder="Cantidad" name="porcentajeDiscapacidad" disabled class="form-control discapacidad" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="telefonoPersonal">Teléfono:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Número telefónico" name="telefonoPersonal" class="form-control" title="Sólo números" required pattern="^[0-9]+$" maxlength="10">
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="telefonoFamiliar">Teléfono convencional o de un familiar:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Número convencional" name="telefonoFamiliar" class="form-control" title="Sólo números" pattern="^[0-9]+$" maxlength="10">
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="correo">Correo electrónico:</label>
            <div class="col-md-3">
                <input type="email" placeholder="Correo electrónico" name="correo" class="form-control" required>
            </div>
        </div>
    </div>
    <!--formulario preguntas informativas del aspirante-->
    <div class="card">
        <h2>E. PREGUNTAS INFORMATIVAS DEL ASPIRANTE.</h2>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="bonoDesarrollo">¿Recibe Bono de Desarrollo Humano?</label>
            <div class="radio-group col-md-3">
                <input type="radio" id="bonoSi" name="recibeBono" value="true">
                <label class="col-form-label col-md-2" for="bonoSi">Sí</label>
                <input type="radio" id="bonoNo" name="recibeBono" value="false" checked>
                <label class="col-form-label col-md-2" for="bonoNo">No</label>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="tieneTrabajo">¿Tiene Trabajo?</label>
            <div class="radio-group col-md-3">
                <input type="radio" id="trabajaSi" name="trabaja" value="true">
                <label class="col-form-label col-md-2" for="trabajaSi">Sí</label>
                <input type="radio" id="trabajaNo" name="trabaja" value="false" checked>
                <label class="col-form-label col-md-2" for="trabajaNo">No</label>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="actividadLaboral">Actividad Laboral:</label>
            <div class="col-md-3">
                <select id="actividadLaboral" name="actividadLaboral" class="form-control" required title="Seleccione su actividad laboral">
                    <option value="" disabled selected>
                        Seleccione su actividad laboral
                    </option>
                    <option value="agropecuaria">Agropecuaria</option>
                    <option value="artesanal">Artesanal</option>
                    <option value="comercial">Comercial</option>
                    <option value="servicio">Servicio</option>
                    <option value="domestica">Doméstica</option>
                    <option value="agricultura">Agricultura</option>
                    <option value="salud">Salud</option>
                    <option value="minas">Minas y cantera</option>
                    <option value="mensajeria">Mensajería y correos</option>
                    <option value="seguridad">Seguridad</option>
                    <option value="construccion">Construcción</option>
                    <option value="servicioPublico">Servicio público</option>
                    <option value="ninguno">Ninguno</option>
                    <option value="otroLabor">Otro</option>
                </select>
            </div>
            <div class="col-md-3">
                <input id="otraLabor" type="text" placeholder="Otro labor" name="otraLabor" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="rezagoAspirante">Años de rezago educativo del aspirante:</label>
            <div class="col-md-3">
                <select name="aniosRezago" class="form-control" required title="Seleccione su rezago educativo">
                    <option value="" disabled selected>Años de rezago</option>
                    <option value="rezago1">3 - 5 años de rezago</option>
                    <option value="rezago2">5 - 7 años de rezago</option>
                    <option value="rezago3">7 - 10 años de rezago</option>
                    <option value="rezago4">Más de 10 años de rezago</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="ultimoAprobado">Último año aprobado:</label>
            <div class="col-md-3">
                <select name="anioAprobado" class="form-control" required title="Seleccione el último año aprobado">
                    <option value="" disabled selected>
                        Último año aprobado
                    </option>
                    <option value="ultimoAprobado3">7mo. E.G.B.</option>
                    <option value="ultimoAprobado4">8vo. E.G.B.</option>
                    <option value="ultimoAprobado5">9no. E.G.B.</option>
                    <option value="ultimoAprobado6">10mo. E.G.B.</option>
                    <option value="ultimoAprobado7">1ro. B.G.</option>
                    <option value="ultimoAprobado8">2do. B.G.</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="regimen">Regimen:</label>
            <div class="col-md-3">
                <select name="regimen" class="form-control" required title="Seleccion de regimen">
                    <option value="" disabled selected>Seleccione el regimen</option>
                    <option value="regimenCosta">Regimen costa</option>
                    <option value="regimenSierra">Regimen sierra</option>
                </select>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="servicioEducativo">Servicio educativo al que desea inscribirse:</label>
            <div class="col-md-3">
                <select name="servicioEducativo" class="form-control" required title="Seleccion de servicio">
                    <option value="" disabled selected>Seleccion de servicio educativo</option>
                    <option value="egb">Educación General Básica Superior EGB-S - 5 meses cada grado (intensiva)</option>
                    <option value="bg">Bachillerato General BG - 5 meses cada curso (intensiva)</option>
                </select>
            </div>
        </div>
    </div>
    <!--formulario donde se inscribio-->
    <div class="card">
        <h2>F. UBICACIÓN DEL ASPIRANTE O LUGAR DONDE DESEA ACCEDER AL SERVICIO EDUCATIVO.</h2>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="provincia">Provincia:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Provincia" name="ubicacion[provincia]" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="zona">Zona:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Zona" name="ubicacion[zona]" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="canton">Cantón:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Canton" name="ubicacion[canton]" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="distrito">Distrito:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Distrito" name="ubicacion[distrito]" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="parroquia">Parroquia:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Parroquia" name="ubicacion[parroquia]" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="circuito">Circuito:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Circuito" name="ubicacion[circuito]" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="sector">Sector:</label>
            <div class="col-md-3">
                <input type="text" placeholder="Sector" name="ubicacion[sector]" class="form-control" required>
            </div>
        </div>
        <div class="row mb-2">
            <label class="col-form-label col-md-2" for="direccion">Dirección</label>
            <div class="col-md-3">
                <input type="text" placeholder="Dirección" name="ubicacion[direccion]" class="form-control" required>
                <p class="help-block">
                    (BARRIO/COMUNIDAD/CALLE PRINCIPAL/CALLE SECUNDARIA/REFERENCIA)
                </p>
            </div>
        </div>
    </div>
    
    <div class="text-center">
        <button type="submit" class="btn btn-lg btn-primary">Guardar</button>
    </div>
</form>

<script src="public/js/script.js"></script>
