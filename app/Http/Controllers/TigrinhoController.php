<?php

namespace App\Http\Controllers;

use App\services\TigrinhoService;
use Illuminate\Http\Request;

class TigrinhoController extends Controller
{
    private $service;
    public function    __construct(TigrinhoService $service)
    {
        $this->service = $service;
    }
    public function index()
    {

        $game= $this->service->execute();

        return view('slot',['games'=> $game]);
    }
}
