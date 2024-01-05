<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="cricket">
  <title>ci3-single-login</title>
  <style>.error { color: red; }</style>
</head>
<body>
  <?=form_open('auth/login');?>
  <p>
    <input type="email" name="email" placeholder="email" autocomplete="off" required>
  </p>
  <p>
    <input type="password" name="password" placeholder="password" autocomplete="off" required>
  </p>
  <p><button type="submit">login</button></p>
  <?=form_close();?>
  <p class="error">
    <?=$this->session->flashdata('error');?>
  </p>

  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. CodeIgniter Version <strong><?=CI_VERSION;?></strong></p>
</body>
</html>
