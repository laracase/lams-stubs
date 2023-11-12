<?php

namespace Lams\Stubs\Controllers\Inner;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Artisan;

class ConsoleController extends Controller
{

    /**
     * @return JsonResponse
     */
    public function index(): JsonResponse
    {

        $this->validate([
            'limit' => 'integer|max:100|min:5',
        ]);
        $existCode = Artisan::call('forum:forum');
        return $this->sendSuccessJson($existCode);
    }
}
