<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Resources\SearchResource;

class SearchController extends Controller
{
    /**
     * Search for the specified resource.
     *
     * @param  str $name
     * @return \Illuminate\Http\Response
     */
    public function search($name)
    {
        // $item = Item::where('name','like','%'.$name.'%')
        //             ->get();
        // return $item;

        return SearchResource::collection(Item::where('name','like','%'.$name.'%')->get());
    }
}
