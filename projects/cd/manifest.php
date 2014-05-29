<html>
    <head></head>
    <body>

        <?php

        $title = "Tibor Kalman/System Of A Down CD Packaging";

        $description = "Packaging for a System Of A Down album (\"Steal This Album\") in the style of researched designer Tibor Kalman. Twelve highly-disjointed book board panels describe the childish habits of Earth's leadership.";

        $tools = array("Apple iMac","Wacom Intuos","Trusty OLFA knife","Adobe Illustrator CS3","Adobe Photoshop CS3");

        $disciplines = array("Packaging","Typography");

        $year = "2009";

        $doc_dir_local = "/cd";
        $doc_dir_projects = "/portfolio/projects";
        $doc_dir = $_SERVER["DOCUMENT_ROOT"].$doc_dir_projects.$doc_dir_local;
        foreach(glob("$doc_dir/*.jpg") as $file) {
          echo "<li><a href='$file'>$file</a></li>", PHP_EOL;
        }

        ?>

    </body>
</html>
