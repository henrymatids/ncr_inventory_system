    <ul class="nav">
        <!-- Main menu -->
        <li class="<?= ($activeHeaders == 'Home') ? 'current' : '' ?>">
          <a href="<?= base_url('home') ?>">
            <i class="fa fa-home"></i>
            Dashboard
          </a>
        </li>
        <li><a href="<?=base_url('borrow_item_list')?>"><i class="fa fa-archive"></i>Available items</a></li>
        <li><a href="<?=base_url('pending_items')?>"><i class="fa fa-plus"></i>Pending Items</a></li>
        <li><a href="<?=base_url('returned')?>"><i class="fa fa-sign-language"></i>Returned items</a></li>
        <li><a href="<?=base_url('calendar')?>"><i class="fa fa-calendar"></i>Schedules</a></li>
    </ul>
  </div>
</div>
<div class="col-md-10">
  <div class="row">
