<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class WideFocusZone extends \PHPExiftool\Driver\Tag
{

    protected $Id = 47;

    protected $Name = 'WideFocusZone';

    protected $FullName = 'Minolta::CameraSettings';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Wide Focus Zone';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'No zone',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Center zone (horizontal orientation)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'Center zone (vertical orientation)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Left zone',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Right zone',
        ),
    );

}