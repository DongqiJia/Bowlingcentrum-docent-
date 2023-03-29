<?php require(APPROOT . '/views/includes/header.php'); ?>

<h3><?= $data['title']; ?></h3>
<h2 style="text-align: center;"><a href="<?= URLROOT . '/Reservering/index'; ?>">Reservering</a></h2> <br>
<h2 style="text-align: center;"><a href="<?= URLROOT . '/Contactgegevens/index'; ?>">Contactgegevens</a></h2> <br>
<h2 style="text-align: center;"><a href="<?= URLROOT . '/Score/index'; ?>">Score</a></h2> <br>
<h2 style="text-align: center;"><a href="<?= URLROOT . '/Bestelling/index'; ?>">Bestelling</a></h2> <br>



<h4 style="text-align: center;"><?= $data['sumtext']; ?></h4>

<?php require(APPROOT . '/views/includes/footer.php'); ?>