<?php

/**
 *
 * Function code for the complex sin() function
 *
 * @copyright  Copyright (c) 2013-2015 Mark Baker (https://github.com/MarkBaker/PHPComplex)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 */
namespace Complex;

/**
 * Returns the sine of a complex number.
 *
 * @param     Complex|mixed    $complex    Complex number or a numeric value.
 * @return    Complex          The sine of the complex argument.
 * @throws    \Exception       If argument isn't a valid real or complex number.
 */
function sin(Complex $complex)
{
    $complex = Complex::validateComplexArgument($complex);

    if ($complex->getImaginary() == 0.0) {
        return new Complex(\sin($complex->getReal()), 0.0, $complex->getSuffix());
    }

    return new Complex(
        \sin($complex->getReal()) * \cosh($complex->getImaginary()),
        \cos($complex->getReal()) * \sinh($complex->getImaginary()),
        $complex->getSuffix()
    );
}
