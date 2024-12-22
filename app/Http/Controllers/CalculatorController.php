<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculation;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('calculator');
    }

    public function calculate(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
            'weight' => 'required|numeric|min:1',
            'height' => 'required|numeric|min:1',
            'gender' => 'required|string|in:male,female',
        ]);

        $heightInMeters = $validated['height'] / 100;
        $bmi = $validated['weight'] / ($heightInMeters ** 2);

        // Hitung kebutuhan kalori dasar (BMR)
        if ($validated['gender'] === 'male') {
            $calories = 88.36 + (13.4 * $validated['weight']) + (4.8 * $validated['height']) - (5.7 * $validated['age']);
        } else {
            $calories = 447.6 + (9.2 * $validated['weight']) + (3.1 * $validated['height']) - (4.3 * $validated['age']);
        }

        // Simpan ke database
        Calculation::create([
            'name' => $validated['name'],
            'age' => $validated['age'],
            'bmi' => $bmi,
            'calories' => $calories,
        ]);

        return back()->with('success', "BMI: " . round($bmi, 2) . ", Kalori: " . round($calories, 2) . " kkal");
    }
}