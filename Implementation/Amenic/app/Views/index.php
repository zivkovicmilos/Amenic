<!--
    Author: Martin Mitrović
    Github: Rpsaman13000

	Author: Miloš Živkovic
    Github: zivkovicmilos
-->

<?php

use function App\Helpers\isAuthenticated;
use function App\Helpers\isValid;

	helper('auth');
	
	$loginError = '';
	if(isset($_COOKIE['loginError'])) {
		$loginError = $_COOKIE['loginError'];
	}

	$resetError = '';
	if(isset($_COOKIE['resetError'])) {
		$resetError = $_COOKIE['resetError'];
	}

	$user = null;

	if(isset($_COOKIE['token'])) {
		$user = isValid($_COOKIE['token']);
	}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" type="text/css" href="/css/style.css"/>
		<link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>/favicon.ico">
		<title>Amenic - Movies</title>
	</head>
	<body>
		<div class="container">
			<div class="menuBar">
				<a href="/"><img src="/assets/MoviesPage/imgs/logo.svg" class="logo" alt="Amenic" /></a>
				<ul class="nav">
					<li>
						<a href="/" class="<?php if(!isset($cinMenu)) echo "activeMenu";?>" >Movies</a>
					</li>
					<li>
						<a href="/HomeController/cinemas" class="<?php if(isset($cinMenu)) echo "activeMenu";?>">Cinemas</a>
					</li>
				</ul>
				<?php 
			
					if(isAuthenticated('RUser'))
						echo "
						<a href=\"/HomeController/settings\">
							<div class=\"icon baseline\">
								<svg
									width=\"48\"
									height=\"48\"
									viewBox=\"0 0 512 512\"
									xmlns=\"http://www.w3.org/2000/svg\"
								>
									<path
										d=\"m256 133.61c-67.484 0-122.39 54.906-122.39 122.39s54.906 122.39 122.39 122.39 122.39-54.906 122.39-122.39-54.906-122.39-122.39-122.39zm0 214.18c-50.613 0-91.793-41.18-91.793-91.793s41.18-91.793 91.793-91.793 91.793 41.18 91.793 91.793-41.18 91.793-91.793 91.793z\"
									/>
									<path
										d=\"m499.95 197.7-39.352-8.5547c-3.4219-10.477-7.6602-20.695-12.664-30.539l21.785-33.887c3.8906-6.0547 3.0352-14.004-2.0508-19.09l-61.305-61.305c-5.0859-5.0859-13.035-5.9414-19.09-2.0508l-33.887 21.785c-9.8438-5.0039-20.062-9.2422-30.539-12.664l-8.5547-39.352c-1.5273-7.0312-7.7539-12.047-14.949-12.047h-86.695c-7.1953 0-13.422 5.0156-14.949 12.047l-8.5547 39.352c-10.477 3.4219-20.695 7.6602-30.539 12.664l-33.887-21.785c-6.0547-3.8906-14.004-3.0352-19.09 2.0508l-61.305 61.305c-5.0859 5.0859-5.9414 13.035-2.0508 19.09l21.785 33.887c-5.0039 9.8438-9.2422 20.062-12.664 30.539l-39.352 8.5547c-7.0312 1.5312-12.047 7.7539-12.047 14.949v86.695c0 7.1953 5.0156 13.418 12.047 14.949l39.352 8.5547c3.4219 10.477 7.6602 20.695 12.664 30.539l-21.785 33.887c-3.8906 6.0547-3.0352 14.004 2.0508 19.09l61.305 61.305c5.0859 5.0859 13.035 5.9414 19.09 2.0508l33.887-21.785c9.8438 5.0039 20.062 9.2422 30.539 12.664l8.5547 39.352c1.5273 7.0312 7.7539 12.047 14.949 12.047h86.695c7.1953 0 13.422-5.0156 14.949-12.047l8.5547-39.352c10.477-3.4219 20.695-7.6602 30.539-12.664l33.887 21.785c6.0547 3.8906 14.004 3.0391 19.09-2.0508l61.305-61.305c5.0859-5.0859 5.9414-13.035 2.0508-19.09l-21.785-33.887c5.0039-9.8438 9.2422-20.062 12.664-30.539l39.352-8.5547c7.0312-1.5312 12.047-7.7539 12.047-14.949v-86.695c0-7.1953-5.0156-13.418-12.047-14.949zm-18.551 89.312-36.082 7.8438c-5.543 1.207-9.9648 5.3789-11.488 10.84-3.9648 14.223-9.668 27.977-16.949 40.879-2.7891 4.9414-2.6172 11.02 0.45313 15.793l19.98 31.078-43.863 43.867-31.082-19.98c-4.7734-3.0703-10.852-3.2422-15.789-0.45313-12.906 7.2812-26.66 12.984-40.883 16.949-5.4609 1.5234-9.6328 5.9453-10.84 11.488l-7.8438 36.082h-62.031l-7.8438-36.082c-1.207-5.543-5.3789-9.9648-10.84-11.488-14.223-3.9648-27.977-9.668-40.879-16.949-4.9414-2.7891-11.02-2.6133-15.793 0.45313l-31.078 19.98-43.863-43.867 19.977-31.078c3.0703-4.7734 3.2461-10.852 0.45703-15.793-7.2812-12.902-12.984-26.656-16.953-40.879-1.5234-5.4609-5.9414-9.6328-11.484-10.84l-36.086-7.8438v-62.031l36.082-7.8438c5.543-1.207 9.9648-5.3789 11.488-10.84 3.9648-14.223 9.668-27.977 16.949-40.879 2.7891-4.9414 2.6172-11.02-0.45313-15.793l-19.98-31.078 43.863-43.867 31.082 19.98c4.7734 3.0703 10.852 3.2422 15.789 0.45313 12.906-7.2812 26.66-12.984 40.883-16.949 5.4609-1.5234 9.6328-5.9453 10.84-11.488l7.8438-36.082h62.031l7.8438 36.082c1.207 5.543 5.3789 9.9648 10.84 11.488 14.223 3.9648 27.977 9.668 40.879 16.949 4.9414 2.7891 11.02 2.6133 15.793-0.45313l31.078-19.98 43.863 43.867-19.977 31.078c-3.0703 4.7734-3.2461 10.852-0.45703 15.793 7.2852 12.902 12.984 26.656 16.953 40.879 1.5234 5.4609 5.9414 9.6328 11.484 10.84l36.086 7.8438z\"
									/>
								</svg>
							</div>
							Settings</a>";
						else	
							echo "<div></div>";
				?>
			</div>
			<div class="moviesWrapper">
				<div class="topBar">
					<div class='placeSelector'>
						<div></div>
						<div><?php if(isset($cinMenu) && strcasecmp($cinMenu,"1") == 0) echo"<label for=\"country\">Country</label>"; ?></div>
						<div><?php if(isset($cinMenu) && strcasecmp($cinMenu,"1") == 0) echo"<label for=\"city\">City</label>"; ?></div>
						<div>
							<form action="javascript:void(0);" method="GET" class="searchForm">
								<label>
									<input
										type="text"
										placeholder="Search movies"
										class="search"
										name="title"
										id = "searchBar"
										value=""
									/>
								</label>
							</form>
						</div>
						<div>
						<?php
							if(isset($cinMenu) && strcasecmp($cinMenu,"1") == 0)
							{
								echo"
								<select class=\"formSelect settingsSelect\" id=\"countryList\" name=\"country\">";
										echo "<option value=\"0\"".
										(!isset($token) || strcmp($token->country,"") == 0 ? "selected" : "").
										"></option>";
										foreach($countries as $country)
										{
											echo "<option value=\"".$country->idCountry."\"". 
											(isset($token) ?
											 strcmp($token->country,"") != 0 && strcmp($token->country,$country->idCountry) == 0 ? "selected" : "" :
											 ""
											).
											">".$country->name."</option>";
										}		
								echo"</select>";											
							};
						?>	
						</div>
						<div>
						<?php
							if(isset($cinMenu) && strcasecmp($cinMenu,"1") == 0)
							{
								echo"
								<select class=\"formSelect settingsSelect\" id=\"cityList\" name=\"city\">
									<option value=\"0\"".
									(!isset($token) || strcmp($token->city,"") == 0 ? "selected" : "").
									"></option>";
								if(isset($cities) && count($cities) > 0)
								{
									foreach($cities as $city)
									{
										var_dump($city);
										echo "<option value=\"".$city->idCity."\"". 
										(strcmp($token->city,"") != 0 && strcmp($token->city,$city->idCity) == 0 ? "selected" : "").
										">".$city->name."</option>";
									}	
								}
								echo "
								</select>";
							}
						?>
						</div>
					</div>
					<?php  
							if(!is_null($user)) {
							?>
							<div class="user">
								<img
								src="<?php  if(!isset($token) || !$token->image) 
												echo"/assets/Common/imgs/profPic.png"; 
											else 
												echo "data:image/jpg;base64, ".$token->image;  ?>"
								class="profPic"
								alt="Profile picture"
								/>
							<span><?php 
							if (isAuthenticated('Cinema'))
								echo $user->name;
							else
								echo $user->firstName;
							
							?></span>
						

							</div>
						<?php }
							else {
								include 'loginModal.php';
							}
						?>
				</div>
				<ul class="movieBtns">
					<li>
						<a href="/HomeController" class="<?php if (isset($actMenu) && $actMenu == 1) echo "activeMenu" ?>">Now playing</a>
					</li>
					<li>
						<a href="/HomeController/comingSoon" class="<?php if (isset($actMenu) && $actMenu == 2) echo "activeMenu" ?>">Coming soon</a>
					</li>
				</ul>
				<div class="movies" id="list">
					<?php 

					foreach($movies as $movie)
					{
						if (isset($cinMenu))
						{
							echo "<a href=\"/Theatre/Repertoire/".$movie->email."\" class=\"coolLink\" ><div class=\"guestCardExtended\">";
							if (isset($movie->banner))
								echo (
									"<img src=\"data:image/jpeg;base64, ".$movie->banner."\" class=\"movieImg\" alt=\"\" />"
								);
							else
								echo ("<img src=\"/assets/Cinema/cinema.jpg\" class=\"movieImg\" alt=\"\" />"
								);
							echo "<div class=\"text-block\">
									<p>".$movie->name."</p>
								</div>";
						}
						else
						{
							echo (
								"<a href=\"/movie/".$movie->tmdbID."\" class=\"coolLink\" ><div class=\"guestCardExtended\">
								<img src=\"".$movie->poster."\" class=\"movieImg\" alt=\"\" />"
							);
						}
						echo "</div></a>";
					}

					?>
				</div>
			</div>
		</div>
	</body>
	<script src="/js/movieSearch.js"></script>
	<script src="/js/ruser/cityList.js"></script>
</html>
