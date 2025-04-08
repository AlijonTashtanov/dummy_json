<?php
namespace App\Http\Controllers;

use App\Services\DummyJsonService;
use App\Repositories\ProductRepository;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    public function __construct(
        protected DummyJsonService $apiService,
        protected ProductRepository $repository
    ) {}

    public function fetchAndStore(): JsonResponse
    {
        $products = $this->apiService->fetchIphones();
        $this->repository->saveProducts($products);

        return response()->json(['message' => 'iPhone mahsulotlari saqlandi!', 'count' => count($products)]);
    }

    public function index(): JsonResponse
    {
        return response()->json($this->repository->all());
    }
}
