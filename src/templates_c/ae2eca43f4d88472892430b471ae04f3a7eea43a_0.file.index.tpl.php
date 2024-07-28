<?php
/* Smarty version 3.1.48, created on 2024-07-28 12:10:51
  from '/var/www/html/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a6354bcf7a27_53311532',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae2eca43f4d88472892430b471ae04f3a7eea43a' => 
    array (
      0 => '/var/www/html/index.tpl',
      1 => 1722095823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a6354bcf7a27_53311532 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello World</title>
    <link rel="stylesheet" href="/adminlte/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/adminlte/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Navbar content here -->
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Sidebar content here -->
        </aside>
        <div class="content-wrapper">
            <div class="content-header">
                <div class="container-fluid">
                    <h1>Hello, <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
!</h1>
                </div>
            </div>
        </div>
        <footer class="main-footer">
            <!-- Footer content here -->
        </footer>
    </div>
    <?php echo '<script'; ?>
 src="/adminlte/plugins/jquery/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/adminlte/dist/js/adminlte.min.js"><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
