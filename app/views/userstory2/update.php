<?php require(APPROOT . '/views/includes/header.php'); ?>
<h2 style="text-align: center;"><?= $data['title']; ?></h2>
<div class="container col-4">
<h4><a href="<?php URLROOT; ?>/userstory2/index">Terug</a></h4>
    <div class="row">
        <form id="ScoreCreate" action="<?= URLROOT; ?>/Userstory2/update" method="POST">
            <div class="mb-3">
                <label for="Nummer" class="form-label">Baannummer</label>
                <select name="Nummer">
                <option value="1" <?php if($data['row']->Nummer == 1 ) {echo 'Selected';}?>>1</option>
                <option value="2" <?php if($data['row']->Nummer == 2 ) {echo 'Selected';}?>>2</option>
                <option value="3" <?php if($data['row']->Nummer == 3 ) {echo 'Selected';}?>>3</option>
                <option value="4" <?php if($data['row']->Nummer == 4 ) {echo 'Selected';}?>>4</option>
                <option value="5" <?php if($data['row']->Nummer == 5 ) {echo 'Selected';}?>>5</option>
                <option value="6" <?php if($data['row']->Nummer == 6 ) {echo 'Selected';}?>>6</option>
                <option value="7" <?php if($data['row']->Nummer == 7 ) {echo 'Selected';}?>>7</option>
                <option value="8" <?php if($data['row']->Nummer == 8 ) {echo 'Selected';}?>>8</option>
                </select>
            </div>
            <div class="mb-3">
                <input type="hidden" name= "Id" value="<?= $data["row"]->Id;?>">
            </div>
            <button type="submit" class="btn btn-primary">Wijzigen</button>
        </form>
    </div>
</div>
<?php require(APPROOT . '/views/includes/footer.php'); ?>