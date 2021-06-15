<?php
define("bdServidor", "127.0.0.1:3306");
define("bdUsuario", "root");
define("bdSenha", "");
define("bdBanco", "tarefas");

function gravar_tarefa($tarefa){
    $conexao = new mysqli(bdServidor, bdUsuario, bdSenha, bdBanco);

        if($conexao->connect_error){
            echo "Problema para conectar com banco de dados. Verifique os dados!";
            $conexao->close();
        }else{
            
            $stmt = $conexao->prepare("INSERT INTO tarefas(nome,descricao,prazo,prioridade,concluida)VALUES(?,?,?,?,?)");

            $stmt->bind_param('sssii',$nome,$descricao,$prazo,$prioridade,$concluida);

            $nome = $tarefa['nome'];
            $descricao = $tarefa['descricao'];
            $prazo = $tarefa['prazo'];
            $concluida = $tarefa['concluida'];
            $prioridade= $tarefa['prioridade'];

            $stmt->execute();

            $stmt->close();
            $conexao->close();
        }
}

function buscar_tarefas(){
    $conexao = new mysqli(bdServidor, bdUsuario, bdSenha, bdBanco);
    $tarefas = array();
        if($conexao->connect_error){
            echo "Problema para conectar com banco de dados. Verifique os dados!";
            $conexao->close();
        }else{
           //$result =  $conexao->query("SELECT * FROM tarefas", MYSQLI_USE_RESULT);
            $resultado = $conexao->query("SELECT * FROM tarefas");
            
          

            while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
               
                array_push( $tarefas, $row);
            }          
            $conexao->close();
        }
        return $tarefas;
}