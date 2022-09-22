<?php
$team = array(
    ["name" => "Undefined",
    "job" => "Fitness Trainer",
    "image" => "coach.jpg",
    "certification" => "Certified fitness coach",
    ],
    ["name" => "Undefined",
    "job" => "Muai Thai Trainer",
    "image" => "coach.jpg",
    "certification" => "Arab muai thai world champion",
    ],
    ["name" => "Undefined",
    "job" => "Karate Trainer",
    "image" => "coach.jpg",
    "certification" => "Arab karate world champion",
    ],
    ["name" => "Undefined",
    "job" => "BodyBuilding Trainer",
    "image" => "coach.jpg",
    "certification" => "undefined",
    "certification" => "Certified bodybuilding coach",
    ],
    ["name" => "Undefined",
    "job" => "Yoga Trainer",
    "image" => "coach.jpg",
    "certification" => "Certified Yoga coach",
    ],
    ["name" => "Undefined",
    "job" => "Nutritionist",
    "image" => "coach.jpg",
    "certification" => "Certified nutritionist ",
    ],
);
?>
<div id="team" class="evenSection section">
    <div class="sectionTitleContainer">
        <h1 class="sectionTitle">
            Team
        </h1>
    </div>
    <div id="teamMembers" class="carouselRow">
        <div class="wrapper">
                <?php
                    for($i=0;$i<count($team);$i++)
                    {
                        echo "
                            <div class='BoxItem member'>
                                <div class='w100'>
                                    <img src='assets/images/".$team[$i]['image']."' class='w100'/>
                                    <div class='BoxItemDetails'>
                                        <h3 class='miniTitle mainColor2'>".$team[$i]['name']."</h3>
                                        <h4 class='medText mainColor3'>".$team[$i]['job']."</h4>
                                        <p class='lightText mainColor3'>".$team[$i]["certification"]."</p>
                                    </div>
                                </div>
                              
                            </div>

                        ";
                    }
                ?>
        </div>

    </div>
    <div class="arrowContainer">
                    <div class="leftArrow" id="left_member"></div>
                    <div class="rightArrow" id="right_member"></div>
    </div>
    
</div>

