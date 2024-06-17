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
 * @method static static create(array $attributes=[])
 * @method static static forceCreate(array $attributes)
 * @method static insert(array $attributes)
 * @method update(array $set)
 * @method delete()
 *
 * @method bool save(array $options=[])
*/
class Model extends EloquentModel
{

}
