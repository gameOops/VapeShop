<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ThreeService;
use App\Services\CatalogService;

class ProductsController extends Controller
{
    /**
     * @var ThreeService
     */
    private $threeService;
    /**
     * @var CatalogService
     */
    private $catalogService;

    public function __construct(ThreeService $threeService,CatalogService $catalogService) {

        $this->threeService = $threeService;
        $this->catalogService = $catalogService;
    }
    public function three() {
        return $this->threeService->three();
    }
    public function one(Request $request) {
        return $this->threeService->one($request['id']);
    }
    public function catalog(Request $request) {
        return $this->catalogService->get($request['type']);
    }
}
