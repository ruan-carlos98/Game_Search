<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Game Search 3</title>
</head>
<body>
<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "gamesearch";
    //Conexão com o Servidor local
    $conn = mysqli_connect($servidor,$usuario,$senha,$dbname);


    $pesquisa = $_POST["pesquisa"];
/*
$result_jogo = "SELECT
                j.nome_jogo,
                j.descricao,
                j.foto,
                j.trailer,
                p.nome_plat,
                l.preco,
                l.link_jogo,
                t.fk_id_jogo,
                t.fk_id_genero
                FROM jogo j
                left join lojas l on l.fk_id_jogo = j.id_jogo
                left join plataforma p on p.id_plat = l.fk_id_plat
                left join tipos
                WHERE nome_jogo LIKE '%$pesquisa%'
                order by p.id_plat";
$resultado_jogo = mysqli_query($conn, $result_jogo);

$preco_jogo = "SELECT
                   l.preco
                FROM jogo j
                left join lojas l on l.fk_id_jogo = j.id_jogo
                left join plataforma p on p.id_plat = l.fk_id_plat
                WHERE j.nome_jogo LIKE '%$pesquisa%'
                order by p.id_plat";
$preco_final = mysqli_query($conn, $preco_jogo);
*/
$result_jogo = "SELECT
                    id_jogo,
                    nome_jogo,
                    foto,
                    fk_id_genero
                    FROM 
                    jogo LEFT JOIN tipos ON jogo.id_jogo = tipos.fk_id_jogo 
                    WHERE nome_jogo LIKE '%$pesquisa%'                    
                    order by id_jogo";
$resultado_jogo = mysqli_query($conn, $result_jogo);



while($rows_jogo = mysqli_fetch_array($resultado_jogo)){


    $nome = $rows_jogo["nome_jogo"];
    $foto = $rows_jogo["foto"];
    $genero = $rows_jogo["fk_id_genero"];




    echo $nome."<br>";
    echo $foto."<br>";

}



/*
$listaPrecos = "";
$listaLink = "";
    while($rows_jogo = mysqli_fetch_array($resultado_jogo)){

        $nome = $rows_jogo["nome_jogo"];
        $descricao = $rows_jogo["descricao"];
        $foto = $rows_jogo["foto"];
        $trailer = $rows_jogo["trailer"];
        $plataforma = $rows_jogo["nome_plat"];
        $preco = $rows_jogo["preco"];
        $link_jogo =$rows_jogo["link_jogo"];

        if($preco == ""){
            $preco = "Indisponível";
        }elseif ($preco == "0.00"){
            $preco = "Grátis";
        }else{
            $preco = "R$".$preco;
        }

        if($link_jogo == ""){
            $link_jogo = "#";
        }else{

        }

        $listaPrecos = $listaPrecos . " " . $preco;
        $listaLink = $listaLink . " " . $link_jogo;
    }





    $arrayPrecos = (explode(" ",$listaPrecos));
    $arrayLink = (explode(" ", $listaLink));

    $link_steam = $arrayLink[1];
    $link_epic = $arrayLink[2];
    $link_gog = $arrayLink[3];
    $link_xbox = $arrayLink[4];
    $link_uplay = $arrayLink[5];
    $link_origin = $arrayLink[6];

echo $link_steam."<br>";
echo $link_epic."<br>";
echo $link_gog."<br>";
echo $link_xbox."<br>";
echo $link_uplay."<br>";
echo $link_origin;



$steam = $arrayPrecos[1];
$epic = $arrayPrecos[2];
$gog = $arrayPrecos[3];
$xbox = $arrayPrecos[4];
$uplay = $arrayPrecos[5];
$origin = $arrayPrecos[6];


echo $steam."<br>";
echo $epic."<br>";
echo $gog."<br>";
echo $xbox."<br>";
echo $uplay."<br>";
echo $origin;
*/





/*echo "<br>";
echo $listaPrecos;
echo "<hr>";
*/







//echo $nome."<br>";
//echo $descricao."<br>";
//echo $foto."<br>";
//echo $trailer."<br>";
//echo $plataforma."<br>";
//echo $preco."<br>";

//while($rows_preco = mysqli_fetch_array($preco_final)){

//$preco_steam = $rows_preco["preco"];
//$preco_epic = $rows_preco["preco"];
//$preco_gog = $rows_preco["preco"];
//$preco_xbox = $rows_preco["preco"];
//$preco_uplay = $rows_preco["preco"];
//$preco_origin = $rows_preco["preco"];
//}

//echo $preco_steam."<br>";
//echo $preco_epic."<br>";
//echo $preco_gog."<br>";
//echo $preco_xbox."<br>";
//echo $preco_uplay."<br>";
//echo $preco_origin."<br>";


/*
                         <li>
                            <a class="list-group-item" href="https://store.steampowered.com/app/292030"><img src="imagens/steam.png" width="50" height="50">
                            </a>
                            <small class="text-muted">R$ 77</small>
                        </li>

*/


        //Enter your code here, enjoy!

/*echo "carregando do banco..."."<br>";
$listaDePrecos  = "10 20 30 40 50 60";
echo "banco lido..."."<br>"."<br>";

echo "Fatiando uma string em um array..."."<br>";
$arrayPrecos = explode( " ", $listaDePrecos);
print_r($arrayPrecos);
echo "Array Montando..."."<br>"."<br>";

echo "\nImprimindo o Array com o laço ForEach..."."<br>";
foreach ($arrayPrecos as $key => $value)
{
    echo "O Preço no indice ".$key." é $value"."<br>";
}


echo "Fim..."."<br>"."<br>";

echo "imprimindo as linhas no HTML..."."<br>";

echo "<ul>"."<br>";
echo "\t<li>"."<br>";
foreach ($arrayPrecos as $key => $value)
{
    echo "\t\t<a>Preço $key = $value<\a>"."<br>";
}
echo "\t</li>."."<br>";
echo "</ul>"."<br>"."<br>";*/


/*while ($row = mysqli_fetch_row($preco_final)) {
        $r = $row[0];
        echo $r."<br>";
    }*/



/*$row = mysqli_fetch_row($preco_final);
    $r0 = $row[0];
    $r1 = $row[1];
    $r2 = $row[2];
    $r3 = $row[3];
    $r4 = $row[4];
    $r5 = $row[5];

echo $r0."<br>";
echo $r1."<br>";
echo $r2."<br>";
echo $r3."<br>";
echo $r4."<br>";
echo $r5."<br>";
*/








?>
</body>
</html>