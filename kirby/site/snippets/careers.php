<a class="anchorLink" name="careers"></a>

<div class="section careers" data-title="Careers">
    <div class="slide section-heading" <?php if($image = $page->image('cover.jpg')){echo 'style="background-image: url('. $image->url() .')"';} ?>>
        <div class="wrapper row med-single-col">
            <div class="col one-of-two">
                <h1>Careers</h1>
            </div>
            <div class="col one-of-two border-left">
                <p class="tagline"><?php echo $page->text(); ?></p>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="wrapper">
            <div class="row med-single-col">
                <?php foreach($page->find('hiring')->children()->visible() as $position) : ?>
                <div class="col one-of-two">
                    <div class="job-description">
                        <h3><?php echo $position->title(); ?></h3>
                        <div><?php echo $position->description()->kirbytext(); ?></div>
                        <h4><?php echo $position->requirements_heading(); ?>:</h4>
                        <div><?php echo $position->requirements()->kirbytext(); ?></div>
                        <?php if(!$position->bonus_points()->empty()): ?><h4>Bonus Points:</h4><?php endif; ?>
                        <div><?php echo $position->bonus_points()->kirbytext(); ?></div>
                        <h4>How to Apply</h4>
                        <div class="how-to-apply">Send your resume and portfolio to <a href="mailto:work@strongstudio.com">work@strongstudio.com</a></div>
                    </div>
                </div>
                <?php if( !$position->hasNextVisible() ): ?>
                </div></div></div>
                <?php elseif ($position->num() % 2 == 0) :?>
                </div></div></div>
                <div class="slide">
                    <div class="wrapper">
                        <div class="row med-single-col">
                <?php endif; ?>
                <?php endforeach; ?>
</div>