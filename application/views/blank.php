<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="cricket">
  <title>{title}</title>
  <style>
    a { text-decoration: none; color: blue; }
    a:hover { color: red; }
  </style>
</head>
<body>
  <nav>
    <?=anchor('home', 'Home');?> |
    <?=anchor('about', 'About');?> |
    <?=anchor('auth/logout', 'Logout');?>
  </nav>

  <p>{content}</p>

  <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. CodeIgniter Version <strong><?=CI_VERSION;?></strong></p>
</body>
</html>
