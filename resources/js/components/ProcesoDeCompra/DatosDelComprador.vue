<template>
	<form>
		<div class="form-group mt-3">
			<label for="exampleFormControlInput1">Nombre</label>
			<input type="text" class="form-control" placeholder="Pedro" autocomplete="off" name="nombre" id="nombre"
				@change="store.editarNombre($event.target.value)">
		</div>
		<div class="form-group mt-3">
			<label for="exampleFormControlInput1">Apellido</label>
			<input type="text" class="form-control" placeholder="Perez" autocomplete="off" name="apellido" id="apellido"
				@change="store.editarApellido($event.target.value)">
		</div>
		<div class="form-group mt-3">
			<label>Email</label>
			<input type="email" class="form-control" placeholder="pedro@mail.com" autocomplete="off" name="email" id="email"
				@change="store.editarEmail($event.target.value)">
		</div>
		<div class="form-group mt-3">
			<label for="exampleFormControlInput1">Teléfono</label>
			<input type="text" class="form-control" placeholder="4444 1111" autocomplete="off" name="telefono" id="telefono"
				@change="store.editarTelefono($event.target.value)">
		</div>
	</form>
</template>

<script setup>
// Imports
import {useProcesoDeCompraStore} from "@/stores/proceso_de_compra";

// Store
const store = useProcesoDeCompraStore();

</script>

<style scoped>

</style>