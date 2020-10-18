<?php
$GLOBALS['currentPage'] = 'user';
require_once './components/header.php';
?>

<style>
    .card-container {
        padding: 30px 50px;
    }

    .card {
        margin-bottom: 15px;
    }
</style>

<div class="card-container">
    <div class="card">
        <h5 class="card-header">Create User</h5>
        <div class="card-body">
            <form method="POST" action="" onsubmit="return validate(this)">
                <div class="form-group">
                    <label for="inputId">First Name</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="inputId">Last Name</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Home Phone</label>
                    <input type="number" class="form-control" name="homePhone" placeholder="Enter Home Phone">
                </div>
                <div class="form-group">
                    <label for="inputPassword">Cell Phone</label>
                    <input type="number" class="form-control" name="cellPhone" placeholder="Enter Cell Phone">
                </div>
                <button type="submit" name='submit' class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Search User</h5>
        <div class="card-body">
            <form method="POST" action="" onsubmit="return validate(this)">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item">Name</a>
                            <a class="dropdown-item">Email</a>
                            <a class="dropdown-item">Phone Number</a>
                        </div>
                    </div>
                    <input type="text" class="form-control" aria-label="Text input with dropdown button">
                </div>
                <button type="submit" name='submit' class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">User Table</h5>
        <div class="card-body">

        </div>
    </div>
</div>

<?php
?>

