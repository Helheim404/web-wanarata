        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo base_url(); ?>/asset/admin/dist/img/users.gif" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <?php 
                $usr = $this->db->query("SELECT * FROM users where username='".$this->session->username."'")->row_array(); 
                echo "<p>$usr[nama_lengkap]</p>";
              ?>
              
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header" style='color:#fff; text-transform:uppercase; border-bottom:2px solid #00c0ef'>MENU ADMIN</li>
            <li><a href="<?php echo base_url(); ?>administrator/home"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="<?php echo base_url(); ?>administrator/listberita"><i class="glyphicon glyphicon-pencil"></i><span> List Berita</span></a></li>
            <li class="treeview">
              <a href="#"><i class="glyphicon glyphicon-picture"></i> <span>Modul Gallery</span><i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href='<?php echo base_url(); ?>administrator/album'><i class='fa fa-circle-o'></i> Album</a></li>
                <li><a href='<?php echo base_url(); ?>administrator/gallery'><i class='fa fa-circle-o'></i> Gallery</a></li>
              </ul>
            </li>
            <li><a href="<?php echo base_url(); ?>administrator/edit_manajemenuser/<?php echo $this->session->username; ?>"><i class="fa fa-user"></i> <span>Edit Profile</span></a></li>
            <li><a href="<?php echo base_url(); ?>administrator/logout"><i class="fa fa-power-off"></i> <span>Logout</span></a></li>
          </ul>
        </section>