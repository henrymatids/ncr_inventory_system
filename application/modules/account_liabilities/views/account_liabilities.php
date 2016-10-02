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
            <th>ID Number</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Lastname</th>
            <th>Item name</th>
            <th>Brand model</th>
            <th>Quantity</th>
          </tr>
        </thead>
        <tbody id="accntTable"></tbody>
      </table>

      <div class="accntCloneTable tableCloneTable">
        <table>
          <tr class="accntToBeClonedTable">
              <td class="accntID"></td>
              <td class="accntFirstname"></td>
              <td class="accntMiddlename"></td>
              <td class="accntLastname"></td>
              <td class="accntItemName"></td>
              <td class="accntBrandModel"></td>
              <td class="accntQuantity"></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <button class="btn btn-default btn-sm" id="exportTable"><i class="fa fa-download"></i> Export</button>
  </div>
</div>