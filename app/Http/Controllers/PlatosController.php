<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plato;

class PlatosController extends Controller
{
    // Listar todos los platos
    public function listPlatos()
    {
        $platos = Plato::all();
        return response()->json([
            'platos' => $platos,
            'status' => true
        ]);
    }
    // Guardar un nuevo plato
    public function guardarPlato(Request $request)
    {
        try {
            $plato = new Plato();
            $plato->nombre = $request->input('nombre');
            $plato->descripcion = $request->input('descripcion');
            $plato->precio = $request->input('precio');
            $plato->cantidad = $request->input('cantidad');
            $plato->categoria = $request->input('categoria');

            $plato->save();

            return response()->json([
                'mensaje' => 'Plato creado correctamente',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al guardar el plato',
                'error' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }

    // Buscar un plato por su ID
    public function buscarPlato($id)
    {
        try {
            $plato = Plato::findOrFail($id);
            return response()->json([
                'plato_buscado' => $plato,
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Plato no encontrado',
                'error' => $e->getMessage(),
                'status' => false
            ], 404);
        }
    }

    // Actualizar un plato existente
    public function actualizarPlato(Request $request, $id)
    {
        try {
            $plato = Plato::findOrFail($id);

            $plato->nombre = $request->input('nombre');
            $plato->descripcion = $request->input('descripcion');
            $plato->precio = $request->input('precio');
            $plato->cantidad = $request->input('cantidad');
            $plato->categoria = $request->input('categoria');

            $plato->save();

            return response()->json([
                'mensaje' => 'Plato actualizado correctamente',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al actualizar el plato',
                'error' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }

    // Eliminar un plato por su ID
    public function eliminarPlato($id)
    {
        try {
            $plato = Plato::findOrFail($id);
            $plato->delete();

            return response()->json([
                'mensaje' => 'Plato eliminado correctamente',
                'status' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'mensaje' => 'Error al eliminar el plato',
                'error' => $e->getMessage(),
                'status' => false
            ], 500);
        }
    }
}
