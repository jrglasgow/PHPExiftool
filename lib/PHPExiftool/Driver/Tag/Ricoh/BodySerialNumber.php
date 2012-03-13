<?php

namespace PHPExiftool\Driver\Tag\Ricoh;

class BodySerialNumber extends \PHPExiftool\Driver\Tag
{

    protected $Id = 16;

    protected $Name = 'BodySerialNumber';

    protected $FullName = 'Ricoh::SerialInfo';

    protected $GroupName = 'Ricoh';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Ricoh';

    protected $g2 = 'Camera';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Body Serial Number';

    protected $flag_Permanent = true;

}