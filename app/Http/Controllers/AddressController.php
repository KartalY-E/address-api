<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdminAddressRequest;
use App\Http\Resources\AddressResource;
use Illuminate\Http\Request;
use App\Models\Address;

class AddressController extends Controller
{
    public function index()
    {
        return AddressResource::collection(Address::all());
    }

    public function store(AdminAddressRequest $request)
    {
        $validated = $request->validated();
        $newAddress = Address::create($validated);
        $newAddress->save();

        return response(new AddressResource($newAddress), 201);
    }

    public function update(Request $request, $id)
    {
        $address = Address::find($id);
        $address->update($request->all());

        return response(new AddressResource(Address::find($address->id)), 201);
    }

    public function destroy($id)
    {
        return Address::destroy($id);
    }
}
