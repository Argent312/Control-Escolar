<template>
  <div class="createuser">
    <form
      class="mt-3 mb-3 border border-dark bordder-3 p-3"
      v-on:submit.prevent="crear"
    >
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input
          type="text"
          class="form-control"
          id="nombre"
          placeholder="Nombre completo"
          v-model="cuenta.nombre"
        />
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Correo electronico</label>
        <input
          type="email"
          class="form-control"
          id="email"
          aria-describedby="emailHelp"
          v-model="cuenta.email"
        />
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Contraseña</label>
        <input
          v-model="cuenta.contraseña"
          type="password"
          class="form-control"
          id="password"
        />
      </div>
      <div class="col-md-4 mb-5">
        <label for="tipo" class="form-label">Tipo de usuario</label>
        <select id="tipo" class="form-select" v-model="cuenta.tipo">
          <option selected></option>
          <option>secretaria</option>
          <option>docente</option>
          <option>subdirector</option>
        </select>
      </div>
      <div class="text-center mb-2 mensaje">
        <p :class="confirmacion">{{ mensaje }}</p>
      </div>
      <div class="centrar-button">
        <button type="submit" class="btn btn-primary">Crear</button>
      </div>
    </form>
  </div>
</template>

<script>
export default {
  mounted() {
    console.log("Component mounted.");
  },
  data() {
    return {
      cuenta: {
        nombre: "",
        email: "",
        contraseña: "",
        tipo: "",
      },
      mensaje: "",
      confirmacion: "",
    };
  },
  methods: {
    crear() {
      if (
        this.cuenta.nombre.trim() === "" ||
        this.cuenta.email.trim() === "" ||
        this.cuenta.contraseña.trim() === "" ||
        this.cuenta.tipo.trim() === ""
      ) {
        this.mensaje = "Necesitas completar todos los campos";
        this.confirmacion = "bg-danger";
        return;
      }
      axios.post("/root", this.cuenta).then((res) => {
        this.mensaje = "Cuenta creada  " + this.cuenta.nombre;
        this.confirmacion = "bg-success";
      });
    },
  },
};
</script>
