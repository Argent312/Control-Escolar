<template>
    <table class="table">
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
                @click="baja(item)">Baja</button>
            </td>
        </tbody>
    </table>
</template>

<script>
export default {
    mounted() {
            console.log('Component mounted.')
        },
    created: function(){
        axios.get('/alumno').then(res=>{
        //aqui se asocia los datos del res con los del arreglo alumno y tutor
        this.alumnos = res.data;
        })
    },
    data(){
        return{
            alumnos:[],
            id:'',
            mensaje:''
        }
    },
    methods:{
        baja(item, index){
            this.id = item.id;
            axios.delete(`/alumno/${this.id}`).then(res=>{
                this.alumnos.splice(index, 1);
                alert('Alumno ' + res.data.nombre + ' ' + res.data.apellidoP + ' ' + res.data.apellidoM + ' Ha sido dado de Baja');
            })
        }
    }
}
</script>