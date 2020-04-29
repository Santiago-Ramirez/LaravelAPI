<template>
    <div class="container">
        <table class="table table-dark">
  <thead>
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>active</th>


    </tr>
  </thead>
  <tbody>
    <tr v-for="(item, index) in response" :key="index">
   
      <td>{{item.uid}}</td>
      <td>{{item.name}}</td>
      <td>{{item.active}}</td>


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
                 url: 'api/pr'
                 })
                 .then(function (response) 
                 {
                    self.response = response.data.prueba.data;
                     console.log(response.data.prueba.data);   
                 });
           }
        } 
        }
</script>
