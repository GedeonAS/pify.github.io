<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
  <body id="app">


    <select name="" class="filter" id="">
      <option value="" disabled selected>Pilihlah</option>
      {{-- <option :value="" v-for="class in filter.filc"></option> --}}
    </select>
    <select name="" class="filter" id="">
      <option value="" disabled selected>Pilihlah</option>
      <option v-for="clase in filter.filc" value=""></option>
    </select>
    <select name="" class="filter" id="">
      <option value="" disabled selected>Pilihlah</option>
      <option v-for="type in filter.filt" value=""></option>
    </select>



      <div >
          <p v-for="mapel in filter.film">
            @{{mapel.id}}
            @{{mapel.nama_mapel}}
          </p>

          <ul v-for="a in all">
            <p>@{{ a.question }}</p>
          </ul>

          <div>
            @{{filter.filc}}
          </div>
      </div>

  </body>

</html>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/vue@3"></script>

  <script>
    $(document).ready(function(){
      $(".filter").change(function(){
        // console.log(data)
        //     $.each( vues.filter.filc, function( key, value ) {
        //   alert( key + ": " + value );
        // });
      });
    });

  </script>

  <script>
    const { createApp } = Vue

    const vues = createApp({
      data() {
        return {
          radio:'',
          all : [],
          filter : [],
        }
      },
      mounted(){
          $.ajax({
              url: "/api/data/q",
              success: function(rsp){
                  vues.all = rsp;
                  // appComponent.products = rsp;
                  // console.log(rsp);
              }
          });
          $.ajax({
              url: "/api/data/filter",
              success: function(rsp){
                  vues.filter = rsp;
                  // appComponent.products = rsp;
                  // console.log(rsp);
              }
          });
        },
    }).mount('#app')
  </script>
