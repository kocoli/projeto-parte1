<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\User\User;
use source\Models\User\Type;

//Criando tipos de usuários
$admin = new Type(1, "Administrador", "Acesso total ao sistema. Possui permissão para gerenciar todos os clientes, visualizar assinaturas e alterar configurações globais da plataforma.");
$seller = new Type(2, "Craftsman", "Acesso a gerencia de Ateliê. Possui permição para gerenciar encomendas, pedidos, clientes e vendas");
$customer = new Type(3, "Cliente", "Acesso ao catalogo de produtos do craftsman. Pode fazer encomendas, acompanhar o status e avaliar essa encomenda");

//Criando usuários:
$user = new User(1, $admin, "Nicóli Elesbão", "nicolielesbao@gmail.com", "123456789", "");

echo $user->show();