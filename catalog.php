<?php
include('inc/data.php');
include('inc/functions.php');

$pageTitle = "Full Catalog";
$section = null;

if(isset($_GET["cat"])) {
  if($_GET["cat"] == "books") {
    $pageTitle = "Books";
    $section = "books";
  }
  elseif ($_GET["cat"] == "movies") {
    $pageTitle = "Movies";
    $section = "movies";
  }
  elseif ($_GET["cat"] == "music") {
    $pageTitle = "Music";
    $section = "music";
  }
}

include 'inc/header.php'; ?>

<div class="section catalog page">
  <div class="wrapper">

    <h1><?php echo $pageTitle; ?></h1>
    <ul class="items">
      <!--Modify foreach to display id.
      The ID = key for the single item we have
      loaded into our var.

      For each item now, as we loop through
      them one at a time, we pass the item
      ->
      <?php foreach ($catalog as $id => $item) {
          echo get_item_html($id, $item);
      }
      ?>

    </ul>
  </div>
</div>

<?php include 'inc/footer.php'; ?>
