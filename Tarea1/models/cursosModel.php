<?php

require_once __DIR__ . '/../config/database.php';

class CursosModel
{
    private ?PDO $db = null;

    public function __construct()
    {
        $this->db = Database::getConnection();
    }

    // Obtener todos los cursos
    public function getAll(): array
    {
        $sql = "SELECT *
                FROM cursos
                WHERE disponible = TRUE
                ORDER BY nombre ASC";

        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener cursos por categoría
    public function getByCategoria(string $categoria): array
    {
        $sql = "SELECT *
                FROM cursos
                WHERE categoria = :categoria
                AND disponible = TRUE
                ORDER BY nombre ASC";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([
            ':categoria' => $categoria
        ]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // Obtener categorías
    public function getCategorias(): array
    {
        $sql = "SELECT DISTINCT categoria
                FROM cursos
                WHERE disponible = TRUE
                ORDER BY categoria ASC";

        $stmt = $this->db->query($sql);

        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }
}