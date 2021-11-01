<form>
    <input type="text" name="valor" placeholder="Digite um valor">
    <button>
        Resultado
    </button>
</form>

<?php
    if(isset($_GET['valor'])){
        $val = $_GET['valor'];
        if($val>=10){
            echo $val." é maior ou igual a 10";
        }
        else{
            echo $val." não é maior ou igual a 10";
        }
    }
?>