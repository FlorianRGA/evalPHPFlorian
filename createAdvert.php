<?php
include_once 'components/doctype.php';
include_once 'components/navbar.php';
include_once 'model/advert.php';
include_once 'controller/advert_controller.php';
?>
<main class="pt-3">
<form class="container mb-5" method="post">
  <div class="mb-3">
    <label for="title" class="form-label">Titre :</label>
    <input type="text" class="form-control" name="title" id="title">
    <span class="textred"><?= isset($error['title']) ? $error['title'] : '' ?></span>
  </div>
  <div class="mb-3">
    <label for="description" class="form-label">description :</label>
    <input type="text" class="form-control" name="description" id="description">
    <span class="textred"><?= isset($error['description']) ? $error['description'] : '' ?></span>
  </div>
  <div class="mb-3">
    <label for="postal_code" class="form-label">code postale :</label>
    <input type="text" class="form-control" name="postal_code" id="postal_code">
    <span class="textred"><?= isset($error['postal_code']) ? $error['postal_code'] : '' ?></span>
  </div>
  <div class="mb-3">
    <label for="city" class="form-label">Ville :</label>
    <input type="text" class="form-control" name="city" id="city">
    <span class="textred"><?= isset($error['city']) ? $error['city'] : '' ?></span>
  </div>
  <div class="mb-3">
    <label for="type" class="form-label">Type :</label>
    <select name="type" id="">
      <option value="location">Location</option>
      <option value="vente">Vente</option>
      <span class="textred"><?= isset($error['type']) ? $error['type'] : '' ?></span>
    </select>
  </div>
  <div class="mb-3">
    <label for="price" class="form-label">Prix :</label>
    <input type="text" class="form-control" name="price" id="price">
    <span class="textred"><?= isset($error['price']) ? $error['price'] : '' ?></span>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Valider</button>
</form>
</main>
<?php
include_once 'components/footer.php';
?>