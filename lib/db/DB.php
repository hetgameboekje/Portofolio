<?php
namespace lib\db;

require_once __DIR__ . '/hidden.php';

final class DB {
    private static $instance = null;
    private $connection;

    private function __construct() {
        $servername = DATABASECON;
        $dbname = DATABASENAME;
        $username = DATABASEUSER;
        $password = DATABASEPASSWORD;

        $this->connection = new \PDO(
            "mysql:host=$servername;dbname=$dbname",
            $username,
            $password,
            [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
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
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}
