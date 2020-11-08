<?php

namespace App\Http\Controllers;

use App\Http\Resources\TweetResource;
use App\Models\Tweet;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class TweetController
 *
 * @package App\Http\Controllers
 */
class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $page_count = $this->getPageCount($request);
        return response()->json(TweetResource::collection(Tweet::paginate($page_count)));
    }
}
