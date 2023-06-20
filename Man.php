<?php

class Man extends Person
{
    public function isSingle(): bool
    {
        return $this->partner === NULL;
    }

    public function getMarried(Person $partner): void
    {
        $this->setPartner($partner);
        $partner->setPartner($this);
    }

    public function display(): void
    {
        parent::display(); // echo "$this->firstName $this->lastName a $this->age ans. <br>";
        if ($this->isSingle()) {
            echo "Il est célibataire.";
        } else {
            echo "Il est marié à {$this->partner->getFirstName()} {$this->partner->getLastName()}.";
        }
        echo "<br>";
    }
}
