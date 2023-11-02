<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\CarsModels\CarsModelsRepositoryInterface;
use Illuminate\Http\Request;

class CarsModelsController extends Controller
{

    private $CarsModels;

    public function __construct(CarsModelsRepositoryInterface $CarsModels)
    {
        $this->CarsModels = $CarsModels;
    }

    public function index()
    {
       return  $this->CarsModels->index();
    }


    public function store(Request $request)
    {
        return $this->CarsModels->store($request);
    }


    public function update(Request $request)
    {
        return $this->CarsModels->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->CarsModels->destroy($request);
    }
}
