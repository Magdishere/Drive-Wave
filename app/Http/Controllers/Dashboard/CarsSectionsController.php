<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\CarsSections\CarsSectionRepositoryInterface;
use Illuminate\Http\Request;

class CarsSectionsController extends Controller
{

    private $CarsSections;

    public function __construct(CarsSectionRepositoryInterface $CarsSections)
    {
        $this->CarsSections = $CarsSections;
    }

    public function index()
    {
       return  $this->CarsSections->index();
    }


    public function store(Request $request)
    {
        return $this->CarsSections->store($request);
    }


    public function update(Request $request)
    {
        return $this->CarsSections->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->CarsSections->destroy($request);
    }
}
