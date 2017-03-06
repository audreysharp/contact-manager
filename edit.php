<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1'); // get contact to edit by ID
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!--Alert message to display if contact updated-->
<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="alert alert-success">
  <p><strong>Update successful!</strong> Your contact was updated.</p>
</div>
<?php endif; ?>

<a href="/delete.php?id=<?= $contact['id']; ?>" class="button button-outline button-small button-delete">Delete Contact</a>
<h1>Edit Contact</h1>
<!--<div class="row">
  <div class="column column-80">
    <h1>Edit Contact</h1>
  </div>
  <div class="column column-10">
    <a href="/delete.php?id=<?= $contact['id']; ?>" class="button button-outline button-small button-delete">Delete Contact</a>
  </div>
</div>-->

<!--Edit contact form-->
<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <div class="row">
      <div class="column">
        <label for="contact_first">First Name</label>
        <input class="form-control" type="text" name="first" id="contact_first" value="<?= $contact['first']; ?>" />
      </div>
      <div class="column">
        <label for="contact_last">Last Name</label>
        <input class="form-control" type="text" name="last" id="contact_last" value="<?= $contact['last']; ?>" />
      </div>
      <div class="column">
        <label for="contact_title">Title</label>
        <input class="form-control" type="text" name="title" id="contact_title" value="<?= $contact['title']; ?>" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="column">
        <label for="contact_address">Address</label>
        <input class="form-control" type="text" name="address" id="contact_address" value="<?= $contact['address']; ?>" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <div class="row">
      <div class="column">
        <label for="contact_city">City</label>
        <input class="form-control" type="text" name="city" id="contact_city" value="<?= $contact['city']; ?>" />
      </div>
      <div class="column">
        <label for="contact_state">State</label>
          <select name="state" id="contact_state" value="<?= $contact['state']; ?>" class="form-control">
            <option value="AL" selected>Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
          </select>
      </div>
      <div class="column column-33">
        <label for="contact_zip">Zip Code</label>
        <input class="form-control" type="text" name="zip" id="contact_zip" value="<?= $contact['zip']; ?>" />
      </div>
    </div>
  </div>

  <div class="form-group">
    <label for="contact_phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="contact_phone" value="<?= $contact['phone']; ?>" />
  </div>

  <div class="form-group">
    <label for="contact_notes">Notes</label>
    <textarea class="form-control" name="notes" id="contact_notes"><?= $contact['notes']; ?></textarea>
  </div>

  <button class="btn btn-primary">Save Contact</button>
</form>

<?php include 'footer.php'; ?>
