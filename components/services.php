<?php
$services = array(
    ["title" => "Fitness",
    "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
    "btnText" => "ReadMore"],
    ["title" => "Muai Thai",
    "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
    "btnText" => "ReadMore"],
    ["title" => "Karate",
    "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
    "btnText" => "ReadMore"],
    ["title" => "Healthy Diet",
    "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
    "btnText" => "ReadMore"],
    ["title" => "Body Building",
    "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
    "btnText" => "ReadMore"],
    ["title" => "Yoga",
    "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
    "btnText" => "ReadMore"]
);
?>
<div id="Services" class="section oddSection">
    <div class="sectionTitleContainer">
        <h1 class="sectionTitle">
            Services
        </h1>
    </div>
    <div id="servicesContainer" class="grid3 pdTB20">
        <?php
            for($i=0;$i<count($services);$i++)
            {
                echo "
                <div class='serviceBox bgGrey pdTB20'>
                    <div class='serviceTitle'>
                        <h1 class='miniTitle mainColor'>".$services[$i]["title"]."</h1>
                    </div>
                    <div class='serviceDescription'>
                        <p class='lightText mainColor3 w90 mgAuto pdTB10'>".$services[$i]["description"]."</p>
                    </div>
                    <div class='serviceButton textCenter'>
                        <a href='#' class='medText mainColor textDecorationZero'>".$services[$i]["btnText"]."</a>
                    </div>
                </div>";
            }
        ?>
    </div>
</div>