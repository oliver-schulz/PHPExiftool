<?php

namespace PHPExiftool\Driver\Tag\NikonCustom;

class AutoBracketModeM extends \PHPExiftool\Driver\Tag
{

    protected $Id = 'mixed';

    protected $Name = 'AutoBracketModeM';

    protected $FullName = 'mixed';

    protected $GroupName = 'NikonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'NikonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int8u';

    protected $Writable = true;

    protected $Description = 'Auto Bracket Mode M';

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Flash/Speed',
        ),
        16 => array(
            'Id' => 16,
            'Label' => 'Flash/Speed/Aperture',
        ),
        32 => array(
            'Id' => 32,
            'Label' => 'Flash/Aperture',
        ),
        48 => array(
            'Id' => 48,
            'Label' => 'Flash Only',
        ),
    );

}