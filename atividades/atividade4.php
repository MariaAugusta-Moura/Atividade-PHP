<form>
    <input type="text" name="A" placeholder="Digite o A">
    <input type="text" name="B" placeholder="Digite o B">
    <input type="text" name="C" placeholder="Digite o C">
    <input type="text" name="D" placeholder="Digite o D">
    <button>
        Resultado
    </button>    
</form>

<?php

    if(isset($_GET['A'])&&isset($_GET['B'])&&isset($_GET['C'])&&isset($_GET['D'])){

        $a = $_GET['A'];
        $b = $_GET['B'];
        $c = $_GET['C'];
        $d = $_GET['D'];
        
        $soma = intval($a)+intval($c);
        $multi = intval($b)*intval($d);

        if($soma>$multi){
            echo $a." + ".$c." é maior que ".$b." * ".$d;
        }
        elseif($soma<$multi){
            echo $a." + ".$c." é menor que ".$b." * ".$d;
        }
        else{
            echo $a." + ".$c." igual ".$b." * ".$d;
        }
    }
?>