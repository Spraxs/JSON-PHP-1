<?php
/**
 * Created by PhpStorm.
 * User: Jaimy
 * Date: 9-12-2018
 * Time: 21:57
 */

$file = 'test.json';

if (file_exists($file)) {
    $filedata = file_get_contents($file);
    $objson = json_decode($filedata, true);
    echo "<hr><code><pre>";
    print_r($objson); // Laat array zien
    echo "<pre><code><hr>";
} else echo $file .' not exists';

//test de output
echo ($objson['klanten']['1']['hobbies']['ko']);
echo "<br>";
echo ($objson['klanten']['3']['hobbies']['ga']);

