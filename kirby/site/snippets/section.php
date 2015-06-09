<a class="anchorLink" name="<?php echo $data->uid(); ?>"></a>
<div class="section <?php echo $data->uid(); ?>">
    <div class="slide section-heading" <?php if($image = $data->image('cover.jpg')){echo 'style="background-image: url('. $image->url() .')"';} ?>>
        <div class="wrapper row med-single-col">
            <h1 class="col one-of-two"><?php echo ucfirst($data->title()->html()); ?></h1>
            <p class="col one-of-two border-left"><?php echo $data->text(); ?></p>
        </div>
    </div>
    
    <?php foreach( $data->children()->visible() as $slide ) : ?>
        <?php if($slide->hasImages()){
            if($slide->images()->count() > 2) snippet('four-images', array('data' => $slide));
            elseif($slide->images()->count() == 2) snippet('two-images', array('data' => $slide));
            else snippet('one-image', array('data' => $slide));
        }?>
    <?php endforeach; ?>
</div>