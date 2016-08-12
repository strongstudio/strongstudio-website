<div class="slide  <?php if( $data->hidemobile()->bool()){ echo ' hide-mobile'; }?>" <?php if($data->image('bg.jpg')){ echo 'style="background-image: url('. $data->image('bg.jpg')->url() .')"'; }?>>
    <div class="wrapper">
        <div class="row four-up med-single-col">
            <?php $index = 0; foreach($data->images()->not('bg.jpg') as $image): ?>
                 <div class="col one-of-two">
                     <?php $link = $image->link() != '' ? '<a target="_blank" href="' . $image->link() . '">' : null; echo $link; ?><img data-src="<?php echo $image->url(); ?>"><?php if($link != null) echo '</a>'; ?>
                     <?php if( $image->caption() != '' ) : ?><div class="img-caption"><?php echo $image->caption()->kirbytext(); ?></div> <?php endif; ?>
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