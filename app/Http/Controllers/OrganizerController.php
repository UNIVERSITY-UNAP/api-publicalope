<?php

namespace App\Http\Controllers;

use App\Models\Organizer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrganizerController extends Controller
{
    public function index()
    {
        $users = Organizer::all();
        return response()->json($users);
    }

    // Método para mostrar un usuario específico
    public function show($id)
    {
        $user = Organizer::find($id);
        if (!$user) response()->json(['message' => 'No se encontro el organizador'], 404);
        return response()->json($user);
    }

    // Método para crear un nuevo usuario
    public function store(Request $request)
    {
        $user = Organizer::create($request->all());
        return response()->json($user, 201);
    }

    // Método para actualizar un usuario
    public function update(Request $request, $id)
    {
        $user = Organizer::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    // Método para eliminar un usuario
    public function destroy($id)
    {
        $user = Organizer::findOrFail($id);
        $user->delete();
        return response()->json(null, 204);
    }

    public function events($organizerId)
    {
        $events = DB::table('events')
            ->where('organizer_id', $organizerId)
            ->get();

        return response()->json($events);
    }
}
