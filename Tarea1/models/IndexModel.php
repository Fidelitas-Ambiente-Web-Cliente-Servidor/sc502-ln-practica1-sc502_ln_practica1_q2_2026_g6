<?php

require_once __DIR__ . '/../config/database.php';

class IndexModel
{
    private ?PDO $bd = null;

    public function __construct()
    {
        //Obtener la connexion a la BD compartida
        $this->bd = Database::getConnection();
    }

    //Leer los registro de tabla cursos
    public function getAllCursos(): array
    {
        $stmt = $this->bd->query(
            'SELECT * FROM cursos_destacados ORDER BY nombre ASC'
        );
        return $stmt->fetchAll(PDO::FETCH_ASSOC); //retorna array de arrays asociativos
    }
}