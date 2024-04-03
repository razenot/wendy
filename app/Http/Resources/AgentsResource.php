<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AgentsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'type' => $this->type,
            'name' => $this->name,
            'phone' => $this->phone,
            'site' => $this->site,
            'mail' => $this->mail,
            'vk' => $this->vk,
            'insta' => $this->insta,
            'price' => $this->price,
            'prepayment' => $this->prepayment,
            'comments' => $this->comments,
            'date_visit' => $this->date_visit,
            'status' => (boolean) $this->status
        ];
    }
}
