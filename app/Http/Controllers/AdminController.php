<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calculation;

class AdminController extends Controller
{
    public function index()
    {
        $data = Calculation::all();

        return view('admin.index', compact('data'));
    }

    public function edit($id)
    {
        $data = Calculation::find($id);

        if (!$data) {
            return redirect()->route('admin')->with('error', 'Data not found!');
        }

        return view('admin.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer',
            'calories' => 'required|numeric',
            'bmi' => 'required|numeric',
        ]);

        $data = Calculation::find($id);
        if (!$data) {
            return redirect()->route('admin')->with('error', 'Data tidak ditemukan.');
        }

        $data->update($request->all());

        return redirect()->route('admin')->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $data = Calculation::find($id);

        if (!$data) {
            return redirect()->route('admin')->with('error', 'Data tidak ditemukan.');
        }

        $data->delete();

        return redirect()->route('admin')->with('success', 'Data berhasil dihapus.');
    }
}
