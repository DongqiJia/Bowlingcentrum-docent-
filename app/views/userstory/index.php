<?php require(APPROOT . '/views/includes/header.php'); ?>

<h1 style="text-align: center;"><?= $data['title']; ?></h1> <br>


<div class="container col-8">
    
    <div class="row">
        <table border='1'>
            <thead>
                <th>Naam</th>
                <th>Persooninformatie</th>
            </thead>

            <tbody>

                <?= $data['rows'] ?>
            </tbody>
        </table>
    </div>
    <h4><a href="<?= URLROOT . '/index' ?>">Terug</a></h4>
</div>


<?php require(APPROOT . '/views/includes/footer.php'); ?>