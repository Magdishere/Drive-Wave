<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Cars\CarsRepositoryInterface;
use Illuminate\Http\Request;

class CarsController extends Controller
{

    private $Cars;

    public function __construct(CarsRepositoryInterface $Cars)
    {
        $this->Cars = $Cars;
    }

    public function index()
    {
        return  $this->Cars->index();
    }

    public function AvailableCars()
    {
        return  $this->Cars->AvailableCars();
    }

    public function ReservedCars()
    {
        return  $this->Cars->ReservedCars();
    }

    public function RentedCars()
    {
        return  $this->Cars->RentedCars();
    }



    public function store(Request $request)
    {
        return $this->Cars->store($request);
    }


    public function update(Request $request)
    {
        return $this->Cars->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Cars->destroy($request);
    }
}
