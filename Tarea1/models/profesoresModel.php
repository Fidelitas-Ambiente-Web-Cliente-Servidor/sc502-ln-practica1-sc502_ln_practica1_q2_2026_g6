<?php

require_once __DIR__ . '/../config/database.php';

class ProfesorModel
{
    private ?PDO $db = null;

    public function __construct()
    {
        //Obtener la connexion a la BD compartida
        $this->db = Database::getConnection();
    }

    // Leer todos los profesores activos
    public function getAll(): array
    {
        $stmt = $this->db->query('SELECT * FROM profesoresWHERE activo = 1ORDER BY id ASC');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Buscar un profesor con su ID
    public function getById(int $id): array|false
    {
        $sql = 'SELECT * FROM profesores WHERE id = :id AND activo = 1';
        $stmt = $this->db->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}