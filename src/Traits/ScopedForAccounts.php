<?php

namespace Infrontlabs\Startup\Traits;

use Infrontlabs\Startup\Scopes\AccountScope;

trait ScopedForAccounts
{

    public static function bootScopedForAccounts()
    {
        static::addGlobalScope(new AccountScope(app('currentAccount')));
    }

}
