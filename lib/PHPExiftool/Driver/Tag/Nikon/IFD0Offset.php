<?php

namespace PHPExiftool\Driver\Tag\Nikon;

class IFD0Offset extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'IFD0_Offset';

    protected $FullName = 'Nikon::CaptureOffsets';

    protected $GroupName = 'Nikon';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Nikon';

    protected $g2 = 'Camera';

    protected $Type = '?';

    protected $Writable = false;

    protected $Description = 'IFD0 Offset';

    protected $flag_Permanent = true;

}