<div class="slide <?php if( $data->hidemobile()->bool()){ echo ' hide-mobile'; }?>" <?php if($bgimg = $data->image('bg.jpg')) echo 'style="background-image:url('. $bgimg->url() .')"' ?>>
    <div class="wrapper">
        <div class="row med-single-col">
            <?php foreach( $data->images()->not('bg.jpg') as $image ): ?>
            <div class="col one-of-two">
                <?php $link = $image->link() != '' ? '<a target="_blank" href="' . $image->link() . '">' : null; echo $link; ?><img data-src="<?php echo $image->url(); ?>"><?php if($link != null) echo '</a>'; ?>
                <?php if( $image->caption() != '' ) : ?><div class="image-caption"><?php echo $image->caption()->kirbytext(); ?></div> <?php endif; ?>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>