<?php

	namespace CacheSystem\Facades;

	use Illuminate\Support\Facades\Facade;

	class CacheRedis extends Facade
	{
		protected static function getFacadeAccessor()
		{
			return 'cache.redis';
		}
	}
