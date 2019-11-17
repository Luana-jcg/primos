<?php

if(isset($_POST['btn'])){
    $num = $_POST['num'];
    
    if(empty($num)){
        $msg = 'Campo obrigatório não foi preenchido';
        header('Location:index.php?msg='.$msg);
    }elseif(!ctype_digit($num)){
        $msg = 'Por favor, insira somente números';
        header('Location:index.php?msg='.$msg);
    }else{
        $i = 1;
        $qtd = 0;
        $valor = intval($num);
        
        while($i <= $valor && $qtd <= 2){
            if(($num % $i) == 0){
                $qtd = $qtd + 1;
            }
            $i++;
        }
        
        if($qtd == 2){
            $status = "true";
        }else{
            $status = "false";
        }
        
        header('Location:index.php?status='.$status."&num=".$num);
    }
}else{
    echo "Página não encontrada";
}




?>