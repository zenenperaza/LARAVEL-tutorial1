<template>
<div> 
    <h1>Proceso de Compra</h1>
    <div class="container-fluid">
        <div class="row">
            <Productos
                v-if="paso === 1" />
            
            <DatosDelComprador
				v-if="paso === 2" />

            <MetodoDeEntrega
                v-if="paso === 3" />

        </div>

        <div class="d-flex justify-content-between mt-3">

                <button type="button" class="btn btn-danger"
                :disabled="paso === 1"
                @click="pasoAnterior" >Anterior</button>  

                <button type="button " class="btn btn-primary "
                :disabled="paso === 4"
                @click="pasoSiguiente">Siguiente</button>

        </div>
    </div>
</div>
</template>

<script lang="js" setup>
import { ref, onMounted } from 'vue';
import { useCarritoStore } from "@/stores/carrito";
import Productos from '@/components/ProcesoDeCompra/Productos.vue';
import DatosDelComprador from '@/components/ProcesoDeCompra/DatosDelComprador.vue'
import MetodoDeEntrega from '@/components/ProcesoDeCompra/MetodoDeEntrega.vue'

const store = useCarritoStore()

const paso = ref(1)

// METODOS
const pasoAnterior = () => {
    paso.value--
}
const pasoSiguiente = () => {
    paso.value++
}

onMounted(() => {
    store.obtenerProductos()
})
   
</script>

<style scoped>

</style>