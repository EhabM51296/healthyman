<?php
 $goal = array(
    [
        "title" => "Build Perfect Body",
        "description" => "Nisi sociosqu elit porta viverra orci, porta class pulvinar pharetra auctor Sociis, enim. Gravida habitant integer blandit lacus.",
    ],
    [
        "title" => "Workout Programs",
        "description" => "Nisi sociosqu elit porta viverra orci, porta class pulvinar pharetra auctor Sociis, enim. Gravida habitant integer blandit lacus."
    ],
    [
        "title" => "Qualified Trainers and Nutritionists",
        "description" => "Nisi sociosqu elit porta viverra orci, porta class pulvinar pharetra auctor Sociis, enim. Gravida habitant integer blandit lacus.",
        
    ]
    );
?>
<div class="specialDiv w100 absolute00 bgColor">
        <h1 class="mainColor3 sectionTitle textCenter">Time to Change</h1>
</div>
<div id="goal" class="oddSection section flexVC relative">
    <div id="goalImg">
            <img src='assets/images/goal.png' width=100%/>
    </div>
    <div id="goalTextContainer">
        <div id="goalHeader">
            <h3 class="miniTitle mainColor3">
                EVERY THING IS POSSIBLE WITH US
            </h3>
            <p class="lightText mainColor3">
            Penatibus amet mus consequat nonummy volutpat pede mollis nec conubia ut. Enim nascetur tristique in hymenaeos neque adipiscing dictum.
            </p>
        </div>
        <div id="goalDetails">
            <?php
                for($i = 0;$i<count($goal);$i++)
                {
                    echo "
                            <div class='goalDescription flex w100 pdTB10'>
                                <div class='goalIcon'>
                                    <div class='circleIcon'></div>
                                </div>
                                <div class='goalText'>
                                    <div class='goalTitle mainColor3 medText'>".$goal[$i]['title']."</div>
                                    <div class='goalMiniDescription mainColor3 lightText'>".$goal[$i]['description']."</div>
                                </div>
                            </div>
                        ";
                }
            ?>
        </div>
    </div>
    
</div>

