<div class="content-box-large col-lg-12">
  <div class="col-lg-12">
    <!-- <div class="tableFloatLeft col-lg-4">
      <button type="button" id="addItemBtn" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addItemModal">
        <i class="fa fa-plus"></i> Add Item
      </button>
    </div> -->
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
            <th>Quantity</th>
            <th>Item Name</th>
            <th>Brand Model</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="borrowTable"></tbody>
      </table>

      <div class="borrowCloneTable tableCloneTable">
        <table>
          <tr class="borrowToBeClonedTable">
              <td class="borrowId"></td>
              <td class="borrowQuantity"></td>
              <td class="borrowItemName"></td>
              <td class="borrowBrandModel"></td>
              <td>
                  <button type="submit" class="btn btn-primary btn-xs" id="borrowBtn" data-toggle="modal" data-target="#borrowModal">
                    Borrow
                  </button>
              </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <button class="btn btn-default btn-sm"><i class="fa fa-print"></i> Print</button>
  </div>
</div>