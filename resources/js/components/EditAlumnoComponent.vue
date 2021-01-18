<template>
    
<div>
    <form v-on:submit.prevent="edit" class="mt-3 mb-3 border border-dark bordder-3 p-3" v-if="formactive">
        <h2>Formato de Modificacion de Alumno</h2>
        
        <br><br>
        <h3>Datos del Alumno</h3>
            
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input v-model="alumno.nombre" type="text" class="form-control" id="nombre">
        </div>

        <div class="mb-3">
            <label for="apellido-paterno" class="form-label">Apellido Paterno </label>
            <input v-model="alumno.apellidoPaterno" type="text" class="form-control" id="apellido-paterno">
        </div>

        <div class="mb-3">
            <label for="apellido-materno" class="form-label">Apellido Materno </label>
            <input v-model="alumno.apellidoMaterno" type="text" class="form-control" id="apellido-materno">
        </div>

        <div class="mb-3">
            <label for="curp" class="form-label">Curp </label>
            <input v-model="alumno.curp" type="text" class="form-control" id="curp">
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input v-model="alumno.telefono" type="text" class="form-control" id="telefono">
        </div>

        <div class="row mb-3">
            <div class="col mb3">
                <label for="edad" class="form-label">Edad</label>
                <input v-model="alumno.edad" type="number" class="form-control" name="edad" id="edad">
            </div>
            <div class="col mb-3">
                <label for="sexo">Sexo</label>
                <select v-model="alumno.sexo" class="form-select" id="sexo">
                    <option selected></option>
                    <option value="Hombre">Hombre</option>
                    <option value="Mujer">Mujer</option>
                </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col mb-3">
                <label for="sangre" class="form-label">Tipo de sangre</label>
                <input v-model="alumno.sangre" type="text" class="form-control" id="sangre">
            </div>
            <div class="col mb-3">
                <label for="fecha-nacimiento" class="form-label">Fecha de Nacimiento</label>
                <input type="date" v-model="alumno.fechaNacimiento" class="form-control" name="fecha-nacimiento" id="fecha-nacimiento">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col mb-3">
                <label for="lugarNacimiento" class="form-label">Lugar de Nacimiento</label>
                <input v-model="alumno.lugarNacimiento" type="text" class="form-control" id="lugarNacimiento">
            </div>
            <div class="col mb-3">
                <label for="naionalidad" class="form-label">Nacionalidad</label>
                <input v-model="alumno.nacionalidad" type="text" class="form-control" name="nacionalidad" id="nacionalidad">
            </div>
        </div>


        <div class="row">
            <div class="col mb-3">
                <label for="grado" class="form-label">Grado</label>
                <input v-model="alumno.grado" type="text" class="form-control" id="grado">
            </div>
            
            <div class="col mb-3">
                <label for="grupo" class="form-label">Grupo</label>
                <input v-model="alumno.grupo" type="text" class="form-control" id="grupo">
            </div>
        </div>

        <h4>Domicilio</h4>

        <div class="mb-3">
            <label for="direccion" class="form-label">Direccion</label>
            <input v-model="alumno.direccion" type="text" class="form-control" id="direccion" name="direccion" placeholder="Calle, Numero Interior, Numero Exterior">
        </div>

        <div class="row mb-3">
            <div class="col mb-3">
                <label for="colonia" class="form-label">Colonia</label>
                <input v-model="alumno.colonia" type="text" class="form-control" id="colonia" name="colonia">
            </div>
            <div class="col mb-3">
                <label for="codigoPostal" class="form-label">Codigo Postal</label>
                <input v-model="alumno.cp" type="text" class="form-control" id="codigoPostal" name="codigoPostal">
            </div>
        </div>

        <div class="row mb-3">
            <div class="col mb-3">
                <label for="entidad" class="form-label">Entidad</label>
                <input v-model="alumno.entidad" type="text" class="form-control" id="entidad">
            </div>
            <div class="col mb-3">
                <label for="ciudad" class="form-label">Ciudad</label>
                <input v-model="alumno.ciudad" type="text" class="form-control" id="ciudad">
            </div>
        </div>
        <hr>

        <!--Datos del tutor-->
        <h3>Datos Del tutor</h3>
        <div class="mb-3">
            <label for="nombreTutor" class="form-label">Nombre</label>
            <input v-model="tutor.nombre" type="text" class="form-control" id="nombreTutor">
        </div>

        <div class="mb-3">
            <label for="apellidoPaternoTutor" class="form-label">Apellido Paterno</label>
            <input v-model="tutor.apellidoPaterno" type="text" class="form-control" id="apellidoPaternoTutor">
        </div>

        <div class="mb-3">
            <label for="apellidoMaternoTutor" class="form-label">Apellido Materno</label>
            <input v-model="tutor.apellidoMaterno" type="text" class="form-control" id="apellidoMaternotutor">
        </div>

        <h4>Domicilio y Ocupacion</h4>
        <div class="mb-3">
            <label for="domicilioTutor" class="form-label">Domicilio</label>
            <input v-model="tutor.domicilio" type="text" class="form-control" id="domiciliotutor" placeholder="Calle, Numero interior, Numero Exterior">
        </div>

        <div class="row mb-3">
            <div class="col mb-3">
                <label for="ciudadTutor" class="form-label">Ciudad</label>
                <input v-model="tutor.ciudad" type="text" class="form-control" id="ciudadTutor">
            </div>
            <div class="col mb-3">
                <label for="coloniaTutor" class="form-label">Colonia</label>
                <input v-model="tutor.colonia" type="text" class="form-control" id="coloniaTutor">
            </div>
        </div>

        <div class="mb-3">
            <label for="ocupacionTutor" class="form-label">Ocupacion</label>
            <input v-model="tutor.ocupacion" type="text" class="form-control" id="ocupacionTutor">
        </div>

        <div class="row mb-3">
            <div class="col mb-3">
                <label for="telefonoCasa" class="form-label">Telefono Casa</label>
                <input v-model="tutor.telCasa" type="text" class="form-control" id="telefonoCasa">
            </div>
            <div class="col mb-3">
                <label for="telefonoTrabajo" class="form-label">Telefono Trabajo</label>
                <input v-model="tutor.telTrabajo" type="text" class="form-control" id="telefonoTrabajo">
            </div>
            <div class="col mb-3">
                <label for="celular" class="form-label">Celular</label>
                <input v-model="tutor.celular" type="text" class="form-control" id="celular">
            </div>
        </div>
        <div class="text-center mb-2 mensaje">
            <p :class="confirmacion">{{mensaje}}</p>
        </div>
        <div class="centrar-button">
            <button type="submit" class="btn btn-primary">Editar Datos</button>
            <button @click="cancelar" type="button" class="btn btn-warning">Cancelar</button>
        </div>
        
    </form>
    
    <!--Tabla que muestra los alumnos registrados, cambiar el controlador para ver alumnos segun la secretaria-->
    <table class="table" v-if="tablactive">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Grado</th>
                <th>Grupo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody v-for="(item, index) in alumnos" :key="index">
            <td>{{item.nombre}}</td>
            <td>{{item.apellidoP}}</td>
            <td>{{item.apellidoM}}</td>
            <td>{{item.grado}}</td>
            <td>{{item.grupo}}</td>
            <td>
                <button class="btn btn-info"
                @click="select(item)">Editar</button>
            </td>
        </tbody>
    </table>
</div>

</template>

<script>
    export default {
        mounted() {
            
        },
        created: function(){
            axios.get('/alumno').then(res=>{
                //aqui se asocia los datos del res con los del arreglo alumno y tutor
                this.alumnos = res.data;
                
            })
        },
        data(){
            return {
                //datos del alumno del res data
                alumnos:[],
                //datos del tutor del res data
                tutors:[],
                alumno:{
                    id:'',
                    nombre:'',
                    apellidoPaterno:'',
                    apellidoMaterno:'',
                    curp:'',
                    telefono:'',
                    edad:'',
                    sexo:'',
                    sangre:'',
                    fechaNacimiento:'',
                    lugarNacimiento:'',
                    nacionalidad:'',
                    grado:'',
                    grupo:'',
                    direccion:'',
                    colonia:'',
                    cp:'',
                    entidad:'',
                    ciudad:''
                },

                tutor:{
                    nombre:'',
                    apellidoPaterno:'',
                    apellidoMaterno:'',
                    domicilio:'',
                    ciudad:'',
                    colonia:'',
                    ocupacion:'',
                    telCasa:'',
                    telTrabajo:'',
                    celular:''
                },
                mensaje:'',
                confirmacion: '',
                tablactive:true,
                formactive: false,
                tutorid:''
            }},
        methods:{
            select(item){
                //Asignar datos del alumno
                this.alumno.id = item.id;
                this.alumno.nombre = item.nombre;
                this.alumno.apellidoPaterno = item.apellidoP;
                this.alumno.apellidoMaterno = item.apellidoM;
                this.alumno.curp = item.curp;
                this.alumno.telefono = item.telefono;
                this.alumno.edad = item.edad;
                this.alumno.sexo = item.sexo;
                this.alumno.sangre = item.sangre;
                this.alumno.fechaNacimiento = item.fechaNacimiento;
                this.alumno.lugarNacimiento = item.lugarNacimiento;
                this.alumno.nacionalidad = item.nacionalidad;
                this.alumno.grado = item.grado;
                this.alumno.grupo = item.grupo;
                this.alumno.direccion = item.direccion;
                this.alumno.colonia = item.colonia;
                this.alumno.cp = item.cp;
                this.alumno.entidad = item.entidad;
                this.alumno.ciudad = item.ciudad;
                
                //Buscar y asignar datos del tutor
                this.tutorid = item.tutor_id;
                axios.get(`/tutor/${this.tutorid}/edit`).then(res=>{
                    this.tutors = res.data;
                    this.tutor.nombre = this.tutors.nombre;
                    this.tutor.apellidoPaterno = this.tutors.apellidoP;
                    this.tutor.apellidoMaterno = this.tutors.apellidoM;
                    this.tutor.domicilio = this.tutors.domicilio;
                    this.tutor.ciudad = this.tutors.ciudad;
                    this.tutor.colonia = this.tutors.colonia;
                    this.tutor.ocupacion = this.tutors.ocupacion;
                    this.tutor.telCasa = this.tutors.telCasa;
                    this.tutor.telTrabajo = this.tutors.telTrabajo;
                    this.tutor.celular = this.tutors.celular;
                })
                
                this.tablactive = false;
                this.formactive = true;
            
            },
            edit(){
                if (this.alumno.nombre.trim() === '' || this.alumno.apellidoPaterno.trim() === '' ||
                    this.alumno.apellidoMaterno.trim() === '' || this.alumno.curp.trim() === '' ||
                    this.alumno.telefono.trim() === '' || 
                    this.alumno.sexo.trim() === '' || this.alumno.sangre.trim() === '' ||
                    this.alumno.fechaNacimiento.trim() === '' || this.alumno.lugarNacimiento.trim() === '' ||
                    this.alumno.grado.trim() === '' ||  this.alumno.grupo.trim() === '' ||
                    this.alumno.direccion.trim() === '' || this.alumno.colonia.trim() === '' ||
                    this.alumno.cp.trim() === '' || this.alumno.entidad.trim() === '' ||
                    this.alumno.ciudad.trim() === '' || this.tutor.nombre.trim() === '' ||
                    this.tutor.apellidoPaterno.trim() === '' || this.tutor.apellidoMaterno.trim() === '' ||
                    this.tutor.domicilio.trim() === '' || this.alumno.nacionalidad.trim() === '' ||  
                    this.tutor.ciudad.trim() === '' || this.tutor.colonia.trim() === '' || 
                    this.tutor.ocupacion.trim() === '' || this.tutor.telCasa.trim() === '' || 
                    this.tutor.telTrabajo.trim() === '' || this.tutor.celular.trim() === '') 
                    {
                        this.mensaje= "Debes completar todos los campos"
                        this.confirmacion = "bg-danger"
                        return
                } 
                const paramsTutor={
                    nombre: this.tutor.nombre,
                    apellidoP: this.tutor.apellidoPaterno,
                    apellidoM: this.tutor.apellidoMaterno,
                    domicilio: this.tutor.domicilio,
                    ciudad: this.tutor.ciudad,
                    colonia: this.tutor.colonia,
                    ocupacion: this.tutor.ocupacion,
                    telCasa: this.tutor.telCasa,
                    telTrabajo: this.tutor.telTrabajo,
                    celular: this.tutor.celular
                }
                const paramsAlumno ={
                        nombre: this.alumno.nombre,
                        apellidoP: this.alumno.apellidoPaterno,
                        apellidoM: this.alumno.apellidoMaterno,
                        curp: this.alumno.curp,
                        telefono: this.alumno.telefono,
                        edad: this.alumno.edad,
                        sexo: this.alumno.sexo,
                        sangre: this.alumno.sangre,
                        fechaN: this.alumno.fechaNacimiento,
                        lugarN: this.alumno.lugarNacimiento,
                        nacionalidad: this.alumno.nacionalidad,
                        grado: this.alumno.grado,
                        grupo: this.alumno.grupo,
                        direccion: this.alumno.direccion,
                        colonia: this.alumno.colonia,
                        cp: this.alumno.cp,
                        entidad: this.alumno.entidad,
                        ciudad: this.alumno.ciudad,   
                        idtutor: this.alumno.idtutor
                    }    
                    
                axios.put(`/tutor/${this.tutors.id}`,paramsTutor).then(res=>{
                    axios.put(`/alumno/${this.alumno.id}`, paramsAlumno).then(res=>{
                        this.mensaje= "Registro " + this.alumno.nombre + " " + this.alumno.apellidoPaterno + ' Editado'
                        this.confirmacion = "bg-success"
                    })
                })    
            },

            cancelar(){
                this.tablactive = true;
                this.formactive = false;
                this.mensaje = '';
                this.confirmacion = '';

                axios.get('/alumno').then(res=>{
                //Recarga los datos por si existio modificacion
                this.alumnos = res.data;
                })
            }
        }
    }
</script>
