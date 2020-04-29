<template>
    <div class="container">
        <table class="table table-dark">
  <thead>
    <tr>
        <th>location_slug</th>
        <th>within_search_area</th>
        <th>distance</th>
        <th>latitud</th>
        <th>longitud</th>
        <th>uid</th>
        <th>name</th>
        <th>accepts_new_patients</th>
    </tr>
  </thead>
  <tbody>
    <tr v-for="(item, index) in response" :key="index">
   
      <td>{{item.location_slug}}</td>
      <td>{{item.within_search_area}}</td>
      <td>{{item.distance}}</td>
      <td>{{item.lat}}</td>
    <td>{{item.lon}}</td>
      <td>{{item.uid}}</td>
      <td>{{item.name}}</td>
      <td>{{item.accepts_new_patients}}   </td>
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
                 url: 'api/prueba'
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
