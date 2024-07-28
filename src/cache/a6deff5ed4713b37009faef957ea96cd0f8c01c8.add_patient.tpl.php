<?php
/* Smarty version 3.1.48, created on 2024-07-28 17:26:42
  from '/var/www/html/templates/add_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a67f522ea389_74725739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58e3391aff2711164428d3801879a70f68985d73' => 
    array (
      0 => '/var/www/html/templates/add_patient.tpl',
      1 => 1722183401,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_66a67f522ea389_74725739 (Smarty_Internal_Template $_smarty_tpl) {
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
    <form id="addPatientForm" method="POST" action="add.php">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="first_name" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phoneNumber" name="phone_number" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <div class="mb-3">
            <label for="appointmentTime" class="form-label">Appointment Time</label>
            <input type="datetime-local" class="form-control" id="appointmentTime" name="appointment_time" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category_id" required>
                <option value="">Select Category</option>
                                    <option value="1">Cardiology</option>
                                    <option value="2">Neurology</option>
                                    <option value="3">Pediatrics</option>
                                    <option value="4">Oncology</option>
                                    <option value="5">Orthopedics</option>
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('#category').change(function() {
        var categoryId = $(this).val();
        if (categoryId) {
            $.ajax({
                url: 'add.php',
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
</script>
</body>
</html>
<?php }
}
