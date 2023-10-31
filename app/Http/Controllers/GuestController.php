<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class GuestController extends Controller
{
    //

    public function store(Request $request)
    {
        $create = new Guest();
        $create->name = $request->name;
        $create->email = $request->email;
        $create->phone = $request->phone;
        $create->password = Hash::make($request->password);
        $create->save();

        return redirect('/')->with('success', 'Berhasil menambah buku tamu');
    }
}
