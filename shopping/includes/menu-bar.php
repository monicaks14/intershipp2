<?php

$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[3];

?><div class="header-nav animate-dropdown">
    <div class="container">
        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse"
                    class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="nav-bg-class">
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
                    <div class="nav-outer">
                        <ul class="nav navbar-nav">
                            <li
                                class=" <?= ($first_part !== 'sellplants.php' && $first_part !== 'donate.php')?'active dropdown yamm-fw': 'dropdown yamm-fw'?>">
                                <a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
                            </li>

                            <li
                                class=" <?= ($first_part!== 'donate.php' && $first_part =='sellplants.php' )?'active dropdown yamm-fw': 'dropdown yamm-fw'?>">

                                <a href="sellplants.php"> Sell Plants</a>
                            </li>

                            <li
                                class=" <?= ($first_part== 'donate.php' && $first_part != 'sellplants.php')?'active dropdown yamm-fw': 'dropdown yamm-fw'?>">

                                <a href="donate.php"> Donate </a>
                            </li>


                        </ul><!-- /.navbar-nav -->
                        <div class="clearfix"></div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>