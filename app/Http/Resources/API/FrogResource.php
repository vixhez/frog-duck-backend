<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Resources\Json\JsonResource;

class FrogResource extends JsonResource
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
            "conservation" => $this->conservation,
            "location" => $this->location,
            "extroversion" => $this->extroversion,
            "colourfulness" => $this->colourfulness,
            "kindness" => $this->kindness,
            "activeness" => $this->activeness,
            "happiness" => $this->happiness,
        ];
    }
}
