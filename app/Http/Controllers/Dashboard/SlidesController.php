<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interfaces\Slides\SlidesRepositoryInterface;
use Illuminate\Http\Request;

class SlidesController extends Controller
{

    private $Slides;

    public function __construct(SlidesRepositoryInterface $Slides)
    {
        $this->Slides= $Slides;
    }


    public function index()
    {
       return  $this->Slides->index();
    }


    public function store(Request $request)
    {
        return $this->Slides->store($request);
    }


    public function update(Request $request)
    {
        return $this->Slides->update($request);
    }


    public function destroy(Request $request)
    {
        return $this->Slides->destroy($request);
    }
}
