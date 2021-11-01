<form>
    <input type="text" name="valorA" placeholder="Digite nota 1">
    <input type="text" name="valorB" placeholder="Digite nota 2">
    <input type="text" name="valorC" placeholder="Digite nota 3">
    <input type="text" name="valorD" placeholder="Digite nota 4">
    <button>
        Calcular Media
    </button>
</form>

<?php
 
    if(isset($_GET['valorA'])){
        $val1 = $_GET['valorA']; }
        
        if(isset($_GET['valorB'])){
            $val2 = $_GET['valorB'];
            if(isset($_GET['valorC'])){
                $val3 = $_GET['valorC']; }
                if(isset($_GET['valorD'])){
                    $val4 = $_GET['valorD']; }
                    $media = ($val1 + $val2 + $val3 + $val4)/4;
        if($media>=7){
            echo 'sua media foi:'. $media. 'voce foi aprovado';
        }
        if($media<7){
            echo 'sua media foi:'. $media. 'voce foi reprovado';
        }
        else{
            echo 'numero invalido' ;
        }
    }
?>