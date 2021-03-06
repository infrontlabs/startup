<?php

namespace Infrontlabs\Startup\Events;

use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Infrontlabs\Startup\Models\Account;

class UserAddedToAccount
{
    use Dispatchable, SerializesModels;

    public $account;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(Account $account)
    {
        $this->account = $account;
    }
}
