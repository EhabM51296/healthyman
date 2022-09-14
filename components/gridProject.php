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
                                <p class='medText mainColor2'>".$webGrid[$i]["description"]."</p>
                            </div>
                        </div>
                    ";
            }
        ?>
    </div>
</div>

