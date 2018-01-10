<?php

namespace SertxuDeveloper\Voyager\Database\Types\Mysql;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use SertxuDeveloper\Voyager\Database\Types\Type;

class YearType extends Type
{
    const NAME = 'year';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'year';
    }
}
