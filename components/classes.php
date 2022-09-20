<?php
    $classes = array(
        [
            "name" => "Body Building",
            "schedule" => array(
                "days" => array(
                "Mon, Tues, Wed ","Thurs, Fri, Sat","Sun",
            ),
            "time" => array(
                "5:00 PM - 7:00 PM","5:00 PM - 7:00 PM","Closed",
            ),
          ),
         "description" => "Venenatis. Cursus feugiat natoque urna dictum magnis est quam at at lacus curae; potenti taciti praesent.",
         "image" => "classes.jpg",
        ],
        ["name" => "Karate",
          "schedule" => array(
                "days" => array(
                "Mon, Tues, Wed ","Thurs, Fri, Sat","Sun",
            ),
            "time" => array(
                "5:00 PM - 7:00 PM","5:00 PM - 7:00 PM","Closed",
            ),
          ),
         "description" => "Venenatis. Cursus feugiat natoque urna dictum magnis est quam at at lacus curae; potenti taciti praesent.",
         "image" => "classes.jpg",
        ],
        ["name" => "Muai Thai",
        "schedule" => array(
            "days" => array(
              "Mon, Tues, Wed ","Thurs, Fri, Sat","Sun",
            ),
          "time" => array(
              "5:00 PM - 7:00 PM","5:00 PM - 7:00 PM","Closed",
          ),
        ),
       "description" => "Venenatis. Cursus feugiat natoque urna dictum magnis est quam at at lacus curae; potenti taciti praesent.",
       "image" => "classes.jpg",
      ],
      ["name" => "Fitness",
      "schedule" => array(
            "days" => array(
            "Mon, Tues, Wed ","Thurs, Fri, Sat","Sun",
        ),
        "time" => array(
            "5:00 PM - 7:00 PM","5:00 PM - 7:00 PM","Closed",
        ),
      ),
     "description" => "Venenatis. Cursus feugiat natoque urna dictum magnis est quam at at lacus curae; potenti taciti praesent.",
     "image" => "classes.jpg",
    ],

    ["name" => "Yoga",
    "schedule" => array(
        "days" => array(
          "Thurs ","Sun ","Mon, Tues, Wed, Fri",
      ),
      "time" => array(
          "5:00 PM - 7:00 PM","5:00 PM - 7:00 PM","Closed",
      ),
    ),
   "description" => "Venenatis. Cursus feugiat natoque urna dictum magnis est quam at at lacus curae; potenti taciti praesent.",
   "image" => "classes.jpg",
  ],
    
    );
    ?>
<div id="classes" class="evenSection section">
    <div class="sectionTitleContainer">
        <h1 class="sectionTitle">
            Our Classes
        </h1>
    </div>
    <div id="classesList" class="carouselRow">
        <div class="wrapper">
                <?php
                    for($i=0;$i<count($classes);$i++)
                    {
                        echo "
                            <div class='BoxItem classItem'>
                                <div class='w100'>
                                    <img src='assets/images/".$classes[$i]['image']."' class='w100' />
                                </div>
                               <div class='BoxItemDetails'>
                                    <h3 class='miniTitle mainColor2'>".$classes[$i]['name']."</h3>
                                    <div class='classTimes mgAuto w90 mainColor2 pdTB10 medText'>
                                    ";
                                    
                                    for($j = 0; $j < count($classes[$i]["schedule"]["days"]);$j++)
                                    {
                                        echo "
                                        <div class='sceduleRow flexBetween'>
                                            <div>".$classes[$i]["schedule"]["days"][$j]."</div>
                                            <div>".$classes[$i]["schedule"]["time"][$j]."</div>
                                        </div>
                                        ";
                                    }
                                    echo "
                                    </div>
                                    <div class='mainColor3 lightText'>".$classes[$i]["description"]."</div>
                               </div>
                            </div>

                        ";
                    }
                ?>
        </div>

    </div>
    <div class="arrowContainer">
                    <div class="leftArrow" id="left_classItem"></div>
                    <div class="rightArrow" id="right_classItem"></div>
    </div>
    
</div>

