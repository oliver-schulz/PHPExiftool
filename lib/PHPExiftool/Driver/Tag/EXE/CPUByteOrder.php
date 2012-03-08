<?php

namespace PHPExiftool\Driver\Tag\EXE;

class CPUByteOrder extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'CPUByteOrder';

    protected $FullName = 'mixed';

    protected $GroupName = 'EXE';

    protected $g0 = 'EXE';

    protected $g1 = 'EXE';

    protected $g2 = 'Other';

    protected $Type = 'mixed';

    protected $Writable = false;

    protected $Description = 'CPU Byte Order';

    protected $Values = array(
        1 => array(
            'Id' => 1,
            'Label' => 'Little endian',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Big endian',
        ),
    );

}