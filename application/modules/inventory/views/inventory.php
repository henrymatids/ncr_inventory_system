<div class="content-box-large col-lg-12">
    <button type="button" id="addItemBtn" class="btn btn-success" data-toggle="modal" data-target="#addItemModal"><i class="fa fa-plus"></i> Add Item</button>
    <input type="text" class="" name="searchBar">
    <button type="submit" id="searchBtn" class="btn btn-info">Search</button>
    <div class="table-reponsive table-striped">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Quantity</th>
            <th>Item Name</th>
            <th>Brand Model</th>
            <th>Date Acquired</th>
            <th>Remarks</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="inventoryTable"></tbody>
      </table>

      <div class="invCloneTable" style="display: none">
        <table>
          <tr class="invToBeClonedTable">
              <td class="invId"></td>
              <td class="invQuantity"></td>
              <td class="invItemName"></td>
              <td class="invBrandModel"></td>
              <td class="invDateAc1uired"></td>
              <td class="invRemarks"></td>
              <td>
                  <button type="submit" class="btn btn-primary btn-xs" id="EditInventoryBTN" data-toggle="modal" data-target="#EditInventoryModal">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-danger btn-xs" id="DeleteInventoryBTN" data-toggle="modal" data-target="#DeleteModal">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                  </button>
              </td>
          </tr>
        </table>
      </div>
    </div>
</div>

<!-- edit modal -->
<div class="modal fade" id="EditInventoryModal" role="dialog">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title"><i class="fa fa-pencil-square-o"></i> Edit Item</h4>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col-md-12 form-group">
            <label class="col-md-3">ID:</label>
            <div class="col-md-9"><input type="text" class="form-control input-sm" name="itemID"/></div>
          </div>
          <div class="col-md-12 form-group">
            <label class="col-md-3">Quantity:</label>
            <div class="col-md-9"><input type="text" class="form-control input-sm" name="editItemQuantity"/></div>
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
      <div class="modal-footer"></div>
    </div>
  </div>
</div>
<!-- /.edit modal-->


<!-- Modal -->
<div class="modal fade " tabindex="-1" role="dialog" id="addItemModal">
  <div class="modal-dialog" role="document">
    <!-- Modal content -->
    <div class="modal-content">
      <!-- Modal header -->
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><i class="fa fa-plus"></i> Add Item</h4>
      </div>
        <!-- Modal body -->
      <form id="modalForm" method="post" action="">
        <div class="modal-body ">
          <div class="form-group">
            <label for="quantity"></label>
            <input type="number" min="0" class="form-control" name="quantity" id="quantity" placeholder="Quantity">
          </div>
          <div class="form-group">
            <label for="item_name"></label>
            <input type="text" class="form-control" name="item_name" id="item_name" placeholder="Item name">
          </div>
          <div class="form-group">
            <label for="brand_model"></label>
            <input type="text" class="form-control" name="brand_model" id="brand_model" placeholder="Brand Model">
          </div>
          <div class="form-group">
            <label for="date_acquired"></label>
            <input type="text" class="form-control" name="date_acquired" id="date_acquired" placeholder="Date acquired">
          </div>
          <div class="form-group">
            <label for="remarks"></label>
            <input type="text" class="form-control" name="remarks" id="remarks" placeholder="Remarks">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-defWault" data-dismiss="modal">Cancel</button>
          <button type="submit" id="addBtn" class="btn btn-success">Add</button>
        </div>
      </form>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
