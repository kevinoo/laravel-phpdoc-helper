<?php

namespace kevinoo\LaravelPhpDocHelper\Eloquent;

use Closure;
use Illuminate\Contracts\Database\Query\Expression;
use Illuminate\Support\Collection;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\Eloquent\Builder as EloquentBuilder;
use Illuminate\Database\Eloquent\Model as EloquentModel;

/**
 * @mixin EloquentBuilder
 * @method static static[] cursor()
 *
 * @method static Collection keyBy(string $column)
 *
 * @method static EloquentBuilder|static query()
 * @method static Builder select(string|array $columns)
 * @method static Builder distinct(array $columns)
 * @method static Builder selectRaw(string $query,array $bindings=[])
 * @method bool exists()
 *
 * @method static Builder|EloquentBuilder|static where(Closure|string|array|Expression $column, string $operator=null, mixed $value=null)
 * @method static Builder whereBetween(string $column, array $values )
 * @method static Builder orWhereBetween(string $column, array $values )
 * @method static Builder whereIn(string $column, array $values )
 * @method static Builder whereNotIn(string $column, array|Collection $values )
 * @method static Builder orWhereIn(string $column, array $values )
 * @method static Builder orWhereNotIn(string $column, array $values )
 * @method static Builder whereRaw(string $where)
 *
 * @method static Builder|EloquentBuilder orderBy(string $column, string $order='ASC' )
 * @method static Builder orderByDesc(string $column)
 * @method static Builder join(string $table, string $column1, string $column2)
 * @method static Builder leftJoin(string $table, string $column1, string $column2)
 *
 * @method static Builder having(string $column, string $condition, mixed $value=null)
 * @method static Builder havingBetween(string $column, array $values )
 *
 * @method int increment(string $column)
 * @method int incrementQuietly(string $column)
 * @method int decrement(string $column)
 * @method int decrementQuietly(string $column)
 *
 * @method static static create(array $attributes=[])
 * @method static static forceCreate(array $attributes)
 * @method static insert(array $attributes)
 * @method bool update(array $set)
 * @method bool updateOrFail(array $set)
 * @method bool updateQuietly(array $set)
 * @method bool delete()
 *
 * @method bool save(array $options=[])
 * @method bool saveOrFail(array $options=[])
 * @method bool saveQuietly(array $options=[])
 * @method bool push()
 * @method bool pushQuietly()
*/
class Model extends EloquentModel
{

}
