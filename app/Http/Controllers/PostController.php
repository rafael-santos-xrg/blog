<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return "Pagina de index!";
    }

    public function create()
    {
        return "Pagina de Criação!";
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        return "Post número {$id}!";
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}