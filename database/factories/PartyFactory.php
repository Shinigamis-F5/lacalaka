<?php

namespace Database\Factories;

use App\Models\Party;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Party::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->name,
            'cover'=>"https://picsum.photos/200",
            'description'=>$this->faker->name,
            'date'=>$this->faker->date,
            'time'=>$this->faker->time,
            'location'=>$this->faker->city,
            'style_id'=>$this->faker->numberBetween(1, 2),
            'is_active' =>$this->faker->boolean(true),
            'user_id'=>$this->faker->numberBetween(1, 10),
        ];
    }
}
