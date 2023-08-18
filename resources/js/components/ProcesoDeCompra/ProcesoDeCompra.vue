<template>
<div> 
    <h1>Porceso de Compra</h1>
    <div class="container-fluid">
        <div class="row">

        </div>

        <div class="d-flex justify-content-between">
                <button type="button" class="btn btn-danger">Anterior</button>              
                <button type="button " class="btn btn-primary ">Siguiente</button>

        </div>
    </div>
</div>
</template>

<script lang="js" setup>
import { ref } from 'vue';


const paso = ref(1)
   
</script>

<style scoped>

</style>