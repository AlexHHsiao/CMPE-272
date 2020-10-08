<?php
$GLOBALS['currentPage'] = 'about';
require_once './components/header.php';
?>

<style>
    .card-container {
        padding: 30px 50px;
    }
</style>

<div class="card-container">
    <div class="card-deck">
        <div class="card">
            <img class="card-img-top" src="../img/ceo.jpg" alt="Spongebob">
            <div class="card-body">
                <h5 class="card-title">CEO Spongebob</h5>
                <p class="card-text">
                    Spongebob has been the best friend of Patrick more than ten years already. Whatever they have decided, they will do together,
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Let's make the world better!!!</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../img/founder.jpg" alt="Patrick">
            <div class="card-body">
                <h5 class="card-title">Founder Patrick</h5>
                <p class="card-text">
                    Patrick has no idea how he made this crazy decision to found this company. He believes with Spongebob, all day dreams will become true.
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">I like to eat...</small>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top" src="../img/cto.jpeg" alt="Squidward">
            <div class="card-body">
                <h5 class="card-title">CTO Squidward</h5>
                <p class="card-text">
                    Squidward doesn't like social. Only thing in his mind is to finish the work and he can get away from
                    Spongebob and Patrick.
                </p>
            </div>
            <div class="card-footer">
                <small class="text-muted">Spongebob talks too much</small>
            </div>
        </div>
    </div>
</div>

