<a class="anchorLink" name="about"></a>

<div class="section about" data-title="About">
    
    <div class="slide section-heading" <?php if($image = $page->image('cover.jpg')){echo 'style="background-image: url('. $image->url() .')"';} ?>>
        <div class="wrapper row med-single-col">
            <div class="col one-of-two">
                <h1><?php echo ucfirst($page->title()->html()); ?></h1>
            </div>
            <div class="col one-of-two border-left">
                <p class="tagline"><?php echo $page->text(); ?></p>
            </div>
        </div>
    </div>
    
    <div class="slide align-top">
        <div class="wrapper">
            <div class="row med-single-col">
                <?php foreach($page->find('principals')->children() as $principal) : ?>
                <div class="col one-of-two">
                    <div class="staff <?php echo $principal->uid(); ?>">
                        <div class="row">
                            <div class="col staff-image">
                                <div class="headshot"></div>
                            </div>
                            <div class="col bio">
                                <header>
                                    <h3><?php echo $principal->name(); ?></h3>
                                    <span class="title"><?php echo $principal->position(); ?></span>
                                </header>
                                <?php echo $principal->bio()->kirbytext(); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <div class="slide align-top">
        <div class="wrapper">
            <div class="row med-single-col">
                <div class="col one-of-two">
    <?php foreach($page->find('staff')->children() as $staff) : ?>
                    <div class="staff <?php echo $staff->uid(); ?>">
                    <div class="row">
                        <div class="col staff-image">
                            <div class="headshot" <?php if($image = $staff->image()){echo 'style="background-image: url('. $image->url() .')"';} ?>></div>
                        </div>
                        <div class="col bio">
                            <header>
                                <h3><?php echo $staff->name(); ?></h3>
                                <span class="title"><?php echo $staff->position(); ?></span>
                            </header>
                            <?php echo $staff->bio()->kirbytext(); ?>
                        </div>
                    </div>
                    </div>
                    <?php if($staff->num() % 2 == 0 && $staff->num() % 4 != 0 ) : ?>
                </div>
                <div class="col one-of-two">
    <?php elseif($staff->num() % 4 == 0 || $staff->hasNext() == False) :?>
                    </div>
                    </div>
            </div>
        </div>
    <?php if($staff->hasNext() == True) : ?>
    <div class="slide align-top">
        <div class="wrapper">
            <div class="row med-single-col">
                <div class="col one-of-two">
                    <?php endif; ?>
                <?php endif; ?>
    <?php endforeach; ?>
                <!--</div>
            </div>
        </div>
    </div>-->
    
</div>