<?php
include_once 'components/doctype.php';
include_once 'components/navbar.php';
include_once 'model/advert.php';
include_once 'controller/advert_controller.php';
?>
<main>
    <div class="d-flex flex-column align-items-center">
        <?php
        foreach ($advertList as $advert) { ?>
        <div class="card mt-5 mb-5 <?php if(!empty($advert['reservation_message'])){echo"bgReserved";} ?> " style="width: 80%;">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                <h5 class="card-title titleAdvert"><?= $advert['title']?></h5>
                <p class="textred"><?php if(!empty($advert['reservation_message'])){echo"Reservé";} ?></p>
                </div>
                <h6 class="card-subtitle mb-2 text-muted"><?= $advert['type']?></h6>
                <p class="card-text"><?= $advert['postal_code']." ".$advert['city']?></p>
                <p class="card-text"><?= $advert['description']?></p>
                <p class="card-text"><?= $advert['price']."€"?></p>
                <a href="consultAdvert.php?id=<?= $advert['id']?>" class="btn btn-outline-primary">Consulter</a>
            </div>
        </div>
        <?php } ?>
    </div>
</main>
<?php
include_once 'components/footer.php';
?>