<?php

    $handle = fopen("clientes.csv", "r");

    $row = 0;
    while ($line = fgetcsv($handle, null, ",")) {
        if ($row++ == 0) {
            continue;
        }

        $pessoa[] = [
            'desnome' => $line[0],
            'desemail' => $line[1],
            'desendereco' => $line[2]
        ];

    }

    $dados_cliente_array = explode(";", $row);

    for($i = 0; $i<10; $i ++){
        var_dump($pessoa[$i]);
    }
    

    fclose($handle);

?>