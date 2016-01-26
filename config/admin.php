<?php
return [

	'defaultLanguage' 		=> 'th' ,
	'listTransLang'				=> ['th','vn'],

	'cachetime_shorturl'	=> 432000 ,
	'cache'								=> [
														'election'			=> '300' ,   //5 minute
														'queryOther'		=> '1' , //1 minute
														'queryLoadMore'	=> '1' //1 minute
														],

	'upload' 							=> [
														'admin' => [
																	'path' 		=> 'upload/popup/',
																	'storage'	=> 1024,
																	'mimes' 	=> 'jpeg,gif,png'
																	]
														],
	'defultRecord' 				=> 4 ,

	];
