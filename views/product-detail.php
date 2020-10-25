<?php
$GLOBALS['currentPage'] = 'product';

$mostVisited = array();
$lastVisited = array();

if(isset($_COOKIE['mostVisited'])) {
    $mostVisited = unserialize($_COOKIE['mostVisited'], ["allowed_classes" => false]);
    $value = 1;

    if (array_key_exists ($GLOBALS['selectedProduct'], $mostVisited)) {
        $value = $mostVisited[$GLOBALS['selectedProduct']] + 1;
    }

    $mostVisited[$GLOBALS['selectedProduct']] = $value;
    arsort($mostVisited);

    if (count($mostVisited) > 5) {
        array_pop($mostVisited);
    }
} else {
    $mostVisited[$GLOBALS['selectedProduct']] = 1;
}

if(isset($_COOKIE['lastVisited'])) {
    $lastVisited = unserialize($_COOKIE['lastVisited'], ["allowed_classes" => false]);

    if (in_array($GLOBALS['selectedProduct'], $lastVisited)) {
        $key = array_search($GLOBALS['selectedProduct'], $lastVisited);
        unset($lastVisited[$key]);
    }

    array_unshift($lastVisited, $GLOBALS['selectedProduct']);

    if (count($lastVisited) > 5) {
        array_pop($lastVisited);
    }
} else {
    $lastVisited[] = $GLOBALS['selectedProduct'];
}

setcookie( "lastVisited", serialize($lastVisited), time() + 60 * 60 * 24 * 5 );
setcookie( "mostVisited", serialize($mostVisited), time() + 60 * 60 * 24 * 5 );

require_once './components/header.php';
?>

<style>
    .card-container {
        padding: 30px 50px;
    }
</style>

<div class="card-container">
    <div class="card">
        <img class="card-img-top" src="../img/burger.jpg" alt="Burger">
        <div class="card-body">
            <h5 class="card-title"><?php echo $GLOBALS['selectedProduct']?></h5>
            <p class="card-text">
                This is our great product, <?php echo $GLOBALS['selectedProduct']?>!
            </p>
            <a href="/product" class="btn btn-primary">Go Back</a>
        </div>
        <div class="card-footer">
            <small class="text-muted">9/30/2020</small>
        </div>
    </div>
</div>

