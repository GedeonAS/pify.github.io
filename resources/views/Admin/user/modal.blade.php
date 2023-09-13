<!-- Modal -->
<div class="modal fade" id="editUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="form" method="post">
          {{ csrf_field() }}
          <div class="modal-body">
            <div class="form-group">
                <label>Nama :</label>
                <input type="text" name="nama" class="form-control" id="name" required>
            </div>
            <div class="form-group">
                <label>Email :</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>
            <div class="form-group">
              <label>Password :</label>
              <input type="password" name="pw" id="passInput" class="form-control" required>
              <input type="checkbox" id="showPw"> Show Password
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save changes</button>
          </div>
        </form>
      </div>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="usersDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Detail User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="container">
          <div id="user">
            <label>Nama :</label>
          </div>
          <div id="ema">
              <label>Email :</label>
          </div>
          <div id="pass">
            <label>Password :</label>
          </div>
          <div id="lev">
            <label>Level :</label>
          </div>
          <div id="jmlh">
            <label>Jumlah Pertanyaan :</label>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>