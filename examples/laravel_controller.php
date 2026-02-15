<?php

namespace App\Http\Controllers;

use GisPh\Laravel\Facades\GisPh;
use Illuminate\Http\Request;

class BarangayController extends Controller
{
    /**
     * Search for barangays using the Facade.
     */
    public function search(Request $request)
    {
        $query = $request->input('q');

        // Expressive syntax using the Laravel Facade
        $results = GisPh::barangays()->search($query);

        return response()->json($results);
    }

    /**
     * Get details for a specific province.
     */
    public function provinceDetails($id)
    {
        $province = GisPh::provinces()->find($id);

        return view('provinces.show', compact('province'));
    }
}
