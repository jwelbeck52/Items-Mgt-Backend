<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Item::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence(10),
            'price' => $this->faker->randomDigit,
            'isOwned' => $this->faker->boolean,
            'status' => $this->faker->word,
            'date_of_purchase' => $this->faker->date,
            'src_name' => $this->faker->word,
            'src_link' => $this->faker->word,
            'img_src' =>$this->faker->word,
        ];
    }
}
