<?php
    include 'data/get-db.php';
?>

<?php foreach($result as $row): ?>
    <li><?= $row['name'] ?> and <?= $row['surname'] ?></li>
<?php endforeach ?>