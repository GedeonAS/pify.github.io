@extends('Admin.layouts.master')

@section('content')

<style>
  #gbrmdl{
    max-width: 40%;
    height: auto;
    margin-top: 40px;
    display: block;
    margin-right: auto;
    margin-left: auto;
  }

  #gmbr{
    max-width: 40%;
    max-height: 50%;
    /* margin-top: 40px; */
    display: block;
    margin-right: auto;
    margin-left: auto;
  }
</style>
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Comunitty</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
            <li class="breadcrumb-item active">Comunitty</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a href="#" onclick="addData()" class="btn btn-success">
            <i class="nav-icon fa-solid fa-plus"></i>
            Tambah
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="table" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Comunitty name</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>

@include('Admin.community.modal')

@endsection

@push('script')


<script>

  let table; 

    $(document).ready( function () {
        table =  $('#table').DataTable({
          ajax: {
                  url: 'api/data/admin/commu',
              },
              columns: [
                  {data: 'DT_RowIndex', searchable: false, sortable: false},
                  {data: 'community'},
                  {data: 'aksi', searchable: false, sortable: false},
              ]
        });
      }
    );

    let url;
    let input;
    let idu;

  $("#form").submit(function (e) {
    e.preventDefault();

    input = new FormData(this);
    if (idu != null) {
      input.append('id', idu);
    }
    console.log(input);
    $.ajax({
      type: "post",
      url: url,
      data: input,
      contentType: false,
      cache: false,
      processData:false,
      success: function (rsp) {
        table.ajax.reload(rsp);
            $('#modalCommunity form')[0].reset();
            $('#modalCommunity').modal('hide');
      }
    });
    return false;
  });
  


  function addData(){
    $("#form").attr("url", "api/data/admin/commu/store");
    $("#gbrmdl").remove();
    $('.modal-title').text('Add Community');
    $('#modalCommunity form')[0].reset(); 
    $('#modalCommunity').modal('show'); 
    url = $("#form").attr("url");
    
    console.log(url);
      
  }

  function showDetail(id){
      $('.modal-title').text("Detail");
      $("#commuDetail").modal('show');
      $.get("api/data/admin/commu/edit", {'id':id},
        function (data) {
          console.log(data);
          $("#gbr").append("<img id='gmbr' src=''>");
          $("#gmbr").attr('src', 'storage/'+data.path_img);
          $("#fl").append("<span id='fol'></span>");
          $("#fol").text(data.followers);
          $("#cm").append("<span id='com'></span>");
          $("#com").text(data.community);
        },
      );
      
    }


  function editData(id){
    idu = id
    $("#form").attr("url", "api/data/admin/commu/update");
    $('.modal-title').text('Edit Community');
    // $("#gbrmdl").remove();
    $('#modalCommunity').modal('show');
    url = $("#form").attr("url");
    console.log(url);
    $.get("api/data/admin/commu/edit", {'id':id},
      function (data) {
        $("input[name='commu']").val(data.community);
        // $("#append").append("<img id='gbrmdl' src=''>");
        $("#gbrmdl").attr('src', 'storage/'+data.path_img);
        $("#nameCommu").append("<p id='nama'></p>");
        $("#nama").text(data.community);
      },
    );
  }

  $(document).ready(() => {
            $("#file-img").change(function () {
                const file = this.files[0];
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function (event) {
                        $("#gbrmdl")
                        .attr("src", event.target.result);
                    };
                    reader.readAsDataURL(file);
                }
            });
        });
  

  function deleteData(id){
    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
  }).then((result) => {
    if (result.isConfirmed) {
      $.post("api/data/admin/commu/delete/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
        function (data) {
          // alert(data);
          table.ajax.reload();
        },
      ),
      Swal.fire(
        'Deleted!',
        'Your file has been deleted.',
        'success'
      )
    };
  });
  }

  </script>

@endpush