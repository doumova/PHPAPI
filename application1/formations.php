<?php
//suffer systems
$formations = json_decode(file_get_contents("http://localhost/API_Test/API/formations"));
    // print_r($formations);
ob_start();
?>
<table class="table">
    <tr>
        <td>ID</td>
        <td>Libelle</td>
        <td>Description</td>
        <td>Image</td>
        <td>Catégories</td>
    </tr>
    <?php foreach($formations as $formation): ?>
        <tr>
            <td><?= $formation->id ?></td>
            <td><?= $formation->libelle ?></td>
            <td><?= $formation->description ?></td>
            <td><img src="<?= $formation->image ?>" class="img-thumbnail"></td>
            <td><?= $formation->categorie ?></td>
        </tr>
    <?php endforeach;?>
</table>
<?php
$content = ob_get_clean();
require_once("template.php");