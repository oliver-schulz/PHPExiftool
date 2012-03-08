<?php

namespace PHPExiftool\Driver\Tag\DICOM;

class AcquisitionNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = '0020,0012';

    protected $Name = 'AcquisitionNumber';

    protected $FullName = 'DICOM::Main';

    protected $GroupName = 'DICOM';

    protected $g0 = 'DICOM';

    protected $g1 = 'DICOM';

    protected $g2 = 'Image';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'Acquisition Number';

}