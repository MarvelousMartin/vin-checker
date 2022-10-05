<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;
use Sunrise\Vin\Vin;

class VinController extends Controller
{
    public function index(): View
    {
        return view('home', ['owners' => DB::table('owners')->get()]);
    }

    public function newItem() {
        return view('new');
    }

    public function validate_vin(Request $request)
    {
        if ($request->get('checkVin') == 'on') {
            try {
                $request->validate([
                    'vin' => 'size:17',
                ]);
            } catch (ValidationException $e) {
                return response()->json(['error' => $e->validator->errors()->all()], 422);
            }
            try {
                $vin = new Vin($request->get('vin'));
                return view('confirm', [
                    'name' => $request->get('name'),
                    'vin' => $vin->getVin(),
                    'manufacturer' => $vin->getManufacturer(),
                    'model' => $request->get('model'),
                    'engine' => $request->get('engine'),
                    'year' => $vin->getModelYear(),
                    'note' => $request->get('note'),
                    'checkVin' => $request->get('checkVin') == 'on',
                ]);
            } catch (\InvalidArgumentException $e) {
                return response()->json(['error' => $e->getMessage()], 422);
            }
        }
        return view('confirm', [
            'name' => $request->get('name'),
            'vin' => $request->get('vin'),
            'manufacturer' => '',
            'model' => $request->get('model'),
            'engine' => $request->get('engine'),
            'year' => [''],
            'note' => $request->get('note'),
            'checkVin' => $request->get('checkVin') == 'on',
        ]);
    }

    public function sendToDb(Request $request) {
        if (DB::table('owners')->where('vin', $request->get('vin'))->exists()) {
            return response()->json(['error' => 'This VIN already exists in the database'], 422);
        }
        DB::table('owners')->insert([
            'name' => $request->get('name'),
            'vin' => $request->get('vin'),
            'manufacturer' => $request->get('manufacturer'),
            'model' => $request->get('model'),
            'engine' => $request->get('engine'),
            'year' => $request->get('year'),
            'note' => $request->get('note'),
            'checkVin' => $request->get('checkVin'),
        ]);

        return redirect('list', 302, [
            'name' => $request->get('name'),
            'model' => $request->get('model'),
            'engine' => $request->get('engine'),
            'richtext' => $request->get('richtext'),
            'vin' => $request->get('vin'),
            'year' => $request->get('year'),
            'region' => $request->get('region'),
            'manufacturer' => $request->get('manufacturer'),
        ]);
    }
}
