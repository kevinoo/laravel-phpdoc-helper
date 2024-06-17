<?php
/** @noinspection SpellCheckingInspection */

namespace kevinoo\LaravelPhpDocHelper\Support;

use JetBrains\PhpStorm\ArrayShape;
use JsonException;

/**
 * A method to determine if a phpredis object thinks it's connected to a server
 * @method static bool isConnected()
 *
 * Returns the keys that match a certain pattern
 * @method static array keys(string $pattern)
 *
 * Returns the current database's size
 * @method static int|false dbSize()
 *
 * Verify if the specified member exists in a key
 * @method static bool hexists(string $matrix_key, $value)
 *
 * Adds a value to the hash stored at key. If this value is already in the hash, FALSE is returned.
 * @method static set(string $key, int|string $value)
 * @method static hset(string $matrix_key, $key, int|string $value)
 *
 * Removes a values from the hash stored at key.
 * If the hash table doesn't exist, or the key doesn't exist, FALSE is returned.
 * @method static hdel(string $matrix_key, string $key)
 *
 * Returns the length of a hash, in number of items
 * @method static hlen(string $matrix_key)
 *
 * Gets a value from the hash stored at $matrix_key.
 * If the hash table doesn't exist, or the key doesn't exist, FALSE is returned.
 * @method static hget(string $matrix_key, string $key)
 *
 * Returns all fields and values of the hash stored at $matrix_key
 * @method static hGetAll(string $matrix_key)
 */
class Redis extends \Illuminate\Support\Facades\Redis
{
    public const TTL_ONE_WEEK = 604800;
    public const TTL_TWO_WEEKS = 1209600;
    public const TTL_ONE_MONTH = 18144000;
    public const TTL_ONE_YEAR = 31536000;

    public static function jsonGet(string $matrix_key, string $key): array
    {
        try{
            if( ($info = static::hget($matrix_key, $key)) !== false ){
                return json_decode($info, true, 512, JSON_THROW_ON_ERROR) ?? [];
            }
        }catch( JsonException $e ){
            return [];
        }

        return [];
    }

    /**
     * @throws JsonException
     */
    public static function jsonSet( string $matrix_key, string $key, array $json_data, ?int $ttl=self::TTL_ONE_YEAR): array
    {
        $json_data['expire'] = time() + $ttl;

        try{
            static::hset(
                $matrix_key,
                $key,
                json_encode( $json_data, JSON_THROW_ON_ERROR | JSON_FORCE_OBJECT )
            );
        }catch( JsonException $e ){
            throw $e;
        }

        return $json_data;
    }

}
