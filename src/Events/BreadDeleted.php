<?php

namespace SertxuDeveloper\Voyager\Events;

use Illuminate\Queue\SerializesModels;
use SertxuDeveloper\Voyager\Models\DataType;

class BreadDeleted
{
    use SerializesModels;

    public $dataType;

    public $data;

    public function __construct(DataType $dataType, $data)
    {
        $this->dataType = $dataType;

        $this->data = $data;

        event(new BreadChanged($dataType, $data, 'Deleted'));
    }
}
