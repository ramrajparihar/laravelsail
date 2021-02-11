<?php

Route::get('calculator', function(){
	echo 'Hello from the calculator package!';
});

Route::get('add/{a}/{b}', 'MyPackages\Calculator\CalculatorController@add');
Route::get('subtract/{a}/{b}', 'MyPackages\Calculator\CalculatorController@subtract');