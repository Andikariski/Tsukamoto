<?php
//PENGANTAR MULTIMEDIA
if($data2['c1'] == "Rendah"){
	$pm = $pmRendah;
}elseif($data2['c1'] == "Sedang"){
	$pm = $pmSedang; 
}elseif($data2['c1'] == "Tinggi"){
	$pm = $pmTinggi;
}

//MESIN
if($data2['c2'] == "Rendah"){
	$mesin = $mesinRendah;
}elseif($data2['c2'] == "Sedang"){
	$mesin = $mesinSedang; 
}elseif($data2['c2'] == "Tinggi"){
	$mesin = $mesinTinggi;
}

//WEB
if($data2['c3'] == "Rendah"){
	$web = $webRendah;
}elseif($data2['c3'] == "Sedang"){
	$web = $webSedang; 
}elseif($data2['c3'] == "Tinggi"){
	$web = $webTinggi;
}

//ROBOTIKA
if($data2['c4'] == "Rendah"){
	$robot = $robotRendah;
}elseif($data2['c4'] == "Sedang"){
	$robot = $robotSedang; 
}elseif($data2['c4'] == "Tinggi"){
	$robot = $robotTinggi;
}

//SPK
if($data2['c5'] == "Rendah"){
	$spk = $spkRendah;
}elseif($data2['c5'] == "Sedang"){
	$spk = $spkSedang; 
}elseif($data2['c5'] == "Tinggi"){
	$spk = $spkTinggi;
}

//KRIPTOGRAFI
if($data2['c6'] == "Rendah"){
	$kripto = $kriptoRendah;
}elseif($data2['c6'] == "Sedang"){
	$kripto = $kriptoSedang; 
}elseif($data2['c6'] == "Tinggi"){
	$kripto = $kriptoTinggi;
}

//POLA
if($data2['c7'] == "Rendah"){
	$pola = $polaRendah;
}elseif($data2['c7'] == "Sedang"){
	$pola = $polaSedang; 
}elseif($data2['c7'] == "Tinggi"){
	$pola = $polaTinggi;
}
?>