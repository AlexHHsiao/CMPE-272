<?php
$GLOBALS['currentPage'] = 'user';
require_once './components/header.php';

$GLOBALS['allUser'] = fetchAll();
$GLOBALS['searchUser'] = null;

submitDBInput();

function fetchAll() {
    $conn = $GLOBALS['conn'];
    $query = "select * from User";
    return $conn->query($query);
}

function submitDBInput()
{
    $conn = $GLOBALS['conn'];
    if (isset($_POST["createSubmit"])) {
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $cellPhone = $_POST['cellPhone'];
        $homePhone = $_POST['homePhone'];

        $query = "INSERT INTO User (LastName, FirstName, Address, Email, HomePhone, CellPhone)
            VALUES ('$lastName', '$firstName', '$address', '$email', '$homePhone', '$cellPhone');";
        $conn->query($query) or die($conn->error);
        $GLOBALS['allUser'] = fetchAll();
    }

    if (isset($_POST["searchSubmit"])) {
        $selected = $_POST['searchSelection'];
        $search = $_POST['search'];
        $query = "";

        switch ($selected) {
            case 'name':
                $query = "SELECT * FROM User WHERE FirstName='$search' OR LastName='$search'";
                break;
            case 'email':
                $query = "SELECT * FROM User WHERE Email='$search'";
                break;
            case 'phone':
                $query = "SELECT * FROM User WHERE CellPhone='$search' OR HomePhone='$search'";
                break;
            default:
                break;
        }

        $GLOBALS['searchUser'] = $conn->query($query) or die($conn->error);
    }
}

function tableHandler($dbRows) {
    echo <<<_END
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Address</th>
                    <th scope="col">Email</th>
                    <th scope="col">Home Phone</th>
                    <th scope="col">Cell Phone</th>
                </tr>
                </thead>
                <tbody>
_END;

    while ($row = $dbRows->fetch_assoc()) {
        echo "<tr>";
        echo '<td>'.$row["FirstName"].'</td>';
        echo '<td>'.$row["LastName"].'</td>';
        echo '<td>'.$row["Address"].'</td>';
        echo '<td>'.$row["Email"].'</td>';
        echo '<td>'.$row["HomePhone"].'</td>';
        echo '<td>'.$row["CellPhone"].'</td>';
        echo "</tr>";
    }

    echo "</tbody></table>";
}
?>

<style>
    .card-container {
        padding: 30px 50px;
    }

    .card {
        margin-bottom: 15px;
    }
</style>

<script>
    function validateCreateForm(form) {
        const {firstName, lastName, email, address, homePhone, cellPhone} = form;

        if (firstName.value.trim().length > 0 &&
            lastName.value.trim().length > 0 &&
            email.value.trim().length > 0 &&
            address.value.trim().length > 0 &&
            homePhone.value.trim().length > 0 &&
            cellPhone.value.trim().length > 0) {
            return true;
        } else {
            alert('Please fill all fields');
            return false;
        }
    }

    function validateSearchForm(form) {
        const {search} = form;

        if (search.value.trim().length > 0) {
            return true;
        } else {
            alert('Please fill all fields');
            return false;
        }
    }
</script>

<div class="card-container">
    <div class="card">
        <h5 class="card-header">Create User</h5>
        <div class="card-body">
            <form method="POST" action="" onsubmit="return validateCreateForm(this)">
                <div class="form-group">
                    <label for="firstName">First Name</label>
                    <input type="text" class="form-control" name="firstName" placeholder="Enter First Name">
                </div>
                <div class="form-group">
                    <label for="lastName">Last Name</label>
                    <input type="text" class="form-control" name="lastName" placeholder="Enter Last Name">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter Email">
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" placeholder="Enter Address">
                </div>
                <div class="form-group">
                    <label for="homePhone">Home Phone</label>
                    <input type="text" class="form-control" name="homePhone" placeholder="Enter Home Phone">
                </div>
                <div class="form-group">
                    <label for="cellPhone">Cell Phone</label>
                    <input type="text" class="form-control" name="cellPhone" placeholder="Enter Cell Phone">
                </div>
                <button type="submit" name='createSubmit' class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Search User</h5>
        <div class="card-body">
            <form method="POST" action="" onsubmit="return validateSearchForm(this)">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <select class="custom-select" name="searchSelection">
                            <option value="name" selected>Name</option>
                            <option value="email">Email</option>
                            <option value="phone">Phone</option>
                        </select>
                    </div>
                    <input type="text" class="form-control" name="search">
                </div>
                <button type="submit" name='searchSubmit' class="btn btn-primary">Submit</button>
            </form>

            <?php
            if ($GLOBALS['searchUser'] !== null) {
                tableHandler($GLOBALS['searchUser']);
            }
            ?>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">User Table</h5>
        <div class="card-body">
            <?php tableHandler($GLOBALS['allUser'])?>
        </div>
    </div>
</div>

<?php

?>

