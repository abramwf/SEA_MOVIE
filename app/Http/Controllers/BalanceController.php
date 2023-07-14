<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BalanceController extends Controller
{
    public function update(Request $request)
    {
        $newMoney = $request->input('money');
        $balance = Balance::find(1);
        $currentMoney = $balance->money;
        $balance->money = $currentMoney + $newMoney;
        $balance->save();

        return redirect()->back();
    }
}