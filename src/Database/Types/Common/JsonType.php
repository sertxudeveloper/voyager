<?php

namespace SertxuDeveloper\Voyager\Database\Types\Common;

use Doctrine\DBAL\Platforms\AbstractPlatform;
use SertxuDeveloper\Voyager\Database\Types\Type;

class JsonType extends Type
{
    const NAME = 'json';

    public function getSQLDeclaration(array $field, AbstractPlatform $platform)
    {
        return 'json';
    }
}
