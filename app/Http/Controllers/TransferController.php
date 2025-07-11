<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Inertia\Response;

class TransferController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('Transfer/Index');
    }
}
