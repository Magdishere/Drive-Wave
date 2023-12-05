<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Services\ServicesRepositoryInterface;
use Illuminate\Http\Request;

class ServicesController extends Controller
{

    private $Services;

    public function __construct(ServicesRepositoryInterface $Services)
    {
        $this->Services= $Services;
    }


    public function index()
    {
        return  $this->Services->index();
    }


    public function store(Request $request)
    {
        return $this->Services->store($request);
    }


    public function update(Request $request)
    {
        return $this->Services->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Services->destroy($request);
    }
}
