<?php

namespace App\Helpers;

trait StringHelper
{
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
