<?php

  include 'database.php';

  $stmt = $db->prepare('DELETE from contacts WHERE id = :id'); // get contact to delete
  $stmt->execute(array(
    ':id' => $_GET['id']
  ));

  header('Location: http://localhost:8888/index.php?deleted=true');

?>
