<?php
/* Smarty version 3.1.48, created on 2024-07-28 17:28:46
  from '/var/www/html/templates/patients.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a67fce90f665_70883472',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '648483b15952d401db60dbebdf1472503422069e' => 
    array (
      0 => '/var/www/html/templates/patients.tpl',
      1 => 1722187695,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a67fce90f665_70883472 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '198690226866a67fce7c9960_40795823';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Patients</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Patients</h1>
        <div class="row mb-4">
            <div class="col-md-8">
                <form class="d-flex" method="GET" action="index.php">
                    <input class="form-control me-2" type="search" value="<?php echo $_smarty_tpl->tpl_vars['search']->value;?>
" placeholder="Search by name" aria-label="Search" name="search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            <div class="col-md-4 text-end">
                <a href="add.php" class="btn btn-primary">Add New Patient</a>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Full Name</th>
                    <th>Mobile</th>
                    <th>Date</th>
                    <th>Doctor Name</th>
                    <th>Category Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['patients']->value, 'patient');
$_smarty_tpl->tpl_vars['patient']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['patient']->value) {
$_smarty_tpl->tpl_vars['patient']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['full_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['phone_number'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['appointment_time'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['doctor_name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['patient']->value['category_name'];?>
</td>
                    <td>
                        <a href="edit.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php if ($_smarty_tpl->tpl_vars['page']->value > 1) {?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">Previous</a></li>
                <?php }?>
                <?php
$__section_pages_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['total_pages']->value+1) ? count($_loop) : max(0, (int) $_loop));
$__section_pages_0_start = min(1, $__section_pages_0_loop);
$__section_pages_0_total = min(($__section_pages_0_loop - $__section_pages_0_start), $__section_pages_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_pages'] = new Smarty_Variable(array());
if ($__section_pages_0_total !== 0) {
for ($__section_pages_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] = $__section_pages_0_start; $__section_pages_0_iteration <= $__section_pages_0_total; $__section_pages_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']++){
?>
                <li class="page-item <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] : null) == $_smarty_tpl->tpl_vars['page']->value) {?>active<?php }?>"><a class="page-link" href="?page=<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] : null);?>
"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_pages']->value['index'] : null);?>
</a></li>
                <?php
}
}
?>
                <?php if ($_smarty_tpl->tpl_vars['page']->value < $_smarty_tpl->tpl_vars['total_pages']->value) {?>
                <li class="page-item"><a class="page-link" href="?page=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">Next</a></li>
                <?php }?>
            </ul>
        </nav>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(document).ready(function() {
    // Function to fetch and display data
    function fetchData(search = '') {
        $.ajax({
            url: 'index.php', // URL to fetch data
            type: 'GET',
            data: { search: search },
            success: function(response) {
                $('#tableContainer').html(response);
            },
            error: function(error) {
                console.log(error);
            }
        });
    }

    // Initial fetch
    fetchData();

    // Search form submit event
    $('#searchForm').submit(function(event) {
        event.preventDefault();
        var searchQuery = $('#searchInput').val();
        fetchData(searchQuery);
    });
});
<?php echo '</script'; ?>
>


</html>
<?php }
}
