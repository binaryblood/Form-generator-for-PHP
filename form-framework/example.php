<?php
include('_form_build.php');

echo form::label(array("for" => "iamid" , "class" => "theclass" , "disp" => "iamlabel"));
echo form::text(array( 'name'=>"iam name" , "id" => "iamid", "class" => "abcd efgh ijkl" , "ph"=>"i am placeholder" ,"value" => "this is value"));
echo form::password();
echo "<br>";
echo form::open_select();
echo form::option(array("value"=>"a" , "disp"=>"iamdisplaying"));
echo form::close_select();

echo "<br>";

echo form::checkbox(array("value" => "1" , "name"=> "abcd" , "class"=>"i am a class"));
echo form::checkbox(array("value" => "2" , "name"=> "abcde" , "class"=>"i am a class2"));

echo "<br>";

echo form::textarea(array("value" => "This is some text here" ,"rows"=>"10","cols" => "100", "name"=> "abcd" , "class"=>"i am a class", "id" =>"this is id"));


 ?>
