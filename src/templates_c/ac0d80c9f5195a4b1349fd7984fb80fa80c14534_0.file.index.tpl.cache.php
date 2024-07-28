<?php
/* Smarty version 3.1.48, created on 2024-07-28 13:12:06
  from '/var/www/html/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a643a6a8c286_55323322',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac0d80c9f5195a4b1349fd7984fb80fa80c14534' => 
    array (
      0 => '/var/www/html/templates/index.tpl',
      1 => 1722172251,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a643a6a8c286_55323322 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '131784374766a643a69db535_85730520';
?>
<!DOCTYPE html>
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
