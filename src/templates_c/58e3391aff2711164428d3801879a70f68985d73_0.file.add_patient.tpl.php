<?php
/* Smarty version 3.1.48, created on 2024-07-28 15:26:12
  from '/var/www/html/templates/add_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a663140f00e9_78631959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e3391aff2711164428d3801879a70f68985d73' => 
    array (
      0 => '/var/www/html/templates/add_patient.tpl',
      1 => 1722180231,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66a663140f00e9_78631959 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Add New Patient</title>
</head>
<body>
<div class="container mt-4">
    <h2>Add New Patient</h2>
    <form id="addPatientForm" method="POST" action="save_patient.php">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="first_name" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" required>
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phoneNumber" name="phone_number" required>
        </div>
        <div class="mb-3">
            <label for="appointmentTime" class="form-label">Appointment Time</label>
            <input type="datetime-local" class="form-control" id="appointmentTime" name="appointment_time" required>
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
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
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
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Patient</button>
    </form>
</div>

<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
$(document).ready(function() {
    $('#category').change(function() {
        var categoryId = $(this).val();
        if (categoryId) {
            $.ajax({
                url: 'get_doctors.php',
                type: 'GET',
                data: { category_id: categoryId },
                success: function(data) {
                    var doctors = JSON.parse(data);
                    $('#doctor').empty();
                    $('#doctor').append('<option value="">Select Doctor</option>');
                    $.each(doctors, function(key, doctor) {
                        $('#doctor').append('<option value="' + doctor.id + '">' + doctor.name + '</option>');
                    });
                }
            });
        } else {
            $('#doctor').empty();
            $('#doctor').append('<option value="">Select Doctor</option>');
        }
    });
});
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
