<?php

namespace App\Handlers;

class Install
{
	public static function getData($model)
	{
		$http = new \GuzzleHttp\Client();
		$url = route('install', $model);
		$response = $http->get($url);

		return json_decode((string)$response->getBody(), true);
	}
}
