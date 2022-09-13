<div id="goal" class="oddSection section">
    <div class="specialDiv">
        <h1 class="mainColor3 sectionTitle">Time to Change</h1>
    </div>
    <div id="goalImg">
            <img src="<?php echo $imgLocation;?>goal.png" width=100%/>
    </div>
    <div id="goalDetails">
        <div id="goalHeader">
            <h3 class="miniTitle mainColor3">
                EVERY THING IS POSSIBLE WITH US
            </h3>
            <p clas="lightText mainColor3">
            Penatibus amet mus consequat nonummy volutpat pede mollis nec conubia ut. Enim nascetur tristique in hymenaeos neque adipiscing dictum.
            </p>
        </div>
        <div id="goalDetails">
            <?php
                for($i = 0;$i<count($goal);$i++)
                {
                    echo "
                            <div class='goalDescription'>
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

