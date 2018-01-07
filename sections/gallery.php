<?php $titre =  get_sub_field('titre'); ?>
<?php $images =  get_sub_field('images'); ?>


<?php if($titre){echo'<h2>' . $titre . '</h2>';} ?>
<ul class="gallery_slider ">
	<?php  foreach ($images as $image) : ?>
	<li  class="gallery_image">
		 <a class=""  href="<?php echo $image['sizes']['large']; ?>">
            <div style="background-image:url(<?php echo $image['sizes']['small_height']; ?>);" ></div>
         </a>
	</li>
	<?php endforeach; ?>
</ul>
