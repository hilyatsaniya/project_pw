<!DOCTYPE html>
<html >
<head>

<title>Daftar</title>
      <link rel="stylesheet" href="<?php echo base_url();?>asset/style2.css">  
</head>

<body>
  <div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Daftarkan Akun</h1>
    </div>
    <div class="form-content">
    <?php echo form_open('c_user/reg_user') ?>
      <form>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username"/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" "/>
        </div>
        <div class="form-group">
          <label for="password">Konfirmasi Password</label>
          <input type="password" id="cpassword" name="cpassword" "/>
        </div>
        <div class="form-group">
          <label for="email">Alamat Email</label>
          <input type="email" id="email" name="email" "/>
        </div>
        <div class="form-group">
          <button type="submit">Daftar/<button>
        </div>
      </form>
      <?php echo form_open('User/reg_user'); ?>
    </div>
    <?php if (validation_errors()): ?>
      <div class="alert alert-danger" role="alert">
        <?php echo validation_errors(); ?>
      </div>
    <?php endif ?>
    <?php if (isset($error)): ?>
      <div class="alert alert-danger">
        <?php echo $error; ?>
      </div>
    <?php endif ?>
  </div>
</div>

</body>
</html>