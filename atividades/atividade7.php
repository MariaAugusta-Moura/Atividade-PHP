<form>    
    <label>
        Altura
    </label>
    <input type="text" name="altura">
    <label>
        Sexo
    </label>
    <select name="sexo">
        <option value="m">
            Masculino
        </option>
        <option value="f">
            Feminino
        </option>
    </select>
    <button>
        Resultado
    </button>
</form>

<?php
    function pesoh($alt){
        $pesoIdeal = (72.7*doubleval($alt))-58;        
        echo "O Peso Ideal é ".$pesoIdeal;
    }
    function pesom($alt){
        $pesoIdeal = (62.1*doubleval($alt))-44.7;        
        echo "O Peso Ideal é ".$pesoIdeal;
    }
    if(isset($_GET['sexo'])&&isset($_GET['altura'])){
        $sexo = $_GET['sexo'];
        $altura = $_GET['altura'];
        switch($sexo){
            case 'm':
                pesoh($altura);
                break;
            case 'f':
                pesom($altura);            
                break;
        }
    }
?>