<?php
namespace Apps\Models;

class database {

    public $connection;

    const DATABASE_SERVER = "localhost";

    const DATABASE_USER = "root";

    const DATABASE_PASSWORD = "";

    const DATABASE_NAME = "cafebiz";

    /*in docker
    const DATABASE_SERVER = "mysql";

    const DATABASE_USER = "root";

    const DATABASE_PASSWORD = "root";

    const DATABASE_NAME = "cafebiz";*/

    public function __construct()
    {
        /**
         * !$this->connection
         * Khi chưa có kết nối đến CSDL
         */
        if (!$this->connection) {
            $this->connection = mysqli_connect(self::DATABASE_SERVER, self::DATABASE_USER,
                self::DATABASE_PASSWORD, self::DATABASE_NAME);
        }
    }
}