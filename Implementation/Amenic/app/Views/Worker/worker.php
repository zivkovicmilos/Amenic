<!--
    Author: Miloš Živkovic
    Github: zivkovicmilos
-->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" type="text/css" href="/css/style.css"/>
        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/favicon.ico">
		<title>Amenic - Reservations</title>
	</head>
	<body>
        <div class="container">
            <div class="menuBar">
                <a href="/"><img src="/assets/logo.svg" class="logo" alt="Amenic" /></a>
                <ul class="nav">
                    <li>
                        <a href="/Cinema">Movies</a>
                    </li>
                    <li>
                        <a href="#" class="activeMenu">Reservations</a>
                    </li>
                </ul>
                <a href="/Worker/Settings"><div class="icon baseline"><svg width="48" height="48" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="m256 133.61c-67.484 0-122.39 54.906-122.39 122.39s54.906 122.39 122.39 122.39 122.39-54.906 122.39-122.39-54.906-122.39-122.39-122.39zm0 214.18c-50.613 0-91.793-41.18-91.793-91.793s41.18-91.793 91.793-91.793 91.793 41.18 91.793 91.793-41.18 91.793-91.793 91.793z"/>
                    <path d="m499.95 197.7-39.352-8.5547c-3.4219-10.477-7.6602-20.695-12.664-30.539l21.785-33.887c3.8906-6.0547 3.0352-14.004-2.0508-19.09l-61.305-61.305c-5.0859-5.0859-13.035-5.9414-19.09-2.0508l-33.887 21.785c-9.8438-5.0039-20.062-9.2422-30.539-12.664l-8.5547-39.352c-1.5273-7.0312-7.7539-12.047-14.949-12.047h-86.695c-7.1953 0-13.422 5.0156-14.949 12.047l-8.5547 39.352c-10.477 3.4219-20.695 7.6602-30.539 12.664l-33.887-21.785c-6.0547-3.8906-14.004-3.0352-19.09 2.0508l-61.305 61.305c-5.0859 5.0859-5.9414 13.035-2.0508 19.09l21.785 33.887c-5.0039 9.8438-9.2422 20.062-12.664 30.539l-39.352 8.5547c-7.0312 1.5312-12.047 7.7539-12.047 14.949v86.695c0 7.1953 5.0156 13.418 12.047 14.949l39.352 8.5547c3.4219 10.477 7.6602 20.695 12.664 30.539l-21.785 33.887c-3.8906 6.0547-3.0352 14.004 2.0508 19.09l61.305 61.305c5.0859 5.0859 13.035 5.9414 19.09 2.0508l33.887-21.785c9.8438 5.0039 20.062 9.2422 30.539 12.664l8.5547 39.352c1.5273 7.0312 7.7539 12.047 14.949 12.047h86.695c7.1953 0 13.422-5.0156 14.949-12.047l8.5547-39.352c10.477-3.4219 20.695-7.6602 30.539-12.664l33.887 21.785c6.0547 3.8906 14.004 3.0391 19.09-2.0508l61.305-61.305c5.0859-5.0859 5.9414-13.035 2.0508-19.09l-21.785-33.887c5.0039-9.8438 9.2422-20.062 12.664-30.539l39.352-8.5547c7.0312-1.5312 12.047-7.7539 12.047-14.949v-86.695c0-7.1953-5.0156-13.418-12.047-14.949zm-18.551 89.312-36.082 7.8438c-5.543 1.207-9.9648 5.3789-11.488 10.84-3.9648 14.223-9.668 27.977-16.949 40.879-2.7891 4.9414-2.6172 11.02 0.45313 15.793l19.98 31.078-43.863 43.867-31.082-19.98c-4.7734-3.0703-10.852-3.2422-15.789-0.45313-12.906 7.2812-26.66 12.984-40.883 16.949-5.4609 1.5234-9.6328 5.9453-10.84 11.488l-7.8438 36.082h-62.031l-7.8438-36.082c-1.207-5.543-5.3789-9.9648-10.84-11.488-14.223-3.9648-27.977-9.668-40.879-16.949-4.9414-2.7891-11.02-2.6133-15.793 0.45313l-31.078 19.98-43.863-43.867 19.977-31.078c3.0703-4.7734 3.2461-10.852 0.45703-15.793-7.2812-12.902-12.984-26.656-16.953-40.879-1.5234-5.4609-5.9414-9.6328-11.484-10.84l-36.086-7.8438v-62.031l36.082-7.8438c5.543-1.207 9.9648-5.3789 11.488-10.84 3.9648-14.223 9.668-27.977 16.949-40.879 2.7891-4.9414 2.6172-11.02-0.45313-15.793l-19.98-31.078 43.863-43.867 31.082 19.98c4.7734 3.0703 10.852 3.2422 15.789 0.45313 12.906-7.2812 26.66-12.984 40.883-16.949 5.4609-1.5234 9.6328-5.9453 10.84-11.488l7.8438-36.082h62.031l7.8438 36.082c1.207 5.543 5.3789 9.9648 10.84 11.488 14.223 3.9648 27.977 9.668 40.879 16.949 4.9414 2.7891 11.02 2.6133 15.793-0.45313l31.078-19.98 43.863 43.867-19.977 31.078c-3.0703 4.7734-3.2461 10.852-0.45703 15.793 7.2852 12.902 12.984 26.656 16.953 40.879 1.5234 5.4609 5.9414 9.6328 11.484 10.84l36.086 7.8438z"/>
                    </svg></div> Settings</a>
            </div>
            <div class="moviesWrapper">
                <div class="topBar centerY">

                    <form class="searchForm">
                        <label>
                            <input type="text" placeholder="Search reservations" class="search" name="title" id="searchBar" oninput="">
                        </label>	
                    </form>
                    <div class="row ml-2">
                        <div class="column">
                            <button type="button" onclick="
                            triggerModal();
                            " class="standardButton goodButton">Sell ticket</button>
                        </div>
                    </div>
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
                <div id="actualContent" class="list">
                <!--
                <div class="rowWrapper">
                    <div class="userPicture">
                            <img src="/assets/profPic.png" alt="Worker pic">
                    </div>
                    <div class="description">
                        <div class="row"><h1>Pera Perić · ID6459 · €21</h1></div>
                        <div class="row mt-1">
                            <span>
                                <span>Joker</span> · <span>2D</span> · <span>Sala 1</span> · <span>A1, A2, A3</span>
                            </span>
                        </div>
                        <div class="row mt-1">
                            <span>
                                <span>18:00</span> · <span>2.3.2020.</span>
                            </span>
                        </div>
                        
                    </div>
        
                    <div class="checkWrapper">
                        <button type="button" onclick="" class="highlightSvgOnHover">
                            <svg viewBox="79 -77.3 417 323.8">
                                    <path d="M238.7,240.3c-4,4-9.4,6.2-15.1,6.2s-11.1-2.2-15.1-6.2L88.4,120c-12.5-12.5-12.5-32.7,0-45.2l15.1-15.1
                                    c12.5-12.5,32.7-12.5,45.2,0l75.1,75.1L426.4-67.9c12.5-12.5,32.7-12.5,45.2,0l15.1,15.1c12.5,12.5,12.5,32.7,0,45.2L238.7,240.3z"
                                    ></path>
                            </svg>
                        </button>
                    </div>
                    <div class="binWrapper">
                        
                        <button type="button" onclick="document.getElementById('workerForDelete').value='testworker@gmail.com'; areYouSure('You are about to remove an employee.','/Cinema/ActionRemoveEmployee')" class="highlightSvgOnHover">
                            <svg viewBox="-286 137 346.8 427">
                                <path d="M-53.6,291.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C-43.6,296.2-48.1,291.7-53.6,291.7 z"></path>
                                <path d="M-171.6,291.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189 C-161.6,296.2-166.1,291.7-171.6,291.7z"></path>
                                <path d="M-257.6,264.1v246.4c0,14.6,5.3,28.2,14.7,38.1c9.3,9.8,22.2,15.4,35.7,15.4H-18c13.5,0,26.4-5.6,35.7-15.4 c9.3-9.8,14.7-23.5,14.7-38.1V264.1c18.5-4.9,30.6-22.8,28.1-41.9C58,203.2,41.8,189,22.6,189h-51.2v-12.5 c0.1-10.5-4.1-20.6-11.5-28c-7.4-7.4-17.6-11.6-28.1-11.5H-157c-10.5-0.1-20.6,4-28.1,11.5c-7.4,7.4-11.6,17.5-11.5,28V189h-51.2 c-19.2,0-35.4,14.2-37.9,33.3C-288.2,241.3-276.1,259.2-257.6,264.1z M-18,544h-189.2c-17.1,0-30.4-14.7-30.4-33.5V265h250v245.5 C12.4,529.3-0.9,544-18,544z M-176.6,176.5c-0.1-5.2,2-10.2,5.7-13.9c3.7-3.7,8.7-5.7,13.9-5.6h88.8c5.2-0.1,10.2,1.9,13.9,5.6 c3.7,3.7,5.7,8.7,5.7,13.9V189h-128V176.5z M-247.8,209H22.6c9.9,0,18,8.1,18,18s-8.1,18-18,18h-270.4c-9.9,0-18-8.1-18-18 S-257.7,209-247.8,209z"></path>
                                <path d="M-112.6,291.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189 C-102.6,296.2-107.1,291.7-112.6,291.7z"></path>
                            </svg>
                        </button>	
                        
                        <button type="button" class="highlightSvgOnHover">
                            <svg viewBox="-286 137 346.8 427">
                                <path d="M-53.6,291.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189C-43.6,296.2-48.1,291.7-53.6,291.7 z"></path>
                                <path d="M-171.6,291.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189 C-161.6,296.2-166.1,291.7-171.6,291.7z"></path>
                                <path d="M-257.6,264.1v246.4c0,14.6,5.3,28.2,14.7,38.1c9.3,9.8,22.2,15.4,35.7,15.4H-18c13.5,0,26.4-5.6,35.7-15.4 c9.3-9.8,14.7-23.5,14.7-38.1V264.1c18.5-4.9,30.6-22.8,28.1-41.9C58,203.2,41.8,189,22.6,189h-51.2v-12.5 c0.1-10.5-4.1-20.6-11.5-28c-7.4-7.4-17.6-11.6-28.1-11.5H-157c-10.5-0.1-20.6,4-28.1,11.5c-7.4,7.4-11.6,17.5-11.5,28V189h-51.2 c-19.2,0-35.4,14.2-37.9,33.3C-288.2,241.3-276.1,259.2-257.6,264.1z M-18,544h-189.2c-17.1,0-30.4-14.7-30.4-33.5V265h250v245.5 C12.4,529.3-0.9,544-18,544z M-176.6,176.5c-0.1-5.2,2-10.2,5.7-13.9c3.7-3.7,8.7-5.7,13.9-5.6h88.8c5.2-0.1,10.2,1.9,13.9,5.6 c3.7,3.7,5.7,8.7,5.7,13.9V189h-128V176.5z M-247.8,209H22.6c9.9,0,18,8.1,18,18s-8.1,18-18,18h-270.4c-9.9,0-18-8.1-18-18 S-257.7,209-247.8,209z"></path>
                                <path d="M-112.6,291.7c-5.5,0-10,4.5-10,10v189c0,5.5,4.5,10,10,10s10-4.5,10-10v-189 C-102.6,296.2-107.1,291.7-112.6,291.7z"></path>
                            </svg>
                        </button>							
                    </div>
                </div>
                -->
                </div>
            </div>
            <input type="hidden" id="cinemaEmail" value="<?php echo $cinema->email ?>">
            <?php include 'workerModal.php'; ?>
    </body>
    <script src="/js/worker/workerList.js"></script>
    <script src="/js/worker/worker.js"></script>
</html>