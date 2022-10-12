<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminEditProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jumlah_halaman = ceil(User::count() / 10);
        $role = explode('\\', Auth::user()->type);
        $jumlah_user = User::count();
        if (User::count() == 0) {
            $jumlah_user = 0;
        } else {
            $jumlah_user = User::count();
        }

        return view('dashboard.admin.index',[
            'title' => 'Data Users',
            'data' => 'Data Users',
            'jml_hal' => $jumlah_halaman,
            'type' => Auth::user()->type,
            'jumlah_user' => $jumlah_user,
            'users' => User::latest()->filter(request(['search']))->paginate(10),
            // 'polis' => Poli::all()p
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('dashboard.admin.user-edit', [
            'title' => 'Edit Data User',
            'admin' => $admin,
            // 'patient' => $user,
            'type' => Auth::user()->type,
            // 'polis' => Poli::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => 'max:16',
            'email' => 'required'
        ]);

        Admin::where('id', $admin->id)
                ->update($validatedData);

        return redirect('/dashboard/pasien')->with('success', 'Your profile has been updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
