<header id="header">
    <div class="imageBackground">
        <img src="<?php echo $imgLocation; ?>gym.jpg" width="100%" />
    </div>
    <div id="headerCover"></div>
    <nav id="navbar">
            <div id="headerLogo">
                <h1 class="logoText miniTitle mainColor2"><span class="mainColor">Healthy</span>Man</h1>
            </div>
            <div id="headerLinks">
                <ul>   
                    <?php
                        for($i = 0;$i<count($headerLinks);$i++)
                        {
                            if($i == count($headerLinks) -1)
                            {
                                echo "<li>
                                <a href='#' class='lightText mainColor2 textDecorationZero boxButton'>".$headerLinks[$i]."</a>
                          </li>";
                            }
                            else
                            {
                                echo "<li>
                                <a href='#' class='lightText mainColor2 textDecorationZero'>".$headerLinks[$i]."</a>
                          </li>";
                            }
                           
                        }
                    ?> 
                    
                </ul>
            </div>
    </nav>
    <div id="headerContent" class="mainColor2">
        <h3 class="miniTitle">Be an inspiration</h3>
        <h1 class="title">Exercise Your Mind And Body</h1>
        <p class="medText">If you’ve ever experienced “barre shake” while plié-ing or trembled during a plank, you might have wondered what makes your muscles occasionally feel shaky when you’re working out.</p>
    </div>
</header>
