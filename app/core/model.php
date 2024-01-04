<?php

class Model
{
    /**
	 * PDO instance
	 *
	 * @var PDO
	 */
    protected $db;

    /**
	 * Table name
	 *
	 * @var string
	 */
    protected $name;

    /**
	 * Alias ​​for a table in SQL statements
	 *
	 * @var string
	 */
    protected $alias;

    /**
	 * Schema name of database.
	 *
	 * @var string
	 */
    protected $schema;

    /**
	 * Default PDO instance
	 *
	 * @var PDO
	 */
    protected static $_defaultDb;

    /**
	 * Whether there are class actions in the case as the horse is not a class definition of table
	 *
	 * @var boolean
	 */
    protected static $_allowVirtual = true;

    /**
	 * Constructor
	 *
	 * @param string $tableName Table name to associate with class
	 * @param PDO    $db PDO instance
	 *
	 * @return void
	 */
    public function __construct($tableName = null, $db = null)
    {
        if ($db == null) {
            if (self::$_defaultDb instanceof PDO) {
                $db = self::$_defaultDb;
            } else {
                $db = Db::factory();
            }
        }
        $this->db = $db;

        if ($tableName != null) {
            $this->name = $tableName;
        } elseif ($this->name == null) {
            $this->setDefaultTableName();
        }
    }

    /**
	 * Set alias for a table in SQL statements
	 *
	 * @param string $alias Alias​for the table
	 *
	 * @return void
	 */
    public function setAlias($alias)
    {
        $this->alias = $alias;
    }

    /**
	 * Get alias for a table in SQL statements that is currently set
	 *
	 * @return string
	 */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
	 * Set table name to associate with class
	 *
	 * @param string $name table name to associate with class
	 *
	 * @return void
	 */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
	 * Get table name to associate with class that is currently set
	 *
	 * @return string
	 */
    public function getName()
    {
        return $this->name;
    }

    /**
	 * Set schema name
	 *
	 * @param string $schema
	 *
	 * @return void
	 */
    public function setSchema($schema)
    {
        $this->schema = $schema;
    }

    /**
	 * Get schema name
	 *
	 * @return string
	 */
    public function getSchema()
    {
        return $this->schema;
    }

    /**
	 * Set whether there are class actions in the case as the horse is not a class definition of table
	 *
	 * @param boolean $isAllow
	 *
	 * @return void
	 */
    public static function allowVirtual($isAllow)
    {
        self::$_allowVirtual = $isAllow;
    }

    /**
	 * Get whether there are class actions in the case as the horse is not a class definition of table
	 *
	 * @return boolean
	 */
    public static function isAllowVirtual()
    {
        return self::$_allowVirtual;
    }

    /**
	 * Set default PDO instance to be used case if no instance is particularly
	 *
	 * @param PDO $db
	 *
	 * @return void
	 */
    public static function setDefaultConnection($db)
    {
        self::$_defaultDb = $db;
    }

    /**
	 * Set PDO instance used in this instance
	 *
	 * @param PDO $db
	 *
	 * @return void
	 */
    public function setConnection($db)
    {
        $this->db = null;
        $this->db = $db;
    }

    /**
	 * Get PDO instance that is used in this instance
	 *
	 * @return PDO $db
	 */
    public function getConnection()
    {
        return $this->db;
    }

    /**
	 * Get instance of SqlSelect to build a select statement
	 *
	 * @return SqlSelect
	 * @throws Exception
	 */
    public function select()
    {
        if ($this->name == null) {
            throw new Exception('not specified table name.');
        }
        $select = new SqlSelect($this->db, $this->name, $this->alias);
        if ($this->schema != null) {
            $select->setSchema($this->schema);
        }

        return $select;
    }

    /**
	 * Get instance of SqlUpdate to build a update statement
	 *
	 * @return SqlUpdate
	 * @throws Exception
	 */
    public function update()
    {
        if ($this->name == null) {
            throw new Exception('not specified table name.');
        }
        $upd = new SqlUpdate($this->db, $this->name, $this->alias);
        if ($this->schema != null) {
            $upd->setSchema($this->schema);
        }

        return $upd;
    }

    /**
	 * Get instance of SqlInsert to build a insert statement
	 *
	 * @return SqlInsert
	 * @throws Exception
	 */
    public function insert()
    {
        if ($this->name == null) {
            throw new Exception('not specified table name.');
        }
        $ins = new SqlInsert($this->db, $this->name);
        if ($this->schema != null) {
            $ins->setSchema($this->schema);
        }

        return $ins;
    }

    /**
	 * Get instance of SqlDelete to build a delete statement
	 *
	 * @return SqlDelete
	 * @throws Exception
	 */
    public function delete()
    {
        if ($this->name == null) {
            throw new Exception('not specified table name.');
        }
        $del = new SqlDelete($this->db, $this->name);
        if ($this->schema != null) {
            $del->setSchema($this->schema);
        }

        return $del;
    }

    /**
	 * Create table name by this class name and set
	 *
	 * @return void
	 */
    protected function setDefaultTableName()
    {
        $className = get_class($this);
        $this->name = NameManager::toTable($className);
    }

    /**
	 * Create table name by this class name and set
	 *
	 * @param string $tableName If not specified, use the table name for this class
	 *
	 * @return array
	 */
    public function getColumnsInfo($tableName = null)
    {
        $ret = $this->getColumnInfoMysql($tableName);

        return $ret;
    }

    /**
	 * For MySQL.
	 * Create table name by this class name and set.
	 *
	 * @param string $tableName If not specified, use the table name for this class
	 *
	 * @return void
	 */
    protected function getColumnInfoMysql($tableName = null)
    {
        if ($tableName == null) {
            $tableName = $this->name;
        }
        $sql = 'SELECT * FROM ' . $tableName . ' WHERE 1 = 0';
        $stmt = $this->db->query($sql);

        $columns = array();
        for ($i = 0; $i < $stmt->columnCount(); $i++) {
            $columnInfo = $stmt->getColumnMeta($i);
            $colName = $columnInfo['name'];
            $tmp = array();
            $tmp['index'] = $i;
            $tmp['name'] = $colName;
            $tmp['length'] = $columnInfo['len'];
            $tmp['is_string'] = true;
            if ($columnInfo['native_type'] == 'LONG') {
                $tmp['is_string'] = false;
            }
            $tmp['primary_key'] = false;
            if (in_array('primary_key', $columnInfo['flags'])) {
                $tmp['primary_key'] = true;
            }
            $tmp['not_null'] = false;
            if (in_array('not_null', $columnInfo['flags'])) {
                $tmp['not_null'] = true;
            }
            $columns[$colName] = $tmp;
        }

        return $columns;
    }


    /**
	 * Return names of the table's primary key field
	 *
	 * @param string $tableName If not specified, use the table name for this class
	 *
	 * @return array
	 */
    public function getKeyColumns($tableName = null)
    {
        $columnsInfo = $this->getColumnsInfo($tableName);
        $keys = array();
        foreach ($columnsInfo as $col => $info) {
            if (true == $info['primary_key']) {
                $keys[] = $col;
            }
        }

        return $keys;
    }

    /**
	 * Execute select statement specify primary key field values
	 * and return single row information as array
	 *
	 * @return array $row Array of row information
	 */
    public function find()
    {
        $args = func_get_args();
        $keyCols = $this->getKeyColumns();
        if (count($args) != count($keyCols)) {
            return false;
        }

        $sel = $this->select();
        $i = 0;
        foreach ($keyCols as $col) {
            $sel->where($col, $args[$i]);
            $i++;
        }
        $row = $sel->fetchRow();

        return $row;
    }

    /**
	 * Execute a SELECT statement without where condition
	 * and return all rows information as array
	 *
	 * @param string $order
	 *
	 * @return array
	 */
    public function selectAll($order = null)
    {
        $sel = $this->select();
        if ($order) {
            $sel->order($order);
        }
        $rows = $sel->fetchAll();

        return $rows;
    }

    public function begin()
    {
        $this->db->beginTransaction();
    }

    public function commit()
    {
        $this->db->commit();
    }

    public function rollback()
    {
        $this->db->rollback();
    }
}
