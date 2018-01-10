<?php

namespace SertxuDeveloper\Voyager\Database\Types\Postgresql;

use SertxuDeveloper\Voyager\Database\Types\Common\DoubleType;

class DoublePrecisionType extends DoubleType
{
    const NAME = 'double precision';
    const DBTYPE = 'float8';
}
