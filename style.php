<?php

  include 'header.php';

?>

<h1>Styles</h1>

<h3 class="style-heading"><b>Colors</b></h3>
<div><div class="box violet"></div> #9B4DCA <br>
<div class="box gray"></div> #606C76 <br>
<div class="box purple"></div> #F3E0FF <br>
<div class="box dark-purple"></div> #4D2665
<br><br>

<h3 class="style-heading"><b>Typography</b></h3>

<h3>Roboto Light</h3>
<h3 class="text-regular">Roboto Regular</h3>
<h3><b>Roboto Bold</b></h3>

<h3 class="raleway-light">Raleway Light</h3>
<h3 class="raleway">Raleway Regular</h3>
<h3 class="raleway-bold">Raleway Bold</h3>

<h4 class="dark-purple-text">Examples:</h4>

<h1 color="">h1. A very large header</h1>
<h2 style="color:#9B4DCA">h2. ANOTHER LARGE HEADER</h2>
<h3 class="dark-purple-text"><b>h3. Another header</b></h3>
<h4>h4. A slightly smaller header</h4>
<h5>h5. A smaller header</h5>

<p><b>A paragraph.</b> Proin scelerisque sed turpis id suscipit. Duis vitae nibh id risus tristique tristique. Duis non posuere mi, nec tincidunt lectus. Praesent in ex quis libero dictum porta. Curabitur efficitur, purus vel egestas vestibulum, eros nunc rutrum ipsum, eget interdum diam turpis sed nibh.
</p>
<p class="lead"><b>p.lead paragraph.</b> Morbi vitae bibendum neque, id egestas enim. Etiam fermentum gravida orci, quis rhoncus purus aliquam non. Maecenas sit amet sapien sit amet ligula dapibus rhoncus. Nulla consectetur egestas tempor..</p>
<p class="light text-muted"><b>p.light-text paragraph.</b> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc risus erat, vulputate vel commodo et, rutrum eu dolor. Curabitur id mauris a odio condimentum pretium. In eget aliquam tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

<h3 class="style-heading"><b>Buttons</b></h3>
<a class="button button-large" href="#">Large Button</a><br>
<a class="button" href="#">Medium Button</a><br>
<a class="button button-small" href="#">Small Button</a><br>
<a class="button button-outline button-small" href="#">Delete Button</a>

<br><br>

<h3 class="style-heading"><b>Input</b></h3>
<form>
  <fieldset>
    <label for="textInput">Text Input</label>
    <input type="text" placeholder="Text input..." id="textInput">
    <label for="selectInput">Select Input</label>
    <select id="selectInput">
      <option value="option1">Option 1</option>
      <option value="option2">Option 2</option>
      <option value="option3">Option 3</option>
      <option value="option4">Option 4</option>
    </select>
    <label for="textAreaInput">Text Area Input</label>
    <textarea placeholder="Text Area Input" id="textAreaInput"></textarea>
  </fieldset>
</form>

<h3 class="style-heading"><b>Lists</b></h3>

<!-- Unordered list -->
<ul>
  <li>Unordered list item 1</li>
  <li>Unordered list item 2</li>
</ul>

<!-- Ordered list -->
<ol>
  <li>Ordered list item 1</li>
  <li>Ordered list item 2</li>
</ol>

<br><br><br>

<?php include 'footer.php'; ?>