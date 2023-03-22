<?php
namespace Registry\it;
class Regione {

    public static function all()
    {
        try {
            $conn = new \PDO(DB_DSN,DB_USER,DB_PASSWORD);
            $stmt = $conn->prepare("SELECT * from regione;");
            $stmt->execute();
            $result = $stmt->fetchAll(\PDO::FETCH_OBJ);
            return($result);
        } catch (\Throwable $th) {
            throw $th;
        }

    }
}