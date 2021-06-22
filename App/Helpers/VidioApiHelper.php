<?php

namespace App\Helpers;

trait VidioApiHelper
{
  public function getDetails($url){


      $curl = curl_init();

      curl_setopt_array($curl, array(
          CURLOPT_URL => "http://www.omdbapi.com/?s=".$url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_POSTFIELDS => "",
          CURLOPT_HTTPHEADER => array(
              "Postman-Token: 38f02bfd-f005-4f4f-830c-8d3fc9d7ce71",
              "cache-control: no-cache"
          ),
      ));

      $response = curl_exec($curl);
      $err = curl_error($curl);

      curl_close($curl);

      if ($err) {
          echo "cURL Error #:" . $err;
      } else {
          return json_decode($response, true);
      }
  }

  private function tidy($word)
  {
    return ucfirst(trim($word));
  }

  private function concat()
  {
    return implode(' ', array_map(function($word) {
      return $this->tidy($word);
    }, func_get_args()));
  }
}
