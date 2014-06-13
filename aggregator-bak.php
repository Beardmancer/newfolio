<?php

    // INITIALIZE FILESYSTEM STUFF
    $path = getcwd()."/projects";  // set path of current location
    $project_iterator = new DirectoryIterator($path);  // create project iterator

    // START EACH PROJECT
    $project_count = 0;  // set project counter
    foreach ($project_iterator as $project) {

        // FILESYSTEM CLEANUP AND IGNORE
        if($project->isDot()) continue;  // ignore . and ..
        if(strpos($project, '.') !== (int) 0) {  // ignore hidden files that start with "."

            // echo $project."<br />";  // print current project

            // GET PROJECT SPECIFIC FILES
            include getcwd().'/projects/'.$project.'/manifest.php';  // grab the manifest file for this project (this brings in $project_data)
            $doc_dir = getcwd()."/projects/".$project;  // concatenate the current working directory with the specific project directory

            // PHOTO STUFF
            $i = 1;  // set photo counter
            $project_data["photos"] = array();  // create a new array within $project_data for photos
            foreach(glob("$doc_dir/*.jpg") as $file) {  // find all the .jpg files in the project folder
                array_push($project_data["photos"], "projects/".$project."/".basename($file));  // push each photo url into $project_data
                $i++;  // add 1 to the photo counter
            }

            // ITERATE PROJECT COUNTER
            $project_count++;

            // MAKE A MOTHERFUCKIN' PROJECT!
            echo "var project0".$project_count." = new Project(";  // establish js object
            echo "\"".$project_count."\", ";  // pass project number to constructor function
            echo "\"".$project_data["title"]."\", "; // pass the title
            echo "\"".$project_data["description"]."\", ";  // pass the description
            echo "[";
            $i = 1;  // set tools counter
            foreach ($project_data["tools"] as $tool) {  // pass each tool into an array
                echo "\"".$tool."\"";
                if ($i < count($project_data["tools"])) {
                    echo ", ";
                }
                $i++;
            }
            echo "], ";
            echo "\"".$project_data["year"]."\", ";
            echo "[";
            $i = 1;  // set photos counter
            foreach ($project_data["photos"] as $photo) {  // pass each photo into an array
                echo "\"".$photo."\"";
                if ($i < count($project_data["photos"])) {
                    echo ", ";
                }
                $i++;
            }
            echo "]);";

        }
    }

?>
