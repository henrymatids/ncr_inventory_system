<div class="content-box-large col-lg-12">
    <button type="button" id="addItemBtn" class="btn btn-success" data-toggle="modal" data-target="#addItemModal"><i class="fa fa-plus"></i> Add Item</button>
    <input type="text" class="" name="searchBar">
    <button type="submit" id="searchBtn" class="btn btn-info">Search</button>
    <div class="table-reponsive table-striped">
      <table class="table">
        <th>ID</th>
        <th>Quantity</th>
        <th>Item Name</th>
        <th>Brand Model</th>
        <th>Date Acquired</th>
        <th>Remarks</th>
        <th>Action</th>
        <tr>
          <td>2</td>
          <td>25</td>
          <td>mouse</td>
          <td>A4Tech</td>
          <td>2020</td>
          <td>does not exists</td>
          <td><button class="btn btn-info btn-sm"><i class="fa fa-edit"></i> Edit</button></td>
        </tr>
      </table>
    </div>
</div>

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