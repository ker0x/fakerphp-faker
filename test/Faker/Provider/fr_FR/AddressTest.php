<?php

namespace Faker\Test\Provider\fr_FR;

use Faker\Provider\fr_FR\Address;
use Faker\Test\TestCase;

/**
 * @group legacy
 */
final class AddressTest extends TestCase
{
    public function testSecondaryAddress(): void
    {
        self::assertSame('Étage 007', $this->faker->secondaryAddress());
        self::assertSame('Bât. 932', $this->faker->secondaryAddress());
    }

    public function testStreetPrefix()
    {
        self::assertSame('boulevard', $this->faker->streetPrefix());
        self::assertSame('rue', $this->faker->streetPrefix());
    }

    public function testRegion(): void
    {
        self::assertSame('Occitanie', $this->faker->region());
        self::assertSame('Auvergne-Rhône-Alpes', $this->faker->region());
    }

    public function testDepartment()
    {
        self::assertSame(['Nièvre' => '58'], $this->faker->department());
        self::assertSame(['Ain' => '01'], $this->faker->department());
    }

    public function testDepartmentName()
    {
        self::assertSame('Nièvre', $this->faker->departmentName());
    }

    public function testDepartmentNumber()
    {
        self::assertSame('58', $this->faker->departmentNumber());
    }

    protected function getProviders(): iterable
    {
        yield new Address($this->faker);
    }
}
