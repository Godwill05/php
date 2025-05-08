<?php

class User
{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function greet(): string
    {
        return "Bonjour, je m'appelle {$this->name} et j'ai {$this->age} ans.";
    }

    public function isAdult(): bool
    {
        return $this->age >= 18;
    }
}

class App
{
    public function run(): void
    {
        $user = new User("Storm", 20);
        echo $user->greet() . PHP_EOL;

        if ($user->isAdult()) {
            echo "Statut : adulte" . PHP_EOL;
        } else {
            echo "Statut : mineur" . PHP_EOL;
        }
    }
}

// Point d'entrée
$app = new App();
$app->run();

