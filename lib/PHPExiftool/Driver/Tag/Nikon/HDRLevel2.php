<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Nikon;

use JMS\Serializer\Annotation\ExclusionPolicy;
use PHPExiftool\Driver\AbstractTag;

/**
 * @ExclusionPolicy("all")
 */
class HDRLevel2 extends AbstractTag
{

    protected $Id = 7;

    protected $Name = 'HDRLevel2';

    protected $FullName = 'Nikon::HDRInfo';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Location';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'HDR Level 2';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Auto',
        ),
        1 => array(
            'Id' => 1,
            'Label' => '1 EV',
        ),
        2 => array(
            'Id' => 2,
            'Label' => '2 EV',
        ),
        3 => array(
            'Id' => 3,
            'Label' => '3 EV',
        ),
        255 => array(
            'Id' => 255,
            'Label' => 'n/a',
        ),
    );

}
