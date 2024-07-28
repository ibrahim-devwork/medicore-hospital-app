<?php
/* Smarty version 3.1.48, created on 2024-07-28 17:56:31
  from '/var/www/html/templates/patients.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_66a6864f216720_25048725',
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
  'cache_lifetime' => 120,
),true)) {
function content_66a6864f216720_25048725 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                    <input class="form-control me-2" type="search" value="" placeholder="Search by name" aria-label="Search" name="search">
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
                                <tr>
                    <td>Alice Johnson</td>
                    <td>123-456-7890</td>
                    <td>2024-08-01 10:00:00</td>
                    <td>John Doe</td>
                    <td>Cardiology</td>
                    <td>
                        <a href="edit.php?id=1" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=1" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                                <tr>
                    <td>Bob Miller</td>
                    <td>234-567-8901</td>
                    <td>2024-08-01 11:00:00</td>
                    <td>Jane Smith</td>
                    <td>Neurology</td>
                    <td>
                        <a href="edit.php?id=2" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=2" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                                <tr>
                    <td>Charlie Taylor</td>
                    <td>345-678-9012</td>
                    <td>2024-08-01 12:00:00</td>
                    <td>Michael Brown</td>
                    <td>Pediatrics</td>
                    <td>
                        <a href="edit.php?id=3" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=3" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                                <tr>
                    <td>Diana Anderson</td>
                    <td>456-789-0123</td>
                    <td>2024-08-01 13:00:00</td>
                    <td>Emily Davis</td>
                    <td>Oncology</td>
                    <td>
                        <a href="edit.php?id=4" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=4" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                                                <li class="page-item active"><a class="page-link" href="?page=1">1</a></li>
                                            </ul>
        </nav>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

<script>
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
</script>


</html>
<?php }
}
