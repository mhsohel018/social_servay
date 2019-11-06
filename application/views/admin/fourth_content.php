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
        Hoepage  info
        <small>Hoepage  info</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() . 'Control/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url() . 'Control/general_info' ?>">Hoepage  info </a></li>

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
              <form action="<?=base_url()?>Control/save_fourth_content" method="post" enctype="multipart/form-data">
              <table class="table table-bordered table-striped" border="1">
                <tbody id="itembody">
                  <tr>
                    <input type="hidden" name="id" value="<?=$info->id?>">
                    <th width="10%">Title</th>
                    <td><textarea class="form-control" cols="10" rows="10" name="title"><?=$info->title?></textarea></td>
                  </tr>
                  <tr>
                    <th>Content</th>
                    <td><textarea class="form-control" cols="10" rows="10" name="content"><?=$info->content?></textarea></td>
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
<script>
        CKEDITOR.replace( 'first_content' );
        CKEDITOR.replace( 'second_content' );
</script>
