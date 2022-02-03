<?php
namespace App\Interfaces\Attributes;
interface AttributeRepositoryInterface {
    public function index();
    public function store($request);
    public function update($request);
    public function destroy($request);
}