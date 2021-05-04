<?php 

$matches = [
    [
        "casa" => "Lakers",
        "ospiti" => "Celtics",
        "pCasa" => 130,
        "pOspiti" => 120,
    ],
    [
        "casa" => "GoldenStates",
        "ospiti" => "Orlando",
        "pCasa" => 110,
        "pOspiti" => 90,
    ]
];

foreach($matches as $match){
    echo $match["casa"]." "."-"." ".$match["ospiti"]." ".$match["pCasa"]." "."|"." ".$match["pOspiti"]."<br>";
}


?>