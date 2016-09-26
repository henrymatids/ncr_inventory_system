<div class="content-box-large col-lg-12">
	<div class="col-lg-12">
		<!-- <div class="tableFloatLeft col-lg-4">
		    <button type="button" id="addAccountBtn" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addAccountModal">
		    	<i class="fa fa-plus"></i> Add Account
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
	            <th>Returned By</th>
	            <th>Quantity</th>
	            <th>Item Name</th>
	            <th>Brand Model</th>
	            <th>Date Borrowed</th>
	            <th>Date Returned</th>
	          </tr>
	        </thead>
	        <tbody id="returnedTable"></tbody>
    		</table>

	    <div class="returnedCloneTable tableCloneTable">
	        <table>
	          	<tr class="returnedToBeClonedTable">
	            	<td class="returnedBy"></td>
		            <td class="returnedQuantity"></td>
		            <td class="returnedItemName"></td>
		            <td class="returnedBrandModel"></td>
		            <td class="dateBorrowed"></td>
		            <td class="returnedDate"></td>
	          	</tr>
	        </table>
	    </div>
  	</div>
	</div>
	<div class="col-lg-12">
  	<button class="btn btn-default btn-sm"><i class="fa fa-print"></i> Print</button>
	</div>
</div>