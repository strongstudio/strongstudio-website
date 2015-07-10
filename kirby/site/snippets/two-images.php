<div class="slide">
    <div class="wrapper">
        <div class="row med-single-col">
            <?php foreach( $data->images() as $image ): ?>
            <div class="col one-of-two">
                <img data-src="<?php echo $image->url(); ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>