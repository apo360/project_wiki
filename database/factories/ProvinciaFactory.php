<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provincia>
 */
class ProvinciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                'provincia_code' => 'BE', 'provincia_descricao' => 'Bengo',
                'provincia_code' => 'BG', 'provincia_descricao' => 'Benguela',
                'provincia_code' => 'BI', 'provincia_descricao' => 'Bié',
                'provincia_code' => 'CA', 'provincia_descricao' => 'Cabinda',
                'provincia_code' => 'CC', 'provincia_descricao' => 'Cuando-Cubango',
                'provincia_code' => 'KN', 'provincia_descricao' => 'Kwanza-Norte',
                'provincia_code' => 'KS', 'provincia_descricao' => 'Kwanza-Sul',
                'provincia_code' => 'CU', 'provincia_descricao' => 'Cunene',
                'provincia_code' => 'HU', 'provincia_descricao' => 'Huambo',
                'provincia_code' => 'HI', 'provincia_descricao' => 'Huíla',
                'provincia_code' => 'LU', 'provincia_descricao' => 'Luanda',
                'provincia_code' => 'LN', 'provincia_descricao' => 'Lunda-Norte',
                'provincia_code' => 'LS', 'provincia_descricao' => 'Lunda-Sul',
                'provincia_code' => 'MA', 'provincia_descricao' => 'Malanje',
                'provincia_code' => 'MO', 'provincia_descricao' => 'Moxico',
                'provincia_code' => 'NA', 'provincia_descricao' => 'Namibe',
                'provincia_code' => 'UI', 'provincia_descricao' => 'Uíge',
                'provincia_code' => 'ZA', 'provincia_descricao' => 'Zaire',
            
        ];
    }
}
