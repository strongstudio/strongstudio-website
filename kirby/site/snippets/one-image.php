<?php if ($data->draft()->bool() && !$site->user()) : ?>
<?php else: ?>
<div class="slide  <?php if( $data->hidemobile()->bool()){ echo ' hide-mobile'; }?>">
    <div class="full-bleed" style="background-image: url(<?php echo $data->images()->first()->url(); ?>)">
        <img data-src="<?php echo $data->images()->first()->url(); ?>">
    </div>
</div>
<?php endif; ?>