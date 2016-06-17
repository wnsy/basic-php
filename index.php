<?php
include('inc/data.php');
include('inc/functions.php');

$pageTitle = "Personal Media Library";
$section = null; //not showing any spec.

include ('inc/header.php'); ?>
<div class="section catalog random">

	<div class="wrapper">

		<h2>May we suggest something?</h2>

		<ul class="items">
			<!--Increase Randomness
			When using array_rand, the resulting array of keys is NOT shuffled,
			the books will always come before movies, which will come before music.
			If you want to randomize these even further you could use the shuffle
			function as well.

 			Example:
			$random =array_rand($catalog,4);
			shuffle($random);
			-->

			<?php
			$random = array_rand($catalog, 4);
			//var_dump($random);
			foreach ($random as $id) {
				echo get_item_html($id, $catalog[$id]);
				//var_dump($id);
				//var_dump($catalog[$id]);
			}
			?>
		</ul>

	</div>

</div>

<?php include 'inc/footer.php'; ?>
