<?php

namespace SertxuDeveloper\Voyager\Events;

use Illuminate\Queue\SerializesModels;
use SertxuDeveloper\Voyager\Database\Schema\Table;

class TableAdded
{
    use SerializesModels;

    public $table;

    public function __construct(Table $table)
    {
        $this->table = $table;

        event(new TableChanged($table->name, 'Added'));
    }
}
