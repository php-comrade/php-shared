<?php
namespace Comrade\Shared\Model;

use function Makasim\Values\build_object;

trait CreateTrait
{
    /**
     * @param array $data
     *
     * @return self|object
     */
    public static function create(array $data = [])
    {
        return build_object(null, array_replace([
            'schema' => static::SCHEMA,
        ], $data));
    }
}