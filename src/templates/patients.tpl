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
                    <input class="form-control me-2" type="search" value="{$search}" placeholder="Search by name" aria-label="Search" name="search">
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
                {foreach from=$patients item=patient}
                <tr>
                    <td>{$patient.full_name}</td>
                    <td>{$patient.phone_number}</td>
                    <td>{$patient.appointment_time}</td>
                    <td>{$patient.doctor_name}</td>
                    <td>{$patient.category_name}</td>
                    <td>
                        <a href="edit.php?id={$patient.id}" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id={$patient.id}" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                {if $page > 1}
                <li class="page-item"><a class="page-link" href="?page={$page-1}">Previous</a></li>
                {/if}
                {section name=pages start=1 loop=$total_pages+1}
                <li class="page-item {if $smarty.section.pages.index == $page}active{/if}"><a class="page-link" href="?page={$smarty.section.pages.index}">{$smarty.section.pages.index}</a></li>
                {/section}
                {if $page < $total_pages}
                <li class="page-item"><a class="page-link" href="?page={$page+1}">Next</a></li>
                {/if}
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
