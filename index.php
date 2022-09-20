
<?php
        require "classes/page.php";
        $styles = array("style.css","components.css");
        $scripts = array("arrow.js","header.js");
        $sections = array(
            "header.php",
            "gridProject.php",
            "services.php",
            "classes.php",
            "team.php",
            "goal.php",
            "plans.php",
            "contactus.php",
        );
        $page = new Page("en","test title","hello from test","testinmg my class","ehab",$styles,$scripts,$sections);
        $page->displayPage();
?>


        
       

