<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChurchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('t_churchs')->insert([
            [
                'name' => 'Gereja Kristus Bandung',
                'seat' => '210',
                'address' => 'Jl. Jakarta No.20-22, Kacapiring, Kec. Batununggal, Kota Bandung, Jawa Barat 40271'
            ],
            [
                'name' => 'Gereja Kristus Petamburan',
                'seat' => '210',
                'address' => 'Jl. Aipda KS. Tubun No. 2, RT.1/RW.5, Slipi, Kec. Palmerah, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11410'
            ],
            [
                'name' => 'Gereja Kristus Sarua Permai',
                'seat' => '210',
                'address' => 'Blok A45 No.10-11, Jl. Serua Permai Raya Blok A No.45, Benda Baru, Pamulang, South Tangerang City, Banten 15414'
            ],
            [
                'name' => 'Gereja Kristus Pamulang ',
                'seat' => '210',
                'address' => 'Jl. Pamulang Permai 1 No.23, Pamulang Bar., Kec. Pamulang, Kota Tangerang Selatan, Banten 15417'
            ],
            [
                'name' => 'Gereja Kristus Ketapang',
                'seat' => '210',
                'address' => 'JL. KH Zainul Arifin 9 Jalan Kh. Zainul Arifin No.9 Gambir RT.5, RT.2/RW.1, Petojo Utara, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10130'
            ],
            [
                'name' => 'Gereja Kristus Bogor ',
                'seat' => '210',
                'address' => ''
            ],
            [
                'name' => 'Gereja Kristus Cibinong',
                'seat' => '210',
                'address' => 'Jl. Raya Jakarta Bogor KM.42,5 Cibinong, Bogor. 16916'
            ],
            [
                'name' => 'Gereja Kristus Jembatan Hitam ',
                'seat' => '210',
                'address' => ''
            ],
            [
                'name' => 'Gereja Kristus Teluk Naga',
                'seat' => '210',
                'address' => 'Jl. Desa Pangkalan Rt 007 Rw 008, No. 30
                Kec.Teluknaga, Kab. Tangerang - Banten (15510)'
            ],

             [
                'name' => 'Gereja Kristus Teluk Betung',
                'seat' => '210',
                'address' => ''
            ],
            [
                'name' => 'Gereja Kristus Tanjung Karang',
                'seat' => '210',
                'address' => 'Perumahan Bumi Asri, Blok O, No. 1, Kelurahan Bumi Kedamaian, Kecamatan Kedamaian, Kota Bandar Lampung - Lampung (35122)'
            ],
            [
                'name' => 'Gereja Kristus Bojong Indah',
                'seat' => '210',
                'address' => 'Jln. Jagung Raya No. 8 & 10. RT 013 RW 008
                Kelurahan Rawa Buaya, Kecamatan Cengkareng
                Jakarta Barat, DKI Jakarta 11740'
            ], 
            [
                'name' => 'Gereja Kristus Kebayoran Lama',
                'seat' => '210',
                'address' => 'Jl. Peninggaran Timur I Kav A/14-15, Kec. Kebayoran Lama, RT.12/RW.11, Cipulir, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah 
                Khusus Ibukota Jakarta 12240'
            ],
            [
                'name' => 'Gereja Kristus Kebayoran Baru',
                'seat' => '210',
                'address' => 'JJl. Wijayakarta raya blok c-2 mampang prapatan jakarta selatan 12710'
            ],
            [
                'name' => 'Gereja Kristus Ciampea',
                'seat' => '210',
                'address' => 'Jl. Pasar Ciampea No. 3 Bogor Jawa Barat 16620'
            ],
            [
                'name' => 'Gereja Kristus Taman Kota',
                'seat' => '210',
                'address' => 'Taman Kota Blok B1 no 50a'
            ],
            [
                'name' => 'Gereja Kristus Taruna ',
                'seat' => '210',
                'address' => ''
            ],
            [
                'name' => 'Gereja Kristus Sukabumi',
                'seat' => '210',
                'address' => ''
            ],
            [
                'name' => 'Gereja Kristus Purwakarta',
                'seat' => '210',
                'address' => 'Jalan Jendral Sudirman no. 105 Pasar Jumat, Kecamatan Purwakarta, Kabupaten Purwakarta - Jawa Barat'
            ],
            [
                'name' => 'Gereja Kristus Gunung Putri',
                'seat' => '210',
                'address' => 'Perum. Gunung Putri Permai, Jl. Nanas VI Blok E.8 No. 13 Gunung Putri - Bogor 16961'
            ],
            [
                'name' => 'Gereja Kristus Kartini Bogor',
                'seat' => '210',
                'address' => 'Jl. Kartini No. 2 Rt. 01 Rw 02 Bogor 16114'
            ],
            [
                'name' => 'Gereja Kristus Bandung',
                'seat' => '210',
                'address' => 'Gereja Kristus Bandung'
            ],     

        ]);
    }
}
