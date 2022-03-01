<?php
include_once 'components/doctype.php';
include_once 'components/navbar.php';
include_once 'model/advert.php';
include_once 'controller/advert_controller.php';
?>
<main>
    <div class="d-flex flex-column align-items-center">
        <div class="card mt-5 mb-5" style="width: 80%;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <h5 class="card-title titleAdvert"><?= $advertInfo['title']?></h5>
                <p class="card-text textred"><?= isset($advertInfo['reservation_message']) ? "Reservé" : '' ?> </p>
                </div>
                <h6 class="card-subtitle mb-2 text-muted"><?= $advertInfo['type']?></h6>
                <p class="card-text"><?= $advertInfo['postal_code']." ".$advertInfo['city']?></p>
                <p class="card-text"><?= $advertInfo['description']?></p>
                <p class="card-text"><?= $advertInfo['price']."€"?></p>
            </div>
        </div>
        <p class="textred"><?= isset($advertInfo['reservation_message']) ? "RESERVE :"." ".$advertInfo['reservation_message'] : '<form method="post" class="mb-5">
                <label for="reservation">Vos Informations :</label>
                <input type="textarea" name="reservation_message">
                <button type="submit" name="reservebtn" class="btn btn-success">Je reserve</button>
            </form>' ?></p>
    </div>
</main>
<?php
include_once 'components/footer.php';
?>