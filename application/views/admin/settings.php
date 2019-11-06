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
        Settings
        <small>settings</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url() . 'Control/dashboard' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="<?= base_url() . 'Control/general_info' ?>">Second Page Popup </a></li>

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
              <div class="col-md-12" style="color: red">
                <?php $dmsg=$this->session->flashdata('dmsg'); if(isset($dmsg)){ echo "<h3>".$dmsg."</h3>";} ?>
              </div>
              <form action="<?=base_url()?>Control/save_settings" method="post" enctype="multipart/form-data">
              <table class="table table-bordered table-striped" border="1">
                <tbody id="itembody">
                  <tr>
                    <?php if(isset($edit)){ ?>
                    <input type="hidden" name="id" value="<?php echo @$edit->id?>">
                    <?php } ?>
                    <th width="10%"> Site Title</th>
                    <td><input type="text" class="form-control" cols="10" rows="10" name="site_title" value="<?php echo @$edit->site_title?>"></td>
                  </tr>
                  
                  <tr>
                    <?php if(isset($edit)){ ?>
                    <input type="hidden" name="id" value="<?php echo @$edit->id?>">
                    <?php } ?>
                    <th width="10%"> Copyright</th>
                    <td><input type="text" class="form-control" cols="10" rows="10" name="copyright" value="<?php echo @$edit->copyright?>"></td>
                  </tr>
                  <tr>
                    <?php if(isset($edit)){ ?>
                    <input type="hidden" name="id" value="<?php echo @$edit->id?>">
                    <?php } ?>
                    <th width="10%"> Disclaimer</th>
                    <td><input type="text" class="form-control" cols="10" rows="10" name="disclaimer" value="<?php echo @$edit->disclaimer?>"></td>
                  </tr>
                  <tr>
                    <th>Photo</th>
                    <td><input type="file"  name="logo" class="form-control" ></td>
                  </tr>
                  <tr>
                    <td colspan="2"><input type="submit" class="btn btn-block btn-primary" value="Submit"></td>
                  </tr>
                </tbody>
              </table>
            </form>
            </div>
          </div>
        </div>
      </div> 
      <div class="row">
        <div class="box">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
          <table class="table table-bordered" id="example1">
            <thead>
              <tr>
                <th>SL</th>
                <th>Site Title</th>
                <th>Copyright</th>
                <th>Disclaimer</th>
                <th>Logo</th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; foreach ($list as $k) {?>
<tr>
  <td><?php echo ++$i ?></td>
  <td><?php echo $k->site_title ?></td>
  <td><?php echo $k->copyright ?></td>
  <td><?php echo $k->disclaimer ?></td>
  <td>
    <img src="<?php echo base_url().'uploads/'.$k->logo ?>" width="100">
  </td>
  <td>
  <a href="<?php echo base_url().'Control/settings/'.$k->id ?>" class="btn btn-primary btn-sm">Edit</a>
  </td>
</tr>
              <?php } ?>
            </tbody>
          </table>
              </div>
              
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