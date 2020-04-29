<template>
    <div class="container bg-danger">

        <div class="form-group">
            <label class="text-dark" for="token"><h4>Token</h4></label>
            <input readonly="readonly" class="form-control text-dark" v-model="users.api_token" required type="text" name="token">
        </div>

        
        <button class="btn btn-warning" @click="generarToken">Generar Token</button>
    </div>
    
</template>

<script>
    export default {
        props: ['user'],
       data(){
        return{

            users:{
                id:null,
                api_token:null
            }
        }
      },
       mounted() {
             this.users = JSON.parse(this.user);
            console.log(this.users);
        },
       
       methods: {

    generarToken() {
    
      axios.post('generar/'+this.users.id).then(({data})=>(
           this.users.api_token =data.token
              ));
    },
  
}

}
    
</script>