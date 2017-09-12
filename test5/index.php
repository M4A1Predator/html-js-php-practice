<?php
class FileOwners{
    public static function groupByOwners($files){

        $fileGroup = array();
        foreach($files as $k => $v){
            if(array_key_exists($v, $fileGroup)){
                array_push($fileGroup[$v], $k);
            }else{
                $fileGroup[$v] = array($k);
            }
        }

        return $fileGroup;
    }
}

$files = array(
            "Input.txt" => "Randy",
            "Code.py" => "Stan",
            "Output.txt" => "Randy"
        );

$files2 = array(
            "Input.txt" => "Randy",
            "Code.py" => "Stan",
            "Output.txt" => "Randy",
            "Hack.exe" => "Lee",
            "Package.json" => "Randy",
            "Index.html" => "Lee",
        );

var_dump(FileOwners::groupByOwners($files));