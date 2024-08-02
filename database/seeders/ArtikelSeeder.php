<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\{DB, Hash};

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('main_artikels')->truncate();
        DB::table('main_artikels')->insert([
            [
                'title' => 'Lorem Ipsum',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
                'is_approve' => true,
                'created_by' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'title' => 'Lorem Ipsum II',
                'content' => 'Aac eu nisl curabitur nulla ad ridiculus quisque. Gravida ullamcorper sagittis ipsum mi quisque est tristique arcu. Litora enim arcu sagittis mus augue? Augue maximus mauris eu curae magna sapien dis. Arcu potenti ultricies ut class donec primis mattis mus. Pulvinar ad interdum pharetra porttitor quisque. Adipiscing quam vel habitasse euismod etiam? Justo a penatibus mattis lacus cursus montes nisi hendrerit.
                Venenatis platea potenti at faucibus integer. Enim inceptos consectetur nulla adipiscing, platea maecenas. Tempus dui finibus nascetur quis senectus. Molestie sem quis ex mauris platea sit egestas. Urna scelerisque rutrum turpis at faucibus erat. Tincidunt euismod placerat consectetur aenean, torquent ac eget sed. Venenatis purus magna primis rhoncus ante netus praesent litora sociosqu. Ipsum suscipit faucibus convallis cursus curabitur senectus; fames vitae. Cursus praesent himenaeos, consectetur nisl ridiculus adipiscing. Risus sed pharetra vivamus porttitor nunc sodales, a leo.',
                'is_approve' => false,
                'created_by' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
