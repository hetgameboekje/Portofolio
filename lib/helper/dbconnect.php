<?php
namespace lib\db;


final class DB {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $servername = "localhost";
        $dbname = "myDB";
        $username = "username";
        $password = "password";

        $this->connection = new PDO(
            "mysql:host=$servername;dbname=$dbname",
            $username,
            $password,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
    }

    public static function connect() {
        if (self::$instance === null) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function query($query, ...$params) {
        // Vervang $1, $2, ... door ?
        $query = preg_replace('/\$\d+/', '?', $query);

        $stmt = $this->connection->prepare($query);
        $stmt->execute($params);

        // Geef direct de resultaten als assoc array terug
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

// Voorbeeld van gebruik:
$query = "SELECT * FROM table WHERE id = $1 AND day = $2";
$id = 5;
$day = '2025-04-30';

$data = DB::connect()->query($query, $id, $day);

print_r($data);

?>
