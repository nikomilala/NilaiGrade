<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * index
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        //get users form Model
        $users = User::latest()->get();

        //passing user to view
        return view('users', compact('users'));
    }

    public function detail($id)

    {
        $nilai_detail = DB::table('users')->where('id', $id)->first();

        return view('user_detail', ['nilai_detail'=>$nilai_detail]);
    }


}
