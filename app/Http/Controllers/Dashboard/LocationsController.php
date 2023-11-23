<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Locations\LocationsRepositoryInterface;
use Illuminate\Http\Request;

class LocationsController extends Controller
{

    private $Locations;

    public function __construct(LocationsRepositoryInterface $Locations)
    {
        $this->Locations = $Locations;
    }

    public function index()
    {
        return  $this->Locations->index();
    }


    public function store(Request $request)
    {
        return $this->Locations->store($request);
    }


    public function update(Request $request)
    {
        return $this->Locations->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Locations->destroy($request);
    }
}
