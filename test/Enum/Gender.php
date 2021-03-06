<?php
declare(strict_types=1);

namespace Acelaya\Test\Doctrine\Enum;

use MyCLabs\Enum\Enum;

/**
 * Class Gender
 * @author
 * @link
 *
 * @method static Gender MALE()
 * @method static Gender FEMALE()
 */
class Gender extends Enum
{
    public const MALE = 'male';
    public const FEMALE = 'female';
}
