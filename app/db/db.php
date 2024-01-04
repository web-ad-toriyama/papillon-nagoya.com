<?php

class Db
{
    /**
	 * Information to connect to the database.
	 *
	 * @var array
	 */
    protected static $_config;

    /**
	 * Keep database connection instances as array.
	 *
	 * @var array
	 */
    protected static $_connections = array();

    /**
	 * Whether to use database connection instance as singleton pattern.
	 * If set to true, always the same ensuring that the instance via script.
	 *
	 * @var boolean
	 */
    protected static $_isSingleton = true;

    /**
	 * History of executed sql sentence.
	 *
	 * @var array
	 */
    protected static $_sqlHistory = array();

    /**
	 * Whether to write log of executed sql sentence.
	 *
	 * @var string
	 */
    protected static $_logKey;

    /**
	 * Set wheater to get database connection object as singleton instance or not
	 *
	 * @param boolean $bool
	 *
	 * @return boolean
	 */
    public static function isSingleton($bool = null)
    {
        if (is_bool($bool)) {
            return self::setIsSingleton($bool);
        } else {
            return self::$_isSingleton;
        }
    }

    /**
	 * Set wheater to get database connection object as singleton instance or not
	 *
	 * @param boolean $bool
	 *
	 * @return void
	 */
    public static function setIsSingleton($bool)
    {
        self::$_isSingleton = $bool;
    }

    /**
	 * Set sql execution log output enabled
	 *
	 * @param string $logKey
	 *
	 * @return void
	 */
    public static function enableLogging($logKey = 'default')
    {
        self::$_logKey = $logKey;
    }

    /**
	 * Get PDO instance as database connection object
	 *
	 * @param string $connectionKey
	 *
	 * @return DbAdapterAbstract
	 */
    public static function factory($connectionKey = '0')
    {
        $connection = null;
        if (self::$_isSingleton) {
            if (!is_array(self::$_connections)) {
                self::$_connections = array();
            }
            if (!array_key_exists($connectionKey, self::$_connections) || !(self::$_connections[$connectionKey] instanceof PDO)) {
                $connection = self::_connect();
                self::$_connections[$connectionKey] = $connection;
            }
            $connection = self::$_connections[$connectionKey];
        } else {
            $connection = self::_connect();
            self::$_connections[$connectionKey] = $connection;
        }

        return $connection;
    }

    /**
	 * Close connection
	 *
	 * @param string $connectionKey
	 *
	 * @return void
	 */
    public static function close($connectionKey = '0')
    {
        if (isset(self::$_connections[$connectionKey])) {
            self::$_connections[$connectionKey] = null;
            unset(self::$_connections[$connectionKey]);
        }
    }

    /**
	 * Add executed sql sentence to history
	 *
	 * @param string $sql SQL sentence
	 * @param array  $params Parameters for executed SQL
	 *
	 * @return void
	 */
    public static function addSqlHistory($sql, $params)
    {
        $sqlInfo = array('sql' => $sql, 'params' => $params);
        self::$_sqlHistory[] = $sqlInfo;
        if (DBG === true) {
            Logger::debug(json_encode($sqlInfo), 'debug');
        }
    }

    /**
	 * Get executed SQL history as array
	 *
	 * @return array
	 */
    public static function getSqlHistory()
    {
        return self::$_sqlHistory;
    }

    /**
	 * Get SQL executed last time
	 *
	 * @return array
	 */
    public static function getLastSql()
    {
        $idx = count(self::$_sqlHistory) - 1;
        if ($idx < 0) {
            return '';
        }

        return self::$_sqlHistory[$idx];
    }

    /**
	 * Create connection instance that extends PDO
	 *
	 * @return DbAdapterAbstract
	 * @throws Exception
	 */
    protected static function _connect()
    {
        $instance = new DbAdapter();

        return $instance;
    }
}
