<?php

namespace App\Http\Controllers;

use App\Models\EventCategory;
use Illuminate\Http\Request;

class EventCategoryController extends Controller
{
    public function index()
    {
        $eventCategory = EventCategory::all();
        return response()->json($eventCategory);
    }

    // Método para mostrar un usuario específico
    public function show($id)
    {
        $eventCategory = EventCategory::find($id);
        if (!$eventCategory) return response()->json(['message' => 'No se encontro la categoria'], 404);
        return response()->json($eventCategory);
    }

    // Método para crear un nuevo usuario
    public function store(Request $request)
    {
        $data = EventCategory::create($request->all());
        return response()->json(['message' => 'Creado correctamente', 'data' => $data], 201);
    }

    // Método para actualizar un usuario
    public function update(Request $request, $id)
    {
        $eventCategory = EventCategory::find($id);
        if (!$eventCategory) return response()->json(['message' => 'No se encontro la categoria'], 404);
        $eventCategory->update($request->all());
        return response()->json($eventCategory, 200);
    }

    // Método para eliminar un usuario
    public function destroy($id)
    {
        $eventCategory = EventCategory::find($id);
        if (!$eventCategory) return response()->json(['message' => 'No se encontro la categoria'], 404);
        $eventCategory->delete();
        return response()->json(null, 204);
    }
}
