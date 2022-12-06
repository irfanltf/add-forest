<!-- Sidebar -->
<ul class="navbar-nav  sidebar sidebar-light accordion bg-info" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
    <div class="sidebar-brand-icon">
      FORECAST
    </div>
    <!-- <div class=" sidebar-brand-text mx-3">ABSENSI</div> -->
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">
  <!-- Query dari menu -->
  <?php
  $role_id = $this->session->userdata('role_id');
  $QueryMenu = "
                SELECT `user_menu`.`id`, `menu`
                FROM `user_menu` JOIN `user_access_menu`
                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id
                ORDER BY `user_access_menu`.`menu_id` ASC


  ";

  $menu = $this->db->query($QueryMenu)->result_array();



  ?>


  <!-- looping menu-->
  <?php foreach ($menu as $m) { ?>
    <div class="sidebar-heading">
      <?php echo str_replace('_', ' ',  $m['menu']); ?>

    </div>

    <!-- Siapkan Sub Menu sesuai menu-->

    <?php
    $menuId = $m['id'];
    $QuerySubMenu = "
      SELECT *
                FROM `user_sub_menu` JOIN `user_menu`
                ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                WHERE `user_sub_menu`.`menu_id` = $menuId
                AND `user_sub_menu`.`is_active` = 1 ORDER BY order_number ASC
    ";
    $subMenu = $this->db->query($QuerySubMenu)->result_array();

    ?>
    <?php foreach ($subMenu as $sm) {  ?>
      <?php if ($title ==  $sm['title']) : ?>

        <li class="nav-item active">
        <?php else : ?>
        <li class="nav-item">
        <?php endif; ?>
        <a class="nav-link pb-0" href="<?php echo  base_url($sm['url']); ?>">
          <i class="<?php echo $sm['icon']; ?>"></i>
          <span><?php echo  $sm['title']; ?></span></a>
        </li>

      <?php } ?>

      <!-- Divider -->
      <hr class="sidebar-divider mt-3">
    <?php } ?>
    <!-- Nav Item - Dashboard -->










    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url('auth/logout') ?>">
        <i class="fas fa-fw fa-sign-out-alt"></i>
        <span>Logout</span></a>
    </li>
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->