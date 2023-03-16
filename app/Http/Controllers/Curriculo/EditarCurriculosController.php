<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Models\Curriculo\Curriculo;
use Exception;
use Illuminate\Http\Request;

class EditarCurriculosController extends Controller
{
    private $curriculo;

    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo;
    }
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, $id = null)
    {
        try {
            //code...
            $curriculo = $this->curriculo->findOrFail($id ?? $request->id);
            $curriculo->update(
                $request->only(
                    [
                        'first_name',
                        'last_name',
                        'email',
                        'confirmado'
                    ]
                )
            );
            return response()->json($curriculo, 200);
        } catch (Exception $e) {
            return response()->json($e->getMessage());
        }
    }
}
