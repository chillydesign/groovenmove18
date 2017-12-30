<?php $images =  get_sub_field('images'); ?>



<ul class="gallery_slider ">
	<?php  foreach ($images as $image) : ?>
	<li  class="gallery_image">
		 <a class=""  href="<?php echo $image['sizes']['large']; ?>">
            <img src="<?php echo $image['sizes']['small_height']; ?>"  alt="" />
         </a>
	</li>
	<?php endforeach; ?>
</ul>
