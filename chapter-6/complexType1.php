<?php

class Rent{
    public $car,$driver;

    public function __construct(Car $car,Driver $driver)
    {
        $this -> car = $car;
        $this -> driver = $driver;
    } 
    
    public function getCar() : car
    {
        return $this -> car;
    }
    public function getDriver() : driver
    {
        return $this -> driver;
    }
}

class driver
{
    public $name, $age, $family, $hourlyRate, $martialStatus;

    public function setName(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }

    public function setAge(int $age)
    {
        $this->age = $age;
    }
    public function getAge(): int
    {
        return $this->age;
    }

    public function setFamily(array $family)
    {
        $this->family = $family;
    }
    public function getFamily(): array
    {
        return $this->family;
    }

    public function sethourlyRate(float $hourlyRate)
    {
        $this->hourlyRate = $hourlyRate;
    }
    public function gethourlyRate(): float
    {
        return $this->hourlyRate;
    }

    public function setmartialStatus(bool $martialStatus)
    {
        $this->martialStatus = $martialStatus;
    }
    public function getmartialStatus(): bool
    {
        return $this->martialStatus;
    }
}

class Car
{
    public $brand, $model, $price, $spares, $available;

    public function __construct(string $brand, int $model, float $price, array $spares, bool $available)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->price = $price;
        $this->spares = $spares;
        $this->available = $available;
    }

    public function getBrand() : string 
    {
        return $this->brand;
    }
    public function getModel() : int
    {
        return $this->model;
    }
    public function getPrice() : float
    {
        return $this->price;
    }
    public function getSpares() : array
    {
        return $this->spares;
    }
    public function isAvailable() : bool
    {
        return $this->available;
    }
}

$data = new driver;
$data->setName("Kyaw Kyaw");
$data->setAge(23);
$data->setFamily(["Father" => "U Mya", "Mother" => "Daw Hla", "Sister" => "Aye Chan"]);
$data->sethourlyRate(8.5);
$data->setmartialStatus(false);

$data2 = new driver;
$data2->setName("Bo Bo");
$data2->setAge(33);
$data2->setFamily(["Father" => "U Thein", "Mother" => "Daw Myint", "Sister" => "Nay Chi"]);
$data2->sethourlyRate(7.5);
$data2->setmartialStatus(false);

$alphard = new Car("Alphard",2016,30.5,["tissue","bottle","cupon"],TRUE);
$crown = new Car("Crown",2014,40.5,["tissue","cupon"],FALSE);

$rent1 = new Rent($alphard,$data);
$rent2 = new Rent($crown,$data2);

$list = [$rent1 , $rent2];

//echo "There are ".count($list) . " cars in this company";

$serializeData = serialize($list);
//echo $serializeData;

$ary = unserialize($serializeData);
echo "<pre>" . print_r($ary,true) ."</pre>";
echo "<hr>";
echo $list[0]->getCar()->getBrand()."<br>";
echo $list[1]->getDriver()->getName();

?>