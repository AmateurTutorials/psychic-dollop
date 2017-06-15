<?php
    if(!isset($_GET["page"])) {
        header("Location: index.php?page=home.php");
    }
?>
<!doctype html>
<html>
    <head>
        <title>Test Page</title>
        <style>

            #header {
                border-bottom: 1px solid #333;
            }

            #navigation {
                float: left;
                margin-right: -1px;
                padding-right: 20px;
                border-right: 1px solid #333;
            }

            #content {
                float: left;
                padding-left: 20px;
                border-left: 1px solid #333;
            }
        </style>
    </head>
    <body>
    <div id="header">
        <h1>Test Page</h1>
    </div>
    <div id="navigation">
        <ul>
            <?php
                $pages = scandir("pages/");
                foreach ($pages as $key => $value) {
                    if(substr($value, -4 ) === ".php") {
            ?> 
                        <li>
                            <a href="?page=<?=$value;?>">
                                <?=substr($value, 0, -4);?> 
                            </a>
                        </li>
            <?php
                    }
                }
            ?> 
        </ul>
    </div>
    <div id="content">
        <?php
            require("pages/".$_GET["page"]);
        ?> 
    </div>
    </body>
</html>