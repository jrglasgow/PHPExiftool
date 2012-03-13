<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class DECPosition extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50;

    protected $Name = 'DECPosition';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'DEC Position';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Exposure',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Contrast',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Saturation',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Filter',
        ),
    );

}