<?php
namespace Chatbox\PostalCode\Console\Commands;
/**
 * Created by PhpStorm.
 * User: mkkn
 * Date: 2015/04/19
 * Time: 2:20
 */

use Illuminate\Console\Command;

use Chatbox\PostalCode\Eloquent\RawData;

class DebugImport extends Command{

    protected $name = "debug:import";
    protected $description = "import csv data";

    public function handle(){
        $path = getcwd()."/data/KEN_ALL_ROME.CSV";
        $fp = fopen($path,'r');

        while( $row = fgetcsv( $fp, 256 ) ) {
            list($zip,$pref,$city,$address,$prefRoma,$cityRoma,$addressRoma) = $row+["","","","","","",""];
            $pref = mb_convert_encoding($pref,"UTF-8","SJIS");
            $city = mb_convert_encoding($city,"UTF-8","SJIS");
            $address = mb_convert_encoding($address,"UTF-8","SJIS");
            $this->line("$address $pref $city $prefRoma");
            RawData::create([
                "postalcode" => $zip,
                "city" => $city,
                "pref" => $pref,
                "address" => $address,
                "city_roma" => $cityRoma,
                "pref_roma" => $prefRoma,
                "address_roma" => $addressRoma,
            ]);
        }
        fclose( $fp );
    }

}