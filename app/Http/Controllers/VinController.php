<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Sunrise\Vin\Vin;

class VinController extends Controller
{
    public function index(): View
    {
        return view('new');
    }

    public function validate_vin(Request $request)
    {
        if ($request->get('nocheck') !== 'on') {
            try {
                $request->validate([
                    'vin' => 'required|size:17',
                ]);
            } catch (ValidationException $e) {
                return response()->json(['error' => $e->validator->errors()->all()], 422);
            }
        }
        try {
            $vin = new Vin($request->get('vin'));
        }
        catch (\InvalidArgumentException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }

        return view('temp', [
            'vin' => $vin->getVin(),
            'year' => $vin->getModelYear(),
            'region' => $vin->getRegion(),
            'manufacturer' => $vin->getManufacturer(),
        ]);
    }
}
