<?php

namespace App\Http\Controllers\Doctor;

use App\Models\Recipe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardRecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipe = Recipe::where('doctor_id', Auth::user()->id)->get();
        $jumlah_halaman = ceil($recipe->count() / 10);
        $role = explode('\\', Auth::user()->type);
        if ($recipe->count() == 0) {
            $jumlah_recipe = 0;
        } else {
            $jumlah_recipe = $recipe->count();
        }
        //masuk dashboard langsung menampilkan data seluruh pasien
        return view('dashboard.doctor.index',[
            'title' => 'Dashboard',
            'data' => 'Data Resep',
            'jml_hal' => $jumlah_halaman,
            'recipes' => Recipe::where('doctor_id', Auth::user()->id)->get(),
            'type' => Auth::user()->type,
            'jumlah_recipe' => $jumlah_recipe
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
    public function show(Recipe $resep)
    {
        return view('dashboard.doctor.show-recipe',[
            'title' => 'Detail Resep',
            'data' => 'Detail Resep',
            'type' => Auth::user()->type,
            'recipe' => $resep
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
