<template>
    <div class="container">
        <table class="table table-dark">
  <thead>
    <tr>
        <th>status</th>
        <th>api_version</th>
        <th>proxy_build_version</th>
        
    </tr>
  </thead>
  <tbody>
    
    <tr>
   
      <td>{{response.status}}</td>
      <td>{{response.api_version}}</td>
      <td>{{response.proxy_build_version}}</td>
      

    </tr>
    
  </tbody>
</table>
    </div>
</template>

<script>
    export default {
        mounted() {
        },
        data() {
     return {

         response :[]
            }
        },
        created()
        {
            this.traer();
        },
        methods: 
        {
           traer()
           {
                let self = this;
                 axios({
                 method: 'GET',
                 url: 'api/pru'
                 })
                 .then(function (response) 
                 {
                    self.response = response.data.prueba;
                     console.log(response.data.prueba.status); 
                     console.log(response.data.prueba.api_version);
                     console.log(response.data.prueba.proxy_build_version);
                     console.log(response.data.prueba);
                       
                 });
           }
        } 
        }
</script>
