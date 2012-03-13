<?php

namespace PHPExiftool\Driver\Tag\Panasonic;

class NoiseReduction extends \PHPExiftool\Driver\Tag
{

    protected $Id = 45;

    protected $Name = 'NoiseReduction';

    protected $FullName = 'Panasonic::Main';

    protected $GroupName = 'Panasonic';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Panasonic';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Noise Reduction';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Standard',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Low (-1)',
        ),
        2 => array(
            'Id' => 2,
            'Label' => 'High (+1)',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Lowest (-2)',
        ),
        4 => array(
            'Id' => 4,
            'Label' => 'Highest (+2)',
        ),
    );

}