<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Todo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()    {
        return [
            'name'=>$this->faker->sentence(3),
            'description'=>$this->faker->paragraph(4),
            'contact_number'=>$this->faker->numerify('#####'),
            'completed'=>false
        ];
    }
  }
