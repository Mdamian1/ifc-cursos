<?php

class Cursos {
    
    private $user;
    private $password;
    public $id_curso;
    public $nome;
    public $grau;
    public $campus;
    public $semestres;
    public $cargaHoraria;
    public $vagas;
    public $turno;
    
    public function SetCurso($nome, $grau, $campus, $semestres, $cargaHoraria, $vagas, $turno) {
        include_once "conexao.php";
        
        $stmt = $conn->prepare("
            INSERT INTO cursos (nome, grau, campus, semestres, cargaHoraria, vagas, turno) values ('$nome', '$grau', '$campus', '$semestres', '$cargaHoraria', '$vagas', '$turno')
        ");
        
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    
    public function PutCurso($id_curso, $nome, $grau, $campus, $semestres, $cargaHoraria, $vagas, $turno) {
        include_once "conexao.php";
        
        $stmt = $conn->prepare("
            UPDATE cursos SET nome = '$nome', grau = '$grau', campus = '$campus', semestres = '$semestres', cargaHoraria = '$cargaHoraria', vagas = '$vagas', turno = '$turno' WHERE id_curso = $id_curso
        ");
        
        if ($stmt->execute()) {
            return 'Curso atualizado com sucesso!';
        } else {
            return 'Falha ao atualizar curso!';
        }
    }
    
    public function DelCurso($id_curso) {
        include_once "conexao.php";
        
        $stmt = $conn->prepare("
            DELETE FROM cursos WHERE id_curso = '$id_curso'
        ");
        
        if ($stmt->execute()) {
            return 'Curso excluido com sucesso!';
        } else {
            return 'Falha ao excluir curso!';
        }
    }
    
    public function GetCursos() {
        include_once "conexao.php";
        
        $stmt = $conn->prepare('SELECT id_curso, nome, grau, campus, semestres, cargaHoraria, vagas, turno FROM cursos ORDER BY campus');
        
        if ($stmt->execute()) {
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } else {
            return 'Falha ao buscar os cursos!';
        }
    }
    
    public function GetCurso($id_curso) {
        include_once "conexao.php";
        
        $stmt = $conn->prepare("SELECT id_curso, nome, grau, campus, semestres, cargaHoraria, vagas, turno FROM cursos WHERE id_curso = $id_curso ORDER BY campus");
        
        if ($stmt->execute()) {
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return 'Falha ao buscar o curso!';
        }
    }
    
}

//$curso = new Cursos();
//echo "<pre>";
//var_dump($curso->DelCurso(2));
//echo "</pre>";