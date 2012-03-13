<?php

namespace PHPExiftool\Driver\Tag\IPTC;

class ProductID extends \PHPExiftool\Driver\Tag
{

    protected $Id = 50;

    protected $Name = 'ProductID';

    protected $FullName = 'IPTC::EnvelopeRecord';

    protected $GroupName = 'IPTC';

    protected $g0 = 'IPTC';

    protected $g1 = 'IPTC';

    protected $g2 = 'Other';

    protected $Type = 'string';

    protected $Writable = true;

    protected $Description = 'Product ID';

    protected $flag_List = true;

}