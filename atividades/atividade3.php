<form>
    <input type="text" name="valor" placeholder="Digite um valor">
    <button>
        Resultado
    </button>
</form>

<?php
    if(isset($_GET['valor'])){
        $val = $_GET['valor'];
        if($val>0){
            echo $val." o valor é positivo";
        }
        if($val<0){
            echo $val." o valor é negativo";
        }
        if($val=0){
            echo $val." o valor é igual a zero";
        }
         
    }
?>