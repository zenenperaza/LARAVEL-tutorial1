<template>
<div> 
    <h1>Porceso de Compra</h1>
    <div class="container-fluid">
        <div class="row">
            <Productos
                v-if="paso === 1" />
            
            <DatosDelComprador
				v-show="paso === 2" />

        </div>

        <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-danger"
                @click="pasoAnterior">Anterior</button>              
                <button type="button " class="btn btn-primary "
                @click="pasoSiguiente">Siguiente</button>

        </div>
    </div>
</div>
</template>

<script lang="js" setup>
import { ref, onMounted } from 'vue';
import { useCarritoStore } from "@/stores/carrito";
import Productos from '@/components/ProcesoDeCompra/Productos.vue';

const store = useCarritoStore()

const paso = ref(1)

onMounted(() => {
    store.obtenerProductos()
})
   
</script>

<style scoped>

</style>