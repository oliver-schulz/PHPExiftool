<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPXmp;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class ModifyDate extends AbstractTag
{

    protected $Id = 'ModifyDate';

    protected $Name = 'ModifyDate';

    protected $FullName = 'XMP::xmp';

    protected $GroupName = 'XMP-xmp';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-xmp';

    protected $g2 = 'Image';

    protected $Type = 'date';

    protected $Writable = true;

    protected $Description = 'Modify Date';

    protected $local_g2 = 'Time';

}
