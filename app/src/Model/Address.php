<?php
namespace Chatbox\PostalCode\Model;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/04/19
 * Time: 19:48
 */

use Chatbox\Container\PropertyContainerTrait;

class Address implements \JsonSerializable{

    use PropertyContainerTrait;

    public $postalCode;
    public $pref;
    public $city;
    public $address;
    public $prefRoma;
    public $cityRoma;
    public $addressRoma;

    function __construct($data)
    {
        $this->setData($data);
    }

    /**
     * (PHP 5 &gt;= 5.4.0)<br/>
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     */
    function jsonSerialize()
    {
        return $this->toArray();
    }


}