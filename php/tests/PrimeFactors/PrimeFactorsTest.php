<?php
namespace pdt256\kata\PrimeFactors;

class PrimeFactorsTest extends \PHPUnit_Framework_TestCase
{
    /** @var PrimeFactorGeneratorInterface */
    private $primeFactors;

    public function setUp()
    {
        set_time_limit(1);
        $this->primeFactors = new PrimeFactors;
    }

    public function testGenerate()
    {
        $this->assertSame([], $this->primeFactors->generate(1));
        //$this->assertSame([2], $this->primeFactors->generate(2));
    }

    /**
     * @param int $number
     * @param array $primes
     * @dataProvider primeFactorsData
     */
    public function xtestFinal(int $number, array $primes)
    {
        $result = $this->primeFactors->generate($number);
        $this->assertEquals(
            $primes,
            $result,
            'Input: ' . $number . ', Expected: ' . json_encode($primes) . ', Received: ' . json_encode($result)
        );
    }

    public function primeFactorsData()
    {
        return [
            [1, []],
            [2, [2]],
            [3, [3]],
            [4, [2, 2]],
            [5, [5]],
            [6, [2, 3]],
            [7, [7]],
            [8, [2, 2, 2]],
            [9, [3, 3]],
            [360, [2, 2, 2, 3, 3, 5]],
            [(2 * 3 * 5 * 7 * 13), [2, 3, 5, 7, 13]],
        ];
    }
}
