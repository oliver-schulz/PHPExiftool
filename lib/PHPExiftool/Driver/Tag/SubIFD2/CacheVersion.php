<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\SubIFD2;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class CacheVersion extends AbstractTag
{

    protected $Id = 51114;

    protected $Name = 'CacheVersion';

    protected $FullName = 'Exif::Main';

    protected $GroupName = 'SubIFD2';

    protected $g0 = 'EXIF';

    protected $g1 = 'IFD0';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Cache Version';

    protected $local_g1 = 'SubIFD2';

    protected $flag_Unsafe = true;

    protected $MaxLength = 4;

}
