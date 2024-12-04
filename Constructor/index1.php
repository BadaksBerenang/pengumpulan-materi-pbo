<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Menggunakan komponen</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</head>

<body>
    <center>
        <h1> Belajar Menggunakan Komponen</h1>
    </center>
    <center>=====================================</center>

    <?php
    class user
    {
        //properti global
        public $id, $name, $age, $addres;

        //melakukan konstruksi
        public function __construct($id = null, $name = null, $age = null, $addres = null)
        {
            $this->id = $id;
            $this->name = $name;
            $this->age = $age;
            $this->addres = $addres;
        }
    }

    class students
    {
        //deklarasi variable global
        public $id, $nama, $nilai_pbo, $nilai_web, $nilai_pkk, $kelas;

        public function __construct($datastudents = [])
        {
            //penyetelan 
            $this->id = $datastudents['id'] ?? null;
            $this->nama = $datastudents['nama'] ?? null;
            $this->nilai_pbo = $datastudents['nilai_pbo'] ?? null;
            $this->nilai_web = $datastudents['nilai_web'] ?? null;
            $this->nilai_pkk = $datastudents['nilai_pkk'] ?? null;
            $this->kelas = $datastudents['kelas'] ?? null;
        }

        public function hitungRata()
        {
            return ($this->nilai_pbo + $this->nilai_web + $this->nilai_pkk) / 3;
        }

        public function calculateGrade()
        {
            $average = $this->hitungRata();
            if ($average >= 90 && $average <= 100) {
                return 'A';
            } elseif ($average >= 86 && $average < 90) {
                return 'B+';
            } elseif ($average >= 81 && $average < 86) {
                return 'B';
            } elseif ($average >= 75 && $average < 81) {
                return 'C';
            } elseif ($average >= 70 && $average < 75) {
                return 'D';
            } else {
                return 'Remedial';
            }
        }
    }


    $datastudents = [
        [
            'id' => 1,
            'nama' => 'Rezak',
            'nilai_pbo' => 69,
            'nilai_web' => 80,
            'nilai_pkk' => 85,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 2,
            'nama' => 'Owen',
            'nilai_pbo' => 69,
            'nilai_web' => 69,
            'nilai_pkk' => 96,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 3,
            'nama' => 'William',
            'nilai_pbo' => 86,
            'nilai_web' => 50,
            'nilai_pkk' => 69,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 4,
            'nama' => 'Steven',
            'nilai_pbo' => 0,
            'nilai_web' => 35,
            'nilai_pkk' => 0.69,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 5,
            'nama' => 'Vivien',
            'nilai_pbo' => 25,
            'nilai_web' => 75,
            'nilai_pkk' => 69,
            'kelas' => "11-RPL"
        ],
        [
            'id' => 6,
            'nama' => 'Julie',
            'nilai_pbo' => 90,
            'nilai_web' => 80,
            'nilai_pkk' => 85,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 7,
            'nama' => 'Vivien',
            'nilai_pbo' => 35,
            'nilai_web' => 79,
            'nilai_pkk' => 100,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 8,
            'nama' => 'Vivien',
            'nilai_pbo' => 90,
            'nilai_web' => 69,
            'nilai_pkk' => 70,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 9,
            'nama' => 'Vivien',
            'nilai_pbo' => 100,
            'nilai_web' => 100,
            'nilai_pkk' => 90,
            'kelas' => "12-RPL"
        ],
        [
            'id' => 10,
            'nama' => 'Vivien',
            'nilai_pbo' => 95,
            'nilai_web' => 86,
            'nilai_pkk' => 82,
            'kelas' => "12-RPL"
        ]
    ];

    $students = new students();//deklarasi class menjadi objek
    $liststudents = [];//membuat wadah kosong untuk menampung value array yang dibuat
    
    foreach ($datastudents as $students) {//untuk memecah semua array multi-dimensi ke satu dimensi
        $datastudents = new students($students);//memasukkan semua value variable array yang terpecah ke dalam $datastudents
        $liststudents[] = $datastudents;//memasukkan semua value yang tersimpan dalam $datastudents ke dalam $liststudents
    
    }

    $dataSiswaXII = [];
    foreach ($liststudents as $students) {
        if ($students->kelas == "12-RPL") {
            $dataSiswaXII[] = $students;
        }
    }

    $dataSiswaXI = [];
    foreach ($liststudents as $students) {
        if ($students->kelas == "11-RPL") {
            $dataSiswaXI[] = $students;
        }
    }
    ?>


    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        
                    </th>
                                <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Kelas
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nilai pbo
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nilai web
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nilai pkk
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nilai rata rata
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Predikat
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>

                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                       2999
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="bg-white dark:bg-gray-800 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                    <td class="px-6 py-4 text-right">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <h2 class="judul"> Jumlah total semua data siswa : <?php echo count($liststudents) ?> </h2>

</body>

</html>
<style>
    .judul {
        color: aqua;
        font-size=14px;
    }
</style>