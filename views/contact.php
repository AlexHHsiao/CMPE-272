<?php
$GLOBALS['currentPage'] = 'contact';
require_once './components/header.php';

$fileLocation = './views/contact.txt';
$file = fopen($fileLocation, 'r');
$contactArray = array();
while ($line = fgets($file)) {
    array_push($contactArray, $line);
}

fclose($file);

function contentHandler($contactArray)
{
    if (isset($_SESSION['user'])) {
        echo
    '<div class="card">
        <div class="card-body">
            <label>',$contactArray[0],'</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Phone</span>
                </div>
                <input type="text" class="form-control" value="',$contactArray[1],'" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Address</span>
                </div>
                <input type="text" class="form-control" value="',$contactArray[2],'" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                </div>
                <input type="text" class="form-control" value="',$contactArray[3],'" readonly>
            </div>
        </div>
    </div>';
    } else {
        echo 'You have to login in order to see the content!';
    }
}
?>

<style>
    .card-container {
        padding: 30px 50px;
    }
</style>

<div class="card-container">
<?php
contentHandler($contactArray);
?>
</div>