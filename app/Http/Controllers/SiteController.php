<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Gift;
use App\Models\Winner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class SiteController extends Controller
{
    public function index()
    {
        $employee = Employee::get();
        $gift = Gift::get();

        return view('welcome', [
            'employee' => $employee,
            'gift' => $gift,
        ]);
    }

    public function createDb()
    {
        try {
            Artisan::call('migrate:fresh --seed');
            session()->flash('success', 'Task was successful!');
        } catch (\Throwable $th) {
            session()->flash('error', 'Task had failed!');
        }
        return redirect(route('index'));
    }

    public function ajaxRandom(Request $request)
    {
        $user = Winner::find($request->code);
        $result = ['Mã dự thưởng không trúng giải.'];
        
        if ($user) {
            $result = ['Bạn đã nhận được giải thưởng '.$user->gift->name];
        }
        return response()->json([
            'success' => true,
            'message' => $result,
        ]);
    }
}
