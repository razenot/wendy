<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Agents;
use App\Http\Resources\AgentsResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAgentsRequest;
use App\Http\Requests\UpdateAgentsRequest;
use Illuminate\Http\Response;


class AgentsController extends Controller
{
    public function index()
    {
        $agents = AgentsResource::collection(Agents::all());

        return response()->json(
            data: $agents,
            status: 200,
        );
    }

    public function show(int $id)
    {
        $agent = Agents::find($id);

        if($agent) {
            $agentsResource = AgentsResource::make($agent);
            return response()->json(
                data: $agentsResource,
                status: 200,
            );
        } else {
            return response()->json(
                data: ["errors" => "Запись не найдена"],
                status: 422,
            );
        }
    }

    public function store(StoreAgentsRequest $request)
    {
        try {
            $agents = Agents::create($request->validated());
            $agentsResource = AgentsResource::make($agents);

            return response()->json(
                data: $agentsResource,
                status: 201,
            );
        } catch (Exeption $e) {
            return response()->json(
                data: ["errors" => "Произошла ошибка"],
                status: 422,
            );
        }

    }

    public function update(UpdateAgentsRequest $request)
    {
        $agent = Agents::find($request->id);

        if($agent) {
            $agent->update($request->validated());
            $agentsResource = AgentsResource::make($agent);

            return response()->json(
                data: $agentsResource,
                status: 200,
            );
        } else {
            return response()->json(
                data: ["errors" => "Запись не найдена"],
                status: 422,
            );
        }
    }

    public function destroy(int $id)
    {
        $agent = Agents::find($id);

        if($agent) {
            $agent->delete();
            return response()->noContent();
        } else {
            return response()->json(
                data: ["errors" => "Запись не найдена"],
                status: 422,
            );
        }
    }
}
