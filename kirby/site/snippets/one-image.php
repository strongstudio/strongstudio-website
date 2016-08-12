<div class="slide  <?php if( $data->hidemobile()->bool()){ echo ' hide-mobile'; }?>">
    <?php $image = $data->images()->first(); ?>
    <div class="full-bleed" style="background-image: url(<?php echo $image->url(); ?>)">
        <img data-src="<?php echo $image->url(); ?>">
        <?php if($image->caption() != ''): ?><div class="image-caption"><?php echo $image->caption()->kirbytext(); ?></div><?php endif; ?>
    </div>
</div>