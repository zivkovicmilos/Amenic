<!--
    Author: Andrija Kolić
    Github: k0lic
-->
<!DOCTYPE html>
<html lang="en">
    <?php
        $errors = [];
        if (isset($_COOKIE["addEmployeeErrors"]))
        {
            $thereAreErrors = true;
            parse_str($_COOKIE["addEmployeeErrors"], $errors);
            setcookie("addEmployeeErrors", "", time() - 3600, "/");
        }
        $values = [];
        if (isset($_COOKIE["addEmployeeValues"]))
        {
            parse_str($_COOKIE["addEmployeeValues"], $values);
            setcookie("addEmployeeValues", "", time() - 3600, "/");
        }
    ?>
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="/css/style.css"/>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/favicon.ico">
		<title>Amenic - My cinema</title>
	</head>
    <body <?php
            if (isset($optionPrimary) && $optionPrimary == 2)
            {
                $onLoad = "";
                $onLoad .= "stopModalPropagation(); document.getElementById('employeeModal').addEventListener(('click'), (e) => { e.stopPropagation(); return false; });";
                if (isset($thereAreErrors))
                    $onLoad .= " document.getElementById('employeeModalWrapper').classList.add('showModal');";
                echo "onLoad=\"".$onLoad."\"";
            }
            ?>>
        <div class="container">
            <!-- SIDE NAVBAR -->
            <div class="menuBar">
                <a href="/"><img src="/assets/logo.svg" class="logo" alt="Amenic" /></a>
                <!-- NAV ITEMS -->
                <ul class="nav">
                    <?php
                        if (!isset($isWorker) || $isWorker==false)
                        {

                            // MOVIES //

                            if (!isset($optionPrimary) || $optionPrimary==0)
                                echo "<li><div class=\"activeMenuText\">Movies</div></li>";
                            else
                                echo "<li><a href=\"/Cinema\">Movies</a></li>";

                            // ROOMS //

                            if (isset($optionPrimary) && $optionPrimary==1)
                                echo "<li><div class=\"activeMenuText\">Rooms</div></li>";
                            else
                                echo "<li><a href=\"/Cinema/Rooms\">Rooms</a></li>";

                            // EMPLOYEES //

                            if (isset($optionPrimary) && $optionPrimary==2)
                                echo "<li><div class=\"activeMenuText\">Employees</div></li>";
                            else
                                echo "<li><a href=\"/Cinema/Employees\">Employees</a></li>";

                            // CINEMA PAGE //

                            echo "<li><a href=\"/Theatre\">My page</a></li>";

                        }
                        else
                        {
                            // MOVIES //

                            if (!isset($optionPrimary) || $optionPrimary==0)
                                echo "<li><div class=\"activeMenuText\">Movies</div></li>";
                            else
                                echo "<li><a href=\"/Cinema\">Movies</a></li>";

                            // RESERVATIONS //

                            if (isset($optionPrimary) && $optionPrimary==1)
                                echo "<li><div class=\"activeMenuText\">Reservations</div></li>";
                            else
                                echo "<li><a href=\"/Worker\">Reservations</a></li>";
                        }
                    ?>
                </ul>
                <!-- SETTINGS -->
                <a href="<?php
                    if (!isset($isWorker) || $isWorker==0)
                        echo "/Cinema/Settings";
                    else
                        echo "/Worker/Settings";
                    ?>">
                    <div class="icon baseline">
                        <svg width="48" height="48" viewBox="0 0 512 512">
							<path
								d="m256 133.61c-67.484 0-122.39 54.906-122.39 122.39s54.906 122.39 122.39 122.39 122.39-54.906 122.39-122.39-54.906-122.39-122.39-122.39zm0 214.18c-50.613 0-91.793-41.18-91.793-91.793s41.18-91.793 91.793-91.793 91.793 41.18 91.793 91.793-41.18 91.793-91.793 91.793z"
							/>
							<path
								d="m499.95 197.7-39.352-8.5547c-3.4219-10.477-7.6602-20.695-12.664-30.539l21.785-33.887c3.8906-6.0547 3.0352-14.004-2.0508-19.09l-61.305-61.305c-5.0859-5.0859-13.035-5.9414-19.09-2.0508l-33.887 21.785c-9.8438-5.0039-20.062-9.2422-30.539-12.664l-8.5547-39.352c-1.5273-7.0312-7.7539-12.047-14.949-12.047h-86.695c-7.1953 0-13.422 5.0156-14.949 12.047l-8.5547 39.352c-10.477 3.4219-20.695 7.6602-30.539 12.664l-33.887-21.785c-6.0547-3.8906-14.004-3.0352-19.09 2.0508l-61.305 61.305c-5.0859 5.0859-5.9414 13.035-2.0508 19.09l21.785 33.887c-5.0039 9.8438-9.2422 20.062-12.664 30.539l-39.352 8.5547c-7.0312 1.5312-12.047 7.7539-12.047 14.949v86.695c0 7.1953 5.0156 13.418 12.047 14.949l39.352 8.5547c3.4219 10.477 7.6602 20.695 12.664 30.539l-21.785 33.887c-3.8906 6.0547-3.0352 14.004 2.0508 19.09l61.305 61.305c5.0859 5.0859 13.035 5.9414 19.09 2.0508l33.887-21.785c9.8438 5.0039 20.062 9.2422 30.539 12.664l8.5547 39.352c1.5273 7.0312 7.7539 12.047 14.949 12.047h86.695c7.1953 0 13.422-5.0156 14.949-12.047l8.5547-39.352c10.477-3.4219 20.695-7.6602 30.539-12.664l33.887 21.785c6.0547 3.8906 14.004 3.0391 19.09-2.0508l61.305-61.305c5.0859-5.0859 5.9414-13.035 2.0508-19.09l-21.785-33.887c5.0039-9.8438 9.2422-20.062 12.664-30.539l39.352-8.5547c7.0312-1.5312 12.047-7.7539 12.047-14.949v-86.695c0-7.1953-5.0156-13.418-12.047-14.949zm-18.551 89.312-36.082 7.8438c-5.543 1.207-9.9648 5.3789-11.488 10.84-3.9648 14.223-9.668 27.977-16.949 40.879-2.7891 4.9414-2.6172 11.02 0.45313 15.793l19.98 31.078-43.863 43.867-31.082-19.98c-4.7734-3.0703-10.852-3.2422-15.789-0.45313-12.906 7.2812-26.66 12.984-40.883 16.949-5.4609 1.5234-9.6328 5.9453-10.84 11.488l-7.8438 36.082h-62.031l-7.8438-36.082c-1.207-5.543-5.3789-9.9648-10.84-11.488-14.223-3.9648-27.977-9.668-40.879-16.949-4.9414-2.7891-11.02-2.6133-15.793 0.45313l-31.078 19.98-43.863-43.867 19.977-31.078c3.0703-4.7734 3.2461-10.852 0.45703-15.793-7.2812-12.902-12.984-26.656-16.953-40.879-1.5234-5.4609-5.9414-9.6328-11.484-10.84l-36.086-7.8438v-62.031l36.082-7.8438c5.543-1.207 9.9648-5.3789 11.488-10.84 3.9648-14.223 9.668-27.977 16.949-40.879 2.7891-4.9414 2.6172-11.02-0.45313-15.793l-19.98-31.078 43.863-43.867 31.082 19.98c4.7734 3.0703 10.852 3.2422 15.789 0.45313 12.906-7.2812 26.66-12.984 40.883-16.949 5.4609-1.5234 9.6328-5.9453 10.84-11.488l7.8438-36.082h62.031l7.8438 36.082c1.207 5.543 5.3789 9.9648 10.84 11.488 14.223 3.9648 27.977 9.668 40.879 16.949 4.9414 2.7891 11.02 2.6133 15.793-0.45313l31.078-19.98 43.863 43.867-19.977 31.078c-3.0703 4.7734-3.2461 10.852-0.45703 15.793 7.2852 12.902 12.984 26.656 16.953 40.879 1.5234 5.4609 5.9414 9.6328 11.484 10.84l36.086 7.8438z"
							/>
						</svg>
                    </div>
                    Settings
                </a>
            </div>
            <!-- CONTENT -->
            <div class="moviesWrapper">
                <div class="topBar centerY">
                    <!-- SEARCH BAR -->
                    <form class="searchForm">
                        <label>
                            <input type="text" placeholder="Search something" class="search" name="title" id="searchBar" onInput="<?php
                                if (!isset($optionPrimary) || $optionPrimary==0)
                                {
                                    if (!isset($optionSecondary) || $optionSecondary==0)
                                        echo "searchForMoviesLike()";
                                    else
                                        echo "searchForComingSoonsLike()";
                                }
                                else if ($optionPrimary==1)
                                    echo "searchForRoomsLike()";
                                else
                                    echo "searchForEmployeesLike()";
                            ?>" />
                        </label>	
                    </form>
                    <!-- ADD SOMETHING BUTTON -->
                    <div class="row ml-2">
                        <div class="column">
                            <?php
                                $action = !isset($optionPrimary) || $optionPrimary == 0 ? "/Cinema/AddMovie" : ($optionPrimary == 1 ? "/Cinema/AddRoom" : "document.getElementById('employeeModalWrapper').classList.add('showModal');");
                                $name = !isset($optionPrimary) || $optionPrimary == 0 ? "Add movie" : ($optionPrimary == 1 ? "Add room" : "Add employee");
                                if (!isset($optionPrimary) || $optionPrimary != 2)
                                    $button = "
                                        <form action=\"".$action."\">
                                            <button type=\"submit\" class=\"standardButton goodButton\">".$name."</button>
                                        </form>
                                    ";
                                else
                                    $button = "
                                        <button type=\"button\" onClick=\"".$action."\" class=\"standardButton goodButton\">".$name."</button>
                                    ";
                                echo $button;
                            ?>
						</div>
                    </div>
                    <!-- PROFILE PICTURE AND NAME -->
                    <div class="user">
                        <img src="<?php 
                                if (!isset($userImage) || $userImage==null)
                                    echo "/assets/profPic.png";
                                else
                                    echo "data:image/jpg;base64, ".$userImage;
                        ?>" class="profPic" alt="Profile picture" />
                        <span><?php
                            echo $userFullName;
                        ?></span>
                    </div>
                </div>
                <!-- SECONDARY NAV BAR (FOR MOVIES) -->
                <?php
                    if (!isset($optionPrimary) || $optionPrimary==0)
                    {
                        $print = "<ul class=\"movieBtns\"><li>";
                        if (!isset($optionSecondary) || $optionSecondary==0)
                            $print .= "<div class=\"activeMenuText\">Now playing</div>";
                        else
                            $print .= "<a href=\"/Cinema\">Now playing</a>";
                        $print .= " </li><li>";
                        if (isset($optionSecondary) && $optionSecondary==1)
                            $print .= "<div class=\"activeMenuText\">Coming soon</div>";
                        else
                            $print .= "<a href=\"/Cinema/ComingSoon\">Coming soon</a>";
                        $print .= "</li></ul>";
                        echo $print;
                    }  
                ?>
                <!-- ACTUAL CONTENT OF THE PAGE -->
                <?php

                    $wrapper = isset($optionPrimary) && $optionPrimary == 2 ? "list" : "movies";
                    echo "<div class=\"".$wrapper."\" id=\"actualContent\">";
                    if (!isset($items))
                        $items = [];

                    foreach ($items as $item)
                    {
                        if (!isset($optionPrimary) || $optionPrimary==0)
                        {
                            if (!isset($optionSecondary) || $optionSecondary == 0)
                            {
                                // MOVIES THAT ARE PLAYING NOW
                                if ($item["projection"]->canceled == 0)
                                {
                                    echo
                                    ("
                                        <a class=\"coolLink\" href=\"/Cinema/EditMovie/".$item["projection"]->idPro."\">
                                            <div class=\"movieImgExtended centerY column\">
                                                <img src=\"".$item["poster"]."\" class=\"movieImg\" />
                                                <div class=\"movieImgText row w80 mt-1 spaceBetween\">
                                                    <div>".$item["projection"]->roomName."</div>
                                                    <div>".date("D H:i", strtotime($item["projection"]->dateTime))."</div>
                                                </div>
                                            </div>
                                        </a>
                                    ");
                                }
                                else
                                {       
                                    // CANCELED PROJECTIONS
                                    echo
                                    ("
                                            <div class=\"movieImgExtended centerY column\">
                                                <div class=\"movieCanceled centerY column\">
                                                    <img src=\"".$item["poster"]."\" class=\"movieImg\" />
                                                    <div class=\"movieImgText row w80 mt-1 spaceBetween\">
                                                        <div>".$item["projection"]->roomName."</div>
                                                        <div>".date("D H:i", strtotime($item["projection"]->dateTime))."</div>
                                                    </div>
                                                </div>
                                                <div class=\"movieCanceledText\">Canceled</div>
                                            </div>
                                    ");
                                }
                            }
                            else
                            {
                                // MOVIES THAT ARE COMING SOON
                                echo
                                ("
                                    <a class=\"coolLink\" href=\"/Cinema/EditComingSoon/".$item["soon"]->tmdbID."\">
                                        <div class=\"comingSoonExtended\">
                                            <img src=\"".$item["poster"]."\" class=\"movieImg\" />
                                        </div>
                                    </a>
                                ");
                            }
                        }
                        else if ($optionPrimary == 1)
                        {
                            // ROOMS OF THE CINEMA
                            echo
                            ("
                                <a class=\"coolLink\" href=\"/Cinema/EditRoom/".$item->name."\"</a>
                                    <div class=\"movieImgExtended centerY column\">
                                        <img src=\"/assets/Cinema/room.jpg\" class=\"movieImg\" />
                                        <div class=\"movieImgText row w80 mt-1 centerRow\">
                                            <div>".$item->name."</div>
                                        </div>
                                    </div>
                                </a>
                            ");
                        }
                        else
                        {
                            // WORKERS OF THE CINEMA
                            $workerDiv =
                            "
                                <div class=\"rowWrapper\">
                                    <div class=\"userPicture\">
                                            <img src=\"".((!isset($item["image"]) || $item["image"]==null) ? "/assets/profPic.png" : "data:image/jpg;base64, ".$item["image"])."\" alt=\"Worker pic\" />
                                    </div>
                                    <div class=\"description\">
                                        <div><h1>".$item["worker"]->firstName." ".$item["worker"]->lastName."</h1></div>     
                                        <div><span>".$item["worker"]->email."</span></div>
                                    </div>
                                    <div class=\"binWrapper\">
                                        <button type=\"button\"
                                                onClick=\"document.getElementById('workerForDelete').value='".$item["worker"]->email."'; areYouSure('You are about to remove an employee.','/Cinema/ActionRemoveEmployee')\"
                                                class=\"highlightSvgOnHover\">
                                            <svg viewBox=\"-286 137 346.8 427\">
                                                <path d=\"M-53.6,291.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C-43.6,296.2-48.1,291.7-53.6,291.7 z\"/>
                                                <path d=\"M-171.6,291.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189 C-161.6,296.2-166.1,291.7-171.6,291.7z\"/>
                                                <path d=\"M-257.6,264.1v246.4c0,14.6,5.3,28.2,14.7,38.1c9.3,9.8,22.2,15.4,35.7,15.4H-18c13.5,0,26.4-5.6,35.7-15.4 c9.3-9.8,14.7-23.5,14.7-38.1V264.1c18.5-4.9,30.6-22.8,28.1-41.9C58,203.2,41.8,189,22.6,189h-51.2v-12.5 c0.1-10.5-4.1-20.6-11.5-28c-7.4-7.4-17.6-11.6-28.1-11.5H-157c-10.5-0.1-20.6,4-28.1,11.5c-7.4,7.4-11.6,17.5-11.5,28V189h-51.2 c-19.2,0-35.4,14.2-37.9,33.3C-288.2,241.3-276.1,259.2-257.6,264.1z M-18,544h-189.2c-17.1,0-30.4-14.7-30.4-33.5V265h250v245.5 C12.4,529.3-0.9,544-18,544z M-176.6,176.5c-0.1-5.2,2-10.2,5.7-13.9c3.7-3.7,8.7-5.7,13.9-5.6h88.8c5.2-0.1,10.2,1.9,13.9,5.6 c3.7,3.7,5.7,8.7,5.7,13.9V189h-128V176.5z M-247.8,209H22.6c9.9,0,18,8.1,18,18s-8.1,18-18,18h-270.4c-9.9,0-18-8.1-18-18 S-257.7,209-247.8,209z\"/>
                                                <path d=\"M-112.6,291.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189 C-102.6,296.2-107.1,291.7-112.6,291.7z\"/>
                                            </svg>
                                        </button>								
                                    </div>
                                </div>
                            ";
                            echo $workerDiv;
                        }
                    }

                    echo "</div>";

                ?>
            </div>
            <?php
                if (isset($optionPrimary) && $optionPrimary == 2)
                {
                    echo "<form method=\"POST\">";

                    echo "<input type=\"hidden\" id=\"workerForDelete\" name=\"email\" />";

                    include 'AreYouSure.php';

                    echo "</form>";

                    echo "<form method=\"POST\">";

                    include 'EmployeeModal.php';

                    echo "</form>";
                }            
            ?>
        </div>
    </body>
    <script src="/js/areYouSure.js"></script>
    <script src="/js/cinemaOverviewSearchBar.js"></script>
</html>
