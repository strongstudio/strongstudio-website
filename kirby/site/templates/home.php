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
            
    <?php foreach($pages->visible() as $section) {
            snippet('section', array('data' => $section));
    }
    ?>
    
    <div class="section">
        <div class="slide section-heading" style="background: #0000ff">
            <div class="wrapper row med-single-col">
                <div class="col one-of-two">
                    <div class="cs">CASE STUDY:</div>
                    <h2>Pie in the Sky</h2>
                </div>
                <div class="col one-of-two border-left">
                    <p>They make delicious, gluten-free pies in Colorado. We make their sweet graphic design in New York City.</p>
                </div>
            </div>
        </div>
        <div class="slide case-study-slide">
            <div class="wrapper row med-single-col">
                <dl class="col one-of-two">
                    <dt>Overview</dt>
                    <dd><img src="assets/images/02_ssnyc_cs_1_PITS_logo.png"></dd>
                    <dt>Services</dt>
                    <dd class="row">
                        <div class="col one-of-two">
                            Apparel<br>
                            Business Papers<br>
                            Logo<br>
                            Packaging
                        </div>
                        <div class="col one-of-two">
                            Sell Sheets<br>
                            Website Design<br>
                            Website Development
                        </div>
                    </dd>
                </dl>
                <dl class="col one-of-two">
                    <dt>Challenge</dt>
                    <dd>This small, gluten-free baking company had an outdated look that did not match the high-quality of its product. In order to expand its sales to larger supermarkets and specialty stores, the brand's tone and voice needed a sophisticated and delicious look.</dd>
                    <dt>Solution</dt>
                    <dd>Strong Studio evaluated Pie In The Sky's market positioning both locally and nationwide before embarking on a full brand overhaul.
                        We began by updating the logo to a modern, sophisticated mark that still retains a touch of whimsy. Next, we tackled the packaging for the sweet and savory pies, which are the cornerstone of the
                        baking company's business. The packaging highlights the fresh and gluten-free ingredients and establishes a cohesive look across the entire product line. This visual language is carried over to the pieintheskybakery.
                        com website which contains content for both the everyday consumer as well as the wholesale buyer.</dd>
                    <dt>Results</dt>
                    <dd><q>Quote here.</q></dd>
                </dl>
            </div>
        </div>
    </div>

<?php snippet('footer') ?>