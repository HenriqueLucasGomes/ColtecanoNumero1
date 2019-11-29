<?php
// Filipe Arthur Silva
//Guilherme Drummond
//Henrique Dantas
//Henrique Lucas
?>
<?php
if(!isset($vida)){
    $opt1='';
    $opt2='';
    $opt3='';
    $opt4='';
    $vida=100;
    $energia=100;
    $depressao=10;
    $inteligencia=40;
    $imagem="1.jpg";
    $evento=0;
    $atual=1;
    $Lista=[
        //  C B D E
        1=>array(1,0,0,0,2),
        2=>array(1,1,0,0,3,81),
        3=>array(1,1,0,0,4,81),
        4=>array(1,1,1,1,79,80,5,82),
        5=>array(1,1,0,0,6,78),
        6=>array(1,1,0,0,7,78),
        7=>array(1,1,1,1,76,78,9,8),
        8=>array(1,1,0,0,10,7),
        9=>array(0,1,0,0,404,7),
        10=>array(0,1,1,1,404,8,14,11),
        11=>array(1,1,0,0,12,10),
        12=>array(0,1,0,1,404,11,404,13),
        13=>array(0,1,0,0,404,12),
        14=>array(1,1,0,0,15,10,),
        15=>array(1,1,1,0,20,19,17),
        //16 RIP
        17=>array(1,1,0,0,75,15),
        18=>array(0,1,1,1,404,75,20,19),
        19=>array(1,1,0,0,11,15),
        20=>array(1,1,1,0,21,73,24),
        21=>array(0,1,0,0,404,22),
        22=>array(1,1,0,0,23,20),
        23=>array(1,1,0,1,73,21,404,24),
        24=>array(1,1,0,0,25,72),
        25=>array(1,1,1,1,34,72,26,33),
        26=>array(1,1,1,0,28,32,27),
        27=>array(0,1,0,0,404,26),
        28=>array(1,1,0,0,29,30),
        29=>array(0,1,0,0,404,30),
        30=>array(1,1,0,1,32,28,404,27),
        //31 RIP
        32=>array(0,1,1,1,404,26,25,72),
        33=>array(0,1,0,0,404,25),
        34=>array(0,1,1,1,404,55,35,37),
        35=>array(1,0,1,1,53,404,55,36),
        36=>array(1,0,1,1,96,404,35,59),
        37=>array(1,1,0,1,38,59,404,58),
        38=>array(1,1,1,0,56,57,39),
        39=>array(1,0,1,1,41,404,57,56),
        40=>array(0,1,1,1,404,42,56,57),
        41=>array(1,1,0,0,44,40),
        42=>array(1,0,1,1,40,404,46,43),
        43=>array(1,1,0,0,45,46),
        44=>array(0,1,1,1,404,40,43,46),
        45=>array(0,1,0,0,404,46),
        46=>array(1,1,0,1,47,43,404,42),
        47=>array(1,1,1,0,48,43,52),
        48=>array(1,1,0,0,49,47),
        49=>array(0,1,0,0,404,50),
        50=>array(1,1,0,0,51,49),
        51=>array(1,1,0,1,47,49,404,52),
        52=>array(1,1,0,0,54,47),
        53=>array(1,1,0,0,47,54),
        54=>array(0,1,1,1,404,53,34,55),
        55=>array(1,1,0,1,71,34,404,35),
        56=>array(1,0,0,1,57,404,404,39),
        57=>array(1,1,1,0,59,37,58),
        58=>array(1,0,1,1,36,404,59,37),
        59=>array(1,1,1,0,63,37,36),
        60=>array(1,0,1,1,61,404,63,112),
        61=>array(0,0,1,0,404,404,70),
        //62 RIP
        63=>array(1,1,1,0,65,112,64),
        64=>array(0,0,0,1,404,404,404,69),
        65=>array(0,1,1,1,404,112,113,66),
        66=>array(0,0,1,0,404,404,67),
        67=>array(1,1,0,0,68,66),
        68=>array(1,0,1,1,111,404,66,113),
        69=>array(0,1,1,1,404,64,63,112),
        70=>array(0,1,1,1,404,61,112,63),
        71=>array(1,1,0,1,72,34,404,26),
        72=>array(0,1,1,1,404,25,21,73),
        73=>array(1,1,0,0,74,20),
        74=>array(1,1,0,1,19,20,404,17),
        75=>array(1,1,1,1,80,18,82,5),
        76=>array(1,0,0,0,77),
        77=>array(1,1,1,1,78,76,8,9),
        78=>array(1,1,1,1,82,6,79,80),
        79=>array(1,1,1,1,18,80,5,82),
        80=>array(1,1,0,0,81,79),
        81=>array(1,1,0,0,1,2),
        82=>array(1,1,0,0,83,110),
        83=>array(1,1,0,0,84,109),
        84=>array(1,1,1,1,93,108,87,85),
        85=>array(0,1,0,0,404,86),
        86=>array(1,1,1,1,87,85,107,93),
        87=>array(1,1,0,0,88,92),
        88=>array(1,1,0,0,91,92),
        89=>array(0,1,0,0,404,91),//G M A
        90=>array(0,1,0,0,404,91),// E E S
        91=>array(1,1,0,0,90,88),//89 ou 90
        92=>array(1,1,1,1,85,88,93,107),
        93=>array(1,1,0,0,100,97),
        94=>array(1,0,1,1,95,404,97,99),
        95=>array(1,1,1,1,37,96,59,55),
        96=>array(0,1,1,1,404,95,99,97),
        97=>array(1,1,1,1,107,93,85,87),
        98=>array(1,0,1,1,97,404,101,99),
        99=>array(0,1,0,0,404,98),
        100=>array(0,1,1,1,404,97,94,101),
        101=>array(1,1,1,0,102,104,103),
        102=>array(1,0,0,1,104,404,404,103),
        103=>array(0,0,1,1,404,404,104,102),
        104=>array(1,1,0,0,105,101),
        105=>array(1,1,1,0,99,101,98),
        106=>array(1,1,0,1,101,99,404,98),
        107=>array(1,1,0,0,108,84),
        108=>array(1,1,0,0,109,84),
        109=>array(1,1,0,0,110,83),
        110=>array(1,1,1,1,5,83,80,79),
        111=>array(1,1,0,1,58,63,404,64),
        112=>array(1,1,1,0,37,63,60),
        113=>array(0,0,0,1,404,404,404,114),
        114=>array(1,1,0,0,68,113),
    ];
}

?>
<?php
//    session_start();
//    if(!isset($_SESSION["gamer"])){
//        header("location: login.php");
//    }

    //VAIAVEIS
    
    

    if($evento==0){
        if(isset($_POST["cima"])){
            $T_atual=substr($_POST["cima"], 4,7);
            if($Lista[$T_atual][0]==1){                
                $atual=$Lista[$T_atual][4];
                $imagem=$atual.".jpg";
            }else{
                $imagem=$T_atual.".jpg";
                $atual=$T_atual;
            }
        }
        if(isset($_POST["baixo"])){
            $T_atual=substr($_POST["baixo"], 5,8);
            if($Lista[$T_atual][1]==1){                
                $atual=$Lista[$T_atual][5];
                $imagem=$atual.".jpg";
            }else{
                $imagem=$T_atual.".jpg";
                $atual=$T_atual;
            }
        }
        if(isset($_POST["direita"])){
            $T_atual=substr($_POST["direita"], 7,10);
            if($Lista[$T_atual][2]==1){                
                $atual=$Lista[$T_atual][6];
                $imagem=$atual.".jpg";
            }else{
                $imagem=$T_atual.".jpg";
                $atual=$T_atual;
            }
        }
        if(isset($_POST["esquerda"])){
            $T_atual=substr($_POST["esquerda"], 8,12);
            if($Lista[$T_atual][3]==1){                
                $atual=$Lista[$T_atual][7];
                $imagem=$atual.".jpg";
            }else{
                $imagem=$T_atual.".jpg";
                $atual=$T_atual;
            }
        }
    }else{
        //NÃO CONSEGUIMOS IMPLEMENTAR 
        //SERIA A PARTE DAS AÇÕES, COMO INTERAGIR COM OUTROS NPCs
        if(isset($_POST["triangulo"])){
        }
        if(isset($_POST["x"])){
        }
        if(isset($_POST["bolinha"])){
        }
        if(isset($_POST["quadrado"])){
        }
    }
    
    $fala='Você pode ir para:';
    if($Lista[$atual][0]==1){
        $opt1='↑';    
    }
    if($Lista[$atual][1]==1){
        $opt4='↓';
    }
    if($Lista[$atual][2]==1){
        $opt3='→';
    }
    if($Lista[$atual][3]==1){
        $opt2='←';
        
    }
    

?>
<html>
	<head>
        <style>
            body{
                background-image: url(imagens/1.jpg) ;   
                background-size:cover;
                background-position: center;
            }
            #tela{
                width: 45%;
                height: 70%;
                background-image: url(imagens/<?php echo $imagem ?>);
                background-size:contain;
                background-position: center;
                margin-left: auto;
                margin-right: auto;
            }
            #controles{
                width: 50%;
                height: 30%;
                position:absolute;
                bottom: 0;
                right: 25%;
            }
                #esquerda{
                    width: 35%;
                    height: 90%;
                    position: absolute;
                    left: 5;
                }
                    #seta_cima{
                        width: 80px;
                        height: 60px;
                        right: 13.75%;
                        top:5%;
                        position: absolute;                        
                        opacity: 0;
                        

                    }
                    #seta_baixo{
                        width: 80px;
                        height: 60px;
                        right: 13.75%;
                        bottom:6%;
                        position: absolute;
                        opacity: 0;

                    }
                    #seta_direita{
                        width: 80px;
                        height: 60px;
                        right: 13.75%;
                        top:33%;
                        right: 3%;
                        position: absolute;
                        opacity: 0;

                    }
                    #seta_esquerda{
                        width: 80px;
                        height: 60px;
                        right: 13.75%;
                        top:33%;
                        right: 25%;
                        position: absolute;
                        opacity: 0;

                    }
                #direita{
                    width: 39%;
                    height: 90%;
                    position: absolute;
                    right: 5;
                }
                    #triangulo{
                        width: 80px;
                        height: 60px;
                        left: 12.75%;
                        top:5%;
                        position: absolute;                        
                        opacity: 0;
                        

                    }
                    #X{
                        width: 80px;
                        height: 60px;
                        left: 12.75%;
                        bottom:1%;
                        position: absolute;
                        opacity: 0;

                    }
                    #bolinha{
                        width: 80px;
                        height: 60px;
                        top:37%;
                        left: 25%;
                        position: absolute;
                        opacity: 0;

                    }
                    #quadrado{
                        width: 80px;
                        height: 60px;
                        right: 12.75%;
                        top:37%;
                        left: 0.5%;
                        position: absolute;
                        opacity: 0;

                    }
            #condicao{
                width: 150px;
                height: 80px;
                background-color: blue;
                position: absolute;
                text-align: center;
                bottom: 50%;
                
            }
            #escolhas{
               width: 320px;
                height: 250px;
                background-color: blue;
                position: absolute;
/*                text-align: center;*/
                bottom: 50%;
                right: 10;
                text-align: center;
            }
            
        </style>
	</head>
    
	<body>
        <div id="condicao">
            <label>Vida: <?php echo $vida ?> pts</label><br>
            <label>Energia: <?php echo $energia ?> pts</label><br>
            <label>Depressão: <?php echo $depressao ?> pts</label><br>
            <label>Inteligência: <?php echo $inteligencia ?> pts</label><br>
        </div>
        
        <div id="escolhas">
            <label><?php echo $fala ?></label><br><br><br><br><br>
            <label><?php echo $opt1 ?></label><br>
            <label><?php echo $opt2 ?></label>
            <label><?php echo $opt3 ?></label><br>
            <label><?php echo $opt4 ?></label><br>
        </div>
        
        <div id="tela">
        </div>
        
        <div id="controles">
            <div>
                <img src="imagens/setas_manete.jpg" id="direita">
                <form action="gaming.php" method="post">
                    <input type="submit" id="seta_cima" name="cima" value="cima<?php echo $atual?>">
                </form>
                
                <form action="gaming.php" method="post">
                    <input type="submit" id="seta_baixo" name="baixo" value="baixo<?php echo $atual?>">
                </form>
                
                <form action="gaming.php" method="post">
                    <input type="submit" id="seta_direita" name="direita" value="direita<?php echo $atual?>">
                </form>
                
                <form action="gaming.php" method="post">
                    <input type="submit" id="seta_esquerda" name="esquerda" value="esquerda<?php echo $atual?>">
                </form>
            </div>
            
            <div>
                <img src="imagens/simbolos_manete.png" id="esquerda">
                <form action="gaming.php" method="post">
                    <input type="submit" id="triangulo" name="triangulo" value="triangulo">
                </form>
                
                <form action="gaming.php" method="post">
                    <input type="submit" id="X" name="x" value="x">
                </form>
                
                <form action="gaming.php" method="post">
                    <input type="submit" id="bolinha" name="bolinha" value="bolinha">
                </form>
                
                <form action="gaming.php" method="post">
                    <input type="submit" id="quadrado" name="quadrado" value="quadrado">
                </form>
            </div>
            
        </div>
	</body>
</html>