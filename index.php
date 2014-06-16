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
        <!-- <script src="js/jquery.mobile-1.4.2.min.js"></script> note: causes craziness on mobile!-->

        <!-- jQuery Transit stuff -->
        <script src="js/jquery.transit.min.js"></script>

        <!-- jQuery animate-enhanced stuff "Tested with jQuery 1.3.2 to 1.8.0" -->
        <!-- <script src="js/jquery.animate-enhanced.min.js"></script> -->

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
    <body ontouchstart="" onmouseover="">
        <div class="content">
            <header role="banner">
                <a class="site-id" href="http://www.iantompkins.com">
                    <object type="image/svg+xml" data="img/logo.svg#sprite-logo-normal">
                        <img src="img/logo.png" alt="Ian Tompkins logo" />
                    </object>
                </a>
            </header>
            <div class="container">
                <nav>
                    <ul>
                        <li id="showmenu" class="nav-button showmenu"><a href="#" class="nav-item"><i class="fa fa-bars fa-fw"></i></a></li>
                        <li id="prev" class="nav-button"><a href="#" class="nav-item"><i class="fa fa-long-arrow-left fa-fw"></i></a></li>
                        <li id="up" class="nav-button"><a href="#" class="nav-item"><i class="fa fa-long-arrow-up fa-fw"></i></a></li>
                        <li id="down" class="nav-button"><a href="#" class="nav-item"><i class="fa fa-long-arrow-down fa-fw"></i></a></li>
                        <li id="next" class="nav-button"><a href="#" class="nav-item"><i class="fa fa-long-arrow-right fa-fw"></i></a></li>
                        <li id="info" class="nav-button"><span id="info-inner"></span></li>
                    </ul>
                </nav>
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


        // Functions

        function populate_info_button() {
            document.getElementById("info-inner").innerHTML = "<a href=\"#\" class=\"nav-item\"><i class=\"fa fa-info-circle fa-fw\"></i></a>"+projects_all[countCurrentProject-1]['title'];
        }

        function navigate_prev() {
            if (projects_all[countCurrentProject-1]['current_photo'] > 1) {
                projects_all[countCurrentProject-1]['current_photo']--
                var width = $('.slide').width();
                var currentProjectButton = '#project0'+countCurrentProject;
                $(currentProjectButton).transition({ left: "+=" + width }, shortTransition, function() {
                    // Animation complete.
                });
            }else{
                projects_all[countCurrentProject-1]['current_photo'] = projects_all[countCurrentProject-1]['photos'].length;
                var width = $('.slide').width();
                var currentProjectButton = '#project0'+countCurrentProject;
                $(currentProjectButton).transition({ left: (-projects_all[countCurrentProject-1]['current_photo']+1)*width }, longTransition, function() {
                    // Animation complete.
                });
            }
        }

        function navigate_next() {
            if (projects_all[countCurrentProject-1]['current_photo'] < projects_all[countCurrentProject-1]['photos'].length) {
                projects_all[countCurrentProject-1]['current_photo']++
                var width = $('.slide').width();
                var currentProjectButton = '#project0'+countCurrentProject;
                $(currentProjectButton).transition({ left: "-=" + width }, 500, function() {
                    // Animation complete.
                });
            }else{
                projects_all[countCurrentProject-1]['current_photo'] = 1;
                var width = $('.slide').width();
                var currentProjectButton = '#project0'+countCurrentProject;
                $(currentProjectButton).transition({ left: 0 }, 1000, function() {
                    // Animation complete.
                });
            }
        }

        function navigate_up() {
            if (countCurrentProject > 1) {
                countCurrentProject--
                var height = $('.slide').height();
                $('.slider > .holder').transition({ top: "+=" + height }, shortTransition, function() {
                    // Animation complete.
                });
                populate_info_button();
            }else{
                countCurrentProject = projects_all.length;
                var height = $('.slide').height();
                $('.slider > .holder').transition({ top: (-countCurrentProject+1)*height }, longTransition, function() {
                    // Animation complete.
                });
                populate_info_button();
            }
        }

        function navigate_down() {
            if (countCurrentProject < countTotalProjects) {
                countCurrentProject++
                var height = $('.slide').height();
                $('.slider > .holder').transition({ top: "-=" + height }, 500, function() {
                    // Animation complete.
                });
                populate_info_button();
            }else{
                countCurrentProject = 1;
                var height = $('.slide').height();
                $('.slider > .holder').transition({ top: 0 }, 1000, function() {
                    // Animation complete.
                });
                populate_info_button();
            }
        }


        // Info Button

        $(document).ready(function() {
            populate_info_button();
        });


        // Showmenu Code

        $('#showmenu').on('click', function(e){ // When the horizontal bars button is clicked
            $('.content').toggleClass('show');
            e.preventDefault();
        });


        // Button click navigation code

        $('#prev').on('click', navigate_prev);  // previous image
        $('#next').on('click', navigate_next);  // next image
        $('#up').on('click', navigate_up);      // back (up) one project
        $('#down').on('click', navigate_down);  // forward (down) one project


        // Keyboard navigation code
        document.onkeydown = function() {
            switch (window.event.keyCode) {
                case 37:
                case 65:
                    navigate_prev();  // previous image
                    break;
                case 38:
                case 74:
                case 87:
                    navigate_up();    // back (up) one project
                    break;
                case 39:
                case 68:
                    navigate_next();  // next image
                    break;
                case 40:
                case 75:
                case 83:
                    navigate_down();  // forward (down) one project
                    break;
            }
        };


        // Window Resize Code

        window.onresize=function(){
            var width = $('.slide').width();
            var height = $('.slide').height();
            var counterOne = 0;
            $('.holder').css("top",(-countCurrentProject+1)*height);
            do {
                var currentProjectResize = '#project0'+(counterOne+1);
                $(currentProjectResize).css("left",(-projects_all[counterOne]['current_photo']+1)*width);
                $(currentProjectResize).css("top",height*counterOne);
                counterOne++;
            }while(counterOne < projects_all.length)
        };


        // Old Code
        /*
        $('.prev').on('click', function(e){
            var width = $('.slide').width();
            $('.holder').animate({ left: "+=" + width }, 500, function() {
                // Animation complete.
            });
        });
        $('.next').on('click', function(e){
            var width = $('.slide').width();
            $('.holder').animate({ left: "-=" + width }, 500, function() {
                // Animation complete.
            });
        });
        $(document).on('scroll', function(e){
            var width = $(window).width();
            $('.holder').animate({ left: "-=" + width }, 500, function() {
                // Animation complete.
            });
            e.preventDefault();
        });
        */
    </script>
</html>
