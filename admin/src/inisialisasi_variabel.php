<?php
//VARIABEL PENGANTAR MULTIMEDIA
//RENDAH
if($data1['c1'] >= 10 AND $data1['c1'] <= 40){
	$pmRendah = 1;
}elseif($data1['c1'] >= 40 AND $data1['c1'] <= 70){
	$pmRendah = (70 - $data1['c1']) / (70 - 40); 
}elseif($data1['c1'] >= 70 AND $data1['c1'] <= 90){
	$pmRendah = 0;
}

//SEDANG
if($data1['c1'] >= 10 AND $data1['c1'] <= 40){
	$pmSedang = ($data1['c1'] - 10) / (40 - 10);
}elseif($data1['c1'] >= 40 AND $data1['c1'] <= 70){
	$pmSedang = 1; 
}elseif($data1['c1'] >= 70 AND $data1['c1'] <= 90){
	$pmSedang = (90 - $data1['c1']) / (90 -70);
}

//TINGGI
if($data1['c1'] >= 10 AND $data1['c1'] <= 40){
	$pmTinggi = 0;
}elseif($data1['c1'] >= 40 AND $data1['c1'] <= 70){
	$pmTinggi = ($data1['c1'] - 40) / (70 - 40); 
}elseif($data1['c1'] >= 70 AND $data1['c1'] <= 90){
	$pmTinggi = 1;
}

//VARIABEL MESIN
//RENDAH
if($data1['c2'] >= 10 AND $data1['c2'] <= 40){
	$mesinRendah = 1;
}elseif($data1['c2'] >= 40 AND $data1['c2'] <= 70){
	$mesinRendah = (70 - $data1['c2']) / (70 - 40); 
}elseif($data1['c2'] >= 70 AND $data1['c2'] <= 90){
	$mesinRendah = 0;
}

//SEDANG
if($data1['c2'] >= 10 AND $data1['c2'] <= 40){
	$mesinSedang = ($data1['c2'] - 10) / (40 - 10);
}elseif($data1['c2'] >= 40 AND $data1['c2'] <= 70){
	$mesinSedang = 1; 
}elseif($data1['c2'] >= 70 AND $data1['c2'] <= 90){
	$mesinSedang = (90 - $data1['c2']) / (90 -70);
}

//TINGGI
if($data1['c2'] >= 10 AND $data1['c2'] <= 40){
	$mesinTinggi = 0;
}elseif($data1['c2'] >= 40 AND $data1['c2'] <= 70){
	$mesinTinggi = ($data1['c2'] - 40) / (70 - 40); 
}elseif($data1['c2'] >= 70 AND $data1['c2'] <= 90){
	$mesinTinggi = 1;
}

//VARIABEL WEB
//RENDAH
if($data1['c3'] >= 10 AND $data1['c3'] <= 40){
	$webRendah = 1;
}elseif($data1['c3'] >= 40 AND $data1['c3'] <= 70){
	$webRendah = (70 - $data1['c3']) / (70 - 40); 
}elseif($data1['c3'] >= 70 AND $data1['c3'] <= 90){
	$webRendah = 0;
}

//SEDANG
if($data1['c3'] >= 10 AND $data1['c3'] <= 40){
	$webSedang = ($data1['c3'] - 10) / (40 - 10);
}elseif($data1['c3'] >= 40 AND $data1['c3'] <= 70){
	$webSedang = 1; 
}elseif($data1['c3'] >= 70 AND $data1['c3'] <= 90){
	$webSedang = (90 - $data1['c3']) / (90 -70);
}

//TINGGI
if($data1['c3'] >= 10 AND $data1['c3'] <= 40){
	$webTinggi = 0;
}elseif($data1['c3'] >= 40 AND $data1['c3'] <= 70){
	$webTinggi = ($data1['c3'] - 40) / (70 - 40); 
}elseif($data1['c3'] >= 70 AND $data1['c3'] <= 90){
	$webTinggi = 1;
}

//VARIABEL ROBOTIKA
//RENDAH
if($data1['c4'] >= 10 AND $data1['c4'] <= 40){
	$robotRendah = 1;
}elseif($data1['c4'] >= 40 AND $data1['c4'] <= 70){
	$robotRendah = (70 - $data1['c4']) / (70 - 40); 
}elseif($data1['c4'] >= 70 AND $data1['c4'] <= 90){
	$robotRendah = 0;
}

//SEDANG
if($data1['c4'] >= 10 AND $data1['c4'] <= 40){
	$robotSedang = ($data1['c4'] - 10) / (40 - 10);
}elseif($data1['c4'] >= 40 AND $data1['c4'] <= 70){
	$robotSedang = 1; 
}elseif($data1['c4'] >= 70 AND $data1['c4'] <= 90){
	$robotSedang = (90 - $data1['c4']) / (90 -70);
}

//TINGGI
if($data1['c4'] >= 10 AND $data1['c4'] <= 40){
	$robotTinggi = 0;
}elseif($data1['c4'] >= 40 AND $data1['c4'] <= 70){
	$robotTinggi = ($data1['c4'] - 40) / (70 - 40); 
}elseif($data1['c4'] >= 70 AND $data1['c4'] <= 90){
	$robotTinggi = 1;
}

//VARIABEL SPK
//RENDAH
if($data1['c5'] >= 10 AND $data1['c5'] <= 40){
	$spkRendah = 1;
}elseif($data1['c5'] >= 40 AND $data1['c5'] <= 70){
	$spkRendah = (70 - $data1['c5']) / (70 - 40); 
}elseif($data1['c5'] >= 70 AND $data1['c5'] <= 90){
	$spkRendah = 0;
}

//SEDANG
if($data1['c5'] >= 10 AND $data1['c5'] <= 40){
	$spkSedang = ($data1['c5'] - 10) / (40 - 10);
}elseif($data1['c5'] >= 40 AND $data1['c5'] <= 70){
	$spkSedang = 1; 
}elseif($data1['c5'] >= 70 AND $data1['c5'] <= 90){
	$spkSedang = (90 - $data1['c5']) / (90 -70);
}

//TINGGI
if($data1['c5'] >= 10 AND $data1['c5'] <= 40){
	$spkTinggi = 0;
}elseif($data1['c5'] >= 40 AND $data1['c5'] <= 70){
	$spkTinggi = ($data1['c5'] - 40) / (70 - 40); 
}elseif($data1['c5'] >= 70 AND $data1['c5'] <= 90){
	$spkTinggi = 1;
}

//VARIABEL KRIPTOGRAFI
//RENDAH
if($data1['c6'] >= 10 AND $data1['c6'] <= 40){
	$kriptoRendah = 1;
}elseif($data1['c6'] >= 40 AND $data1['c6'] <= 70){
	$kriptoRendah = (70 - $data1['c6']) / (70 - 40); 
}elseif($data1['c6'] >= 70 AND $data1['c6'] <= 90){
	$kriptoRendah = 0;
}

//SEDANG
if($data1['c6'] >= 10 AND $data1['c6'] <= 40){
	$kriptoSedang = ($data1['c6'] - 10) / (40 - 10);
}elseif($data1['c6'] >= 40 AND $data1['c6'] <= 70){
	$kriptoSedang = 1; 
}elseif($data1['c6'] >= 70 AND $data1['c6'] <= 90){
	$kriptoSedang = (90 - $data1['c6']) / (90 -70);
}

//TINGGI
if($data1['c6'] >= 10 AND $data1['c6'] <= 40){
	$kriptoTinggi = 0;
}elseif($data1['c6'] >= 40 AND $data1['c6'] <= 70){
	$kriptoTinggi = ($data1['c6'] - 40) / (70 - 40); 
}elseif($data1['c6'] >= 70 AND $data1['c6'] <= 90){
	$kriptoTinggi = 1;
}

//VARIABEL POLA
//RENDAH
if($data1['c7'] >= 10 AND $data1['c7'] <= 40){
	$polaRendah = 1;
}elseif($data1['c7'] >= 40 AND $data1['c7'] <= 70){
	$polaRendah = (70 - $data1['c7']) / (70 - 40); 
}elseif($data1['c7'] >= 70 AND $data1['c7'] <= 90){
	$polaRendah = 0;
}

//SEDANG
if($data1['c7'] >= 10 AND $data1['c7'] <= 40){
	$polaSedang = ($data1['c7'] - 10) / (40 - 10);
}elseif($data1['c7'] >= 40 AND $data1['c7'] <= 70){
	$polaSedang = 1; 
}elseif($data1['c7'] >= 70 AND $data1['c7'] <= 90){
	$polaSedang = (90 - $data1['c7']) / (90 -70);
}

//TINGGI
if($data1['c7'] >= 10 AND $data1['c7'] <= 40){
	$polaTinggi = 0;
}elseif($data1['c7'] >= 40 AND $data1['c7'] <= 70){
	$polaTinggi = ($data1['c7'] - 40) / (70 - 40); 
}elseif($data1['c7'] >= 70 AND $data1['c7'] <= 90){
	$polaTinggi = 1;
}
?>