<h1>For Loop , While Loop , foreach Loop</h1>
<?php
$cars = ['Mercedes','Mustang GT','Porsche','BMw','Rolls Royce'];
$n= count($cars);


$cardetails = [
    ["Name" => "Mercedes","Price" => "$50,000","Model" => "C-Class"],
    ["Name" => "Mustang GT","Price" => "$60,000","Model" => "GT"],
    ["Name" => "Porsche","Price" => "$80,000","Model" => "911 Carrera"],
    ["Name" => "BMW","Price" => "$55,000","Model" => "3 Series"],
    ["Name" => "Rolls Royce","Price" => "$300,000","Model" => "Phantom"]
];


echo"------For Loops------<br/></br>";
   for ($i=0 ; $i < $n ; $i++ ) 
   { 
    echo $cars[$i] . "<br/>";
    };

    echo"<br/><br/>------While Loops------<br/></br>";   
    $i = 0;
while ($i < count($cars)) {
    echo $cars[$i] . "<br/>";
    $i++;
}

    
echo"<br/><br/>------Foreach Loops------<br/></br>";   
    
foreach ($cardetails as $cardetail) {
    echo "Name: " . $cardetail["Name"] . "<br/>";
    echo "Price: " . $cardetail["Price"] . "<br/>";
    echo "Model: " . $cardetail["Model"] . "<br/>";
    echo "<br/>";
}
    ?>