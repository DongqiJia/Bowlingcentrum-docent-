<?php require(APPROOT . '/views/includes/header.php'); ?>

<h1 style="text-align: center;"><?= $data['title']; ?></h1> <br>


<div class="container col-8">
    <h3>Reserveringen van <?= $data['Naam']; ?></h3>
    <form action="<?= URLROOT; ?>/userstory" method="post">
        <input type="date" name="Datum" id="Datum">
        <input type="submit" value="Toon Reserveringen">
        


    </form>

    <div class="row">
        <table border='1'>
            <thead>
                <th>Naam</th>
                <th>Datum</th>
                <th>AantalUren</th>
                <th>BeginTijd</th>
                <th>EindTijd</th>
                <th>AaantalVolwassenen</th>
                <th>AantalKinderen</th>
            </thead>

            <tbody>

                <?= $data['rows'] ?>
            </tbody>
        </table>
    </div>
    <h4><a href="<?= URLROOT . '/index' ?>">Terug</a></h4>
</div>


<?php require(APPROOT . '/views/includes/footer.php'); ?>