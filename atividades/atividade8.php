<form>
    <input type="text" name="valor1" placeholder="Digite seu salario">
 
    <button>
        veja o reajuste
    </button>
</form>

<?php
    if(isset($_GET['valor1'])){
        $val = $_GET['valor1']; }
        
        if($val<=300){
            echo ($val*0.5)+$val;
        }
        if($val>300){
            echo ($val*0.3)+$val;
        }
         
    
?>