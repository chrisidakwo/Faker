<?php

declare(strict_types=1);

namespace Faker\Test\Provider\en_NG;

use Faker\Provider\en_NG\Address;
use Faker\Provider\en_NG\Person;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testPostcodeIsNotEmptyAndIsValid(): void
    {
        $postcode = $this->faker->postcode();

        self::assertNotEmpty($postcode);
        self::assertIsString($postcode);
        self::assertEquals(6, strlen($postcode));
    }

    public function testStreetNameIsAValidString(): void
    {
        $streetName = $this->faker->streetName();

        self::assertNotEmpty($streetName);
        self::assertIsString($streetName);
    }

    public function testCityNameIsAValidString(): void
    {
        $city = $this->faker->city();

        self::assertNotEmpty($city);
        self::assertIsString($city);
    }

    /**
     * Test the name of the Nigerian State
     */
    public function testStateIsAValidString(): void
    {
        $state = $this->faker->state();

        self::assertNotEmpty($state);
        self::assertIsString($state);
    }

    /**
     * Test the name of the Nigerian Region in a State.
     */
    public function testRegionIsAValidString(): void
    {
        $region = $this->faker->region();

        self::assertNotEmpty($region);
        self::assertIsString($region);
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);

        yield new Person($this->faker);
    }
}
