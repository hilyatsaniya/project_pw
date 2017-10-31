<!DOCTYPE html>
<html >
<head>

<title>Log In</title>
      <link rel="stylesheet" href="<?php echo base_url();?>asset/style2.css">  
</head>

<body>

  <div class="form">
  <div class="form-toggle"></div>
  <div class="form-panel one">
    <div class="form-header">
      <h1>Log In Akun</h1>
    </div>
    <?php if (isset($_SESSION['message_display'])): ?>
  <?php if ($_SESSION['message_display'] === "Anda Berhasil Logout"): ?>
    <div class="alert alert-success text-center">
      <?php echo $_SESSION['message_display']; ?>
    </div>
  </div>
  <?php else: ?> 
    <div class="container">
      <div class="alert alert-danger text-center">
        <?php echo $_SESSION['message_display']; ?>
      </div>
    </div>
  <?php endif ?>
  <?php echo validation_errors(); ?>
  <?php session_destroy(); ?>  
<?php endif ?>
<?php if (validation_errors() != null): ?>
  <div class="container">
    <div class="alert alert-danger text-center">
      <?php echo validation_errors(); ?>
    </div>
  </div>  
<?php endif ?>
<?php if (isset($_SESSION['user_name'])) {
  redirect('');
} ?>

    <div class="form-content">
    <?php echo form_open('c_user/user_login_process'); ?>
      <form>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username"/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password"/>
        </div>
        <div class="form-group">
          <label class="form-remember">
            <input type="checkbox"/>Remember Me
          </label><a class="form-recovery" href="#">Forgot Password?</a>
        </div>
        <div class="form-group">
          <button type="submit">Log In</button>
        </div>
      </form>
      <?php echo form_close(); ?>
    </div>
  </div>
</div>

</body>
</html>
