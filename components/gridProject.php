<?php

$webGrid = array(
    ["title" => "Online Classes",
    "description" => "Join our different types of classes online and improve your performance, strength and health. ",
    ],
    ["title" => "Challenges and Rewards",
     "description" => "Weekly events and challenegs with athletes around the world.",
    ],
    ["title" => "Free Trial Classes",
    "description" => "Start your journey with free week of fitness classes.",
     ],
    );
?>
<div id="gridWebSection" class="evenSection section">
    <div id="gridWeb" class="grid3">
        <?php
            for($i = 0;$i<count($webGrid);$i++)
            {
                echo"
                        <div>
                            <div class='gridWebTitle'>
                                <h2 class='miniTitle mainColor2'>".$webGrid[$i]["title"]."</h2>
                            </div>
                            <div class='gridWebDescription'>
                                <p class='medText mainColor2 w90'>".$webGrid[$i]["description"]."</p>
                            </div>
                        </div>
                    ";
            }
        ?>
    </div>
</div>

