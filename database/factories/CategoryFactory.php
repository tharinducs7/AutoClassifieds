<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

//########################################faker#########################
use Faker\Generator as Faker;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //'id' => function () {
          //      return factory(App\Models\Category::class)->create()->id;
          //  },
            
            'parentId'=>$this->faker->numberBetween(0, 2),
            'categoryName'=>$this->faker->name(),
            'isActive'=>$this->faker->boolean(),
            'icon'=>$this->faker->text(),
        ];
    }
}
