<template>
	<div class="container mt-5 mb-5">
		<div class="row align-items-center">

			<div class="col-12 col-sm-6">
				<img src="https://elmundoenrecetas.s3.amazonaws.com/uploads/recipe/main_image/948/espaguetis_con_tomate.webp" class="img-fluid" />
			</div>

			<div class="col-12 col-sm-6">

				<div class="row">
					<div class="col-12">
						<h1>{{ producto.nombre }}</h1>
					</div>

					<div class="col-12">
						<p>DESCRIPCIÓN DEL PRODUCTO</p>
						<p>{{ producto.imagen }}</p>
					</div>

					<div class="col-12">
						<h6><strong>PRECIO:</strong> ${{ producto.precio }}</h6>
					</div>

					<div class="col-12">
						<h6><strong>STOCK:</strong> {{ producto.stock }}</h6>
					</div>

					<div class="col-12 mt-3">
						<AgregarAlCarrito
							:producto="producto" />
					</div>
				</div>

			</div>

		</div>
	</div>
</template>

<script setup>
import {onMounted, ref} from "vue";
import AgregarAlCarrito from "@/components/Productos/AgregarAlCarrito.vue";
import {useCarritoStore} from "@/stores/carrito";

// Props
const props = defineProps({
	id: {
		type: Number,
		default: 0,
	},
});

// Store
const store = useCarritoStore();

// Data
const producto = ref({});

// Eventos
onMounted( () => {

	// Traemos info del producto
	axios
		.get('/api/productos/'+props.id)
		.then( (responseProducto) => {
			producto.value = responseProducto.data;
		});

	// Traer productos del local storage
	store.obtenerProductos();

});

</script>

<style scoped>

</style>