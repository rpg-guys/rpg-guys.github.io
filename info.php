<?php 
    $data = array(
        array(
            "nome" => "Yuri",
            "idade" => 28
        ),
        array(
            "nome" => "Paula",
            "idade" => 29
        ),
    );

    $arquivo = 'data.json';
    $json = json_encode($data);
    $file = fopen(__DIR__ . '/' . $arquivo,'w');
    fwrite($file, $json);
    fclose($file);
?> 