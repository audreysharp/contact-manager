<?php

  include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('deleted', $_GET)) : ?>
  <div class="alert alert-danger">
    <p><strong>Contact Deleted!</strong> The contact was removed.</p>
  </div>
<?php endif; ?>

<?php if (array_key_exists('created', $_GET)) : ?>
  <div class="alert alert-success">
    <p><strong>Contact created!</strong> Your contact was successfully created.</p>
  </div>
<?php endif; ?>

<h1>All Contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
<table class="table">
  <thead>
    <th>ID</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Title</th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip Code</th>
    <th>Phone Number</th>
    <th>Notes</th>
  </thead>
  <tbody>
    <?php foreach($contacts as $contact) : ?>
    <tr>
      <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['id']; ?></a></td>
      <td><?= $contact['first']; ?></td>
      <td><?= $contact['last']; ?></td>
      <td><?= $contact['title']; ?></td>
      <td><?= $contact['address']; ?></td>
      <td><?= $contact['city']; ?></td>
      <td><?= $contact['state']; ?></td>
      <td><?= $contact['zip']; ?></td>
      <td><?= $contact['phone']; ?></td>
      <td><?= $contact['zip']; ?></td>
      <!--<td><?= $contact['notes']; ?></td>-->
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
