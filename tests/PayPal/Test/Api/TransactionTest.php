<?php

namespace PayPal\Test\Api;

use PayPal\Api\Transaction;
use PHPUnit\Framework\TestCase;

/**
 * Class Transaction
 *
 * @package PayPal\Test\Api
 */
class TransactionTest extends TestCase
{
    /**
     * Gets Json String of Object Transaction
     *
     * @return string
     */
    public static function getJson()
    {
        return '{}';
    }

    /**
     * Gets Object Instance with Json data filled in
     * @return Transaction
     */
    public static function getObject()
    {
        return new Transaction(self::getJson());
    }


    /**
     * Tests for Serialization and Deserialization Issues
     * @return Transaction
     */
    public function testSerializationDeserialization()
    {
        $obj = new Transaction(self::getJson());
        $this->assertNotNull($obj);
        $this->assertEquals(self::getJson(), $obj->toJson());
        return $obj;
    }
}
