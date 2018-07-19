<?php

namespace Infrontlabs\Startup\Controllers\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Infrontlabs\Startup\Requests\Account\CreateAccountRequest;

class SettingsController extends Controller
{
    public function index(Request $request)
    {
        return view('startup::account.settings');
    }

    public function store(CreateAccountRequest $request)
    {
        $request->account()->update([
            'name' => $request->get('account_name'),
        ]);

        return back()->withSuccess('Your account has been updated.');
    }
}
