<h1>Indexed and Associative Array</h1>
<?php
echo "Indexed Array<br/><br/>";
$random_number=[1,5,3,6,8,97,4,48,79,56,34,89];
$number=$random_number;
foreach($number as $index=> $random_number){
    echo "Index => $index  Value=>$random_number <br/>";
}

echo"<br/>";

echo "Associative Array<br/><br/>";
$Contacts=[
"Sandesh"=>"9812274118",
"Sumit"=>"9812124653",
"JayPrakash"=>"9846564653"
];

foreach ($Contacts as $key => $value){
    echo "Name:". $key ." <br/> Phone Number: ". $value ;
    echo "</br><br/>";
}
?>