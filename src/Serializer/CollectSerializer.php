<?php

	namespace CacheSystem\Serializer;

	use CacheSystem\Serializer\SerializerAbstract;
	use Illuminate\Support\Collection;

	class CollectSerializer extends SerializerAbstract
	{
		const SERIALIZER = CollectSerializer::class;

		public function serialize($data)
		{
			if (!($data instanceof Collection))
				$this->exception('Data is not instance of Collection');

			$cache = $this->cacheProcessor('PUT', $data, self::SERIALIZER);

			return $cache;
		}

		public function deserialize($data)
		{
			$cache = $this->cacheProcessor('GET', $data);

			$collect = collect($cache['data']);

			return $collect;
		}
	}
