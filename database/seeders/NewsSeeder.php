<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		DB::table('news')->insert([
			'name' => Str::random(10),
			'email' => Str::random(10) . '@gmail.com',
			'password' => Hash::make('password'),
		]);
	}
}
