<?php

  include 'header.php';
  
  $sortLast = array_key_exists('sortLast', $_GET) ? $_GET['sortLast'] : null;
  $sortFirst = array_key_exists('sortFirst', $_GET) ? $_GET['sortFirst'] : null;

  if ($sortLast !== null) { // sort by last name
    $contacts = $db->query('SELECT * FROM contacts ORDER BY last ' . $sortLast)->fetchAll(PDO::FETCH_ASSOC);
  } else if ($sortFirst !== null) { // sort by first name
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
    <th class="contactId">ID</th>
    <th class="first"><a href="/index.php?sortFirst=<?= ($sortFirst === null || $sortFirst === 'desc') ? 'asc' : 'desc'; ?>">First Name</th>
    <th class="last"><a href="/index.php?sortLast=<?= ($sortLast === null || $sortLast === 'desc') ? 'asc' : 'desc'; ?>">Last Name</a></th>
    <th class="city">City</th>
    <th class="state">State</th>
  </thead>
  <tbody>
    <?php foreach($contacts as $contact) : ?>
    <tr>
      <td class="contactId"><a href="/edit.php?id=<?= $contact['id']; ?>"><?= $contact['id']; ?></a></td>
      <td class="first"><?= $contact['first']; ?></td>
      <td class="last"> <?= $contact['last']; ?></td>
      <td class="city"><?= $contact['city']; ?><br>
      <td class="state"><?= $contact['state']; ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<?php include 'footer.php'; ?>