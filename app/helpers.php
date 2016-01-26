<?php

function d( $data , $status = false )
{
	echo '<pre>' ;
	print_r($data) ;

	if( $status == false )
	{
		exit;
	}
	else
	{

	}

}

function inputValue(string $key, $data)
{
	return (isset($data->{$key})) ? $data->{$key} : old($key) ;
}

function beforeSql(array $data)
{
	foreach ($data as $key => $value) {
		$setData[$key] = e($data[$key]) ;
	}

	return $setData ;
}
