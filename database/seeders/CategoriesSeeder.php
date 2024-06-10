<?php

namespace Database\Seeders;

use App\Models\categories;
use Illuminate\Database\Seeder;
use Database\Seeders\categoriesFile;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            categoriesFile::womenFashion(),
            categoriesFile::healthAndBeauty(),
            categoriesFile::mensFashion(),
            categoriesFile::watchesAndAccessories(),
            categoriesFile::autoMobile(),
            categoriesFile::electronicDevices(),
            categoriesFile::tvAndHomeAppliance(),
            categoriesFile::electronicAccessories(),
            categoriesFile::groceriesAndPets(),
            categoriesFile::babyAndToys(),
            categoriesFile::homeAndLifestyle(),
            categoriesFile::sportsAndOutdoor(),
            categoriesFile::motorAndDie(),

        ];

        foreach ($categories as $k0 => $parent) {

            $p = categories::query()->updateOrCreate(
                [
                    'name' => $parent['name'],
                ],
                [
                    'parent_id' => null,
                ]
            );

            if (isset($parent['children'])) {
                $this->seedChildren($parent['children'], $p->id);
            }

        }
    }

    private function seedChildren($children, $parent_id): void
    {
        foreach ($children as $key => $child) {
            $c = categories::query()->updateOrCreate(
                [
                    'name' => $child['name'],
                ],
                [
                    'parent_id' => $parent_id,
                ]
            );

            if (isset($child['children'])) {
                $this->seedChildren($child['children'], $c->id);
            }
        }
    }
}