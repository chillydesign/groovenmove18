<?php $titre =  get_sub_field('titre'); ?>
<?php $biographies =  get_sub_field('biographies'); ?>







<?php if($titre): ?>
    <h2 class="partenaires_h2"><?php echo $titre; ?></h2>
<?php endif; ?>


<div class="biographies ">
    <?php  foreach ($biographies as $biography) : ?>
        <?php

        $image  = $biography['image']['sizes']['large'];
        $image_small  = $biography['image']['sizes']['medium'];
        $nom  = $biography['nom'];
        $description = $biography['description'];
        $id = 'bio_' . sanitize_title($nom);
        ?>
        <div  class="biography_outer <?php echo $id; ?>" >

            <a href="#" data-featherlight="#<?php echo $id; ?>">
                <img src="<?php echo $image_small; ?>" alt="">
                <h3><?php echo $nom; ?></h3>
            </a>

            <div id="<?php echo $id; ?>" class="biography_content">
                <img src="<?php echo $image; ?>" alt="">
                <h3><?php echo $nom; ?></h3>
                <?php echo $description; ?>
            </div>

        </div>
    <?php endforeach; ?>
</div>
