<div id="borrowModal" class="modal fade" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-pencil-square-o"></i> Borrow Item</h4>
      </div>
      <form method="post" action="" id="editItemModalForm">
        <div class="modal-body">
          <div class="row">
              <div class="col-md-12 form-group">
                <div class="col-md-9"><input type="hidden" class="form-control input-sm" name="borrowID"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">ID number:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="borrowIdNumber" readonly="readonly" /></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Quantity:</label>
                <div class="col-md-9"><input type="number" min="1" class="form-control input-sm" name="borrowItemQuantity"/></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Name:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="borrowItemName" readonly="readonly" /></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Brand Model:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="borrowItemBrand" readonly="readonly" /></div>
              </div>
              <div class="col-md-12 form-group">
                <label class="col-md-3">Date borrowed:</label>
                <div class="col-md-9"><input type="text" class="form-control input-sm" name="borrowItemDate"/></div>
              </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-defWault" data-dismiss="modal">Cancel</button>
        </div>
      </form>
    </div>
  </div>
</div>
