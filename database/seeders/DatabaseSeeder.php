<?php

namespace Database\Seeders;

use App\Models\Artikel;
use App\Models\Penulis;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Artikel::create([
            'judul' => 'The Subtle Art of Not Giving',
            'tahun' => '2012',
            'penulis' => 'Mark Manson',
            // 'penulis_id' => 3, 
            'genre' => 'Non fiksi',
        ]);
        Artikel::create([
            'judul' => 'Twenty Thousands Leagues Under The Sea',
            'tahun' => '1989',
            'penulis' => 'Jules Verne',
            // 'penulis_id' => 2, 
            'genre' => 'Fiksi',
        ]);
        Artikel::create([
            'judul' => 'Tale of Two Cities',
            'tahun' => '1975',
            'penulis' => 'Mark Twain',
            // 'penulis_id' => 1, 
            'genre' => 'Fiksi',
        ]);
        Artikel::create([
            'judul' => 'If You Could See Me Now',
            'tahun' => '2016',
            'penulis' => 'Emily Sinclair',
            // 'penulis_id' => 1, 
            'genre' => 'Fiksi',
        ]);
        Penulis::create([
            'nama' => 'Mark Twain',
            'jenisKelamin' => 'Laki-laki',
            'tanggalLahir' => 'Florida, 30 November 1985',
            'about' => '
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur distinctio repellat ut dolorum illo hic repellendus earum, atque optio blanditiis officiis soluta rerum aut quia, molestiae eum numquam excepturi. Vero assumenda tempora reprehenderit iusto ad sint voluptatum veniam magnam at nemo alias, qui quos, officiis consequuntur, unde minima repellendus quo sunt ea ipsa eveniet! Eveniet quasi reprehenderit quia omnis. Qui non enim culpa maxime omnis? Enim earum facilis nobis ullam temporibus veritatis sequi autem? Impedit velit nihil iusto eum voluptas cupiditate quasi unde ut, consequuntur animi, commodi ratione sequi accusantium voluptatibus blanditiis obcaecati corrupti sint perferendis distinctio similique labore? Et!'
        ]);
        Penulis::create([
            'nama' => 'Jules Verne',
            'jenisKelamin' => 'Laki-laki',
            'tanggalLahir' => 'Canada, 30 November 1885',
            'about' => '
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur distinctio repellat ut dolorum illo hic repellendus earum, atque optio blanditiis officiis soluta rerum aut quia, molestiae eum numquam excepturi. Vero assumenda tempora reprehenderit iusto ad sint voluptatum veniam magnam at nemo alias, qui quos, officiis consequuntur, unde minima repellendus quo sunt ea ipsa eveniet! Eveniet quasi reprehenderit quia omnis. Qui non enim culpa maxime omnis? Enim earum facilis nobis ullam temporibus veritatis sequi autem? Impedit velit nihil iusto eum voluptas cupiditate quasi unde ut, consequuntur animi, commodi ratione sequi accusantium voluptatibus blanditiis obcaecati corrupti sint perferendis distinctio similique labore? Et!'
        ]);
        Penulis::create([
            'nama' => 'Mark Manson',
            'jenisKelamin' => 'Laki-laki',
            'tanggalLahir' => 'Jakarta, 18 November 1987',
            'about' => '
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur distinctio repellat ut dolorum illo hic repellendus earum, atque optio blanditiis officiis soluta rerum aut quia, molestiae eum numquam excepturi. Vero assumenda tempora reprehenderit iusto ad sint voluptatum veniam magnam at nemo alias, qui quos, officiis consequuntur, unde minima repellendus quo sunt ea ipsa eveniet! Eveniet quasi reprehenderit quia omnis. Qui non enim culpa maxime omnis? Enim earum facilis nobis ullam temporibus veritatis sequi autem? Impedit velit nihil iusto eum voluptas cupiditate quasi unde ut, consequuntur animi, commodi ratione sequi accusantium voluptatibus blanditiis obcaecati corrupti sint perferendis distinctio similique labore? Et!'
        ]);


    }
}
