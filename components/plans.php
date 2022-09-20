<?php
     $healthyImages = array("boxing.png","dumbbell.png","yoga.png","diet.png");
    $plans = array(
        ["type" => "Beginner",
        "duration" => "one week",
        "price" => "Free",
        "benefits" => array(
            "Three online fitness sessions",
            "Get an advice from our nutritionist",
            "Chat with other athletes"
        ),

    ],
    ["type" => "Basic",
    "duration" => "one month",
    "price" => "20$",
    "benefits" => array(
        "Three online fitness sessions per week",
        "Get the suitable diet for your body",
        "Join the yoga session every week",
        "Join the martial art class you want once a week",
        "Collect rewards then Join challenges and events",
        "Chat with other athletes"
    ),

    ],
    [       "type" => "Pro",
        "duration" => "one year",
        "price" => "100$",
        "benefits" => array(
            "Choose the time and type of your online classes",
            "Get the suitable diet for your body",
            "One to one classes",
            "Collect rewards then Join challenges and events",
            "Chat with other athletes",
        ),

    ],
    ["type" => "Beginner",
    "duration" => "one week",
    "price" => "Free",
    "benefits" => array(
        "Three online fitness sessions",
        "Get an advice from our nutritionist",
        "Chat with other athletes"
    ),

],
["type" => "Basic",
"duration" => "one month",
"price" => "20$",
"benefits" => array(
    "Three online fitness sessions per week",
    "Get the suitable diet for your body",
    "Join the yoga session every week",
    "Join the martial art class you want once a week",
    "Collect rewards then Join challenges and events",
    "Chat with other athletes"
),

],
[       "type" => "Pro",
    "duration" => "one year",
    "price" => "100$",
    "benefits" => array(
        "Choose the time and type of your online classes",
        "Get the suitable diet for your body",
        "One to one classes",
        "Collect rewards then Join challenges and events",
        "Chat with other athletes",
    ),

],
    );
?>
<div id="plans" class="evenSection section">
    <div class="sectionTitleContainer">
        <h1 class="sectionTitle">
            Choose Your Plan
        </h1>
    </div>
    <div id="rotator">
        <div class="sectionTitleContainer">
            <h3 class="medText mainColor2 textCenter">
                Build Your Healthy Body
            </h3>
        </div>
        <div id="sliderContainer">
            <?php
                for($i=0;$i<count($healthyImages);$i++)
                {
                    echo "<span style='--i:".($i + 1)."'><img src='assets/images/".$healthyImages[$i]."' /></span>";
                }
            ?>
        </div>
    </div>

    <div class="grid3 pdTB20">
        <?php
            for($i=0;$i<count($plans);$i++)
            {
                echo "
                        <div class='planBox bgColor4 pdTB20'>
                            <div class='planTitle miniTitle mainColor textCenter'>".$plans[$i]["type"]."</div>
                            <div class='planDuration medText mainColor3 textCenter'>".$plans[$i]["duration"]."</div>
                            <div class='planPrice medText bgColor mainColor2 pdTB10 textCenter'>".$plans[$i]["price"]."</div>
                            <div class='planBenefits lightText mainColor3'>";
                            for($j = 0;$j<count($plans[$i]["benefits"]);$j++)
                            {
                                echo "<div class='plantBenefitsText pdTB5 w90 mgAuto flexVC'>
                                <span class='rightIcon'></span>
                                    <div>".$plans[$i]["benefits"][$j]."</div>
                                </div>";
                            }
                            
                        echo "</div>
                        <div class='planButton pdTB10 textCenter'>
                            <button class='form-input'>Read More</button>
                        </div>

                        </div>";
            }
        ?>
    </div>
    
</div>

