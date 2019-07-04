<?php

  $bimestre = $_GET['bimestre'];
            getAllDisciplinas($bimestre);

function getAllDisciplinas($bimestre){
        include_once "bd.php";
        $query = "SELECT id_disciplina, disciplina_nome FROM disciplinas WHERE bimestre = $bimestre";
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        $disciplinas = $stmt->fetchAll(PDO::FETCH_ASSOC); 
        echo json_encode($disciplinas);
    }

        
?>