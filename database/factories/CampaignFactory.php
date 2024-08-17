<?php
/**
 * Playground
 */

declare(strict_types=1);
namespace Database\Factories\Playground\Lead\Models;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Playground\Lead\Models\Campaign;

/**
 * \Database\Factories\Playground\Lead\Models\CampaignFactory
 *
 * @extends Factory<Campaign>
 */
class CampaignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<Campaign>
     */
    protected $model = Campaign::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);

        return [
            'label' => $this->faker->sentence(3),
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->sentence(3),
            'introduction' => $this->faker->sentence(3),
            'content' => $this->faker->sentence(3),
            'summary' => $this->faker->sentence(3),
        ];
    }

    // States: flags

    /**
     * @return Factory<Campaign>
     */
    public function locked(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'locked' => true,
        ]);
    }

    /**
     * @return Factory<Campaign>
     */
    public function featured(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'featured' => true,
        ]);
    }

    /**
     * @return Factory<Campaign>
     */
    public function special(): Factory
    {
        return $this->state(fn (array $attributes) => [
            'special' => true,
        ]);
    }
}