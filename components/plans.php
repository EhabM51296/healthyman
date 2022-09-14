<div id="plans" class="evenSection section">
    <div class="sectionTitleContainer">
        <h1 class="sectionTitle">
            Choose Your Plan
        </h1>
    </div>

    <div class="grid3">
        <?php
            for($i=0;$i<count($plans);$i++)
            {
                echo "
                        <div class='planBox bgGrey textCenter'>
                            <div class='planTitle miniTitle mainColor'>".$plans[$i]["type"]."</div>
                            <div class='planDuration medText mainColor3'>".$plans[$i]["duration"]."</div>
                            <div class='planPrice medText bgGreen mainColor2 pdTB10'>".$plans[$i]["price"]."</div>
                            <div class='planBenefits lightText mainColor3'>";
                            for($j = 0;$j<count($plans[$i]["benefits"]);$j++)
                            {
                                echo "<div class='plantBenefitsText'>
                                    ".$plans[$i]["benefits"][$j]."
                                </div>";
                            }
                            
                        echo "</div>
                        <div class='planButton'>
                            <button class='form-input'>Read More</button>
                        </div>

                        </div>";
            }
        ?>
    </div>
    
</div>

