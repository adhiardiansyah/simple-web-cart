<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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

        DB::table('users')->insert([
            [
                'name' => 'Adhi Ardiansyah',
                'email' => 'adhiardiansyah23@gmail.com',
                'password' => Hash::make('password')
            ]
        ]);

        DB::table('brands')->insert([
            [
                'name' => 'Emina'
            ],
            [
                'name' => 'Wardah'
            ],
            [
                'name' => 'Vaseline'
            ],
            [
                'name' => "Pond's"
            ],
        ]);

        DB::table('products')->insert([
            [
                'name' => 'emina Bright Stuff Tone Up Cream 20 ml',
                'brand_id' => 1,
                'price' => 28500,
                'description' => 'Krim pelembab dengan ekstrak summer plum dan vitamin B3 yang akan mencerahkan kulit wajah dengan instan dan membuat kulit terasa halus. Menyamarkan dark spot yang disebabkan sinar UV atau bekas jerawat. Gunakan rangkaian produk Bright Stuff Series secara lengkap dan rutin untuk  memberikan hasil yang lebih optimal. Tersedia dalam kemasan tube 20 ml.',
                'picture' => '1.jpg'
            ],
            [
                'name' => 'emina Bright Stuff Sheet Mask 23 g',
                'brand_id' => 1,
                'price' => 16900,
                'description' => 'Masker wajah dengan campuran ekstrak Summer Plum dan Vitamin B3 memberikan tampilan yang lebih cerah dan bercahaya dengan rasa yang lembut dan kenyal di kulit. Dibuat dengan masker tencel ramah lingkungan, yang cocok untuk segala bentuk wajah. Gunakan rangkaian produk Bright Stuff Series secara lengkap dan rutin untuk  memberikan hasil yang lebih optimal. Tersedia dalam kemasan sachet isi 1 sheet mask 23 g.',
                'picture' => '2.jpg'
            ],
            [
                'name' => 'emina Bright Stuff Face Toner 100 ml',
                'brand_id' => 1,
                'price' => 29200,
                'description' => 'Toner wajah yang diperkaya dengan Vitamin B3 untuk mencerahkan dan menyegarkan kulit dengan formula bebas alkohol, toner wajah ini akan melembabkan kulit tanpa memicu minyak berlebih dan membantu kulit wajah yang kusam. Membantu meratakan warna kulit dan memudarkan noda hitam. Gunakan rangkaian produk Bright Stuff Series secara lengkap dan rutin untuk memberikan hasil yang lebih optimal. Tersedia dalam kemasan botol 100 ml.',
                'picture' => '3.jpg'
            ],
            [
                'name' => 'Wardah Lightening Cleansing Milk Facial Wash 100 ml',
                'brand_id' => 2,
                'price' => 22900,
                'description' => 'Sabun pembersih wajah dengan 2-in-1 Action Formula mampu membersihkan wajah dan mengangkat makeup dengan lembut sekaligus melembabkan kulit. Dengan tekstur cream yang ringan, nyaman digunakan sehari-hari. Dikombinasikan dengan Advanced Niacinamide yang bantu kulit tampak lebih cerah bercahaya dengan pemakaian teratur. Tersedia dalam kemasan tube 100 ml.',
                'picture' => '4.jpg'
            ],
            [
                'name' => 'Wardah Lightening Face Toner 125 ml',
                'brand_id' => 2,
                'price' => 28900,
                'description' => 'Toner wajah dengan formula pH balance yang menyegarkan sekaligus mempersiapkan dan menjaga keseimbangan pH kulit alami kulit untuk membantu penyerapan produk selanjutnya. Dikombinasikan dengan Advanced Niacinamide yang bantu kulit tampak lebih cerah bercahaya dengan pemakaian teratur. Cocok untuk semua jenis kulit. Tersedia dalam kemasan botol 125 ml.',
                'picture' => '5.jpg'
            ],
            [
                'name' => 'Wardah UV Shield Sunscreen Aqua Fresh Essence SPF 50 PA++++ 30 ml',
                'brand_id' => 2,
                'price' => 54900,
                'description' => 'Tabir surya dengan Broad Spectrum Protection, lebih optimal menjaga kulit dari sinar UV A dan UV B, serta pancaran blue light berlebih. Dengan inovasi formula 0% alkohol namun tetap ringan dan tidak lengket, serta Aquafused Technology di dalamnya yang menjadikan sunscreen terasa segar seperti air dan terus menerus menghidrasi kulit. Tersedia dalam kemasan tube 30 ml.',
                'picture' => '6.jpg'
            ],
            [
                'name' => 'Vaseline Lip Therapy Rosy Lips 7 g',
                'brand_id' => 3,
                'price' => 45500,
                'description' => 'Pelembab bibir dengan kandungan Petroleum Jelly dan aroma Rosy yang memberikan kelembaban pada bibir. Gunakan setiap hari untuk mengurangi bibir kering dan pecah-pecah serta menjaga kesehatan bibir. Simpan ditempat sejuk dan hindari dari paparan matahari langsung. Jika terjadi iritasi pada bibir harap hentikan penggunaan produk. Tersedia dalam kemasan jar 7 g.',
                'picture' => '7.jpg'
            ],
            [
                'name' => 'Vaseline Lip Care Balm Original 10 g',
                'brand_id' => 3,
                'price' => 26400,
                'description' => 'Pelembab bibir yang hadir dengan kandungan 100% kemurnian Vaseline Jelly. Lip balm Vaseline ini mengandung Petrolatum dan mampu melembapkan bibir Anda dengan lebih tahan lama, sekaligus melembutkan dan menutrisi bibir Anda yang kering. Hadir dalam kemasan kecil yang praktis untuk di bawa ke mana saja.',
                'picture' => '8.jpg'
            ],
            [
                'name' => 'Vaseline Lip Therapy Balm Rosy Lips 4,8 g',
                'brand_id' => 3,
                'price' => 25700,
                'description' => 'Lip balm berbentuk stick yang mengandung petroleum jelly untuk menjaga kelembapan, vitamin E untuk menjaga bibir tetap sehat, dan almond & rose oil membuat bibir lembut. Formula yang tidak lengket di kulit dan aman digunakan setiap hari untuk mencegah bibir kering dan pecah-pecah. Dapat memberikan warna pink merona sekaligus merawat bibir sehat. Tersedia dalam kemasan stick 4,8 g.',
                'picture' => '9.jpg'
            ],
            [
                'name' => "POND'S Instabright Pink Tone Up Cream 20 g",
                'brand_id' => 4,
                'price' => 28100,
                'description' => "Krim pelembab wajah yang hadir dengan beragam inovasi terbaru dari POND'S yang menggabungkan antara skin care dan make up base. Krim ini hadir untuk membuat kulit anda menjadi tampak cerah seketika sekalipun tidak menggunakan make up atau foundation. POND'S Instabright Pink Tone Up Cream 20 g akan memberikan tampilan wajah yang lebih cerah alami secara instan, sehingga dapat menghemat waktu anda untuk berdandan setiap harinya karena lebih praktis dan efisien.",
                'picture' => '10.jpg'
            ],
            [
                'name' => "POND'S Age Miracle Youthful Glow Facial Cleanser 100 g",
                'brand_id' => 4,
                'price' => 72900,
                'description' => "Sabun pembersih wajah yang tidak hanya membersihkan kulit tetapi juga melawan tanda penuaan, bahkan yang belum terlihat. Hadir dengan butiran scrub lembut yang efektif mengangkat sel kulit mati agar kulit terlihat lebih glowing dengan pemakaian teratur. Kombinasi Retinol-C dan Vitamin B3 complexnya bekerja secara sinergis untuk menutrisi kulit hingga ke lapisan dalam epidermis, memperbaharui sel kulit baru secara terus-menerus, dan mengembalikan kilau serta cahaya kulit. Juga membantu mencerahkan kulit kusam, menyamarkan noda hitam, dan menjaga kecerahan kulit wajah dengan maksimal.",
                'picture' => '11.jpg'
            ],
            [
                'name' => "POND'S Age Miracle Youthful Glow Day Cream 20 g",
                'brand_id' => 4,
                'price' => 72900,
                'description' => "Krim pagi yang diciptakan oleh Pond's Institute. Krim ini diformulasikan secara khusus dari 6 bahan bio-aktif penting yang dibentuk menjadi Intelligent Pro-Cell Complexyang mana dapat menstimulasi kulit dalam membantu memepercepat regenerasi sel-sel kulit baru 3x lebih cepat sehingga dapat menyamarkan garis halus, spot atau flek hitam dan kerutan ketika dipakai secara rutin sehingga Anda tampak lebih muda dengan wajah yang terlihat lebih sehat dan segar. Selain itu, krim pagi Pond's ini juga dilengkapi dengan SPF 18/PA++ yang melindungi wajah dari sinar UV A & UV B ketika Anda beraktifitas di luar ruangan.",
                'picture' => '12.jpg'
            ]
        ]);
    }
}
