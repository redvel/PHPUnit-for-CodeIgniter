<?php
if ( basename(__FILE__) == basename($_SERVER['PHP_SELF']) ) { die("This file cannot be loaded directly."); }

define(PHPUNIT, 'test');

abstract class CI_DbTestCase extends \PHPUnit_Extensions_Database_TestCase
{
    static $pdo = null;

    private $conn = null;

    public $CI;

    public $db;

    public function setUp()
    {
        $this->CI = & get_instance();
        //connect DB
        $this->db = $this->CI->load->database(PHPUNIT, TRUE);
        parent::setUp();
    }

    public function tearDown()
    {
        parent::tearDown();
    }

    final public function getConnection()
    {
        if ($this->conn === null) {
            $file_path = APPPATH . 'config/database.php';
            include ($file_path);

            $host = $db[PHPUNIT]['hostname'];
            $user = $db[PHPUNIT]['username'];
            $password = $db[PHPUNIT]['password'];
            $dbname = $db[PHPUNIT]['database'];

            if (static::$pdo === null) {
                static::$pdo = new \PDO("mysql:dbname={$dbname};host={$host};charset=utf8;", $user, $password);
            }
            $this->conn = $this->createDefaultDBConnection(self::$pdo, $dbname);
        }

        return $this->conn;
    }

    public function getDataSet()
    {
        return new \PHPUnit_Extensions_Database_DataSet_YamlDataSet(fixture('null.yml'));
    }
}

function loadYaml($fileName)
{
    return Yaml::parse(fixture($fileName));
}

function fixture($fileName)
{
    $fileName = ltrim($fileName, '/');
    return __DIR__ . "/fixtures/{$fileName}";
}
