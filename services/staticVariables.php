<?php
    $headerLinks = array("Home","Services","Team","Contact us","Login/Signup");

    $services = array(
        ["title" => "Fitness",
        "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
        "btnText" => "ReadMore"],
        ["title" => "Muai Thai",
        "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
        "btnText" => "ReadMore"],
        ["title" => "Karate",
        "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
        "btnText" => "ReadMore"],
        ["title" => "Healthy Diet",
        "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
        "btnText" => "ReadMore"],
        ["title" => "Body Building",
        "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
        "btnText" => "ReadMore"],
        ["title" => "Yoga",
        "description" => "Suscipit luctus facilisis purus habitasse et pulvinar ad semper malesuada lectus dis mauris ridiculus faucibus turpis.",
        "btnText" => "ReadMore"]
    );

    $team = array(
        ["name" => "Undefined",
        "job" => "Fitness Trainer",
        "image" => "coach.jpg",
        "certification" => "Certified fitness coach",
        ],
        ["name" => "Undefined",
        "job" => "Muai Thai Trainer",
        "image" => "coach.jpg",
        "certification" => "Arab muai thai world champion",
        ],
        ["name" => "Undefined",
        "job" => "Karate Trainer",
        "image" => "coach.jpg",
        "certification" => "Arab karate world champion",
        ],
        ["name" => "Undefined",
        "job" => "BodyBuilding Trainer",
        "image" => "coach.jpg",
        "certification" => "undefined",
        "certification" => "Certified bodybuilding coach",
        ],
        ["name" => "Undefined",
        "job" => "Yoga Trainer",
        "image" => "coach.jpg",
        "certification" => "Certified Yoga coach",
        ],
        ["name" => "Undefined",
        "job" => "Nutritionist",
        "image" => "coach.jpg",
        "certification" => "Certified nutritionist ",
        ],
    );
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
        $healthyImages = array("boxing.png","dumbbell.png","yoga.png","diet.png");
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
            );
?>