<div class="content-box-large col-lg-12">
	<div class="col-lg-12">
		<div class="tableFloatLeft">
		    <button type="button" id="addAccountBtn" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addAccountModal">
		    	<i class="fa fa-plus"></i> Add Account
		    </button>
		</div>
      <div class="tableFloatRight">
        <div class="tableSearch">
          <input type="text" class="form-control input-sm" name="searchBar">
        </div>
        <div class="tableFloatRight">
          <button type="submit" id="searchBtn" class="btn btn-info btn-sm">Search</button>
        </div>
      </div>
    </div>

    <div class="col-lg-12">
      <div class="table-reponsive table-striped">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Username</th>
            <th>ID Number</th>
            <th>Firstname</th>
            <th>Middlename/th>
            <th>Lastname</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="userManagementTable"></tbody>
      </table>

      <div class="accountCloneTable tableCloneTable">
        <table>
          <tr class="accountToBeClonedTable">
              <td class="accountId"></td>
              <td class="accountUsername"></td>
              <td class="accountIdNumber"></td>
              <td class="accountFirstname"></td>
              <td class="accountMiddlename"></td>
              <td class="accountLastname"></td>
              <td>
                  <button type="submit" class="btn btn-primary btn-xs" id="EditAccountBTN" data-toggle="modal" data-target="#EditAccountModal">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                  </button>
                  <button type="button" class="btn btn-danger btn-xs" id="DeleteAccountBTN" data-toggle="modal" data-target="#DeleteModal">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                  </button>
              </td>
          </tr>
        </table>
      </div>
    </div>
    </div>
</div>
	