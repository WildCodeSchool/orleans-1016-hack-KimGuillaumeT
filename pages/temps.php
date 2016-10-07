

<div class="test">
                <?php
                $city = $_POST['city'];

    

//fonction file get content pour récupérer les données json
    $homepage = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q='.$city.',&appid=7b1d35d2a9a6d3307db51fade9d390b4');



 $var = json_decode($homepage, true);

$meteo = ($var['weather'][0]['main']);



//creer une fonction qui lance la musique en fonction du return snow ou sun

    
    
    //le resultat de json est snow
    if ($meteo == 'Rain') {
        echo '<div class="container-fluid><div class="row"><div class="col-lg-offset-3 col-lg-6"><iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=false&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299862562&app_id=1" width="300" height="300"></iframe></div></div></div>';
    }

    //le résultat est sun
    else if ($meteo == 'clear') {
        echo'<div class="container-fluid><div class="row"><div class="col-lg-offset-3 col-lg-6"><iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=false&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299829202&app_id=1" width="300" height="300"></iframe></div></div></div>';
    }

    //le résultat est sun
    if ($meteo == 'snow') {
        echo'<div class="container-fluid><div class="row"><div class="col-lg-offset-3 col-lg-6"><iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=false&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299913122&app_id=1" width="300" height="300"></iframe></div></div></div>';
    }
  
    //le résultat est ni snow ni sun
    else {
        echo '<div class="container-fluid><div class="row"><div class="col-lg-offset-3 col-lg-6"><iframe scrolling="no" frameborder="0" allowTransparency="true" src="https://www.deezer.com/plugins/player?format=square&autoplay=false&playlist=false&width=300&height=300&color=007FEB&layout=dark&size=medium&type=playlist&id=2299962022&app_id=1" width="300" height="300"></iframe></div></div></div>';
    }

?>
        </div>

