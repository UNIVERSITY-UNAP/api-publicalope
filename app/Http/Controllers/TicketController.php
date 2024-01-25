<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $users = Ticket::all();
        return response()->json($users);
    }

    // Método para mostrar un usuario específico
    public function show($id)
    {
        $user = Ticket::find($id);
        if (!$user) response()->json(['message' => 'No se encontro el ticket'], 404);
        return response()->json($user);
    }

    // Método para crear un nuevo usuario
    public function store(Request $request)
    {
        $user = Ticket::create($request->all());
        return response()->json($user, 201);
    }

    // Método para actualizar un usuario
    public function update(Request $request, $id)
    {
        $user = Ticket::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    // Método para eliminar un usuario
    public function destroy($id)
    {
        $user = Ticket::findOrFail($id);
        $user->delete();
        return response()->json(null, 204);
    }
}
