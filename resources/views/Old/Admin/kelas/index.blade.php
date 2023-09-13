@extends('Admin.layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Kelas</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Kelas</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
<div class="container">
    <div class="d-flex justify-content-end mb-3">
        <a onclick="addKelas()" class="btn btn-success" role="button">
            <i class="nav-icon fa-solid fa-plus"></i>
            Tambah
        </a>
    </div>
    <div class="card">
        <div class="card-body">
            <table id="table" class="display table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Nama Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                {{-- <tbody>
                    @foreach ( $classes as $kelas)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $kelas->nama_class }}</td>
                            <td class="d-flex justify-content-center">
                                <a href="#" class="btn btn-sm btn-warning mr-2">
                                    <i class="nav-icon fa-solid fa-pen-to-square"></i>
                                    Edit
                                </a>
                                <a href="#" class="btn btn-sm btn-danger">
                                    <i class="nav-icon fa-solid fa-trash"></i>
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody> --}}
            </table>
        </div>
    </div>
</div>

@include('Admin.kelas.modal')

@endsection

@push('script')


<script>

  let table; 

    $(document).ready( function () {
      table =  $('#table').DataTable({
        ajax: {
                url: 'api/data/admin/kelas',
            },
            columns: [
                {data: 'DT_RowIndex', searchable: false, sortable: false},
                {data: 'nama_class'},
                {data: 'aksi', searchable: false, sortable: false},
            ]
      });
  } );

  function deleteData(id){
      alert(id)
      $.post("api/data/admin/kelas/"+ id, {'_method':'delete','_token':'{{ csrf_token() }}',},
        function (data) {
          alert(data);
          table.ajax.reload();
        },
      );
    }

    function editData(id){
      $('#kelasModal').modal('show');
    }

    function addKelas() {
      save_method = "add";
      $('input[name=_method]').val('POST');
      $('#tambahKelas').modal('show');
      $('#tambahKelas modal')[0].reset();
    }

    
    // function tambahData(){
    //   $('#tambahModal').modal('show');
    // }
  </script>
@endpush