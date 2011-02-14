<?php

namespace Imagine\Filter\Basic;

use Imagine\Point;

class PasteTest extends BasicFilterTestCase
{
    public function testShouldFlipImage()
    {
        $start   = new Point(0, 0);
        $image   = $this->getImage();
        $toPaste = $this->getImage();
        $filter  = new Paste($toPaste, $start);

        $image->expects($this->once())
            ->method('paste')
            ->with($toPaste, $start)
            ->will($this->returnValue($image));

        $this->assertSame($image, $filter->apply($image));
    }
}