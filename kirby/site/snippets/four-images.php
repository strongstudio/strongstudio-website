<div class="slide" <?php if($data->image('bg.jpg')){ echo 'style="background-image: url('. $data->image('bg.jpg')->url() .')"'; }?>>
    <div class="wrapper">
        <div class="row four-up med-single-col">
            <?php $index = 0; foreach($data->images()->not('bg.jpg') as $image): ?>
                 <div class="col one-of-two">
                     <img data-src="<?php echo $image->url(); ?>">
                 </div>
                 <?php 
                     if($index == 1){
                         echo '</div><div class="row four-up med-single-col">'; 
                     }
                     $index++; 
                 ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>