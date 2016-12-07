<!DOCTYPE html>
<html>
    <head>
        <title>Strong Studio NYC LLC</title>
        <meta name="description" content="Strong Studio NYC LLC is a conceptually driven design studio in lower Manhattan creating identities, print, advertising, packaging, environmental, web and motion design.">
        <meta name="keywords" content="Strong Studio Graphic Design Web">
        <link rel="image_src" href="http://strongstudio.com/assets/images/StrongStudio_FB-crawler.jpg" / ><!--formatted-->
        <meta property="og:image" content="http://strongstudio.com/assets/images/StrongStudio_FB-crawler.jpg" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
        
        <link rel="stylesheet" href="bower_components/fullpage.js/jquery.fullPage.css">
        <link rel="stylesheet" href="stylesheets/main.css">
    </head>
    <body>
        <header id="page-header">
            <a class="header-logo" href="#home"></a>
            <span class="locationTracker" id="sectionTracker"></span>
            <span class="locationTracker" id="slideTracker"></span>

                <button id="toggle-button" class="lines-button x" type="button" role="button" aria-label="Toggle Navigation">

                    <span class="lines"></span>
                </button>

        </header>
        <a id="down-arrow" class="fp-controlArrow" href="#"></a>
        <a class="my-ControlArrow prev" id="leftArrow"></a>
        <a class="my-ControlArrow next" id="rightArrow"></a>

        <nav id="main-nav" class="hidden">
            <div class="row med-single-col">
                <section id="menu" class="navigation col two-of-four">
                    <h3>Menu:</h3>
                    <ul class="primary">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#<?php $pages->find('services')->children()->first()->uid();?>">Services</a>
                            <ul class="secondary">
                                <?php foreach ($pages->find('services')->children() as $page){
                                    echo '<li><a href="#'. $page->uid() .'">'. $page->title() .'</a></li>';
                                } ?>
                            </ul>
                        </li>
                        <li><a href="#<?php
                                $items = $site->user() ? $pages->find('casestudies')->children() : $pages->find('casestudies')->children()->filter(function($item){
                                        return !$item->draft()->bool();
                                });
                                echo $items->first()->uid();
                            ?>">
                            Case Studies</a>
                            <ul class="secondary">
                                <?php foreach ($items as $page){
                                    if($page->draft()->bool() && !$site->user()){
                                            
                                    }
                                    else{
                                        echo '<li><a href="#'. $page->uid() .'">'. $page->title() .'</a></li>';
                                    }
                                } ?>
                            </ul>
                        </li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#clients">Clients</a></li>
                        <li><a href="#careers">Careers</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </section>
                <section class="nav-contact col one-of-four">
                    <h3>Contact:</h3>
                    <div>
                        <a href="mailto:hello@strongstudio.com">hello@strongstudio.com</a><br>
                        <a href="tel:646-873-7641">646-873-7641</a>
                    </div>
                    <div>
                        222 Broadway<br>
                        18th Floor<br>
                        New York, NY 10038
                    </div>
                </section>
                <section class="nav-connect col one-of-four">
                    <h3>Connect:</h3>
                    <a class="social-link tumblr" href="http://strongstudionyc.tumblr.com/" target="_blank">Strong Studio Snippets</a>
                    <a class="social-link facebook" href="https://www.facebook.com/strongstudio" target="_blank">Give us a Like</a>
                    <a class="social-link twitter" href="https://twitter.com/StrongStudioNYC" target="_blank">We're Tweeters</a>
                    <a class="social-link instagram" href="https://instagram.com/strongstudionyc/" target="_blank">#StrongStudioNYC</a>
                    <a class="social-link linkedin" href="https://www.linkedin.com/company/strong-studio-nyc-llc" target="_blank">Profesh'</a>
                    <a class="social-link pinterest" href="https://www.pinterest.com/strongstudionyc/" target="_blank">Pinspirations</a>
                    <a class="social-link behance" href="https://www.behance.net/strongstudio" target="_blank">More Design</a>
                </section>
            </div>
        </nav>

        <div id="fullpage">