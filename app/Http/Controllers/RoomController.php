<?php

namespace App\Http\Controllers;

use App\Models\Room;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        return view('room.index', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('room.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_number' => 'required|max:255',
            'room_type' => 'required|integer|min:1',
            'price' => 'required|numeric|min:0',
        ]);

        Room::create($validated);
        return redirect()->route('rooms.index')->with('success', '部屋が追加されました');
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return view('room.show', compact('room'));
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
