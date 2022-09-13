<div id="team" class="evenSection section">
    <div class="sectionTitleContainer">
        <h1 class="sectionTitle">
            Team
        </h1>
    </div>
    <div id="teamMembers">
        <div class="wrapper">
                <?php
                    for($i=0;$i<count($team);$i++)
                    {
                        echo "
                            <div class='member'>
                                <div class='memberImg'>
                                    <img src='".$imgLocation.$team[$i]['image']."' />
                                </div>
                               <div class='memberDetails'>
                                    <h3 class='miniTitle mainColor2'>".$team[$i]['name']."</h3>
                                    <h4 class='medText mainColor3'>".$team[$i]['job']."</h4>
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

