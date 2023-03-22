<?php
namespace Registry\it;

class Provincia {

    public static function all()
    {
        try {
            $conn = new \PDO(DB_DSN,DB_USER,DB_PASSWORD);
            $stmt = $conn->prepare("SELECT * from provincia;");
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
            return($result);
        } catch (\Throwable $th) {
            throw $th;
        }

    }
} 