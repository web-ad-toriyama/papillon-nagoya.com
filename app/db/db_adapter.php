<?php

class DbAdapter extends PDO
{
    /**
	 * Open database connection
	 *
	 * @param type $config
	 *
	 * @return DbAdapterAbstract
	 */
    public function __construct()
    {
        $this->preConnect();
        $dsn = sprintf("mysql:host=%s;dbname=%s;charset=%s", DB_HOST, DB_NAME,DB_CHAR);
        parent::__construct($dsn, DB_USER, DB_PASS);
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->postConnect();
    }

    /**
	 * Get sql sentence which deletes all the rows
	 *
	 * @param string $tableNaame
	 *
	 * @return string
	 */
    public function getTruncateSql($tableNaame)
    {
        $sql = 'TRUNCATE TABLE ' . $tableNaame;

        return $sql;
    }

    /**
	 * Processing before connection
	 *
	 * @return void
	 */
    protected function preConnect()
    {
    }

    /**
	 * Processing after connection
	 *
	 * @return void
	 */
    protected function postConnect()
    {
    }
}
