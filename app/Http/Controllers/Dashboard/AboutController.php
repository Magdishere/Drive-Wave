<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\About\AboutRepositoryInterface;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    private $About;

    public function __construct(AboutRepositoryInterface $About)
    {
        $this->About = $About;
    }

    public function index()
    {
        return  $this->About->index();
    }


    public function store(Request $request)
    {
        return $this->About->store($request);
    }


    public function update(Request $request)
    {
        return $this->About->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->About->destroy($request);
    }
}
