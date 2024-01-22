<?php 
function inserirContato($conexao,$nomeContato,$foneContato){
    $query = "INSERT INTO contatostb (nomeContato,foneContato) VALUES('{$nomeContato}', '{$foneContato}';" ;
    return mysqli_query($conexao,$query);

}

function buscarContato($conexao,$idContato,$nomeContato,$foneContato){
    $query = "SELECT * FROM contatostb where nomeContato like '%{$nomeContato}%'"; 
    $result =  mysqli_query($conexao,$query);
}

function deletarContato($conexao,$idContato){
    $query = "DELET FROM contatostb where idContato = '{$idContato}' ";
    $result =  mysqli_query($conexao,$query);
    return $result;
}

function alterarContato($conexao,$idContato,$nomeContato,$foneContato){
    $query = "UPDATE contatostb SET nomeContato='%{$nomeContato}%', foneContato = '%{$foneContato}%', idContato ='%{$idContato}%'";
    $result = mysqli_query($conexao,$query);
    return $result;

}

?>