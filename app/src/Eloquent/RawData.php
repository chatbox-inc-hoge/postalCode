<?php
namespace Chatbox\PostalCode\Eloquent;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/04/19
 * Time: 19:34
 */
use Illuminate\Database\Eloquent\Model;


class RawData extends Model{

    protected $table = "raw_data";

    protected $fillable= ["postalcode","pref","city","address","pref_roma","city_roma","address_roma"];

    public $timestamps = false;

    static public function getByCode($code){
        $arr = static::where("postalcode",$code)->get();

        $rtn = [];
        foreach($arr as $value){
            $rtn[] = $value->getEntity();
        }
        return $rtn;
    }

    public function getEntity(){
        $address = new \Chatbox\PostalCode\Model\Address([
            "postalCode" => $this->postalcode,
            "pref" => $this->pref,
            "city" => $this->city,
            "address" => $this->address,
            "prefRoma" => $this->pref_roma,
            "cityRoma" => $this->city_roma,
            "addressRoma" => $this->address_roma,
        ]);
        return $address;
    }

}