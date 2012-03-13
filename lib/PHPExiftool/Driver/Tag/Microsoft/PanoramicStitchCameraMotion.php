<?php

namespace PHPExiftool\Driver\Tag\Microsoft;

class PanoramicStitchCameraMotion extends \PHPExiftool\Driver\Tag
{

    protected $Id = 1;

    protected $Name = 'PanoramicStitchCameraMotion';

    protected $FullName = 'Microsoft::Stitch';

    protected $GroupName = 'Microsoft';

    protected $g0 = 'MakerNotes';

    protected $g1 = 'Microsoft';

    protected $g2 = 'Image';

    protected $Type = 'int32u';

    protected $Writable = true;

    protected $Description = 'Panoramic Stitch Camera Motion';

    protected $flag_Permanent = true;

    protected $Values = array(
        2 => array(
            'Id' => 2,
            'Label' => 'Rigid Scale',
        ),
        3 => array(
            'Id' => 3,
            'Label' => 'Affine',
        ),
        4 => array(
            'Id' => 4,
            'Label' => '3D Rotation',
        ),
        5 => array(
            'Id' => 5,
            'Label' => 'Homography',
        ),
    );

}