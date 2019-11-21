<?php
header('content-type: application/json');
include_once('Cursos.php');
$cursos = new Cursos();


$dados = file_get_contents('php://input');
$dados = json_decode(file_get_contents('php://input'));
//dados é o json ou um array

if (isset($dados->id_curso)) {   
    $id_curso = $dados->id_curso;
}
if (isset($dados->nome)) {
    $nome = $dados->nome;
}
if (isset($dados->grau)) {
    $grau = $dados->grau;
}
if (isset($dados->campus)) {
    $campus = $dados->campus;
}
if (isset($dados->semestres)) {
    $semestres = $dados->semestres;
}
if (isset($dados->cargaHoraria)) {
    $cargaHoraria = $dados->cargaHoraria;
}
if (isset($dados->vagas)) {
    $vagas = $dados->vagas;
}
if (isset($dados->turno)) {
    $turno = $dados->turno;
}

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
        if ($cursos->SetCurso($nome, $grau, $campus, $semestres, $cargaHoraria, $vagas, $turno)){        
            //retornar status 201
            http_response_code(201);
            echo(json_encode(array('mensagem' => 'Incluído com sucesso!')));
        }else{
            echo(json_encode(array('mensagem' => 'Não inserido!')));
        }
        break;
        
    case 'GET':
        if (isset($_GET['id_curso']) != null) {
            $id_curso = $_GET['id_curso'];
            $res = $cursos->GetCurso($_GET['id_curso']);
            echo json_encode($res);
        } else {
            echo json_encode($cursos->GetCursos());
        }
        break;
        
    case 'PUT':

//        $cursos->PutCurso($id_curso, $nome, $grau, $campus, $semestres, $cargaHoraria, $vagas, $turno);
        if ($cursos->PutCurso($_GET['id_curso'], $nome, $grau, $campus, $semestres, $cargaHoraria, $vagas, $turno)){
            echo(json_encode(array('mensagem' => 'Alterado com sucesso!')));
        } else {
            echo(json_encode(array('mensagem' => 'Não alterado.')));
        }
        break;
        
    case 'DELETE':
        if ($cursos->DelCurso($_GET['id_curso'])){
            echo(json_encode(array('mensagem' => 'Excluido com sucesso!')));
        } else {
            echo(json_encode(array('mensagem' => 'Não excluido.')));
        }
        break;
        
    default:
        echo 'Método não identificado!';
}
