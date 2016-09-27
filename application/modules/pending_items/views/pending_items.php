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
		            <th>Borrowed By</th>
		            <th>Quantity</th>
		            <th>Item Name</th>
		            <th>Brand Model</th>
		            <th>Date Borrowed</th>
		            <th>Action</th>
		          </tr>
		        </thead>
		        <tbody id="pendingTable"></tbody>
	    		</table>

		    <div class="pendingCloneTable tableCloneTable">
		        <table>
		          	<tr class="pendingToBeClonedTable">
		            	<td class="pendingBorrowedBy"></td>
			            <td class="pendingQuantity"></td>
			            <td class="pendingItemName"></td>
			            <td class="pendingBrandModel"></td>
			            <td class="pendingDateBorrowed"></td>
			            <td class="pendingAction">
			            	<button class="btn btn-primary btn-xs" id="approveBtn" data-toggle="modal" data-target="#approveModal">
			            		<i class="fa fa-check"></i>
			            	</button>
			            	<button class="btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal">
			            		<i class="fa fa-close"></i>
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