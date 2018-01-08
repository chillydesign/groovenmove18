<?php $blocs =  get_sub_field('bloc'); ?>


<ul class="editions ">
	<?php  foreach ($blocs as $bloc) : ?>
	<li  class="gallery_editions">

        <h4><?php echo $bloc['titre']; ?></h4>
            <img src="<?php echo $bloc['image']; ?>" alt ="<?php echo $bloc['titre']; ?>">
          <?php if($bloc['programme']){ ?>
            <a class="programme"  target ="_blank" href="<?php echo $bloc['programme']; ?>">Télécharger le programme</a>
          <?php } ?>
            <?php if($bloc['url']){ ?>
              <a class="website"  target ="_blank" href="<?php echo $bloc['url']; ?>">Visiter le site web</a>
            <?php } ?>
	</li>
	<?php endforeach; ?>
</ul>
