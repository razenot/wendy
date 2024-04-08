<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Todo;
use App\Http\Resources\TodoResource;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use Illuminate\Http\Response;


class TodoController extends Controller
{
    public function index()
    {
        $todos = TodoResource::collection(Todo::all());

        return response()->json(
            data: $todos,
            status: 200,
        );
    }

    public function show(int $id)
    {
        $todo = Todo::find($id);
        
        if($todo) {
            $todosResource = TodoResource::make($todo);
            return response()->json(
                data: $todosResource,
                status: 200,
            );
        } else {
            return response()->json(
                data: ["errors" => "Запись не найдена"],
                status: 422,
            );
        }
    }

    public function store(StoreTodoRequest $request)
    {
        try {
            $todos = Todo::create($request->validated());
            $todosResource = TodoResource::make($todos);

            return response()->json(
                data: $todosResource,
                status: 200,
            );
        } catch (Exeption $e) {
            return response()->json(
                data: ["errors" => "Произошла ошибка"],
                status: 422,
            );
        }

    }

    public function update(UpdateTodoRequest $request)
    {
        $todo = Todo::find($request->id);

        if($todo) {
            $todo->update($request->validated());
            $todosResource = TodoResource::make($todo);

            return response()->json(
                data: $todosResource,
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
