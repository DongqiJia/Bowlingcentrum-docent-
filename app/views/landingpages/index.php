<?php require(APPROOT . '/views/includes/header.php'); ?>

<h3><?= $data['title']; ?></h3>
<h2 style="text-align: center;"><a href="<?= URLROOT . '/Userstory/index';?>">Userstory1</a></h2> <br>
<h2 style="text-align: center;"><a href="<?= URLROOT . '/Contactgegevens/index'; ?>">Userstory2</a></h2> <br>



<h4 style="text-align: center;"><?= $data['sumtext']; ?></h4>

<?php require(APPROOT . '/views/includes/footer.php'); ?>