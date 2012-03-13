<?php

namespace PHPExiftool\Driver\Tag\CanonCustom;

class FocusDisplayAIServoAndMF extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1301;

    protected $Name = 'FocusDisplayAIServoAndMF';

    protected $FullName = 'CanonCustom::Functions2';

    protected $GroupName = 'CanonCustom';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'CanonCustom';

    protected $g2 = 'Camera';

    protected $Type = 'int32s';

    protected $Writable = true;

    protected $Description = 'Focus Display AI Servo And MF';

    protected $flag_Permanent = true;

    protected $Values = array(
        0 => array(
            'Id' => 0,
            'Label' => 'Enable',
        ),
        1 => array(
            'Id' => 1,
            'Label' => 'Disable',
        ),
    );

}