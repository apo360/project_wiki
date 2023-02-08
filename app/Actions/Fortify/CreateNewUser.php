<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\City;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'surname' => ['required', 'string', 'max:255'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        $city_id = City::where('description_city', $input['city'])->get();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'surname' => $input['surname'],
            'password' => Hash::make($input['password']),
            'role_id' => $input['register_id'],
            'city_id' => $city_id[0]->id,
            
        ]);
    }
}
