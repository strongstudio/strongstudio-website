<a class="anchorLink" name="<?php echo $data->uid(); ?>"></a>
<div class="section <?php echo $data->uid(); ?>" data-title="<?php echo ucfirst($data->title()->html()); ?>">
    <div class="slide section-heading" <?php if($image = $data->image('cover.jpg')){echo 'style="background-image: url('. $image->url() .')"';} ?>>
        <div class="wrapper row med-single-col">
            <div class="col one-of-two">
                <h1><?php echo ucfirst($data->title()->html()); ?></h1>
            </div>
            <div class="col one-of-two border-left">
                <p class="tagline"><?php echo $data->text(); ?></p>
            </div>
        </div>
    </div>
    
    <?php foreach( $data->children()->visible() as $slide ) : ?>
        <?php if($slide->hasImages()){
            $notBG = $slide->images()->not('bg.jpg');
            if($notBG->count() > 2) snippet('four-images', array('data' => $slide));
            elseif($notBG->count() == 2) snippet('two-images', array('data' => $slide));
            else snippet('one-image', array('data' => $slide));
        }?>
    <?php endforeach; ?>
</div>