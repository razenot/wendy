<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Guests;
use App\Http\Resources\GuestsResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGuestsRequest;
use App\Http\Requests\UpdateGuestsRequest;
use Illuminate\Http\Response;

class GuestsController extends Controller
{
    public function index()
    {
        $guests = GuestsResource::collection(Guests::all());

        return response()->json(
            data: $guests,
            status: 200,
        );
    }

    public function show(int $id)
    {
        $guest = Guests::find($id);
        
        if($guest) {
            $guestResource = GuestsResource::make($guest);
            return response()->json(
                data: $guestResource,
                status: 200,
            );
        } else {
            return response()->json(
                data: ["errors" => "Запись не найдена"],
                status: 422,
            );
        }
    }

    public function store(StoreGuestsRequest $request)
    {
        try {
            $guests = Guests::create($request->validated());
            $guestsResource = GuestsResource::make($guests);

            return response()->json(
                data: $guestsResource,
                status: 200,
            );
        } catch (Exeption $e) {
            return response()->json(
                data: ["errors" => "Произошла ошибка"],
                status: 422,
            );
        }

    }

    public function update(UpdateGuestsRequest $request)
    {
        $guest = Guests::find($request->id);

        if($guest) {
            $guest->update($request->validated());
            $guestsResource = GuestsResource::make($guest);

            return response()->json(
                data: $guestsResource,
                status: 200,
            );
        } else {
            return response()->json(
                data: ["errors" => "Запись не найдена"],
                status: 422,
            );
        }
    }
}
