        </div>
    </body>
    <script src="bower_components/modernizr/modernizr.js"></script>
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/fullpage.js/jquery.fullPage.js"></script>
    <script src="bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
    <script>
        $(document).ready(function() {
            var $window = $(window),
                $body = $('body'),
                $pageHeader = $('#page-header'),
                $fullpage = $('#fullpage'),
                $mainNav = $('#main-nav'),
                $toggleButton = $('#toggle-button'),
                $navLinks = $('#menu').find('a'),
                $downArrow = $('#down-arrow'),
                sections = document.getElementsByClassName('section'),
                $sectionHeadings = $('.section-heading'),
                $anchors = $('.anchorLink'),
                $leftArrow = $('#leftArrow'),
                $rightArrow = $('#rightArrow'),
                $sectionTracker = $('#sectionTracker'),
                $slideTracker = $('#slideTracker'),
                $afterHome = $('#afterhome'),
                scrollTop = null;

            if(!Modernizr.touch){
                fullPageize();
                //sizeFourUpCols();
            }
            else{
                $body.addClass('mobile');
                sizeSectionHeadings();
                window.addEventListener('resize', sizeSectionHeadings);
                mobileWaypoints();
                $window.scroll(function(){
                    toggleHeaderOnScrollEfficient(window.scrollY);
                });
            }

            $downArrow.click(function(e){
                e.preventDefault();
                $.fn.fullpage.moveSectionDown();
            });

            $leftArrow.click(function(e){
                e.preventDefault();
                $.fn.fullpage.moveSlideLeft();
            });

            $rightArrow.click(function(e){
                e.preventDefault();
                $.fn.fullpage.moveSlideRight();
            });

            $toggleButton.click(function(){
               toggleNav();
            });

            $navLinks.each(function(){
                $(this).click(function(){
                   toggleNav();
                });
            });


            $window.on('hashchange', function(){
                //  toggleSlideActive();
            });

            window.onkeydown = function(e){
                var key = e.keyCode ? e.keyCode : e.which;
                if(key === 27){
                    $toggleButton.click();
                }
            };

            function fullPageize(){
                // anchor links mess up fullpage navigation. zap them!
                zapAnchors();
                $fullpage.fullpage({
                    navigation: false,
                    anchors: ['home', 'logos', 'print', 'digital', 'icons-infographics', 'packaging-products', 'pie-in-the-sky', 'new-york-academy-of-sciences', 'the-new-york-times', 'about', 'clients', 'careers', 'contact'],
                    animateAnchor: false,
                    scrollingSpeed: 500,
                    touchSensitivity: 35,

                    onLeave: function(index, nextIndex){
                        if( nextIndex >= sections.length ){
                            $downArrow.addClass('hidden');
                        }
                        else if($downArrow.hasClass('hidden')){
                            $downArrow.removeClass('hidden');
                        }
                    },

                    afterLoad: function(anchorLink, index){
                        // fix so indexing begins at zero
                        index -= 1;
                        if(countSlides(index) < 2) {
                            $leftArrow.addClass('hidden');
                            $rightArrow.addClass('hidden');
                        }
                        else{
                            $leftArrow.removeClass('hidden');
                            $rightArrow.removeClass('hidden');
                        }
                        updateIndicator($sectionTracker, anchorLink);
                        updateIndicator($slideTracker, trackSlide() + ' of ' + countSlides(index));
                    },

                    afterSlideLoad: function(anchorLink, index){
                        index -= 1;
                        console.log(trackSlide(), 'of', countSlides(index));
                        updateIndicator($slideTracker, trackSlide() + ' of ' + countSlides(index));
                    },
                });
            }

            function toggleNav(){
                $mainNav.hasClass('hidden') ? $mainNav.removeClass('hidden') : $mainNav.addClass('hidden');
                $toggleButton.toggleClass('close');
            }


            function trackSlide(){
                return isSlide() ? parseInt(window.location.href.split('#')[1].split('/')[1]) + 1 : 1;
            }

            function countSlides(index){
                var section = sections[index];
                var length = section.getElementsByClassName('slide').length
                return length > 0 ? length : 1;
            }

            function updateIndicator($el, info){
                $el.html(info);
            }

            function sizeFourUpCols(){
                $('.row.four-up').each(function(){
                    var newHeight = window.innerHeight/2;
                    $(this).css('height', newHeight)
                });
            }

            function isSlide(){
                return window.location.href.split('#')[1] ? window.location.href.split('#')[1].split('/').length > 1 : null;
            }

            function toggleSlideActive(){
                if(isSlide() && ( ! $body.hasClass('slide-active') )){
                    $body.addClass('slide-active');
                }
                else if(!isSlide() && ( $body.hasClass('slide-active') )){
                    $body.removeClass('slide-active');
                }
            }

            function zapAnchors(){
                $anchors.each(function(){
                    this.parentNode.removeChild(this);
                });
            }

            // MOBILE

            function detectScrollDown(start, end){
                if(start < 0) start = 0;
                return start && start < end;
            }

            function toggleHeaderOnScroll(newScrollTop){
                if(detectScrollDown(scrollTop, newScrollTop)){
                    $pageHeader.addClass('hiding');
                }
                else{
                    $pageHeader.removeClass('hiding');
                }
                scrollTop = newScrollTop;
            }
            
            function mobileWaypoints(){
                $body.addClass('fp-viewing-home');
                $afterHome.waypoint(function(direction){
                    console.log('waypoint');
                    if(direction === 'down'){
                        $body.removeClass('fp-viewing-home');
                    }
                    else if(direction === 'up'){
                        $body.addClass('fp-viewing-home');
                    }
                });
            }
            
            function sizeSectionHeadings(){
                $sectionHeadings.each(function(){
                    console.log(window.getComputedStyle(this).getPropertyValue('height'));
                    if(window.innerHeight > window.getComputedStyle(this).getPropertyValue('height').replace(/\D/g,'')){
                        this.style.height = window.innerHeight + 'px';
                    }
                });
            }

            var toggleHeaderOnScrollEfficient = debounce(toggleHeaderOnScroll, 200);

            function debounce(func, wait, immediate) {
                var timeout;
                return function() {
                    var context = this, args = arguments;
                    var later = function() {
                        timeout = null;
                        if (!immediate) func.apply(context, args);
                    };
                    var callNow = immediate && !timeout;
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                    if (callNow) func.apply(context, args);
                };
            }

        });
    </script>
</html>