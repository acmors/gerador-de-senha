<?php
$carac = [
    ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'],
    ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'],
    [1, 2, 3, 4, 5, 6, 7, 8, 9, 0],
    ['!', '@', '#', '%', '&', '*']
];
 
if(isset($_POST['number'])){
    $number = $_POST['number'];
    $senha = '';

    for($i = 0; $i < $number; $i++){
        $subCarac = $carac[rand(0, count($carac) - 1)];
        $value = $subCarac[rand(0, count($subCarac) - 1)];

        $senha .= $value;
    }

    echo json_encode(['senha_gerada' => $senha]);
}