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

        <script type="text/javascript">
            document.ontouchmove = function(event){
                event.preventDefault();
            }
        </script>

    </head>
    <script type="text/javascript">

        // Project Constructor

        function Project(id, title, description, tools, year, photos){

            this.id = id;
            this.title = title;
            this.description = description;
            this.tools = tools;
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
                        <li id="showmenu" class="nav-button showmenu"><a href="#" class="nav-item"><i class="fa fa-bars fa-fw"></i></a></li>
                    </ul>
                </nav>
                <nav class="bottom">
                    <ul>
                        <li id="prev" class="nav-button"><a href="#" class="nav-item"><i class="fa fa-long-arrow-left fa-fw"></i></a></li>
                        <li id="up" class="nav-button"><a href="#" class="nav-item"><i class="fa fa-long-arrow-up fa-fw"></i></a></li>
                        <li id="down" class="nav-button"><a href="#" class="nav-item"><i class="fa fa-long-arrow-down fa-fw"></i></a></li>
                        <li id="next" class="nav-button"><a href="#" class="nav-item"><i class="fa fa-long-arrow-right fa-fw"></i></a></li>
                        <li id="info" class="nav-button"><span id="info-inner"></span></li>
                    </ul>
                </nav>
                <div id="info-modal" class="modal">
                    <h1 id="info-title"></h1>
                    <h3 id="info-year"></h1>
                    <p id="info-description"></p>
                    <ul id="info-tools"></ul>
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
            document.getElementById("info-inner").innerHTML = "<a href=\"#\" class=\"nav-item\"><i class=\"fa fa-info-circle fa-fw\"></i></a>"+projects_all[countCurrentProject-1]['title'];
            document.getElementById("info-title").innerHTML = projects_all[countCurrentProject-1]['title'];
            document.getElementById("info-year").innerHTML = projects_all[countCurrentProject-1]['year'];
            document.getElementById("info-description").innerHTML = projects_all[countCurrentProject-1]['description'];
        }

        // "i" Info Button
        function show_info_modal() {
            if (modalVisible === false) {
                $('#info-modal').show().transition({ opacity: 1 }, 250);
                modalVisible = true;
            }else {
                $('#info-modal').transition({ opacity: 0 }, 250, function(){
                    $('#info-modal').hide();
                });
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


        // Showmenu Code

        $('#showmenu').on('click', function(e){ // When the horizontal bars button is clicked
            $('.content').toggleClass('show');
            e.preventDefault();
        });


        // Button click navigation code

        $('#prev').on('click', navigate_prev);    // previous image
        $('#next').on('click', navigate_next);    // next image
        $('#up').on('click', navigate_up);        // back (up) one project
        $('#down').on('click', navigate_down);    // forward (down) one project
        $('#info').on('click', show_info_modal);  // activate project info


        // Swipe navigation code

        $('body').on('swiperight', navigate_prev);  // previous image
        $('body').on('swipedown', navigate_up);     // back (up) one project
        $('body').on('swipeup', navigate_down);     // forward (down) one project
        $('body').on('swipeleft', navigate_next);   // next image


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


    </script>
</html>
