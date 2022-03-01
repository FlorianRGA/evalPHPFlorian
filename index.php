<?php
include_once 'components/doctype.php';
include_once 'components/navbar.php';
include_once 'model/advert.php';
include_once 'controller/advert_controller.php';
?>
<main>
    <div class="d-flex flex-column align-items-center">
        <?php
        foreach ($advertListOrdered as $advert) { ?>
        <div class="card mt-5 mb-5" style="width: 80%;">
            <div class="card-body">
                <h5 class="card-title titleAdvert"><?= $advert['title']?></h5>
                <h6 class="card-subtitle mb-2 text-muted"><?= $advert['type']?></h6>
                <p class="card-text"><?= $advert['postal_code']." ".$advert['city']?></p>
                <p class="card-text"><?= $advert['description']?></p>
                <p class="card-text"><?= $advert['price']."€"?></p>
            </div>
        </div>
        <?php
           if ($counter >= 15)
           break;
          $counter++;
     } ?>
    </div>
</main>
<?php
include_once 'components/footer.php';
?>