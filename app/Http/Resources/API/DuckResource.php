<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class DuckResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            "id" => $this->id,
            "regular_name" => $this->regular_name,
            "latin_name" => $this->latin_name,
            "description" => $this->description,
            "extroversion" => $this->extroversion,
            "colourfulness" => $this->colourfulness,
            "kindness" => $this->kindness,
            "activeness" => $this->activeness,
            "happiness" => $this->happiness,
        ];
    }
}