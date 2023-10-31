<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\CarsBrands\CarsBrandsRepositoryInterface;
use Illuminate\Http\Request;

class CarsBrandsController extends Controller
{

    private $CarsBrands;

    public function __construct(CarsBrandsRepositoryInterface $CarsBrands)
    {
        $this->CarsBrands = $CarsBrands;
    }

    public function index()
    {
       return  $this->CarsBrands->index();
    }


    public function store(Request $request)
    {
        return $this->CarsBrands->store($request);
    }


    public function update(Request $request)
    {
        return $this->CarsBrands->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->CarsBrands->destroy($request);
    }
}
