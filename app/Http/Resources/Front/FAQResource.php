<?php

namespace App\Http\Resources\Front;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FAQResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            "id"       => $this->id,
            "question" => $this->question,
            "answer"   => $this->answer,
            "status"   => $this->status
        ];
    }
}
