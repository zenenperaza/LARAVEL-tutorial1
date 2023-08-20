<template>
<div> 
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>SubTotal</th>
            </tr>
        </thead>
        <tbody>
            <tr 
            v-for="producto in store.productos"
            >
            <td>{{ producto.nombre }}</td>
            <td>{{ producto.precio }}</td>
            <td>{{ producto.cantidad }}</td>
            <td>{{ producto.precio * producto.cantidad }}</td>

            </tr>
        </tbody>
    </table>
</div>
</template>

<script lang="js" setup>
import { useCarritoStore } from "@/stores/carrito";

const store = useCarritoStore()





</script>

<style scoped>

</style>