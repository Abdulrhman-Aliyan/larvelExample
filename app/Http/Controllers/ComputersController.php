<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{

    // Array of static Data
    private static function getData() {
        return [
            ['id' => 1, 'name' => 'LG', 'origin' => 'Korea'],
            ['id' => 2, 'name' => 'Sony', 'origin' => 'Japan'],
            ['id' => 3, 'name' => 'HP', 'origin' => 'USA'],
            ['id' => 4, 'name' => 'Dell', 'origin' => 'USA'],
            ['id' => 5, 'name' => 'Asus', 'origin' => 'Taiwan'],
            ['id' => 6, 'name' => 'Acer', 'origin' => 'Taiwan'],
            ['id' => 7, 'name' => 'Apple', 'origin' => 'USA'],
            ['id' => 8, 'name' => 'Lenovo', 'origin' => 'China'],
            ['id' => 9, 'name' => 'MSI', 'origin' => 'Taiwan'],
            ['id' => 10, 'name' => 'Microsoft', 'origin' => 'USA'],
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('computers.index', [
            'computers' => Computer::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $computer = new Computer();
        $computer->name = $request->input('computer-name');
        $computer->origin = $request->input('computer-origin');
        $computer->price = $request->input('computer-price');

        $computer->save();

        return redirect()->route('computers.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $computer = Computer::find($id);

        if (!$computer) {
            abort(404);
        }

        return view('computers.show', [
            'computer' => $computer
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
