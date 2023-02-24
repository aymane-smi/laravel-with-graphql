<?php

namespace App\GraphQL\Queries;

use App\Models\Todo;

final class GetTodoResolver
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke()
    {
        // TODO implement the resolver

        return \App\Models\Todo::all();
    }
}
