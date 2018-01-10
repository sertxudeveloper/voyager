<?php

namespace SertxuDeveloper\Voyager\Database\Types\Postgresql;

use SertxuDeveloper\Voyager\Database\Types\Common\CharType;

class CharacterType extends CharType
{
    const NAME = 'character';
    const DBTYPE = 'bpchar';
}
