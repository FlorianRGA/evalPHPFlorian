<?php
$error = [];
$counter = 1;
$RX_PostalCode = '/^\d{5}$/';
$RX_Price='/\d+(?:\.\d{1,2})?/';
$RX ='/^[a-zA-ZàâáçéèèêëìîíïôòóùûüÂÊÎÔúÛÄËÏÖÜÀÆæÇÉÈŒœÙñý\d]{1}[a-zA-ZàâáçéèèêëìîíïôòóùûüÂÊÎÔúÛÄËÏÖÜÀÆæÇÉÈŒœÙñý\d\s-]{0,254}$/';
$advert = new advert();
$advertList = $advert->getAdverts();
$advertListOrdered = $advert->getAdvertsOrdered();

if(isset($_POST['submit'])){

    if(!empty($_POST['title'])){
        if(preg_match($RX, $_POST['title'])){
            $advert->title = $_POST['title'];
        }else {
            $error['title'] = 'Veuillez saisir un titre valide';
        }
    }else {
        $error['title'] = 'Veuillez saisir un titre';
    }

    if(!empty($_POST['description'])){
        if(preg_match($RX, $_POST['description'])){
            $advert->description = $_POST['description'];
        }else {
            $error['description'] = 'Veuillez saisir une description valide';
        }
    }else {
        $error['description'] = 'Veuillez saisir une description valide';
    }

    if(!empty($_POST['postal_code'])){
        if(preg_match($RX_PostalCode, $_POST['postal_code'])){
            $advert->postal_code = $_POST['postal_code'];
        }else {
            $error['postal_code'] = 'Veuillez saisir un code postale valide';
        }
    }else {
        $error['postal_code'] = 'Veuillez saisir un code postale';
    }

    if(!empty($_POST['city'])){
        if(preg_match($RX, $_POST['city'])){
            $advert->city = $_POST['city'];
        }else {
            $error['city'] = 'Veuillez saisir une ville valide';
        }
    }else {
        $error['city'] = 'Veuillez saisir une ville';
    }

    if(!empty($_POST['type'])){
        if($_POST['type'] == "vente" || $_POST['type'] == "location"){
            $advert->type = $_POST['type'];
        }else {
            $error['type'] = 'Veuillez saisir un type valide';
        }
    }else {
        $error['type'] = 'Veuillez saisir un type';
    }

    if(!empty($_POST['price'])){
        if(preg_match($RX_Price, $_POST['price'])){
            $advert->price = $_POST['price'];
        }else {
            $error['price'] = 'Veuillez saisir un prix valide';
        }
    }else {
        $error['price'] = 'Veuillez saisir un prix';
    }
    
    if(empty($error)){
        $advert->createAdvert();
    }else {
        var_dump($error);
    }
}
if(isset($_GET['id'])){
    $advert->id = $_GET['id'];
    $advertInfo = $advert->getAdvert();
}

if(isset($_POST['reservebtn'])){
    if(!empty($_POST['reservation_message'])){
        if(preg_match($RX, $_POST['reservation_message'])){
            $advert->reservation_message = $_POST['reservation_message'];
        }else {
            $error['reservation_message'] = 'Veuillez saisir un texte valide';
        }
    }else {
        $error['reservation_message'] = 'Veuillez saisir vos information';
    }
    if(empty($error)){
        $advert->id = $_GET['id'];
        $advert->reserveAdvert();
        header("Refresh:0");
    }else {
        var_dump($error);
    }
}
?>