<div class="modal fade " tabindex="-1" role="dialog" id="addAccountModal">
  <div class="modal-dialog modal-sm" role="document">
    <!-- Modal content -->
    <div class="modal-content">
      <!-- Modal header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Account</h4>
      </div>
      <!-- Modal body -->
      <form id="modalForm" method="post" action="">
        <div class="modal-body ">
          <div class="form-group">
            <input type="text" class="form-control" name="username" id="username" placeholder="Username">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
          </div>
          <div class="form-group">
            <input type="password" class="form-control" name="conpassword" id="conpassword" placeholder="Confirm Password">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="id_number" id="id_number" placeholder="ID Number">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Firstname">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Middlename">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Lastname">
          </div>
          <select class="btn btn-default" name="account_type">
            <option id="admin">Admin</option>
            <option id="staff">Staff</option>
            <option id="student">Student</option>
          </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-defWault" data-dismiss="modal">Cancel</button>
          <button type="submit" id="createBtn" class="btn btn-success">Create</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->