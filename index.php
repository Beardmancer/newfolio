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

        <!-- jQuery stuff -->
        <script src="js/jquery-min.js"></script>
        <!-- <script src="js/jquery-1.8.0.min.js"></script> -->
        <!-- <script src="js/jquery-ui-1.10.4/js/jquery-ui-1.10.4.min.js"></script> -->

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
                        <li class="showmenu"><a href="#" class="nav-item"><i class="fa fa-bars fa-fw"></i></a></li>
                        <li class="prev"><a href="#" class="nav-item"><i class="fa fa-long-arrow-left fa-fw"></i></a></li>
                        <li class="up"><a href="#" class="nav-item"><i class="fa fa-long-arrow-up fa-fw"></i></a></li>
                        <li class="down"><a href="#" class="nav-item"><i class="fa fa-long-arrow-down fa-fw"></i></a></li>
                        <li class="next"><a href="#" class="nav-item"><i class="fa fa-long-arrow-right fa-fw"></i></a></li>
                        <li><a href="#" class="nav-item"><i class="fa fa-info-circle fa-fw"></i></a></li>
                    </ul>
                </nav>
            </div>
            <!-- <script type="text/javascript">

                document.write("<div id=\""+project01.id+"\" class=\"slider\">");

                    document.write("<div class=\"holder\" style=\"width: "+(project01.photos.length + 1)+"00%\">");

                        for (i=0; i<project01.photos.length; i++){

                            document.write("<div class=\"slide\" style=\"background: transparent url('"+project01.photos[i]+"') center center no-repeat; background-size: cover;\"></div>");

                        };

                    document.write("</div>");

                document.write("<div class=\"slide filler\"></div>");

            </script> -->

            <!-- <div id="project01" class="slider">
                <div class="holder" style="width: 600%">
                    <div class="slide" style="background: transparent url('projects/cd/DSC_5736.jpg') center center no-repeat; background-size: cover;"></div>
                    <div class="slide" style="background: transparent url('projects/cd/DSC_5737.jpg') center center no-repeat; background-size: cover;"></div>
                    <div class="slide" style="background: transparent url('projects/cd/DSC_5765.jpg') center center no-repeat; background-size: cover;"></div>
                    <div class="slide" style="background: transparent url('projects/cd/DSC_5739.jpg') center center no-repeat; background-size: cover;"></div>
                    <div class="slide" style="background: transparent url('projects/cd/DSC_5740.jpg') center center no-repeat; background-size: cover;"></div>
                    <div id="filler" class="slide"></div>
                </div>
            </div> -->

            <div class="slider">
                <div class="holder">

                    <!-- <?php

                    echo '<script type="text/javascript">';

                    // Call Projects

                    include 'aggregator.php';

                    echo '</script>';

                    ?> -->

                    <script type="text/javascript">

                        var projects_all = [<?php include 'aggregator.php'; ?>];

                    </script>

                    <!-- <div id="project01" class="holder-inner" style="width: 600%; top: 0; left: 0;">
                        <div class="slide" style="background: transparent url('projects/cd/DSC_5736.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide" style="background: transparent url('projects/cd/DSC_5737.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide" style="background: transparent url('projects/cd/DSC_5765.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide" style="background: transparent url('projects/cd/DSC_5739.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide" style="background: transparent url('projects/cd/DSC_5740.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide"></div>
                    </div> -->
                    <!-- <script type="text/javascript">
                        document.write("<div id=\"project02\" class=\"holder-inner\" style=\"width: 600%; top: "+$('.slide').height()+"px; left: 0;\">");
                    </script> -->
                    <!-- <div id="project02" class="holder-inner" style="width: 600%; top: 500px;">
                        <div class="slide" style="background: transparent url('projects/docking/DSC_5029.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide" style="background: transparent url('projects/docking/DSC_5030.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide" style="background: transparent url('projects/docking/DSC_5035.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide" style="background: transparent url('projects/docking/DSC_5043.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide" style="background: transparent url('projects/docking/DSC_5047.jpg') center center no-repeat; background-size: cover;"></div>
                        <div class="slide"></div>
                    </div> -->
                    <!-- <script type="text/javascript">
                        document.write("<div class=\"holder-inner\" style=\"width: 600%; top: "+($('.slide').height())*2+"px; left: 0;\">");
                    </script> -->
                    <!-- <div class="holder-inner" style="width: 600%; top: 1000px;">
                        <div class="slide"></div>
                    </div> -->
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
        var longTransition = 1000;


        // Functions


        // Showmenu Code

        $('.showmenu').on('click', function(e){ // When the horizontal bars button is clicked
            $('.content').toggleClass('show');
            e.preventDefault();
        });


        // Previous Code

        $('.prev').on('click', function(e){
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
        });


        // Next Code

        $('.next').on('click', function(e){
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
        });


        // Up Code

        $('.up').on('click', function(e){
            if (countCurrentProject > 1) {
                countCurrentProject--
                var height = $('.slide').height();
                $('.slider > .holder').transition({ top: "+=" + height }, shortTransition, function() {
                    // Animation complete.
                });
            }else{
                countCurrentProject = projects_all.length;
                var height = $('.slide').height();
                $('.slider > .holder').transition({ top: (-countCurrentProject+1)*height }, longTransition, function() {
                    // Animation complete.
                });
            }
        });


        // Down Code

        $('.down').on('click', function(e){
            if (countCurrentProject < countTotalProjects) {
                countCurrentProject++
                var height = $('.slide').height();
                $('.slider > .holder').transition({ top: "-=" + height }, 500, function() {
                    // Animation complete.
                });
            }else{
                countCurrentProject = 1;
                var height = $('.slide').height();
                $('.slider > .holder').transition({ top: 0 }, 1000, function() {
                    // Animation complete.
                });
            }
        });


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
