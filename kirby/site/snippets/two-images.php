<div class="slide <?php if( $data->hidemobile()->bool()){ echo ' hide-mobile'; }?>" <?php if($bgimg = $data->image('bg.jpg')) echo 'style="background-image:url('. $bgimg->url() .')"' ?>>
    <div class="wrapper">
        <div class="row med-single-col">
            <?php foreach( $data->images()->not('bg.jpg') as $image ): ?>
            <div class="col one-of-two">
                <img data-src="<?php echo $image->url(); ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>