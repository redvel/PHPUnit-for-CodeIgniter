<?php

class TestDb_Demo extends \CI_DbTestCase {


    public function getDataSet()
    {
        return new \PHPUnit_Extensions_Database_DataSet_YamlDataSet(
            fixture('user.yml')
        );
    }

    public function testUserCount()
    {
        $this->assertEquals(1, $this->getConnection()->getRowCount('users'));
    }

}
