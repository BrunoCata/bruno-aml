<?php
    include_once 'Model/conexao.php';
    include_once 'Model/ClienteDao.php';
    include_once 'Bean/Cliente.php';

    $conn = conexao();
    $clienteDao = new ClienteDao();
    $cliente = new Cliente();
    //$cliente->inserir();
    
    
    //Teste do Listar
    //$clienteDao->listar();


    //Teste do Excluir
    // $cliente->setIdcliente(1);
    // $clienteDao->excluir($cliente);

    //Teste do Inserir
    //$cliente->setDesnome("Talita");
    //$cliente->setDesemail("talita@talita");
    //$cliente->setDesendereco("Rua 7");
    //$clienteDao->inserir($cliente);

    //Teste do Editar
    // $cliente->setIdcliente(3);
    // $cliente->setDesnome("Talita");
    // $cliente->setDesemail("mario@mario");
    // $cliente->setDesendereco("Rua 7");
    // $cliente->setDtcadastro("08/07/2018");
    // $clienteDao->editar($cliente);

?>