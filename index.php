<?php

  include 'header.php';
  $sortLast = array_key_exists('sortLast', $_GET) ? $_GET['sortLast'] : null;
  $sortFirst = array_key_exists('sortFirst', $_GET) ? $_GET['sortFirst'] : null;

  if ($sortLast !== null) {
    $contacts = $db->query('SELECT * FROM contacts ORDER BY last ' . $sortLast)->fetchAll(PDO::FETCH_ASSOC);
  } else if ($sortFirst !== null) {
    $contacts = $db->query('SELECT * FROM contacts ORDER BY first ' . $sortFirst)->fetchAll(PDO::FETCH_ASSOC);
  } else {
    $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
  }

?>

<!--Alert message to display if contact deleted-->
<?php if (array_key_exists('deleted', $_GET)) : ?>
  <div class="alert alert-danger">
    <p><strong>Contact Deleted!</strong> The contact was removed.</p>
  </div>
<?php endif; ?>

<!--Contacts table-->
<h1>All Contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>
<table class="table">
  <thead>
    <th>ID</th>
    <th><a href="/index.php?sortFirst=<?= ($sortFirst === null || $sortFirst === 'desc') ? 'asc' : 'desc'; ?>">First Name</th>
    <th><a href="/index.php?sortLast=<?= ($sortLast === null || $sortLast === 'desc') ? 'asc' : 'desc'; ?>">Last Name</a></th>
    <th>City</th>
    <th>State</th>
    <th>Phone Number</th>
  </thead>
  <tbody>
    <?php foreach($contacts as $contact) : ?>
    <tr>
      <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['id']; ?></a></td>
      <td><?= $contact['first']; ?></td>
      <td><?= $contact['last']; ?></td>
      <td><?= $contact['city']; ?><br>
      <td><?= $contact['state']; ?></td>
      <td><?= $contact['phone']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>
