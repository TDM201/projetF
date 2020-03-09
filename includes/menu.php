<div class="menu">
<button class="bar" onclick="Menu()"><i class="fas fa-bars bars"></i></button>
    <span class="logo"><img src="1.png"><a href="<?= $path; ?>index.php">DEVOSOFT</a> </span>
    <span><a href="<?= $path; ?>clients/list.php" id="<?=($title=="Clients")?'current':''?>">Clients</a><a href="<?= $path; ?>clients/add.php" class="add"><i class="fas fa-plus-square"></i></a></span>
    <span><a href="<?= $path; ?>societes/list.php" id="<?=($title=="Sociétés")?'current':''?>">Sociétés</a><a href="<?= $path; ?>societes/add.php" class="add"><i class="fas fa-plus-square"></i></a></span>
</div>

