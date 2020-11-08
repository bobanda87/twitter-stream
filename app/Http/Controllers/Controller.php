<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

/**
 * Class Controller
 *
 * @package App\Http\Controllers
 */
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    const PER_PAGE = 25;

    /**
     * @param Request $request
     * @return int
     */
    protected function getPageCount(Request $request): int
    {
        if ($request->has('perPage')) {
            return intval($request->query('perPage'));
        } else {
            return self::PER_PAGE;
        }
    }
}
