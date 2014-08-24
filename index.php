<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no">
        <title>The Portfolio of Ian Tompkins</title>

        <!-- reset -->
        <link rel="stylesheet" href="css/reset.css">

        <!-- core stylesheet -->
        <link rel="stylesheet" href="css/style.css">

        <!-- font-awesome stuff -->
        <link rel="stylesheet" href="depend/font-awesome/css/font-awesome.min.css">

        <!-- Outdated Browser stuff -->
        <link rel="stylesheet" href="depend/outdatedbrowser/outdatedBrowser.min.css">
        <script src="depend/outdatedbrowser/outdatedBrowser.min.js"></script>

        <!-- Typekit stuff -->
        <script type="text/javascript" src="//use.typekit.net/wvd0uef.js"></script>
        <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

        <!-- jQuery stuff -->
        <script src="js/jquery-min.js"></script>
        <!-- <script src="js/jquery-1.8.0.min.js"></script> -->
        <!-- <script src="js/jquery-ui-1.10.4/js/jquery-ui-1.10.4.min.js"></script> -->

        <!-- <script type="text/javascript">$(document).bind("mobileinit", function(){$.extend(  $.mobile , {autoInitializePage: false})});</script> -->
        <!-- <script src="js/jquery.mobile-1.4.2.min.js"></script> note: causes craziness on mobile!-->

        <!-- jQuery Transit stuff -->
        <script src="js/jquery.transit.min.js"></script>

        <!-- jQuery animate-enhanced stuff "Tested with jQuery 1.3.2 to 1.8.0" -->
        <!-- <script src="js/jquery.animate-enhanced.min.js"></script> -->

        <!-- jQuery touchSwipe stuff -->
        <!-- <script src="js/jquery.touchSwipe.min.js"></script> -->

        <!-- jGestures stuff -->
        <!-- <script src="js/jgestures.min.js"></script> just plain didn't work-->

        <!-- jQuery Movile Events stuff -->
        <script src="js/jquery.mobile-events.min.js"></script>

        <!-- The script below causes modal scrolling to break on mobile. However, it also stops overscrolling on mobile. -->
        <!-- <script type="text/javascript">
            document.ontouchmove = function(event){
                event.preventDefault();
            }
        </script> -->

        <!-- The script below seems to fix horizontal overscrolling (but not vertical) while maintaining modal scrolling. -->
        <!-- <script type="text/javascript">
            $('#body').on('touchmove',function(e){
                if(!$('.modal').has($(e.target)).length)
                    e.preventDefault();
            });
        </script> -->

        <!-- The script below seems to stop overscrolling fine, but at the cost of modal scrolling. -->
        <!-- <script type="text/javascript">
            var selScrollable = '.modal';
            // Uses document because document will be topmost level in bubbling
            $(document).on('touchmove',function(e){
                  e.preventDefault();
            });
            // Uses body because jQuery on events are called off of the element they are
            // added to, so bubbling would not work if we used document instead.
            $('body').on('touchstart', selScrollable, function(e) {
                if (e.currentTarget.scrollTop === 0) {
                    e.currentTarget.scrollTop = 1;
                } else if (e.currentTarget.scrollHeight === e.currentTarget.scrollTop + e.currentTarget.offsetHeight) {
                    e.currentTarget.scrollTop -= 1;
                }
            });
            $('body').on('touchmove', selScrollable, function(e) {
                // Only block default if internal div contents are large enough to scroll
                // Warning: scrollHeight support is not universal. (http://stackoverflow.com/a/15033226/40352)
                if($(this)[0].scrollHeight > $(this).innerHeight()) {
                    e.stopPropagation();
                }
            });
        </script> -->

        <!-- The script below seems to fix horizontal overscrolling (but not vertical) while maintaining modal scrolling. -->
        <!-- <script type="text/javascript">
            $(document).off('touchmove touchstart touchSwipe');
            $('body').off('touchmove touchstart touchSwipe', '.modal');
        </script> -->

        <!-- The script below seems to stop overscrolling fine, but at the cost of modal scrolling. -->
        <!-- <script type="text/javascript">
            // Uses document because document will be topmost level in bubbling
            $(document).on('touchmove',function(e){
                e.preventDefault();
            });

            var scrolling = false;

            // Uses body because jquery on events are called off of the element they are
            // added to, so bubbling would not work if we used document instead.
            $('body').on('touchstart','.modal',function(e) {

                // Only execute the below code once at a time
                if (!scrolling) {
                    scrolling = true;
                    if (e.currentTarget.scrollTop === 0) {
                      e.currentTarget.scrollTop = 1;
                    } else if (e.currentTarget.scrollHeight === e.currentTarget.scrollTop + e.currentTarget.offsetHeight) {
                      e.currentTarget.scrollTop -= 1;
                    }
                    scrolling = false;
                }
            });

            // Prevents preventDefault from being called on document if it sees a scrollable div
            $('body').on('touchmove','.modal',function(e) {
                e.stopPropagation();
            });
        </script> -->

        <!-- The script below seems to fix horizontal overscrolling (but not vertical) while maintaining modal scrolling. -->
        <!-- <script type="text/javascript">
            document.body.addEventListener('touchmove',function(e){
                if(!$(e.target).hasClass("modal")) {
                    e.preventDefault();
                }
            });
        </script> -->

    </head>

    <script type="text/javascript">

        // Project Constructor

        function Project(id, title, description, tools, disciplines, year, photos){

            this.id = id;
            this.title = title;
            this.description = description;
            this.tools = tools;
            this.disciplines = disciplines;
            this.year = year;
            this.photos = photos;
            this.current_photo = 1;

            // Write HTML to document

            document.write("<div id=\"project0"+this.id+"\" class=\"holder-inner\" style=\"width: "+((this.photos.length*100)+((this.photos.length*100)*.2))+"%; left: 0; top: "+(this.id-1)*$('.slide').height()+"px;\">");

                for (i=0; i<this.photos.length; i++){

                    document.write("<div class=\"slide\" style=\"background: transparent url('"+this.photos[i]+"') center center no-repeat; background-size: cover; width: "+((100/this.photos.length)-1)+"%; min-width: "+((100/this.photos.length)-3)+"%;\"></div>");

                };

                document.write("<div class=\"slide\"></div>");

            document.write("</div>");

        }

    </script>
    <body id="body" ontouchstart="" onmouseover="" onKeyDown="keyboard_input(event)">
        <div class="content">
            <header role="banner">
                <a class="site-id" href="http://www.iantompkins.com">
                    <object type="image/svg+xml" data="img/logo.svg#sprite-logo-normal">
                        <img src="img/logo.png" alt="Ian Tompkins logo" />
                    </object>
                </a>
            </header>
            <div class="container">
                <nav class="top">
                    <ul>
                        <li id="showmenu" class="nav-button showmenu"><i class="fa fa-bars fa-fw"></i></li>
                    </ul>
                </nav>
                <nav class="bottom">
                    <ul>
                        <li id="prev" class="nav-button"><i class="fa fa-long-arrow-left fa-fw"></i></li>
                        <li id="up" class="nav-button"><i class="fa fa-long-arrow-up fa-fw"></i></li>
                        <li id="down" class="nav-button"><i class="fa fa-long-arrow-down fa-fw"></i></li>
                        <li id="next" class="nav-button"><i class="fa fa-long-arrow-right fa-fw"></i></li>
                        <li id="info" class="nav-button"><span><i class="fa fa-info-circle fa-fw"></i><span id="info-inner"></span></span></li>
                    </ul>
                </nav>
                <div id="info-modal" class="modal">
                    <h1 id="info-title"></h1>
                    <h3 id="info-year"></h3>
                    <p id="info-description"></p>
                    <div class="smallishList">
                        <span class="smallishHeader">TOOLS: </span>
                        <ul id="info-tools"></ul>
                    </div>
                    <div class="smallishList">
                        <span class="smallishHeader">DISCIPLINES: </span>
                        <ul id="info-disciplines"></ul>
                    </div>
                </div>
            </div>
            <div class="slider">
                <div class="holder">

                    <script type="text/javascript">

                        var projects_all = [<?php include 'aggregator.php'; ?>];

                    </script>

                </div>
            </div>
        </div>
        <div id="outdated">
             <h6>Your browser is out-of-date!</h6>
             <p>Update your browser to view this website correctly. <a id="btnUpdateBrowser" href="http://outdatedbrowser.com/">Update my browser now </a></p>
             <p class="last"><a href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p>
        </div>
        <script src="js/overscroll-master/overscroll.min.js"></script>
    </body>
    <script type="text/javascript">


        // Beginning Variables

        var countCurrentProject = 1;
        var countTotalProjects = projects_all.length;
        var countCurrent = 1;
        var countTotal = projects_all[0]['photos'].length;
        var shortTransition = 500;
        var longTransition = 800;
        var modalVisible = false;


        // Functions

        // Populate the "i" Info button on load
        function populate_info_button() {
            document.getElementById("info-inner").innerHTML = projects_all[countCurrentProject-1]['title'];
            document.getElementById("info-title").innerHTML = projects_all[countCurrentProject-1]['title'];
            document.getElementById("info-year").innerHTML = projects_all[countCurrentProject-1]['year'];
            document.getElementById("info-description").innerHTML = projects_all[countCurrentProject-1]['description'];
            var i = 1;
            document.getElementById("info-tools").innerHTML = "<li>" + projects_all[countCurrentProject-1]['tools'][i-1] + "</li>";
            do {
                i++;
                document.getElementById("info-tools").innerHTML += "<li>" + projects_all[countCurrentProject-1]['tools'][i-1] + "</li>";
            }while(i < projects_all[countCurrentProject-1]['tools'].length)
            var i = 1;
            document.getElementById("info-disciplines").innerHTML = "<li>" + projects_all[countCurrentProject-1]['disciplines'][i-1] + "</li>";
            do {
                i++;
                document.getElementById("info-disciplines").innerHTML += "<li>" + projects_all[countCurrentProject-1]['disciplines'][i-1] + "</li>";
            }while(i < projects_all[countCurrentProject-1]['disciplines'].length)
        }

        // "i" Info Button
        function show_info_modal() {
            if (modalVisible === false) {
                $('#info-modal').show().transition({ opacity: 1 }, 250);
                $('.slider').transition({opacity: .2}, 250);
                $('#prev').toggleClass('nav-button-disabled');
                $('#up').toggleClass('nav-button-disabled');
                $('#down').toggleClass('nav-button-disabled');
                $('#next').toggleClass('nav-button-disabled');
                modalVisible = true;
            }else {
                $('#info-modal').transition({ opacity: 0 }, 250, function(){
                    $('#info-modal').hide();
                });
                $('.slider').transition({opacity: 1}, 250);
                $('#prev').toggleClass('nav-button-disabled');
                $('#up').toggleClass('nav-button-disabled');
                $('#down').toggleClass('nav-button-disabled');
                $('#next').toggleClass('nav-button-disabled');
                modalVisible = false;
            }
        }

        // Left Arrow Button
        function navigate_prev() {
            if (modalVisible===false) {  // Verify that modal windows are hidden
                if (projects_all[countCurrentProject-1]['current_photo'] > 1) {
                    projects_all[countCurrentProject-1]['current_photo']--
                    var currentProjectButton = '#project0'+countCurrentProject;
                    var width = $(currentProjectButton+' > .slide').width();
                    $(currentProjectButton).transition({ left: "+=" + width }, shortTransition);
                }else{
                    projects_all[countCurrentProject-1]['current_photo'] = projects_all[countCurrentProject-1]['photos'].length;
                    var currentProjectButton = '#project0'+countCurrentProject;
                    var width = $(currentProjectButton+' > .slide').width();
                    $(currentProjectButton)
                        .transition({ left: "8em" }, 200, 'out')
                        .transition({ left: (-projects_all[countCurrentProject-1]['current_photo']+1)*width }, longTransition, 'in');
                }
            }
        }

        // Right Arrow Button
        function navigate_next() {
            if (modalVisible===false) {  // Verify that modal windows are hidden
                if (projects_all[countCurrentProject-1]['current_photo'] < projects_all[countCurrentProject-1]['photos'].length) {
                    projects_all[countCurrentProject-1]['current_photo']++
                    var currentProjectButton = '#project0'+countCurrentProject;
                    var width = $(currentProjectButton+' > .slide').width();
                    $(currentProjectButton).transition({ left: "-=" + width }, shortTransition);
                }else{
                    projects_all[countCurrentProject-1]['current_photo'] = 1;
                    var currentProjectButton = '#project0'+countCurrentProject;
                    var width = $(currentProjectButton+' > .slide').width();
                    $(currentProjectButton)
                        .transition({ left: "-=" + "120em" }, 200, 'out')
                        .transition({ left: 0 }, longTransition, 'in');
                }
            }
        }

        // Up Button
        function navigate_up() {
            if (modalVisible===false) {  // Verify that modal windows are hidden
                if (countCurrentProject > 1) {
                    countCurrentProject--
                    var height = $('.slide').height();
                    $('.slider > .holder').transition({ top: "+=" + height }, shortTransition);
                    populate_info_button();
                }else{
                    countCurrentProject = projects_all.length;
                    var height = $('.slide').height();
                    $('.slider > .holder')
                        .transition({ top: "8em" }, 200, 'out')
                        .transition({ top: (-countCurrentProject+1)*height }, longTransition, 'in');
                    populate_info_button();
                }
            }
        }

        // Down Button
        function navigate_down() {
            if (modalVisible===false) {  // Verify that modal windows are hidden
                if (countCurrentProject < countTotalProjects) {
                    countCurrentProject++
                    var height = $('.slide').height();
                    $('.slider > .holder').transition({ top: "-=" + height }, 500);
                    populate_info_button();
                }else{
                    countCurrentProject = 1;
                    var height = $('.slide').height();
                    $('.slider > .holder')
                        .transition({ top: "-=" + "120em"}, 200, 'out')
                        .transition({ top: 0 }, 1000, 'in');
                    populate_info_button();
                }
            }
        }

        // Keyboard Input
        function keyboard_input(e) {
            evt = e || window.event; // compliant with ie6
            switch (evt.keyCode) {
                case 37:
                case 65:
                    navigate_prev();    // previous image
                    break;
                case 38:
                case 74:
                case 87:
                    navigate_up();      // back (up) one project
                    break;
                case 39:
                case 68:
                    navigate_next();    // next image
                    break;
                case 40:
                case 75:
                case 83:
                    navigate_down();    // forward (down) one project
                    break;
                case 27:
                case 73:
                    show_info_modal();  // show info modal window
                    break;
            }
        }


        // Stuff to do on load
        $(document).ready(populate_info_button);


        // Variable needed for touch/click interoperability
        // http://stackoverflow.com/questions/7018919/how-to-bind-touchstart-and-click-events-but-not-respond-to-both
        var flag = false;


        // Showmenu Code
        $('#showmenu').bind('touchstart click', function(e){ // When the horizontal bars button is clicked
            if (!flag) {
                flag = true;
                setTimeout(function(){ flag = false; }, 100);
                $('.content').toggleClass('show');
                e.preventDefault();
            }
            return false
        });


        // Button touch and click navigation code

        $('#prev').bind('touchstart click', function(){ // previous image
            if (!flag) {
                flag = true;
                setTimeout(function(){ flag = false; }, 100);
                navigate_prev();
            }
            return false
        });
        $('#next').bind('touchstart click', function(){ // next image
            if (!flag) {
                flag = true;
                setTimeout(function(){ flag = false; }, 100);
                navigate_next();
            }
            return false
        });
        $('#up').bind('touchstart click', function(){ // back (up) one project
            if (!flag) {
                flag = true;
                setTimeout(function(){ flag = false; }, 100);
                navigate_up();
            }
            return false
        });
        $('#down').bind('touchstart click', function(){ // forward (down) one project
            if (!flag) {
                flag = true;
                setTimeout(function(){ flag = false; }, 100);
                navigate_down();
            }
            return false
        });
        $('#info').bind('touchstart click', function(){ // activate project info
            if (!flag) {
                flag = true;
                setTimeout(function(){ flag = false; }, 100);
                show_info_modal();
            }
            return false
        });


        // Touch navigation code

        // $('#prev').on('touchstart', navigate_prev);    // previous image
        // $('#next').on('touchstart', navigate_next);    // next image
        // $('#up').on('touchstart', navigate_up);        // back (up) one project
        // $('#down').on('touchstart', navigate_down);    // forward (down) one project
        // $('#info').on('touchstart', show_info_modal);  // activate project info


        // Swipe navigation code

        $('body').on('swiperight', navigate_prev);  // previous image
        $('body').on('swipedown', navigate_up);     // back (up) one project
        $('body').on('swipeup', navigate_down);     // forward (down) one project
        $('body').on('swipeleft', navigate_next);   // next image


        // Button feedback code

        $('.nav-button').bind('touchstart', function(){ // active touch
            $(this).addClass('active');
        }).bind('touchend', function(){
            $(this).removeClass('active');
        });

        $('.nav-button').mousedown(function(){ // active click
            $(this).addClass('active');
        }).mouseup('touchend', function(){
            $(this).removeClass('active');
        });

        $('.nav-button').bind('mouseenter', function(){ // hover
            $(this).addClass('hover');
        }).bind('mouseleave', function(){
            $(this).removeClass('hover');
        });

        // var nav = document.getElementById('bottom');
        // var els = nav.getElementsByTagName('li');
        // for(var i = 0; i < els.length; i++){
        //     els[i].addEventListener('touchstart', function(){this.className = "hover";}, false);
        //     els[i].addEventListener('touchend', function(){this.className = "";}, false);
        // }


        // Window Resize Code

        window.onresize=function(){
            var height = $('.slide').height();
            var counterOne = 0;
            $('.holder').css("top",(-countCurrentProject+1)*height);
            do {
                var currentProjectResize = '#project0'+(counterOne+1);
                var width = $(currentProjectResize+' > .slide').width();
                $(currentProjectResize).css("left",(-projects_all[counterOne]['current_photo']+1)*width);
                $(currentProjectResize).css("top",height*counterOne);
                counterOne++;
            }while(counterOne < projects_all.length)
        };


        // Outdated Browser code

        //PLAIN JAVASCRIPT
        //event listener form DOM ready
        function addLoadEvent(func) {
            var oldonload = window.onload;
            if (typeof window.onload != 'function') {
                window.onload = func;
            } else {
                window.onload = function() {
                    oldonload();
                    func();
                }
            }
        }
        //call plugin function after DOM ready
        addLoadEvent(
            outdatedBrowser({
                bgColor: '#f25648',
                color: '#ffffff',
                lowerThan: 'transform'
            })
            );

        //USING jQuery
        $( document ).ready(function() {
            outdatedBrowser({
                bgColor: '#f25648',
                color: '#ffffff',
                lowerThan: 'transform'
            })
        })


    </script>
</html>
