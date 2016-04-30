<?php

use App\PrimeFactors;

class PrimeFactorsTest extends \Codeception\TestCase\Test
{
    use Codeception\Specify;

    /**
     * @var \UnitTester
     */
    protected $tester;

    /**
     * @var PrimeFactors
     */
    protected $primeFactors;

    protected function _before()
    {
        $this->primeFactors = new PrimeFactors;
    }

    // tests
    public function test_numbers_below_8()
    {
        $this->assertInstanceOf('App\PrimeFactors', $this->primeFactors);

        $this->specify(
            'returns [] for 1',
            function () {
                expect($this->primeFactors->generate(1))->equals([]);
            }
        );

        $this->specify(
            'generates [2] for 2',
            function () {
                expect($this->primeFactors->generate(2))->equals([2]);
            }
        );

        $this->specify(
            'generates [3] for 3',
            function () {
                expect($this->primeFactors->generate(3))->equals([3]);
            }
        );

        $this->specify(
            'generates [2, 2] for 4',
            function () {
                expect($this->primeFactors->generate(4))->equals([2, 2]);
            }
        );

        $this->specify(
            'generates [5] for 5',
            function () {
                expect($this->primeFactors->generate(5))->equals([5]);
            }
        );

        $this->specify(
            'generates [2, 3] for 6',
            function () {
                expect($this->primeFactors->generate(6))->equals([2, 3]);
            }
        );

        $this->specify(
            'generates [2, 2, 2] for 8',
            function () {
                expect($this->primeFactors->generate(8))->equals([2, 2, 2]);
            }
        );
    }

    public function test_numbers_above_8()
    {
        $this->assertInstanceOf('App\PrimeFactors', $this->primeFactors);

        $this->specify(
            'generates [3, 3] for 9',
            function () {
                expect($this->primeFactors->generate(9))->equals([3, 3]);
            }
        );

        $this->specify(
            'generates [2, 2, 3] for 12',
            function () {
                expect($this->primeFactors->generate(12))->equals([2, 2, 3]);
            }
        );

        $this->specify(
            'generates [2, 5, 5] for 50',
            function () {
                expect($this->primeFactors->generate(50))->equals([2, 5, 5]);
            }
        );

        $this->specify(
            'generates [2, 2, 5, 5] for 100',
            function () {
                expect($this->primeFactors->generate(100))->equals([2, 2, 5, 5]);
            }
        );
    }
}
