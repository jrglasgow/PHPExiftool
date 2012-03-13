<?php

namespace PHPExiftool\Driver\Tag\Minolta;

class LensShutterLock extends \PHPExiftool\Driver\Tag
{

    protected $Id = 74;

    protected $Name = 'LensShutterLock';

    protected $FullName = 'Minolta::CameraSettingsA100';

    protected $GroupName = 'Minolta';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Minolta';

    protected $g2 = 'Camera';

    protected $Type = 'int16u';

    protected $Writable = true;

    protected $Description = 'Lens Shutter Lock';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'On',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Off',
        ),
    );

}