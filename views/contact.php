<?php
$GLOBALS['currentPage'] = 'contact';
require './components/header.php';

$fileLocation = './views/contact.txt';
$file = fopen($fileLocation, 'r');
$contactArray = array();
while ($line = fgets($file)) {
    array_push($contactArray, $line);
}

fclose($file);
?>

<style>
    .card-container {
        padding: 30px 50px;
    }
</style>

<div class="card-container">
    <div class="card">
        <div class="card-body">
            <label><?php echo $contactArray[0]; ?></label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Phone</span>
                </div>
                <input type="text" class="form-control" value="<?php echo $contactArray[1]; ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Address</span>
                </div>
                <input type="text" class="form-control" value="<?php echo $contactArray[2]; ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                </div>
                <input type="text" class="form-control" value="<?php echo $contactArray[3]; ?>" readonly>
            </div>
        </div>
    </div>
</div>


