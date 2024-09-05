<?php

namespace App\IRepository;

interface PostInterface
{
    public function index();
    public function create();
    public function store($request);

    public function show(string $id);

    public function edit(string $id);

    public function update($request);

    public function destroy($request);
}
