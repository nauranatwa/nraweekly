<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Berita;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Berita::factory(5)->create();

        DB::table('beritas')->insert([
            'judul' => 'Kura-kura dan Beruang Kutub',
            'slug' => 'kura-kura-dan-beruang-kutub',
            'penulis' => 'Polar Bear',
            'konten' => 'One day, a little turtle was swimming near the shore when he noticed a polar bear sitting on a piece of ice. 
            The turtle was curious because he had never seen such a big white animal before. “Hello! Why are you sitting on that ice?” 
            the turtle asked. The polar bear smiled and replied, “This is my home, but the weather is getting warmer, and the ice is melting.” 
            The turtle felt sad and wanted to help his new friend. Although they lived in very different environments, they spent the afternoon 
            sharing stories about their lives. Before they said goodbye, the polar bear thanked the turtle for his kindness. From that day on, 
            they learned that friendship could grow between two creatures, even when their worlds were completely different.',
        ]);
    }
}
