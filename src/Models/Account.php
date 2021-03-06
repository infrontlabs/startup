<?php

namespace Infrontlabs\Startup\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Cashier\Billable;
use Infrontlabs\Startup\Traits\HasSubscriptions;
use Infrontlabs\Startup\Traits\HasTeam;

class Account extends Model
{
    use Billable, HasSubscriptions, HasTeam;

    protected $guarded = [];

    protected $casts = [
        'trial_ends_at' => 'date',
    ];

    public function getRouteKeyName()
    {
        return 'hash_id';
    }

    public function getHashIdAttribute()
    {
        return app('hashid')->encode($this->id); // VolejRejNm
    }

}
