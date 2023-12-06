<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manajemen Password</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <div class="div-row">
        <div class="col-lg-6">
          <?= $this->session->flashdata('message'); ?>
            <form action="<?= site_url('changepassword/processedit'); ?>" method="post">
            <input type="hidden" name="id" value="<?= $admin['idAdmin'] ?>">
            <div class="form-group">
                <label for="newPassword1" class="form-label">New Password</label>
                <input type="password" class="form-control" name="newPassword1" id="newPassword1" >
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-info float-left">Change Password</button>
            </div>
            </form>
        </div>
    </div>
    <!-- /Main content -->
</div>
