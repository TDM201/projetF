<?php

$title="Sociétés";
 $path = "../";

 include $path."includes/head.php";
 include $path."includes/menu.php";
?>

<div class="container-fluid dashboard">
<div class="row">
    <div class="col-lg-12 text-white pt-2 pb-2 header">
        <h4>Nouvelle société</h4>
    </div>
</div>
<div class="row ml-2 mt-3">
    <div class="col-lg-6">
        <h4>Informations : </h4>
    </div>
</div>
    <form method="post">
  <div class="form-group">
<div class="row ml-2 mt-3">
<div class="col-lg-8">
<div class="form-group">
    <label for="nom">Nom de la société : </label>
    <input type="text" class="form-control" name="nom" id="nom">
  </div>
  <div class="form-group">
    <label for="tva">Numero du TVA</label>
    <input type="number" class="form-control" name="tva" id="tva">
  </div>
  <div class="form-group">
    <label for="ice">Code ICE</label>
    <input type="text" class="form-control" name="ice" id="ice">
  </div>
</div>
</div>
<div class="row ml-2 mt-3">
    <div class="col-lg-6">
        <h4>Cordonnées de la société : </h4>
    </div>
</div>
<div class="row ml-2 mt-3">
<div class="col-lg-8">
<div class="form-group">
    <label for="adresse">Adresse : </label>
    <textarea class="form-control" name="adresse" id="adresse" cols="30" rows="5"></textarea>
  </div>
  <div class="form-group">
    <label for="codep">Code postal</label>
    <input type="text" class="form-control" name="codep" id="codep">
  </div>
  <div class="form-group">
    <label for="ville">Ville</label>
    <input type="text" class="form-control" name="ville" id="ville">
  </div>
  <div class="form-group">
    <label for="pays">Pays</label>
    <select class="form-control" name="pays" id="pays">
        <option value=""></option>
    </select>
  </div>
  <div class="form-group">
    <label for="site">Site internet : </label>
    <input type="text" class="form-control" name="site" id="site">
  </div>
  <div class="form-group">
    <label for="tele">Numero du téléphone</label>
    <input type="text" class="form-control" name="tele" id="tele">
  </div>
  <div class="form-group">
    <label for="clients">Clients</label>
    <select class="form-control" name="clients" id="clients">
        <option value=""></option>
    </select>
  </div>
  <div class="form-group">
    <label for="motcle">Mot clés : </label>
    <input type="text" class="form-control" name="motcle" id="motcle">
  </div>
  <button type="submit" name="submit" class="btn btn-success mb-5">Créer la société</button>

</div>
</div>
</form>
    </div>
    
</div>

<?php include $path."includes/footer.php"; ?>