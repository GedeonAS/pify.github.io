@extends('Admin.layouts.master')

@section('content')

<style>
  #gmbr{
    max-width: 50%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 50px;
  }
</style>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Pertanyaan</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
            <li class="breadcrumb-item active">Pertanyaan</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container">
    <div class="card">
        <div class="card-body">
            <table id="table" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>No</th>
                        <th>user</th>
                        <th>Type</th>
                        <th>Community</th>
                        <th>Title</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
              </tbody>
            </table>
          </div>
      </div>
      </div>
  </div>
  
  @include('Admin.question.modal')
  
  
  @endsection
  
  
  @push('script')
  <script>

    let table;

    $(document).ready(function () {
      table = $('#table').DataTable({
        ajax: {
          url: 'api/data/admin/quest',
        },
        columns: [
          {data: 'DT_RowIndex', searchable:false, sortable:false},
          // {data: 'id'},
          {data: 'name'},
          {data: 'nama_type'},
          {data: 'community'},
          {data: 'title'},
          {data: 'aksi', searchable:false, sortable:false}
        ]
      });
    });

    function deleteData(id){
      alert(id)
      $.post("api/data/admin/quest/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
        function (data) {
          alert(data);
          table.ajax.reload();
        }, 
      );
    }

    // function addData(){
    // $("#form").attr("url", "api/data/admin/quest/store");
    // $('.modal-title').text('Add question');
    // // $('#addQuest form')[0].reset(); 
    // $('#addQuest').modal('show'); 
    // url = $("#form").attr("url");
    
    // console.log(url);
    // }
      

    function showDetail(id){
      $('.modal-title').text("Detail");
      $("#questDetail").modal('show');
      $('.modal-footer').hide();
      $.get("api/data/admin/quest/show", {'id':id},
        function (data) {
          console.log(data);
          if(data[0].community == null){
            $("#com").text("Public");
          } else {
            $("#com").text(data[0].community);
          }
          // $("#username").append("<p id='uname'></p>");
          $("#uname").text(data[0].name);
          // $("#qt").append("<p id='quest'></p>");
          $("#quest").text(data[0].question);
          // $("#ttl").append("<p id='tit'></p>");
          $("#tit").text(data[0].title);
          // $("#cm").append("<p id='com'></p>");
          // $("#vie").append("<img id='view' src=''>");
          $("#vie").text(data[0].views);
          // $("#gbr").append("<img id='gmbr' src=''>");
          $("#gmbr").attr('src', 'storage/'+data[0].path_img);
          $("#like").text(data[0].like);
          $("#dislike").text(data[0].dislike);
          $("#vote").text(data[0].votes);
        },
      );
      
    }

    // function editData(id){
    //   $('#typesModal').modal('show');
    // }
    
    //   $(document).ready( function () {
    //     $('#myTable').DataTable();
    // } );  
    </script>
  @endpush
