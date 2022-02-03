<?php
namespace App\Interfaces\ServicePrices;
interface ServicePricesRepositoryInterface {
    public function index();
    public function store($request);
    public function update($request);
    public function destroy($request);
    public function update_status($request);
}