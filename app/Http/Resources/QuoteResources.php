<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use function GuzzleHttp\json_decode;

class QuoteResources extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    private function _getImage()
    {
        $url = 'https://api.unsplash.com/photos/random';
        $ch = curl_init();
        $headers = array(
            'Content-Type:application/json',
            'Authorization: Client-ID ' . 'hmGwzUl79Js2uHAf2qP9zfDuMgZ78zXFIAoaDdVaokE' // <---
        );
        // $optArray = array(
        // 	CURLOPT_URL => $url,
        // 	CURLOPT_RETURNTRANSFER => true
        // );
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        // curl_setopt_array($ch, $headers);
        curl_setopt($ch, CURLOPT_URL, $url);
        $result = curl_exec($ch);

        return json_decode($result, true);

        curl_close($ch);
    }

    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'message' => $this->message,
            'user' => new UserResource($this->user),
            'date_post' => $this->created_at->diffforHumans(),
            'date_post_normal' => date('d F Y', strtotime($this->created_at)),
            // 'image' => $this->_getImage()
        ];
    }
}
