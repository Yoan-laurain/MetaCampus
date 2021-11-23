<?php if (isset( $_SESSION['identification']) && $_SESSION['identification']){
?>

	<nav class="menuNavTop" id="menuNavTop">
		<?php $menuNavTopCon->afficherMenu();?>
	</nav>


	<nav class="menuNavLeft" id="menuNavLeft">

		<?php $menuNavLeft->afficherMenu();?>

	</nav>
	
<?php
}
else{
?>

	<nav class="Navigation" id="Navigation">
	<?php $menuNavHaut->afficherMenu(); ?>
	</nav>



<?php
}
?>
