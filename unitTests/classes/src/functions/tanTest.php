<?php

namespace Complex;
include_once __DIR__ . '/baseFunctionTest.php';

class tanTest extends baseFunctionTest
{
    protected static $functionName = 'tan';

    /**
     * @dataProvider providerTan
     */
	public function testTan()
	{
		$args = func_get_args();
		$complex = new Complex($args[0]);
		$result = tan($complex);

        $this->complexNumberAssertions($args[1], $result);
        // Verify that the original complex value remains unchanged
        $this->assertEquals(new Complex($args[0]), $complex);
	}

    /*
     * Results derived from Wolfram Alpha using
     *  N[Tan[<VALUE> Radians], 18]
     */
    public function providerTan()
    {
		$expectedResults = array(
			-0.635859928661580792,
			-0.225059016465411481,
            0.124080968627342774,
			'-1.086541271552E-6+0.999997708361735527i',
            '-1.086541271552E-6-0.999997708361735527i',
			'6.19837914405E-7+0.999997540736339542i',
			'6.19837914405E-7-0.999997540736339542i',
            '0.080338871920894775+0.596693257452934776i',
            '0.080338871920894775-0.596693257452934776i',
            -0.485180699551572639,
            -1.51589883816666524,
            '-2.772604891775643E-4+0.999781469304592i',
            '-2.772604891775643E-4-0.999781469304592i',
            '-0.915922535860841+0.972276174471301i',
            '-0.915922535860841-0.972276174471301i',
            '0.996272076220749944i',
            '-0.99627207622074994i',
			'0.761594155955764888i',
			'-0.76159415595576489i',
            '0.122383441894408763i',
            '-0.1223834418944088i',
		);

		return $this->formatOneArgumentTestResultArray($expectedResults);
	}

}
