<?php

/*
 * This file is part of the PHPExifTool package.
 *
 * (c) Alchemy <support@alchemy.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\XMPIptcExt;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class AudioBitrate extends AbstractTag
{

    protected $Id = 'audioBitRate';

    protected $Name = 'AudioBitrate';

    protected $FullName = 'XMP::iptcExt';

    protected $GroupName = 'XMP-iptcExt';

    protected $g0 = 'XMP';

    protected $g1 = 'XMP-iptcExt';

    protected $g2 = 'Author';

    protected $Type = 'integer';

    protected $Writable = true;

    protected $Description = 'Audio Bitrate';

    protected $local_g2 = 'Audio';

}
