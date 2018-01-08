<?php $titre =  get_sub_field('titre'); ?>
<?php $partenaires =  get_sub_field('partenaires'); ?>


<?php if($titre){echo'<h2 class="partenaires_h2">' . $titre . '</h2>';} ?>
<ul class="partenaires ">
	<?php  foreach ($partenaires as $partenaire) : ?>
	<li  class="gallery_partenaires">
		 <a class=""  target ="_blank" href="<?php echo $partenaires['url']; ?>">
            <img src="<?php echo $partenaire['logo']; ?>" alt ="<?php echo $partenaire['nom']; ?>">
         </a>
	</li>
	<?php endforeach; ?>
</ul>
