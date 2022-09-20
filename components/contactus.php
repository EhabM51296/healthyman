<?php
     
      $contactInputs = array(
          ["placeholder" => "Name",
          "type" => "text",
          ],
          ["placeholder" => "Email",
          "type" => "email",
          ],
          ["placeholder" => "Phone",
          "type" => "text",
          ],
          ["placeholder" => "Message",
          "type" => "textarea"],

      );
?>

    <div id="contactUs" class="oddSection section">
        <div class="sectionTitleContainer">
            <h1 class="sectionTitle">
                Contact Us
            </h1>
        </div>
            <div class="formContainer">
                <form>
                    <?php
                        for($i = 0;$i<count($contactInputs);$i++)
                        {
                            if($contactInputs[$i]["type"] == "textarea")
                            {
                                echo "<div class='form-input-container'>
                                            <textarea class='form-input medText'></textarea>
                                            <span class='lightText'>".$contactInputs[$i]["placeholder"]."</span>
                                      </div>";
                            }
                            else
                            {
                                echo "<div class='form-input-container'>
                                            <input type='".$contactInputs[$i]["type"]."'  
                                            class='form-input medText'/>
                                            <span class='lightText'>".$contactInputs[$i]["placeholder"]."</span>
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


