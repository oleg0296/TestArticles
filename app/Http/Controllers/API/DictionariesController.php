<?php

namespace App\Http\Controllers\API;

use App\Enum\Categories;
use App\Http\Controllers\Controller;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class DictionariesController extends Controller
{
    /**
     * Get categories list
     *
     * @return Response
     */
    public function categories()
    {
        $response = new Response();
        $response->setStatusCode(200);
        $response->setContent(Categories::LIST_CATEGORIES);
        return $response;
    }
}
