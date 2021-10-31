<?php

namespace App\Http\Controllers;

use App\Http\Resources\AddressResource;
use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        return AddressResource::collection(Address::all());
    }
}
