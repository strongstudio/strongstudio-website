<?php snippet('header') ?>
    <a class="anchorLink" name="home"></a>
    <div class="home section section-heading">
        <div class="wrapper row med-single-col">
            <div class="col one-of-two">
                <h1>Hello</h1>
            </div>
            <div class="col one-of-two border-left">
                <p>Established in 2006, Strong Studio NYC LLC is a brand-focused graphic design agency. We create distinctive design through identity, print, digital, packaging, and environmental design.</p>
            </div>
        </div>
        <aside class="hint">
            <h3>Helpful Hint</h3>
            You can use either your mouse or your arrow keys to move between sections.<br>
            Down [ v ] for chapters, right [ > ] for pages.
        </aside>
    </div>
    <a id="afterhome" class="anchorLink"></a>
    <a name="services" class="anchorLink"></a>        
    <?php foreach($pages->find('services')->children() as $section) {
            snippet('service', array('data' => $section));
    }
    ?>
    <a name="casestudies" class="anchorLink"></a>
    <?php foreach($pages->find('casestudies')->children() as $section) {
            snippet('casestudy', array('data' => $section));
    }
    ?>
    
    <?php snippet('about'); ?>
    <?php snippet('clients'); ?>
    <?php //snippet('careers'); ?>
    <?php snippet('contact'); ?>

<?php snippet('footer'); ?>