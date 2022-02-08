<?php
namespace App\Interfaces\Terms\PaymentTerms;
interface PaymentTermRepositoryInterface {
    public function index();
    public function store($request);
    public function update($request);
    public function destroy($request);
}