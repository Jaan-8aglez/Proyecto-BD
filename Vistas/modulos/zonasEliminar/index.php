<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZONAS/ELIMINAR</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

</head>
<body>

<div id='vueapp'>
    <div class="container">
        <h1>LISTA DE ZONAS</h1>
        <table class='table table-striped table-sm'>
            <tr>
                <th>PUNTO_GEO</th>
                <th>NOMBRE</th>
                <th>FRECUENCIA</th>
                <th>LATITUD</th>
                <th>LONGITUD</th>
                <th>ELIMINAR</th>
               <!-- Campos a mostrar en la tabla -->
                

            </tr>

            <tr v-for='zona in zonas'>
                <td>{{ zona.punto_geo }}</td>
                <td>{{ zona.nombre }}</td>
                <td>{{ zona.frecuencia }}</td>
                <td>{{ zona.latitud }}</td>
                <td>{{ zona.longitud}}</td>
               
                <!-- Campos de la base de datos -->
                <td><button type="button" name="delete" class="btn btn-danger btn-sm delete" @click="deleteData(zona.punto_geo)">ELIMINAR</button></td>
            </tr>
        </table>
    </div>
</div>
 <script>
var app = new Vue({
  el: '#vueapp',
  data: {
      name: '',
      team: '',
      birthday: '',
      zonas: null
  },
  mounted: function () {
    this.getPresident()
  },

  methods: {
    getPresident: function(){
        axios.get('action.php?op=mostrar')
        .then(function (response) {
            app.zonas = response.data;

        })
        .catch(function (error) {
            console.log(error);
        });
    },
    deleteData:function(punto_geo){
        if(confirm("¿Desea eliminar el registro?"))
        {
            axios.post('action.php?op=delete', {
            action:'delete',
            punto_geo:punto_geo
            }).then(function(response){
                console.log(response.data);
                app.getPresident();
                // alert(response.data.message);
            });
        }
    }
  }
});
</script>
</body>
</html>



