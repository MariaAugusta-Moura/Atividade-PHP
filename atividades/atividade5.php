<form>
    <input type="text" name="valorA" placeholder="Digite um valor A">
    <input type="text" name="valorB" placeholder="Digite outro valor B">
    <button>
        Resultado
    </button>
</form>

<?php
    if(isset($_GET['valorA'])){
        $val1 = $_GET['valorA']; }
        
        if(isset($_GET['valorB'])){
            $val2 = $_GET['valorB'];
        if($val1<$val2){
            echo $val1. $val2;
        }
        else{
            echo $val2. $val1 ;
        }
    }
?>