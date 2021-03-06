<?php

/**
 *
 * Function code for the complex asinh() function
 *
 * @copyright  Copyright (c) 2013-2015 Mark Baker (https://github.com/MarkBaker/PHPComplex)
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 */
namespace Complex;

/**
 * Returns the inverse hyperbolic sine of a complex number.
 *
 * @param     Complex|mixed    $complex    Complex number or a numeric value.
 * @return    Complex          The inverse hyperbolic sine of the complex argument.
 * @throws    \Exception       If argument isn't a valid real or complex number.
 */
function asinh($complex)
{
    $complex = Complex::validateComplexArgument($complex);

    if (($complex->getImaginary() == 0.0) && ($complex->getReal() > 1)) {
        return new Complex(\asinh($complex->getReal()), 0.0, $complex->getSuffix());
    }

    $asinh = clone $complex;
    $asinh->reverse();
    $asinh->invertReal();
    $asinh = asin($asinh);
    $asinh->reverse();
    $asinh->invertImaginary();

    return $asinh;
}
