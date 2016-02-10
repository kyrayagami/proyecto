<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Vsmoraes\Pdf\Pdf;

class ImpresionController extends Controller
{
    private $pdf;

    public function __construct(Pdf $pdf)
    {
        $this->pdf = $pdf;
    }

    public function index()
    {
        $html = view('admin.impresion.index')->render();

        return $this->pdf
            ->load($html)
            ->show();
    }
}
