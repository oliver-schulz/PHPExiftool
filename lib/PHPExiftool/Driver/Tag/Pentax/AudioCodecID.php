<?php

/*
 * This file is part of PHPExifTool.
 *
 * (c) 2012 Romain Neutron <imprec@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PHPExiftool\Driver\Tag\Pentax;

class AudioCodecID extends \PHPExiftool\Driver\Tag
{

    protected $Id = 371;

    protected $Name = 'AudioCodecID';

    protected $FullName = 'Pentax::PENT';

    protected $GroupName = 'Pentax';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Pentax';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = false;

    protected $Description = 'Audio Codec ID';

    protected $flag_Permanent = true;

}