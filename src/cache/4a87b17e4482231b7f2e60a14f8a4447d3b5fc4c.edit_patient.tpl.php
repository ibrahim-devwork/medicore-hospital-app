<?php
/* Smarty version 3.1.48, created on 2024-07-28 17:56:18
  from '/var/www/html/templates/edit_patient.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a68642bbccc8_95908238',
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
  'cache_lifetime' => 120,
),true)) {
function content_66a68642bbccc8_95908238 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
        <input type="hidden" name="id" value="">
        <div class="mb-3">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="first_name" value="" required>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" value="" required>
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <select class="form-select" id="gender" name="gender" required>
                <option value="">Select Gender</option>
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="phoneNumber" class="form-label">Phone Number</label>
            <input type="text" class="form-control" id="phoneNumber" name="phone_number" value="" required>
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" value="" required>
        </div>
        <div class="mb-3">
            <label for="appointmentTime" class="form-label">Appointment Time</label>
            <input type="datetime-local" class="form-control" id="appointmentTime" name="appointment_time" value="" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category_id" required>
                <option value="">Select Category</option>
                                    <option value="1" >Cardiology</option>
                                    <option value="2" >Neurology</option>
                                    <option value="3" >Pediatrics</option>
                                    <option value="4" >Oncology</option>
                                    <option value="5" >Orthopedics</option>
                            </select>
        </div>
        <div class="mb-3">
            <label for="doctor" class="form-label">Doctor</label>
            <select class="form-select" id="doctor" name="doctor_id" required>
                <option value="">Select Doctor</option>
                            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-4">Update Patient</button>
    </form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

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
                    $('#doctor').val();
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
</script>
</body>
</html>
<?php }
}
