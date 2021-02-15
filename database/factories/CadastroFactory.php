<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\cadastro;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class CadastroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = cadastro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nome'=> $this->faker->name,
            'CPF'=> $this->faker->randomNumber(11),
            'Data Nascimento'=> $this->faker->date('Y-m-d'),
            'Email'=> $this->faker->safeEmail,
            'Telefone'=> $this->faker->phoneNumber,
            'Locadouro'=> $this->faker->streetAddress,
            'Cidade'=> $this->faker->name,
            'Estado'=> $this->faker->name

        ];
    }
}
