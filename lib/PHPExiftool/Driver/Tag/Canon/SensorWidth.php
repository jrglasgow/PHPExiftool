<?php

namespace PHPExiftool\Driver\Tag\Canon;

class SensorWidth extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'SensorWidth';

    protected $FullName = 'Canon::SensorInfo';

    protected $GroupName = 'Canon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Canon';

    protected $g2 = 'Image';

    protected $Type = 'int16s';

    protected $Writable = false;

    protected $Description = 'Sensor Width';

    protected $flag_Permanent = true;

}