<?php $this->load->view('admin/head_c');?>
<div class="wrapper">

  <?php
  $this->load->view('admin/leftMenu');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Hoepage General info
        <small>Hoepage General info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() . 'Control/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url() . 'Control/general_info' ?>">Hoepage General info </a></li>

      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="box">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <div class="col-md-12" style="color: #79a0e0">
                <?php $msg=$this->session->flashdata('msg'); if(isset($msg)){ echo "<h3>".$msg."</h3>";} ?>
              </div>
              <form action="<?=base_url()?>Control/save_about_us" method="post">
              <table id="example1" class="table table-bordered table-striped" border="1">
                <tbody id="itembody">
                  <tr>
                    <input type="hidden" name="id" value="<?=$info->id?>">
                    <th width="10%">About us</th>
                    <td><textarea class="form-control" cols="10" rows="10" name="about_us"><?=$info->about_us?></textarea></td>
                  </tr>
                  <tr>
                    <th>Our Products</th>
                    <td><textarea class="form-control" cols="10" rows="10" name="our_product"><?=$info->our_product?></textarea></td>
                  </tr>
                  <tr>
                    <th>Get A Quote</th>
                    <td><textarea class="form-control" cols="10" rows="10" name="get_a_quote"><?=$info->get_a_quote?></textarea></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Update"></td>
                  </tr>
                </tbody>
              </table>
            </form>
            </div>
          </div>
        </div>
      </div>      
    </section>
    <!-- /.content -->
  </div>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/footer_c');?>
