<div class="wrapper">
<?php $ci=&get_instance(); $ci->load->model('Rest_model'); $pr=$ci->Rest_model->SelectData('user_permission','*',array('userID'=>$_SESSION['userID'])); ?>
<?php $t=array();  foreach($pr as $j){ array_push($t,$j->moduleID);}  ?>
<header class="main-header">
<a href="<?= base_url().'Control/dashboard'?>" class="logo">
<span class="logo-mini"><b>STK</b></span>
<span class="logo-lg"><b>CONTROL PANEL</b></span>
</a>
<nav class="navbar navbar-static-top">
<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
<span class="sr-only">Toggle navigation</span>
</a>

<div class="navbar-custom-menu">


<ul class="nav navbar-nav">
  <li><a href="<?= base_url()?>" target="_blank"><i class="fa fa-globe"></i></a></li>
  <li><a href="<?= base_url()?>Control/publish"><i class="fa fa-refresh"></i></a></li>
  <li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <img src="<?= base_url() . 'admin_file/admin/' ?>dist/img/avatar5.png" class="user-image"
      alt="User Image">
      <span class="hidden-xs">
        <?php
        echo $this->session->userdata('admin_name');
        ?>
      </span>
    </a>
    <ul class="dropdown-menu">
      <li class="user-header">
        <img src="<?= base_url() . 'admin_file/admin/' ?>dist/img/avatar5.png" class="img-circle"
        alt="User Image">

        <p>
          <?php
          echo $this->session->userdata('admin_name');
          ?>
        </p>
      </li>
      <!-- Menu Body -->
      <li class="user-body">
        <div class="row">
          <div class="col-xs-4 text-center">
          </div>
          <div class="col-xs-4 text-center">
          </div>
          <div class="col-xs-4 text-center">
          </div>
        </div>
        <!-- /.row -->
      </li>
      <!-- Menu Footer-->
      <li class="user-footer">
        <div class="pull-left">                               
        </div>
        <div class="pull-right">
          <a href="<?= base_url() . 'Control/signout' ?>"
           class="btn btn-default btn-flat">Sign out</a>
         </div>
       </li>
     </ul>
   </li>
</ul>
</div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">

<ul class="sidebar-menu">
<li class="header">MAIN NAVIGATION</li>
<li class="treeview <?php
if ($_SESSION['menu'] == 'dashboard') {
  echo "active";
}
?>">
<a href="#">
  <i class="fa fa-wpexplorer fa-2x"></i> <span> &nbsp;&nbsp; Dashboard</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
  <li class="active"><a href="<?= base_url() . 'Control/dashboard' ?>"><i class="fa fa-circle-o"></i>
    Dashboard </a></li>
<!--            <li class="active"><a href="<?= base_url() . 'Control/analytics' ?>" target="_blank"><i class="fa fa-list-alt"></i>
        Google Analytics</a></li>-->
  </ul>
</li>

<li class="treeview <?php
if ($_SESSION['menu'] == 'home') {
  echo "active";
}
?>">
<a href="#">
  <i class="fa fa-clone"></i> <span>Home Page</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="active"><a href="<?= base_url() . 'Control/home_contents' ?>"><i class="fa fa-list-alt"></i>
      Contents</a></li>
      <li class="active"><a href="<?= base_url() . 'Control/home_seo' ?>"><i class="fa fa-list-alt"></i>
      SEO</a></li>
    </ul>
  </li>
  <li class="treeview <?php
if ($_SESSION['menu'] == 'second') {
  echo "active";
}
?>">
<a href="#">
  <i class="fa fa-clone"></i> <span>Second Page</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="active"><a href="<?= base_url() . 'Control/home_contents' ?>"><i class="fa fa-list-alt"></i>
      Contents</a></li>
      <li class="active"><a href="<?= base_url() . 'Control/second_page_popup' ?>"><i class="fa fa-list-alt"></i>
      Popup Content</a></li>
      <li class="active"><a href="<?= base_url() . 'Control/home_seo' ?>"><i class="fa fa-list-alt"></i>
      SEO</a></li>
    </ul>
  </li>
  <li class="treeview <?php
if ($_SESSION['menu'] == 'third') {
  echo "active";
}
?>">
<a href="#">
  <i class="fa fa-clone"></i> <span>Third Page</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="active"><a href="<?= base_url() . 'Control/home_contents' ?>"><i class="fa fa-list-alt"></i>
      Contents</a></li>
      <li class="active"><a href="<?= base_url() . 'Control/home_seo' ?>"><i class="fa fa-list-alt"></i>
      SEO</a></li>
    </ul>
  </li>
  <li class="treeview <?php
if ($_SESSION['menu'] == 'fourth') {
  echo "active";
}
?>">
<a href="#">
  <i class="fa fa-clone"></i> <span>Fourth Page</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="active"><a href="<?= base_url() . 'Control/fourth_contents' ?>"><i class="fa fa-list-alt"></i>
      Contents</a></li>
      <li class="active"><a href="<?= base_url() . 'Control/fourth_seo' ?>"><i class="fa fa-list-alt"></i>
      SEO</a></li>
    </ul>
  </li>
  <li class="treeview <?php
if ($_SESSION['menu'] == 'fifth') {
  echo "active";
}
?>">
<a href="#">
  <i class="fa fa-clone"></i> <span>Fifth Page</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="active"><a href="<?= base_url() . 'Control/home_contents' ?>"><i class="fa fa-list-alt"></i>
      Contents</a></li>
      <li class="active"><a href="<?= base_url() . 'Control/home_seo' ?>"><i class="fa fa-list-alt"></i>
      SEO</a></li>
    </ul>
  </li>
  <li class="treeview <?php
if ($_SESSION['menu'] == 'vide') {
  echo "active";
}
?>">
<a href="#">
  <i class="fa fa-clone"></i> <span>Videos</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="active"><a href="<?= base_url() . 'Control/home_contents' ?>"><i class="fa fa-list-alt"></i>
      List</a></li>
    </ul>
  </li>
  <li class="treeview <?php
if ($_SESSION['menu'] == 'photo') {
  echo "active";
}
?>">
<a href="#">
  <i class="fa fa-clone"></i> <span>Photos</span>
  <span class="pull-right-container">
    <i class="fa fa-angle-left pull-right"></i>
  </span>
</a>
<ul class="treeview-menu">
    <li class="active"><a href="<?= base_url() . 'Control/home_contents' ?>"><i class="fa fa-list-alt"></i>
      List</a></li>
    </ul>
  </li>

    <li class="treeview <?php
    if ($_SESSION['menu'] == 'admin') {
      echo "active";
    }
    ?>">
    <a href="#">
      <i class="fa fa-clone"></i> <span>Admin</span>
      <span class="pull-right-container">
        <i class="fa fa-angle-left pull-right"></i>
      </span>
    </a>
    <ul class="treeview-menu">
      <li class="active"><a href="<?= base_url() . 'Control/admin_list' ?>"><i class="fa fa-list-alt"></i>
        Admin List </a></li>
      </ul>
    </li>

  </section>
  <!-- /.sidebar -->
</aside>
