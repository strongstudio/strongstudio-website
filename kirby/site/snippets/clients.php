<a class="anchorLink" name="clients"></a>
<div class="section clients" data-title="Clients">
    <div class="slide section-heading" <?php if($image = $page->image('cover.jpg')){echo 'style="background-image: url('. $image->url() .')"';} ?>>
        <div class="wrapper row med-single-col">
            <div class="col one-of-two">
                <h1><?php echo $page->title(); ?></h1>
            </div>
            <div class="col one-of-two border-left">
                <p class="tagline"><?php echo $page->tagline(); ?></p>
            </div>
        </div>
    </div>
    <div class="slide">
        <h2 class="wrapper">We work with great companies.</h2>
        <div class="wrapper row med-single-col">
            
            <div class="col one-of-four">
                <?php echo $page->clients1()->kirbytext(); ?>
            </div>
            <div class="col one-of-four">
                <?php echo $page->clients2()->kirbytext(); ?>
            </div>
            <div class="col one-of-four">
                <?php echo $page->clients3()->kirbytext(); ?>
            </div>
            <div class="col one-of-four">
                <?php echo $page->clients4()->kirbytext(); ?>
            </div>
        </div>
    </div>
    
    <div class="slide">
        <div class="wrapper row med-single-col">
            <div class="col one-of-two">
                <h3>What we do:</h3>
                <div class="row med-single-col">
                    <div class="col one-of-two">
                        <?php echo $page->whatWeDo1()->kirbytext(); ?>
                    </div>
                    <div class="col one-of-two">
                        <?php echo $page->whatWeDo2()->kirbytext(); ?>
                    </div>
                </div>
            </div>
            <div class="col one-of-two">
                <h3>Industries:</h3>
                <div class="row med-single-col">
                    <div class="col one-of-two">
                        <?php echo $page->industries1()->kirbytext(); ?>
                    </div>
                    <div class="col one-of-two">
                        <?php echo $page->industries2()->kirbytext(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>