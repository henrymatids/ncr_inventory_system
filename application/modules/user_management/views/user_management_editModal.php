<div id="EditAccountModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-pencil-square-o"></i> Edit Account</h4>
      </div>
      <form onsubmit="window.location.reload()" method="post" action="" id="editUserModalForm">
        <div class="modal-body">
          <div class="row">
              <div class="col-md-12 form-group">
                <label class="col-md-3">ID:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="accountID" readonly="readonly"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Username:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="editUserUsername"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">ID Number:</label>
                <div class="col-md-9"><input type="number" class="form-control input-sm" name="editUserIdNumber"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Firstname:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="editUserFirstname"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Middlename:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="editUserMiddlename"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Lastname:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="editUserLastname"/></div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Edit</button>
          <button type="button" class="btn btn-defWault" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
