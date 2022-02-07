<?php
namespace App\Interfaces\Terms\PrivacyTerms;
interface PrivacyTermRepositoryInterface {
    public function index();
    public function store($request);
    public function update($request);
    public function destroy($request);
}