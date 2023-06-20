<?php

class Person
{
    protected string $firstName;
    protected string $lastName;
    protected int $age;
    protected ?Person $partner = NULL;

    public function __construct(string $firstName, string $lastName, int $age)
    {
        $this->setFirstName($firstName);
        $this->setLastName($lastName);
        $this->setAge($age);
    }

    public function getOlder(): self
    {
        if ($this->age < 110) {
            $this->setAge($this->age++);
        }
        return $this;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;
        return $this;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): self
    {
        $this->age = $age;
        return $this;
    }

    public function display(): void
    {
        echo "$this->firstName $this->lastName a $this->age ans. <br>";
    }

    public function getPartner()
    {
        return $this->partner;
    }

    public function setPartner($partner)
    {
        $this->partner = $partner;
        return $this;
    }
}
