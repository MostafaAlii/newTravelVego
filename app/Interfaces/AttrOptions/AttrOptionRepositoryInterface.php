<?php
namespace App\Interfaces\AttrOptions;
interface AttrOptionRepositoryInterface {
    public function index();
    public function store($request);
}