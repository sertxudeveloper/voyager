<?php

namespace SertxuDeveloper\Voyager\Database\Types\Postgresql;

use SertxuDeveloper\Voyager\Database\Types\Common\VarCharType;

class CharacterVaryingType extends VarCharType
{
    const NAME = 'character varying';
    const DBTYPE = 'varchar';
}
