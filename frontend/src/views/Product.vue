<template>
 <div>
 <h1> Product list </h1>

 </div>
    
</template>

<script>
import axios from 'axios'

export default {
name: 'product',
data() {
    return {
        products: null
    }
 },
 created() {
     this.getProducts() 
 },
 methods: {
     getProducts() {
         axios
            .get('/api/index')
            .then(res =>
              console.log(res))
            .catch(err => {
                console.log(err)
            })
     }
 }
}
</script>

<style>

</style>