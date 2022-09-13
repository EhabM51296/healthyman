<div id="Services" class="section oddSection">
    <div class="sectionTitleContainer">
        <h1 class="sectionTitle">
            Services
        </h1>
    </div>
    <div id="servicesContainer" class="grid3">
        <?php
            for($i=0;$i<count($services);$i++)
            {
                echo "
                <div class='serviceBox bgGrey'>
                    <div class='serviceTitle'>
                        <h1 class='miniTitle mainColor'>".$services[$i]["title"]."</h1>
                    </div>
                    <div class='serviceDescription'>
                        <p class='lightText mainColor3'>".$services[$i]["description"]."</p>
                    </div>
                    <div class='serviceButton textCenter mgTop-20'>
                        <a href='#' class='medText mainColor textDecorationZero'>".$services[$i]["btnText"]."</a>
                    </div>
                </div>";
            }
        ?>
    </div>
</div>