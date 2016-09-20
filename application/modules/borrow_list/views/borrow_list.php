<div class="content-box-large col-lg-12">
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
</div>