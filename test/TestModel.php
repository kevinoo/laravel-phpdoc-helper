<?php

namespace Test;



use kevinoo\LaravelPhpDocHelper\Eloquent\Model;


class TestModel extends Model
{
    public function test()
    {

        static::firstOrFail(
        );

    }
}
