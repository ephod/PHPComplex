<?php

namespace Complex;
include_once __DIR__ . '/baseFunctionTest.php';

class acschTest extends baseFunctionTest
{
    protected static $functionName = 'acsch';

    /**
     * @dataProvider providerACscH
     */
	public function testAcsch()
	{
		$args = func_get_args();
		$complex = new Complex($args[0]);
		$result = acsch($complex);

        $this->complexNumberAssertions($args[1], $result);
        // Verify that the original complex value remains unchanged
        $this->assertEquals(new Complex($args[0]), $complex);
	}

    /*
     * Results derived from Wolfram Alpha using
     *  N[ArcCoSecH[<VALUE> Radians], 18]
     */
    public function providerACscH()
    {
		$expectedResults = array(
			0.0832371828841864596,
            0.0809161276924219242,
            2.78885462803170101,
            '0.0621908852709745421-0.0341439087082997977i',
            '0.0621908852709745421+0.0341439087082997977i',
            '0.002707044117677758-0.147785233616181421i',
            '0.002707044117677758+0.147785233616181421i',
            '0.93425178564486737-1.32749401062172192i',
            '0.93425178564486737+1.32749401062172192i',
            -0.101078238825698208,
            -0.890187970992773198,
            '-0.0849399857278769-0.03705542905440914i',
            '-0.0849399857278769+0.03705542905440914i',
            '-0.797550648913176-0.2821819018431379i',
            '-0.797550648913176+0.2821819018431379i',
            '-0.323946106931980720i',
            '0.32394610693198072i',
            '-1.57079632679489662i',
            '1.57079632679489662i',
            '-2.78491421388117441-1.57079632679489662i',
            '2.784914213881175+1.570796326794897i',
		);

		return $this->formatOneArgumentTestResultArray($expectedResults);
	}

}
