<?php

namespace App\Http\Controllers\RealtiesController;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\RealEstate;

class AdminRealtiesController extends Controller
{
    //
    public function __construct()
    {
    	$this->middleware('admin_auth');
    }

    public function showAddForm()
    {
    	return view('admin.administrators.AddRealtyForm');
    }
    public function addNewRealty(Request $request)
    {
    	$realty = new RealEstate;
		$realty->Ulica = $request->ulica;
		$realty->Cena = $request->cena;
		$realty->save();
		return redirect('admin/AddRealty');
    }
}

