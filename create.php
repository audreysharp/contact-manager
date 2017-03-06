<?php

  include 'database.php';

  $stmt = $db->prepare('INSERT INTO contacts
    (first, last, title, address, city, state, zip, phone, notes)
    VALUES
    (:first, :last, :title, :address, :city, :state, :zip, :phone, :notes)
  '); // create contact with bound values

  $stmt->execute(array(
    ':first' => $_POST['first'],
    ':last' => $_POST['last'],
    ':title' => $_POST['title'],
    ':address' => $_POST['address'],
    ':city' => $_POST['city'],
    ':state' => $_POST['state'],
    ':zip' => $_POST['zip'],
    ':phone' => $_POST['phone'],
    ':notes' => $_POST['notes']
  ));

  $id = $db->lastInsertId();

  header('Location: http://localhost:8888/index.php?created=true');
?>
