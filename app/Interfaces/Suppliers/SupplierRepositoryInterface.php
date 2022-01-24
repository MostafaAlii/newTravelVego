<?php
namespace App\Interfaces\Suppliers;
interface SupplierRepositoryInterface {
    public function index();
    public function create();
    public function store($request);
    public function destroy($request);
}