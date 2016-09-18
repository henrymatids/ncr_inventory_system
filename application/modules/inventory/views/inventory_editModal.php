<div id="EditInventoryModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-pencil-square-o"></i> Edit Item</h4>
      </div>
      <form onsubmit="window.location.reload()" method="post" action="" id="editItemModalForm">
        <div class="modal-body">
          <div class="row">
              <div class="col-md-12 form-group">
                <label class="col-md-3">ID:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="itemID" readonly="readonly"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Quantity:</label>
                <div class="col-md-9"><input type="number" class="form-control input-sm" name="editItemQuantity"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Name:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="editItemName"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Brand Model:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="editItemBrand"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Date acquired:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="editItemDate"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Remarks:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="editItemRemarks"/></div>
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
