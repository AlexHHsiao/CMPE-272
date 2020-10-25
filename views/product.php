<?php
$GLOBALS['currentPage'] = 'product';
require_once './components/header.php';
?>

    <style>
        .card-container {
            padding: 30px 50px;
        }
    </style>

    <div class="card-container">
        <div class="card">
            <h5 class="card-header">Products</h5>
            <div class="card-body">
                <div class="list-group">
                    <a href="/product/product1" class="list-group-item list-group-item-action">Product 1</a>
                    <a href="/product/product2" class="list-group-item list-group-item-action">Product 2</a>
                    <a href="/product/product3" class="list-group-item list-group-item-action">Product 3</a>
                    <a href="/product/product4" class="list-group-item list-group-item-action">Product 4</a>
                    <a href="/product/product5" class="list-group-item list-group-item-action">Product 5</a>
                    <a href="/product/product6" class="list-group-item list-group-item-action">Product 6</a>
                    <a href="/product/product7" class="list-group-item list-group-item-action">Product 7</a>
                    <a href="/product/product8" class="list-group-item list-group-item-action">Product 8</a>
                    <a href="/product/product9" class="list-group-item list-group-item-action">Product 9</a>
                    <a href="/product/product10" class="list-group-item list-group-item-action">Product 10</a>
                </div>
            </div>
        </div>
    </div>

    <div class="card-container">
        <div class="card-deck">
            <div class="card">
                <h5 class="card-header">Last Visited</h5>
                <div class="card-body">
                    <ul class="list-group">
                        <?php printLastVisited()?>
                    </ul>
                </div>
            </div>
            <div class="card">
                <h5 class="card-header">Most Visited</h5>
                <div class="card-body">
                    <ul class="list-group">
                        <?php printMostVisited()?>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<?php
function printMostVisited()
{
    $mostVisited = unserialize($_COOKIE['mostVisited'], ["allowed_classes" => false]);

    foreach ($mostVisited as $key => $value) {
        echo <<<_END
<li class="list-group-item d-flex justify-content-between align-items-center">
    $key
    <span class="badge badge-primary badge-pill">$value</span>
</li>
_END;
    }
}

function printLastVisited()
{
    $lastVisited = unserialize($_COOKIE['lastVisited'], ["allowed_classes" => false]);

    foreach ($lastVisited as $value) {
        echo <<<_END
<li class="list-group-item">$value</li>
_END;
    }
}

?>