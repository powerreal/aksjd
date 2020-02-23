<?php
    $id = $_GET['id'];
    $location = '../db.sqlite3';
    $db = new SQLite3($location);
    $pq = $db->prepare('delete from users where id=:id');
    $pq->bindvalue(':id', $id, SQLITE3_INTEGER);
    $pq->execute();
    $db->close();
    header('Location: demosql.php');
?>

DELETE - <?=$id;?>
