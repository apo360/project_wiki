<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return ['description_city' => 'Lubango', 'provincie' => 'Huíla',
            /*
                ['description_city' => 'Cazenga', 'provincie' => 'Luanda'],
                ['description_city' => 'Belas', 'provincie' => 'Luanda'],
                ['description_city' => 'Cacuaco', 'provincie' => 'Luanda'],
                'description_city' => 'Samba', 'provincie' => 'Luanda',
                'description_city' => 'Viana', 'provincie' => 'Luanda',
                'description_city' => 'Icole - Bengo', 'provincie' => 'Luanda',
                'description_city' => 'Luanda', 'provincie' => 'Luanda',
                'description_city' => 'Benfica', 'provincie' => 'Luanda',
                'description_city' => 'Benguela', 'provincie' => 'Benguela',
                'description_city' => 'Lobito', 'provincie' => 'Benguela',
                'description_city' => 'Lubango', 'provincie' => 'Huíla',*/
        ];
    }
}
