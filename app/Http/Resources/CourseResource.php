<?php

namespace App\Http\Resources;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\LanguageResource;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
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
          'title' => $this->title,
          'type' => 'course',
          'description' => Str::limit(strip_tags($this->description), 200),
          'language' => new LanguageResource(
            DB::table('languages')->whereId($this->language_id)->get()->first()
          ),
          'image' => $this->image_src
        ];
    }
}
