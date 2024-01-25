<?php

namespace App\Http\Controllers;

use App\Models\RolePermission;
use Illuminate\Http\Request;

class RolePermissionController extends Controller
{
    public function index()
    {
        $users = RolePermission::all();
        return response()->json($users);
    }

    // Método para mostrar un usuario específico
    public function show($id)
    {
        $user = RolePermission::find($id);
        if (!$user) response()->json(['message' => 'No se encontro el RolePermission'], 404);
        return response()->json($user);
    }

    // Método para crear un nuevo usuario
    public function store(Request $request)
    {
        $user = RolePermission::create($request->all());
        return response()->json($user, 201);
    }

    // Método para actualizar un usuario
    public function update(Request $request, $id)
    {
        $user = RolePermission::findOrFail($id);
        $user->update($request->all());
        return response()->json($user, 200);
    }

    // Método para eliminar un usuario
    public function destroy($id)
    {
        $user = RolePermission::findOrFail($id);
        $user->delete();
        return response()->json(null, 204);
    }
}
