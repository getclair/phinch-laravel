<?php

namespace Phinch\Phinch;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use Phinch\Paginated as BasePaginated;

class Paginated extends BasePaginated implements Arrayable, Jsonable
{
    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'results' => $this->results(),
            'meta' => $this->meta(),
        ];
    }

    /**
     * @param $options
     * @return false|string
     */
    public function toJson($options = 0)
    {
        return json_encode($this->toArray(), $options);
    }
}