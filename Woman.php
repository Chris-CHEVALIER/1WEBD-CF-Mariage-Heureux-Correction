<?php

class Woman extends Person
{
    public function isSingle(): bool
    {
        return $this->partner === NULL;
    }

    public function getMarried(Person $partner): void
    {
        if ($this->getAge() >= 18 && $partner->getAge() >= 18) {
            $this->setPartner($partner);
            $partner->setPartner($this);
        } else {
            echo "Il faut être majeur pour se marrier !";
        }
    }

    public function display(): void
    {
        parent::display(); // echo "$this->firstName $this->lastName a $this->age ans. <br>";
        if ($this->isSingle()) {
            echo "Elle est célibataire.";
        } else {
            echo "Elle est mariée à {$this->partner->getFirstName()} {$this->partner->getLastName()}.";
        }
        echo "<br>";
    }
}
