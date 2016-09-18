<div id="DeleteModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header modal-header-danger">
          <button type="button" class="close" data-dismiss="modal">x</button>
          <h4><i class="glyphicon glyphicon-alert"></i> Delete</h4>
      </div>
      <div class="modal-body">
        <h5><p><strong>You are about to delete this item.</p></h5>
        <h5><p>Are you sure you want to proceed?</p></h5>
        <input type="hidden" class="form-control" name="deleteModalID"/>
      </div>
      <div class="modal-footer">
        <button type="button" id="deleteYes" class="btn btn-danger btn-md"> Yes </button>
        <button type="button" id="deletNo" class="btn btn-primary btn-md" data-dismiss="modal"> No </button>
      </div>
    </div>
  </div>
</div>
