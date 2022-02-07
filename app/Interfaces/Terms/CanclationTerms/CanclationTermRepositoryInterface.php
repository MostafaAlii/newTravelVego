<?php
namespace App\Interfaces\Terms\CanclationTerms;
interface CanclationTermRepositoryInterface {
    public function index();
    public function store($request);
    public function update($request);
    public function destroy($request);
}