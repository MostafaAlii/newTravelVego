<?php
namespace App\Interfaces\Products;
interface ProductRepositoryInterface {
    public function index();
    public function create();
    public function addProductImage($product_id);
    public function saveProductImage($request);
    public function storeProductImageToDB($request);
    public function store($request);
}