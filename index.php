<?php

  include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<h1>All Contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
<table class="table table-hover">
  <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Title</th>
  </thead>
  <tbody>
    <?php foreach($contacts as $contact) : ?>
    <tr>
      <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['id']; ?></a></td>
      <td><?= $contact['title']; ?></td>
      <td><?= $contact['priority']; ?></td>
      <td><?= $contact['title']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
