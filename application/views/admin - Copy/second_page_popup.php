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
        Second Page Popup
        <small>Second Page Popup</small>
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
              <form action="<?=base_url()?>Control/save_second_page_popup" method="post" enctype="multipart/form-data">
              <table class="table table-bordered table-striped" border="1">
                <tbody id="itembody">
                  <tr>
                    <?php if(isset($edit)){ ?>
                    <input type="hidden" name="id" value="<?php echo @$edit->id?>">
                    <?php } ?>
                    <th width="10%"> Content</th>
                    <td><textarea class="form-control" cols="10" rows="10" name="content"><?php echo @$edit->content?></textarea></td>
                  </tr>
                  <tr>
                    <th>Photo</th>
                    <td><input type="file"  name="photo" class="form-control"></td>
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
                <th>Content</th>
                <th>Logo</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php $i=0; foreach ($list as $k) {?>
<tr>
  <td><?php echo ++$i ?></td>
  <td><?php echo $k->content ?></td>
  <td>
    <img src="<?php echo base_url().'uploads/'.$k->logo ?>" width="100">
  </td>
  <td>
    <a href="<?php echo base_url().'Control/second_page_popup/'.$k->id ?>" class="btn btn-primary btn-sm">Edit</a>
    <a href="<?php echo base_url().'Control/delete_second_page_popup/'.$k->id ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
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
