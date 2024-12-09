<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'product_name' => 'Buyme Bodywash',
                'price'        => '100000',
                'description'  => '[GRATIS ONGKIR] SABUN VIRAL BUYME Body WASH/ sabun mandi/ sabun pemutih/ pemutih badan
                KULIT KAMU GELAP? KULIT KAMU KUSAM? KULIT KAMU BELANG??
                .
                BIKIN pusing dan gak pede banget? sabun mandi buyme SOLUSINYA!
                .
                Buyme Bodywash merupakan sabun mandi yang diberi formula khusus mutiara untuk mengembalikan warna kulit kamu yang gelap, belang dan kusam. Sabun mandi iini digunakan sebagai pengganti sabun mandi biasanya, dipake setiap hari pada saat kamu mandi dan hanya bisa digunakan untuk badan saja ya :)
                .
                Cara pemakaian BuyMe Body Wash:
                Sabun dipake tiap kali mandi, sebagai pengganti sabun mandi biasa. Diamin 1 menit baru dibilas :) 
                Sabun BuyMe bisa dipke d sluruh badan, KECUALI MUKA yaa.
                .
                SUDAH TERDAFTAR BPOM & HALAL ( no bpom + HALAL bisa cek di gambar diatas ya )
                
                BPOM : NA18180701859',
                'imagepath'    => 'product/image/sabun.jpeg'
            ],
            [
                'product_name' => 'Buyme Magic Scrub',
                'price'        => '50000',
                'description'  => '[VIRAL GRATIS ONGKIR] BuyMe Magic Scrub / Scrub viral / Charcoal Scrub / pemutih badan /Masker viral
                LAUNCHING PERDANA DI BUYME! 🌈😍❤️
                
                Kegunaan BuyMe Magic Scrub 10ml dan 50ml :
                1. Mencerahkan kulit muka dan seluruh badan
                2. Memudarkan bekas jerawat, bekas luka, dan beruntusan
                
                Kelebihan BuyMe Magic Scrub dibanding scrub merek lain : 
                1. Harga terjangkau 
                2. Kemasan sachet shg memudahkan kamu saat pakai 
                3. Bisa mencerahkan kulit kamu secara permanen jika digunakan secara rutin 
                4. Bisa melembabkan kulit
                5. Bisa mengangkat kotoran dan sel kulit mati 
                6. Bisa memudarkan bekas luka
                7. Tidak ada butiran scrub yang membuat kulit sakit 
                8. Dapat digunakan oleh anak2 mulai 7tahun keatas 
                9. Boleh dipake oleh bumil & busui 
                10. Fragrance free ( tidak menggunakan parfum sehingga aman utk kulit )
                11. BPOM APPROVED
                12. HALAL MUI 
                
                Cara Pemakaian BuyMe Magic Scrub di kulit muka :
                1. Oleskan magic scrub ke kulit muka kalian 
                2. Diamkan masker selama 3 menit 
                3. Bilas menggunakan air bersih 
                4. Tara......✨Kulit muka cling cling semiriwing halus dan lembut 
                5. Selamat mencoba dan semoga cocok di kulit kamu yah ❤️
                NOTE : Maskeran muka 1 minggu 2-3x yaa ka, selang seling ajaa dalam 1 minggu
                
                Cara pemakaian BuyMe Magic Scrub di kulit badan : 
                1. Oleskan magic scrub ke kulit kalian 
                2. Diamkan dibadan selama 15-20menit ( pastikan maskernya sudah bener2 kering agar nutrisinya sudah meresap ke kulit )
                3. Bilas menggunakan buyme bodywash dan air bersih 
                4. Tara......✨Kulit badan cling cling semiriwing halus dan lembut 
                5. Selamat mencoba dan semoga cocok di kulit kamu yah ❤️
                NOTE : Maskeran badan boleh RUTIN tiap hari yakkk
                
                Untuk hasil maksimal dan permanen hrus pemakaian rutin minimal 2minggu ya 🙏😍
                .
                harganya mahal ya min? 
                kaga kok murah bgttttt 😭
                
                PROMO TERBATAS :
                Beli 3 sachet free spatula
                Beli 4 sachet free gloves
                
                BPOM : NA18210700168',
                'imagepath'    => 'product/image/magicscrub.jpeg'
            ],
            [
                'product_name' => 'Buyme Sunscreen',
                'price'        => '65000',
                'description'  => '💥 PELOPOR dan SATU2nya di INDONESIA💥
                pemutih kulit dengan kandungan sunscreen, selain memutihkan bisa juga melindungi loh🤗😝
                .
                Apa saja kelebihan BuyMe Sunscreen dibanding sunscreen yg lainnya?
                
                ✨Mengandung SPF 30 yg dpt mencegah kulitmu dari panasnya matahari
                ✨Memiliki formula INSTANT WHITENING yg dpt mencerahkan kulit selama pemakaian1
                ✨FRAGRANCE FREE ( tdk ada parfum )
                ✨TIDAK LENGKET
                ✨Gampang dibawa kemana2 shg mmpermudah km utk retouch pas lg diluar ruangan
                ✨Pemakaian yg super mudah, TINGGAL SEMPROT BERES DEH!😝 .
                ✨Bisa dipakai di muka + badan
                ✨Sudah lulus uji BPOM & HALAL
                ✅ Mengandung skincare “ niacinamide “ yang bsa mencerahkan kulit jika dipakai rutin
                ✅ Mengandung extract “ green tea “ yang membuat kulit lembab dan glowing stelah pemakaian
                .
                🌸untuk cara pemakaian yang baik & benar bisa dikonsultasikan dengan kami 🌸
                .
                HARGA YANG TERTERA HANYA UNTUK 1botol BuyMe Sunscreen Spray',
                'imagepath'    => 'product/image/sunscreen.jpeg'
            ],
            [
                'product_name' => 'Buyme Magic Scrub Tube',
                'price'        => '49000',
                'description'  => 'PRE ORDER BUYME MAGIC SCRUB TUBE - 50 ml
                .
                Kelebihan BuyMe Magic Scrub Tube 50 Ml :
                1. Harga terjangkau
                2. Kemasan Tube bisa dipakai untuk 1 bulanan trgantung pemakaian
                3. Bisa mencerahkan kulit kamu secara permanen jika digunakan secara rutin 
                4. Bisa melembabkan kulit
                5. Bisa mengangkat kotoran dan sel kulit mati 
                6. Bisa memudarkan bekas luka
                7. Tidak ada butiran scrub yang membuat kulit sakit 
                8. Dapat digunakan oleh anak2 mulai 7tahun keatas 
                9. Boleh dipake oleh bumil & busui 
                10. BPOM APPROVED
                11. HALAL MUI 
                .
                Price :
                1 Magic Scrub Tube 50 ml @59.000 FREE Gloves',
                'imagepath'    => 'product/image/magicscrubbig.jpeg'
            ],
            [
                'product_name' => 'Buyme Glowing Spray',
                'price'        => '34000',
                'description'  => '🔥BARU! PERTAMA DI INDONESIA 🔥
                .
                .
                BuyMe Glowing Spray dengan 10in1 active ingredients dan diformulasikan seperti buah jeruk yang seger banget 🧡 #JerukBikinGlowing 
                .
                Apa manfaat BuyMe Glowing Spray? 
                1. Mencerahkan kulit ( permanen ) dengan pemakaian rutin 
                2. Menyegarkan kulit 
                3. Menenangkan kulit kemerahan
                4. Membuat kulit glowing dalam 3x semprot 
                5. Melembabkan kulit
                6. Mencegah munculnya jerawat dan mengurangi jerawat pada wajah
                7. Mengurangi iritasi kulit 
                8. Mencegah munculnya MASKNE ( jerawat akibat pemakaian masker )
                .
                .
                Buyme Glowing spray dapat digunakan UNTUK : 
                1. TONER, dipakai sebelom pemakaian skincare routine
                2. FACE MIST, dipakai stelah pemakaian sunscreen dan makeup utk membuat kulit auto glowing dan seger lembab seharian
                3. ANTI BACTERIAL SPRAY,  dipakai sebelum menggunakan masker medis supaya mencegah munculnya maskne 
                4. SHEET MASK, dengan cara rendem tablet mask ( masker permen ) lalu disemprot dengan glowing spray. Auto glowing loh abis dipake 😆😆
                .
                Isi : 20ML 
                Idr 34.000/botol
                Beli 2 botol GRATIS EMAS cuma 67.000 aja!',
                'imagepath'    => 'product/image/glowingspray.jpeg'
            ],
        ]);
    }
}
