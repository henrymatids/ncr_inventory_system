<div id="approveModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header modal-header-primary">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4><i class="glyphicon glyphicon-alert"></i> Approve</h4>
      </div>
      <div class="modal-body">
        <h5><p><strong>You are about to approve this Request.</p></h5>
        <h5><p>Are you sure you want to proceed?</p></h5>
        <input type="hidden" class="form-control" name="approveModalID"/>
        <input type="hidden" class="form-control" name="approveQuantity"/>
      </div>
      <div class="modal-footer">
        <button type="button" id="approveYes" class="btn btn-danger btn-md"> Yes </button>
        <button type="button" id="approveNo" class="btn btn-primary btn-md" data-dismiss="modal"> No </button>
      </div>
    </div>
  </div>
</div>
