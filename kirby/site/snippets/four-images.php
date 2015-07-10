<div class="slide">
    <div class="wrapper">
        <div class="row four-up med-single-col">
            <?php $index = 0; foreach($data->images() as $image): ?>
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