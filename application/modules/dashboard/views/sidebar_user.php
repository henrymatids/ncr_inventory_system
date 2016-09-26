    <ul class="nav">
        <!-- Main menu -->
        <li class="<?= ($activeHeaders == 'Home') ? 'current' : ' '?>">
          <a href="<?= base_url('home') ?>">
            <i class="fa fa-home"></i>
            Dashboard
          </a>
        </li>
        <li><a href="<?=base_url('borrow_item_list')?>"><i class="fa fa-archive"></i>Available items</a></li>
        <li><a href="<?=base_url('calendar')?>"><i class="fa fa-calendar"></i> Schedule</a></li>
    </ul>
  </div>
</div>
<div class="col-md-10">
  <div class="row">
