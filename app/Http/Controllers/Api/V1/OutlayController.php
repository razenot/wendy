<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Outlay;
use App\Http\Resources\OutlayResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreOutlayRequest;
use App\Http\Requests\UpdateOutlayRequest;
use Illuminate\Http\Response;

class OutlayController extends Controller
{
    public function index()
    {
        $outlays = OutlayResource::collection(Outlay::all());

        return response()->json(
            data: $outlays,
            status: 200,
        );
    }

    public function show(int $id)
    {
        $outlay = Outlay::find($id);

        if($outlay) {
            $outlaysResource = OutlayResource::make($outlay);
            return response()->json(
                data: $outlaysResource,
                status: 200,
            );
        } else {
            return response()->json(
                data: ["errors" => "Запись не найдена"],
                status: 422,
            );
        }
    }

    public function store(StoreOutlayRequest $request)
    {
        try {
            $outlays = Outlay::create($request->validated());
            $outlaysResource = OutlayResource::make($outlays);

            return response()->json(
                data: $outlaysResource,
                status: 200,
            );
        } catch (Exeption $e) {
            return response()->json(
                data: ["errors" => "Произошла ошибка"],
                status: 422,
            );
        }

    }

    public function update(UpdateOutlayRequest $request)
    {
        $outlay = Outlay::find($request->id);

        if($outlay) {
            $outlay->update($request->validated());
            $outlaysResource = OutlayResource::make($outlay);

            return response()->json(
                data: $outlaysResource,
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
