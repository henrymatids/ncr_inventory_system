<div class="content-box-large col-lg-12">
	<div class="col-lg-12">
		<div class="tableFloatLeft col-lg-4">
		    <button type="button" id="addAccountBtn" class="btn btn-success btn-sm" data-toggle="modal" data-target="#addAccountModal">
		    	<i class="fa fa-user-plus"></i> Add Account
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
            <th>Username</th>
            <th>ID Number</th>
            <th>Firstname</th>
            <th>Middlename</th>
            <th>Lastname</th>
            <th>Type</th>
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
              <td class="accountType"></td>
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
  <div class="col-lg-12">
    <button class="btn btn-default btn-sm" id="exportTable"><i class="fa fa-download"></i> Export</button>
  </div>
</div>
	