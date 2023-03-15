<?php

namespace App\Http\Controllers\Curriculo;

use App\Http\Controllers\Controller;
use App\Models\Curriculo\Curriculo;
use Exception;
use App\Http\Requests\Curriculo\CriarCurriculoRequest;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

class CriarCurriculosController extends Controller
{
    private $curriculo;

    public function __construct(Curriculo $curriculo)
    {
        $this->curriculo = $curriculo;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(CriarCurriculoRequest $request)
    {
        try {
            //code...
            $curriculo = $this->curriculo->create(
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
