@extends('Admin.layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Question Pending</h1>
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
                            <th>Status</th>
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
                url: 'api/data/admin/quest/pending',
            },
            columns: [
                {data: 'DT_RowIndex', searchable:false, sortable:false},
                {data: 'name'},
                {data: 'nama_type'},
                {data: 'community'},
                {data: 'title'},
                {data: 'status'},
                {data: 'aksi', searchable:false, sortable:false}
            ]
        });
    });


    let id_status;

    function showDetail(id){
        id_status = id
        $(".modal-title").text("Detail");
        $("#questDetail").modal('show');
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

    function rejected(id){
        // alert(id_status)
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
                $.post("api/data/admin/quest/pending/"+id_status,{'_method':'delete'},
                    function (data) {
                        table.ajax.reload();
                        $('#questDetail').modal('hide');
                    },
                ),
                Swal.fire(
                'Deleted!',
                'Question has been deleted.',
                'success'
                )
            }
            })
    }
    
    $("#acc").submit(function (e) { 
        e.preventDefault();
        id = id_status
        $.ajax({
            type: "post",
            url: "api/data/admin/quest/pending/update",
            data: {id_quest:id},
            success: function (rsp) {
                Swal.fire('Accepted!', '', 'success')
                table.ajax.reload();
                // alert(rsp)
                $("#questDetail").modal('hide');
            }
        });
    });
</script>
@endpush
