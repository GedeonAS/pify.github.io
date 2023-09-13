<div class="modal fade" id="modal-reply">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Reply</h4>
          <button type="button" class="close bg-white" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form id="reply-form" method="post">
        <div class="modal-body">
            <div>
              <div class="card pt-3" style="max-height: 450px; overflow:auto">
                <div v-for="item in comment" class="card-body px-5 py-0" style="max-height: 450px;">
                  <p  class="card-text">@{{item.user.name}} ~ @{{item.comment}}</p>
                  <hr>
                </div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter reply">
            </div>
            {{-- <button type="submit" class="btn btn-primary">Save changes</button> --}}
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>