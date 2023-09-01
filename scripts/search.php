<?php
//DATA
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://pokeapi.co/api/v2/pokemon/?offset=1&limit=1000",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = json_decode(curl_exec($curl));

curl_close($curl);
$res = json_encode($response->results);

//VIEW
$img = 2;
echo "<div id='msg' class='row hide'>
			<div class='col s12 m12'>
				<div class='row card-panel'>
					<div class='col s12 m12>
						<span class='red-text text-lighten-2 pokemon-name'>
							<h5>NO SE ENCONTRARON RESULTADOS</h5>
						</span>
					</div>
				</div>
			</div>
		</div>";
foreach($response->results as $r){
	$name = strtoupper($r->name);
	echo "<div class='row pokemon' data-name='$name'>
			<div class='col s12 m12'>
				<div class='row card-panel'>
					<div class='col s2 m2'>
						<img src='https://raw.githubusercontent.com/PokeAPI/sprites/master/sprites/pokemon/$img.png' alt='$name'>
					</div>
					<div class='col s10 m10>
						<div class='red-text text-lighten-2'>
							<h5 class='right-align'>$name</h5>
						</div>
					</div>
				</div>
			</div>
		</div>";
	$img++;
}