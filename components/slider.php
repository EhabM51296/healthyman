<div id="rotator" class="evenSection section">
    <div class="sectionTitleContainer">
        <h1 class="sectionTitle">
            Build Your Healthy Body
        </h1>
    </div>
    <div id="sliderContainer">
        <?php
            for($i=0;$i<count($healthyImages);$i++)
            {
                echo "<span style='--i:".($i + 1)."'><img src='".$imgLocation.$healthyImages[$i]."' /></span>";
            }
        ?>
    </div>
    <div id="contactUs">
            <div class="formContainer">
                <div class="formTitle">
                    <h3 class="miniTitle mainColor2">
                        Contact Us
                    </h3>
                </div>
                <form>
                    <?php
                        for($i = 0;$i<count($contactInputs);$i++)
                        {
                            if($contactInputs[$i]["type"] == "textarea")
                            {
                                echo "<div class='form-input-container'>
                                            <textarea placeholder='".$contactInputs[$i]["placeholder"]."' class='form-input'></textarea>
                                      </div>";
                            }
                            else
                            {
                                echo "<div class='form-input-container'>
                                            <input type='".$contactInputs[$i]["type"]."' placeholder='".$contactInputs[$i]["placeholder"]."' 
                                            class='form-input'/>
                                      </div>";
                            }
                           
                        }
                    ?>
                    <div class="form-input-container">
                        <button type="submit" class="form-input">Send</button>
                    </div>
                </form>
            </div>
    </div>
</div>

