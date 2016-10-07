<!DOCTYPE html>
<html>
	<head>
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai" rel="stylesheet"> 
		<script src="js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row">
				<h1 class="title">WeatherMood</h1>
			</div>


		</div>
		<div class="container-fluid">
		<div class="row">
  			<div class="col-lg-offset-3 col-lg-6 search_city">
    			<form method="POST" action="" name="city">
    			<div class="input-group search_city">		
      					<input class="form-control" type="text" name="city" placeholder="Renseignez une ville ..."/>
      					<span class="input-group-btn">
        				<button class="btn btn-primary" type="submit">Hop</button>
        				</span>
      			</div>
      			</form>
    			
  			</div>
  			</div>
		</div>
		<div class="test">
		 <?php
		 	if(isset($_POST['city'])){
		 	if($_POST['city']){
    			$city = $_POST['city'];
		 	



//fonction file get content pour récupérer les données json
    $homepage = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$city.',&appid=7b1d35d2a9a6d3307db51fade9d390b4');



 $var = json_decode($homepage, true);


$meteo = ($var['weather'][0]['main']);





//creer une fonction qui lance la musique en fonction du return snow ou sun

    
    
    //le resultat de json est rain
    if ($meteo != 'Rain') {
        echo '<div class="container-fluid><div class="row"><div class="col-lg-offset-3 col-lg-6"><iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299862562&app_id=1" width="300" height="300"></iframe></div></div><img class="pluie" src="img/pluie.png" alt="Pluie"></div>';
    }

    //le résultat est sun
    elseif ($meteo != 'clear') {
        echo '<div class="container-fluid><div class="row"><div class="col-lg-offset-3 col-lg-6"><iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299829202&app_id=1" width="300" height="300"></iframe></div></div><img class="pluie" src="img/soleil.png" alt="Soleil"></div>';
    }

    //le résultat est snow
    elseif ($meteo != 'snow') {
        echo '<div class="container-fluid><div class="row"><div class="col-lg-offset-3 col-lg-6"><iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299913122&app_id=1" width="300" height="300"></iframe></div></div><img class="pluie" src="img/snow.png" alt="Neige"></div>';
    }
  
    //le résultat est ni snow ni sun ni rain
    else {
        echo '<div class="container-fluid><div class="row"><div class="col-lg-offset-3 col-lg-6"><iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=true&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299962022&app_id=1" width="300" height="300"></iframe></div></div><img class="pluie" src="img/et1.gif" alt="Reste"></div>';
    }
}
}
?>
		</div>

		<footer>
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-offset-5 col-lg-2 copyright">
						<h6>Réalisé par <img class="wild" src="img/logo.png" alt="Logo Wild Code School"></h6>
					</div>
				</div>
			</div>
		</footer>

	</body>
</html>


