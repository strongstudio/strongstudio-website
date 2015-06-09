<?php snippet('header') ?>
    
    <div class="home section section-heading">
                <div class="wrapper row med-single-col">
                    <h1 class="col one-of-two">Hello</h1>
                    <p class="col one-of-two border-left">Established in 2006, Strong Studio NYC LLC is a brand-focused graphic design agency. We create distinctive design through identity, print, digital, packaging, and environmental design.</p>
                </div>
                <aside class="hint">
                    <h3>Helpful Hint</h3>
                    You can use either your mouse or your arrow keys to move between sections.<br>
                    Dwn [ v ] for chapters, right [ > ] for pages.
                </aside>
            </div>

    <?php foreach($pages->visible() as $section) {
            snippet('section', array('data' => $section));
    }
    ?>

<?php snippet('footer') ?>