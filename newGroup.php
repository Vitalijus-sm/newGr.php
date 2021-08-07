
<!-- 1.sukurkite masyvą. užpildykite 30čia atsitiktinių skaičių nuo 20 iki 40.
        1b. atspausdinkite masyvo skaičius vienoje eilutėje atsirtus tarpais.

        2. sukurkite masyvą su 10 skaičių nuo 0 iki 10
        2b. sukurkite kitą masyvą su 10 skaičių nuo 10 iki 20
        2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.
        t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.

        3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.
        reikšmės - skaičiai nuo 0 iki 9.
        3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).
        3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu -->
	<!-- 4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
        raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
        vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.
        
        5. sukurkite tris masyvus:
        $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
        $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
        $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
        aprašus sugalvokite patys. jų reikia 10.

        5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
         iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
         masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.
        
        5c. atvaizduokite gyvūnus iš 5b masyvo. vienas gyvūnas - viena eilutė.

        6. padarykite daugybos lentelę nuo 1 iki 9.

        =======================
        funkcijos
        =======================

        1. sukurkite funkciją kuri išspausdina kokį nors tekstą.
        1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" +
         tas paduotas kintamasis
        1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius
        1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.
        1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą
        bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
        1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
        bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.
        1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas
        ir atspausdina:
         apskritimo ilgis: (tai ka gražino funkcija 1f)
         apskritimo plotas: (tai ka gražino funkcija 1g) -->


	<?php
echo "<h2> Pirma uzduotis </h2><br>";

$arr1 = [];

	for ( $i = 0; $i < 30; $i++) { 
		$arr1[] = rand(20, 40);
		echo $arr1[$i] . " ";
	}
	echo "<br>";
	print_r($arr1);
	echo "<br>";

	for ( $i = 0; $i < count($arr1); $i++) { 
		echo $arr1[$i] . " ";
	}
	echo "<br><hr>";

// -------------------------------------------------------------

echo "<h2> Antra uzduotis </h2><br>";
// sukurkite masyvą su 10 skaičių nuo 0 iki 9

	for ( $i = 0; $i < 10; $i++) { 
		$arr2[] = $i;
		echo $arr2[$i] . " ";
	}
	

	echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2> Antra uzduotis B</h2><br>";
// sukurkite kitą masyvą su 10 skaičių nuo 10 iki 20

	for ( $i = 10; $i < 20; $i++) { 
		$arr2b[] = $i;
		
	}
	
	print_r($arr2b);
	echo "<br>";

	for ( $i = 0; $i < count($arr2b); $i++) { 
		echo $arr2b[$i] . " ";
	}

	echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2> Antra uzduotis C</h2><br>";
// 2c. pasinaudoję ciklu atspausdinkite 100 atsitiktinių skaičių iš 2b masyvo.
//         t.y kiekvienoje ciklo iteracijoje imkite atsitiktinį 2b masyvo skaičių.

for ($i=0; $i < 100; $i++) { 
	echo $arr2b[ rand(0, count($arr2b) - 1) ] . " ";
}

echo "<br>--------------------<br>";


//kitas variantas:

for($i = 0; $i < 100; $i++){
	echo $arr2b[array_rand($arr2b)] . " ";
}

echo "<br>--------------------<br>";


//kitas variantas:
$arr2c = [];
	for ( $i = 0; $i < 100; $i++) { 
		foreach ($arr2b as $key => $value) {
			$arr2c = rand(10, $value);
		}
		echo $arr2c . " ";
	}
	echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2>Trecia uzduotis B</h2><br>";
// 3. sukurkite dvimatį masyvą. pirmas matmuo - 10 elementų. antras 10 elementų.
//  reikšmės - skaičiai nuo 0 iki 9.
// 3b. atspausdinkite duomenis. (gausis skaičių stačiakampis).

$arr3 = [];
for ($i = 0; $i < 10; $i++) { 
	for ($a = 0; $a < 10; $a++) { 
		$arr3[$i][] = $a;
	}
}
for ($i = 0; $i < count($arr3); $i++) { 
	for ($a = 0; $a < count($arr3[$i]); $a++) {
		echo $arr3[$i][$a] . " ";
	}
	echo "<br>";
}

echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2>Trecia uzduotis C</h2><br>";
// 3c. padarykite tą patį, ką  darėte 3b, tik spausdinkite tuos skaičius pakeltus kvadratu -->

for ($i = 0; $i < count($arr3); $i++) { 
	for ($a = 0; $a < count($arr3[$i]); $a++) {
		echo pow($arr3[$i][$a],2) . " ";
	}
	echo "<br>";
}


echo "<br><hr>";
// -------------------------------------------------------------

// 4. sukurkite masyvą pavadinimu $gyvunas; suteikite jam reikšmes key + value principu.
//    raktažodžiai (key): "species","age", "name", "description". Tai bus vienas objektas,
//    vienas gyvūnas, su rūšimi, amžiumi, vardu ir aprašu.

echo "<h2>Ketvirta uzduotis </h2><br>";

$gyvunas = ["species" => "dog" , "age" => 15 , "name" => "Budy" , "description" => "nice"];
print_r($gyvunas);

echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2>Penkta uzduotis </h2><br>";
// 5. sukurkite tris masyvus:
//    $names = ["vardas1","vardas2","vardas3"....] vardus sugalvokite patys. jų reikia 10.
//    $species = ["kengūra","gazelė","liūtas"....] gyvūnus sugalvokite patys. jų reikia 10.
//    $descriptions = ["gražus bet piktas","pastoviai miega","šauniai maskuojasi"....] 
//    aprašus sugalvokite patys. jų reikia 10.

$names = ["Milo" , "Bella" , "Charlie" , "Luna" , "Lucy" , "Max" , "Bailey" , "Cooper" , "Daisy" , "Rex"];

$species = ["dog" , "cat" , "cow" , "horse" , "pig" , "dolphin" , "fish" , "turtle" , "camel" , "sheep"];

$descriptions = ["gražus bet piktas" , "pastoviai miega" , "šauniai maskuojasi" , "greitai begioja" , "draugiskas" ,
 "piktas ir pavojingas" , "aukstai sokineja" , "rausia zemes" , "mazai valgo" , "paklusnus"];

 print_r($names);
 echo "<br><br>";
 print_r($species);
 echo "<br><br>";
 print_r($descriptions);
 echo "<br><br>";

 echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2>Penkta uzduotis B</h2><br>";
// 5b. sukurkite dvimatį masyvą iš 20 elementų.  didžiąjame masyve bus sudėti mažesni masyvai,
//     iš eilės. maži masyvai bus tokie patys kaip 4. užduotyje. jų reikšmes užpildykite 5. 
//     masyvų reikšmėmis. t.y imate random vardą, ir priskiriate konstruojamam gyvūnui ir tt.

$zoo = [[]];

for ($i=0; $i < 20; $i++) { 
	$zoo[$i]['name'] = $names[ rand(0, count($names) - 1)];
	$zoo[$i]['species'] = $species[ rand(0, count($species) - 1)];
	$zoo[$i]['age'] = rand(0, 15);
	$zoo[$i]['description'] = $descriptions[ rand(0, count($descriptions) - 1)];
}

for ($i=0; $i < count($zoo); $i++) { 
	echo $zoo[$i]['name'] . " " . $zoo[$i]['species'] . " " 
	. $zoo[$i]['age'] . " " . $zoo[$i]['description'] . "<br>";
}



echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2>Sesta uzduotis B</h2><br>";
// 6. padarykite daugybos lentelę nuo 1 iki 9.

for ($i=1; $i < 10; $i++) { 
	for ($a=1; $a < 10; $a++) { 
		echo $i * $a . " ";
	}
	echo "<br>";
}



echo "<br>--------------------<br>";

echo "<table border =\"1\" style='border-collapse: collapse'>";
	for ($row=1; $row <= 9; $row++) { 
		echo "<tr> \n";
		for ($col=1; $col <= 9; $col++) { 
		   $p = $col * $row;
		   echo "<td>$p</td> \n";
		   	}
	  	    echo "</tr>";
		}
		echo "</table>";

  echo"</table>";

  echo "<br><hr>";
// -------------------------------------------------------------
// 1. sukurkite funkciją kuri išspausdina kokį nors tekstą.
echo "<h2> Funkcijos 1</h2><br>";

tekstas("1. sukurkite funkciją kuri išspausdina kokį nors tekstą.");

function tekstas($tekstas){
	echo "<h1>  $tekstas  </h1>";
}
echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2> Funkcijos 1B</h2><br>";
// 1b. sukurkite funkciją kuri priima vieną parametrą ir išspausdina tekstas "labas" +
//     tas paduotas kintamasis

sayHi("Petras");

$vardas = "Jonas";
sayHi($vardas);

function sayHi($name){
	echo "Labas " . $name . ", <br>";
}

echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2> Funkcijos 1C</h2><br>";
// 1c. sukurkite funkciją kuri gražina skaičiaus PI pirmus 8 skaičius

echo myPi();
function myPi(){
	return 3.1415926;
}
echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2> Funkcijos 1D</h2><br>";
// 1d. sukurkite funkciją kuri gražina dviejų parametrų sąndaugą.

echo multiply(365, 24) . "<br>";

// galima prideti ir daugiau skaiskaiciu kuriuos irgi sudaugins: 
echo multiply(60, multiply(60, multiply(365, 24))) . "<br>";

// arba:
echo multiply( multiply(60, 60), multiply(365, 24));

function multiply($a , $b){
	return $a * $b;
}

echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2> Funkcijos 1E</h2><br>";
// 1e. sukurkite funkciją kuri apskaičiuoja skritulio PLOTĄ. ši funkcija priima 1 parametrą
//     bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.

echo circleArea(10);
function circleArea($r){
	return myPi() * ($r * $r);
}

echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2> Funkcijos 1F</h2><br>";
// 1f. sukurkite funkciją kuri apskaičiuoja skritulio ILGĮ. ši funkcija priima 1 parametrą
//     bei naudoja 1c. funkciją savo viduje, kad gautų PI reikšmę.

echo circleLenght(10);

function circleLenght($r){
	return 2 * myPi() * $r;
}

echo "<br><hr>";
// -------------------------------------------------------------

echo "<h2> Funkcijos 1G</h2><br>";
// 1g. sukurkite funkciją kuri: priima vieną parametrą. savyje iškviecia 1e ir 1f funkcijas
//     ir atspausdina:
//     apskritimo ilgis: (tai ka gražino funkcija 1f)
//     apskritimo plotas: (tai ka gražino funkcija 1g) -->

function circleInfo($r){
	echo "apskritimo ilgis: " . circleLenght($r) . "<br>";
	echo "apskritimo plotas: " . circleArea($r) . "<br>";
}
circleInfo(10);

echo "<br><hr>";
// -------------------------------------------------------------


	?>
