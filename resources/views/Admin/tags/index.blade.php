@extends('Admin.layouts.master')

@section('content')
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Tags</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route ('admindashboard') }} ">Home</a></li>
            <li class="breadcrumb-item active">Tags</li>
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
            Add
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="table" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Tag</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>
</div>

@include('Admin.tags.modal')

@endsection

@push('script')


<script>

  let table; 

    $(document).ready( function () {
      table =  $('#table').DataTable({
        ajax: {
                url: 'api/data/admin/tag',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'tag'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
      });
    }
    
  );


  let input;
  let url;
  let idu;

    $("#form").submit(function (e) { 
      e.preventDefault();
      input = $(this).serialize();
      if(idu != null){
        input = input+'&id='+idu;
      }
      $.post(url, input,
        function (rsp) {
          table.ajax.reload();
          $('#tagModal form')[0].reset();
          $('#tagModal').modal('hide');
        },
      );
      return false;
    });


  function addData(){
    $("#form").attr("url", "api/data/admin/tag/store");
    $('.modal-title').text('Add Tag');
    $('#tagModal form')[0].reset(); 
    $('#tagModal').modal('show'); 
    url = $("#form").attr("url");

    console.log(url);

      }
  

  function editData(id){

    idu = id;
    $("#form").attr("url", "api/data/admin/tag/update");
    $('.modal-title').text('Edit Tag');
    $('#tagModal').modal('show');
    url = $("#form").attr("url");

    $.get("api/data/admin/edit/tag", {'tag_id':id},
      function (data) {
        $("input[name='tags']").val(data.tag);
      },
    );
  }


  function deleteData(id){
      $.post("api/data/admin/tag/delete/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
        function (data) {
          alert(data);
          table.ajax.reload();
        },
      );
    }
  </script>

@endpush