<div class="content-box-large col-lg-12">
    <div class="col-lg-12">
      <div class="tableFloatLeft col-lg-4">
        <button type="button" id="addItemBtn" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addItemModal">
          <i class="fa fa-plus"></i> Add Item
        </button>
      </div>
      <div class="tableFloatRight col-lg-4">
        <div class="tableSearch input-group">
          <input type="text" class="form-control" name="searchBar" placeholder="Search">
          <span class="input-group-addon">
            <i class="fa fa-search"></i>
          </span>
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="table-reponsive table-striped">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Total Quantity</th>
            <th>Available Quantity</th>
            <th>Item Name</th>
            <th>Brand Model</th>
            <th>Date Acquired</th>
            <th>Remarks</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="inventoryTable"></tbody>
      </table>

      <div class="invCloneTable tableCloneTable">
        <table>
          <tr class="invToBeClonedTable">
              <td class="invId"></td>
              <td class="invQuantity"></td>
              <td class="invAvailableQuantity"></td>
              <td class="invItemName"></td>
              <td class="invBrandModel"></td>
              <td class="invDateAcquired"></td>
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
  <div class="col-lg-12">
    <button class="btn btn-default btn-sm" id="exportTable"><i class="fa fa-download"></i> Export</button>
  </div>
</div>
