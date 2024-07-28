<?php
/* Smarty version 3.1.48, created on 2024-07-28 17:17:37
  from '/var/www/html/templates/edit_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a67d31b04825_09145965',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f3c911df6f3d1b5eb1c91e1fb54447d6fd9aec17' => 
    array (
      0 => '/var/www/html/templates/edit_patient.tpl',
      1 => 1722187050,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a67d31b04825_09145965 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '74815284566a67d31991250_53329822';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Patient</title>
</head>
<body>
<div class="container mt-4">
    <h2>Edit Patient</h2>
    <form id="editPatientForm" method="POST" action="edit.php">
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['id'];?>
">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="first_name" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['first_name'];?>
" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['last_name'];?>
" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male" <?php if ($_smarty_tpl->tpl_vars['patient']->value['gender'] == 'Male') {?>selected<?php }?>>Male</option>
                <option value="Female" <?php if ($_smarty_tpl->tpl_vars['patient']->value['gender'] == 'Female') {?>selected<?php }?>>Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phoneNumber" name="phone_number" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['phone_number'];?>
" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="<?php echo $_smarty_tpl->tpl_vars['patient']->value['address'];?>
" required>
        </div>
        <div class="mb-3">
            <label for="appointmentTime" class="form-label">Appointment Time</label>
            <input type="datetime-local" class="form-control" id="appointmentTime" name="appointment_time" value="<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['patient']->value['appointment_time'],"%Y-%m-%dT%H:%M");?>
" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category_id" required>
                <option value="">Select Category</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['category']->value['id'] == $_smarty_tpl->tpl_vars['patient']->value['category_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <div class="mb-3">
            <label for="doctor" class="form-label">Doctor</label>
            <select class="form-select" id="doctor" name="doctor_id" required>
                <option value="">Select Doctor</option>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['doctors']->value, 'doctor');
$_smarty_tpl->tpl_vars['doctor']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['doctor']->value) {
$_smarty_tpl->tpl_vars['doctor']->do_else = false;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['doctor']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['doctor']->value['id'] == $_smarty_tpl->tpl_vars['patient']->value['doctor_id']) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['doctor']->value['name'];?>
</option>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Update Patient</button>
    </form>
</div>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>

$(document).ready(function() {
    function loadDoctors(categoryId) {
        if (categoryId) {
            $.ajax({
                url: 'edit.php',
                type: 'GET',
                data: { category_id: categoryId },
                success: function(data) {
                    var doctors = JSON.parse(data);
                    $('#doctor').empty();
                    $('#doctor').append('<option value="">Select Doctor</option>');
                    $.each(doctors, function(key, doctor) {
                        $('#doctor').append('<option value="' + doctor.id + '">' + doctor.name + '</option>');
                    });
                    // Set the previously selected doctor
                    $('#doctor').val(<?php echo $_smarty_tpl->tpl_vars['patient']->value['doctor_id'];?>
);
                }
            });
        } else {
            $('#doctor').empty();
            $('#doctor').append('<option value="">Select Doctor</option>');
        }
    }

    // Load doctors on page load based on the current category
    loadDoctors($('#category').val());

    // Load doctors on category change
    $('#category').change(function() {
        loadDoctors($(this).val());
    });
});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
