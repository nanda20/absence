<?php

use Illuminate\Database\Seeder;

class tabelPeserta extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('peserta')->delete();
        $data=[
['id'=>null,'namaLengkap'=>'Firdha nur maghfira ','jenisKelamin'=>'Perempuan','nomorHp'=>'08976311824','jurusan'=>'Teknologi Infomasi/ Manejemen Informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'ERVINA APRILIA SAPUTRI','jenisKelamin'=>'Perempuan','nomorHp'=>'085817353171','jurusan'=>'Teknologi Informasi','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'IFFATUN FIDI PANGESTU','jenisKelamin'=>'Perempuan','nomorHp'=>'089646685215','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'ninda arani','jenisKelamin'=>'Perempuan','nomorHp'=>'085731693175','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'ninda arani','jenisKelamin'=>'Perempuan','nomorHp'=>'085731693175','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'ULIN NUHA','jenisKelamin'=>'Perempuan','nomorHp'=>'085645285428','jurusan'=>'TEKNOLOGI INFORMASI/MANAJEMEN INFORMATIKA/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'AJENG YUNISA NUR LAILI','jenisKelamin'=>'Perempuan','nomorHp'=>'082233878909','jurusan'=>'TEKNOLOGI INFORMASI/MANAJEMEN INFORMATIKA/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'azhari zafarina','jenisKelamin'=>'Perempuan','nomorHp'=>'087759963894','jurusan'=>'Teknologi Informasi/Manajemen informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'dwilika andriani','jenisKelamin'=>'Perempuan','nomorHp'=>'081233675541','jurusan'=>'teknologi informasi/menegemen informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'ELFRIDA PURWITA KURNIASARI','jenisKelamin'=>'Perempuan','nomorHp'=>'081554614609','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Rezida Rismawati Nur Rachma','jenisKelamin'=>'Perempuan','nomorHp'=>'085864539581','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'WINDY FATMILA','jenisKelamin'=>'Perempuan','nomorHp'=>'085745116581','jurusan'=>'TEKNOLOGI INFORMASI/TEKNIK INFORMATIKA/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'ADYLIA DEA PUSPITASARI','jenisKelamin'=>'Perempuan','nomorHp'=>'085755459173','jurusan'=>'Teknologi Informatika/Teknik Informatika/3','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'NADHIFATUL LAEILY','jenisKelamin'=>'Perempuan','nomorHp'=>'089649798348','jurusan'=>'Teknologi Infromasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'IMAM NAWAWI','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085746390828','jurusan'=>'Teknik Informatika','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Arie Maulana Ramadhan ','jenisKelamin'=>'Laki-Laki','nomorHp'=>'083835318352','jurusan'=>'Teknologi Informasi / D3 Manajemen Informatika ','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'M Yus Rizal ','jenisKelamin'=>'Laki-Laki','nomorHp'=>'089631041243','jurusan'=>'Teknologi Informasi / D3 Manajemen Informatika ','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Muhammad Rifky Prayanta','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085648000185','jurusan'=>'teknologi informasi / manajemen informatika / 1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'qithfirul bahrowi','jenisKelamin'=>'Laki-Laki','nomorHp'=>'089632316804','jurusan'=>'teknologi informasi / manajemen informatika / 1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'tegar wahyu prakoso iskandar putra','jenisKelamin'=>'Laki-Laki','nomorHp'=>'089609446829','jurusan'=>'teknologi informasi / manajemen informatika / 1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Ali muqorrobin','jenisKelamin'=>'Laki-Laki','nomorHp'=>'087850952044','jurusan'=>'Teknologi informasi/ Teknik Information / 3','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'andhika adjie pradhana','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081235524795','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'andhika adjie pradhana','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081235524795','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'andhika adjie pradhana','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081235524795','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Hilal Arsa Himawan','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081259020736','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'M RIFQY FUADY','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081249708574','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Muhammad Naufal Hamdani','jenisKelamin'=>'Laki-Laki','nomorHp'=>'089530353876','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Eko Putra Syah Warman','jenisKelamin'=>'Laki-Laki','nomorHp'=>'089677033454','jurusan'=>'Teknologi Informasi/Manajemen Informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Mochammad Nadhiful Alim','jenisKelamin'=>'Laki-Laki','nomorHp'=>'088217909493','jurusan'=>'Teknologi Informasi/Manajemen Informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Mochammad Nadhiful Alim','jenisKelamin'=>'Laki-Laki','nomorHp'=>'088217909493','jurusan'=>'Teknologi Informasi/Manajemen Informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Riski Anugrah Putra','jenisKelamin'=>'Laki-Laki','nomorHp'=>'087754041042','jurusan'=>'Teknologi informasi/manajemen informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Muhammad Nasiqul Ibat','jenisKelamin'=>'Laki-Laki','nomorHp'=>'083848038855','jurusan'=>'Teknologi Informasi/Menejemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Dovie Yudhawiratama','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085755602288','jurusan'=>'Teknologi Informasi/Teknik Informartika/3','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Ahmad Rizaldi','jenisKelamin'=>'Laki-Laki','nomorHp'=>'082344466665','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'BIMA AHIDA INDAKA SUGNA','jenisKelamin'=>'Laki-Laki','nomorHp'=>'089619825699','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'MUHAMMAD IKO WIRYADIRJA','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081216955547','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Nickho Ary Prayudha','jenisKelamin'=>'Laki-Laki','nomorHp'=>'08970325520','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Nur Fasholi','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085755945003','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Panji Bayu Setiaji','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085785183918','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'syarifudin bahari','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081335129932','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Achmad Jimmy Santoso','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081555759480','jurusan'=>'Teknologi Informasi/Teknik Informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'ALFI SAMUDRO MULYO','jenisKelamin'=>'Laki-Laki','nomorHp'=>'083835387684','jurusan'=>'Teknologi Informasi/Teknik Informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'MUKHAMAD TAUFIKUR RACHMAN','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085730499281','jurusan'=>'Teknologi Informasi/Teknik Informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Zanuar Hanif Rachmat Adi','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085607770417','jurusan'=>'Teknologi Informasi/Teknik Informatika/2','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Ryan Rifqi Arista','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081703024224','jurusan'=>'Teknologi Informasi/Teknik Informatika/3','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Nur Rochmanshah','jenisKelamin'=>'Laki-Laki','nomorHp'=>'08986619634','jurusan'=>'Teknologi Informasi/Teknik Informatika/4','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Ivan Fadila Putra','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081555406386','jurusan'=>'Teknologi Informasi/Teknk Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Muhammad Dian Cordova','jenisKelamin'=>'Laki-Laki','nomorHp'=>'087814695614','jurusan'=>'Teknologi Informasi/Teknok Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'sugiono','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085785872572','jurusan'=>'TI / MI / 1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'gibson raditya apriliyanto','jenisKelamin'=>'Laki-Laki','nomorHp'=>'08993760044','jurusan'=>'TI/MI/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'zumrotul sholichah','jenisKelamin'=>'Perempuan','nomorHp'=>'08978250764','jurusan'=>'teknologi Informasi/Manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'sofia falah','jenisKelamin'=>'perempuan','nomorHp'=>'08990493573','jurusan'=>'teknologi informasi/manajemen Informatika/1','divisi'=>'Sistem Informasi','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Gatra Bagaskoro Wicaksono','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085646714641','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Rahmad Yudha Teguh','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081333663248','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Mohammad Faried Rahmat','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085748722592','jurusan'=>'Teknologi Informasi/Teknik Informatika/2','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'MAHFUD IVAN PATONI','jenisKelamin'=>'Laki-Laki','nomorHp'=>'08563092300','jurusan'=>'Teknologi Informasi / Teknik Informatika / 2','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Firhan Alfathan Akbar','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085726450987','jurusan'=>'Teknik kimia','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Rheza Arief A.R','jenisKelamin'=>'Laki-Laki','nomorHp'=>'08979360970','jurusan'=>'Teknologi Informasi/M. Informatika/2','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Ahmad Yusqie Mafaza','jenisKelamin'=>'Laki-Laki','nomorHp'=>'085749358165','jurusan'=>'Teknologi Informasi/Teknik Informatika/2','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'SAIFUL ANAM','jenisKelamin'=>'Laki-Laki','nomorHp'=>'081333035476','jurusan'=>'TEKNOLOGI INFORMASI/TEKNIK INFORMATIKA/1','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'akhmad faishol maturidi','jenisKelamin'=>'Laki-Laki','nomorHp'=>'089612727280','jurusan'=>'teknologi informasi/teknik informatika/2','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'GITA EKA FEBRIANA','jenisKelamin'=>'Perempuan','nomorHp'=>'085604381945','jurusan'=>'Teknologi Informasi/Manajemen Informatika/2','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Lokendra Aditisna Widigdyo','jenisKelamin'=>'Laki-Laki','nomorHp'=>'082132474339','jurusan'=>'Teknologi Informasi/Teknik Informatika/2','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Dodik Adhitama','jenisKelamin'=>'Laki-Laki','nomorHp'=>'087728202920','jurusan'=>'Teknologi Informasi/Teknik Informatika/2','divisi'=>'Jaringan','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Ayu Permatasari Putri Maharani','jenisKelamin'=>'Perempuan','nomorHp'=>'0083848554327','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Multimedia','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'MUHAMMAD HILMY RM','jenisKelamin'=>'Laki-Laki','nomorHp'=>'0081233909360','jurusan'=>'Teknik Informatika','divisi'=>'Multimedia','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Dita Permatasari','jenisKelamin'=>'Perempuan','nomorHp'=>'0082257276113','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Multimedia','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Tika Kusuma Wardhani','jenisKelamin'=>'Perempuan','nomorHp'=>'0089612311623','jurusan'=>'Teknologi Informasi/Manajemen Informatika/2','divisi'=>'Multimedia','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Rafi Kartika Sari Gunawan','jenisKelamin'=>'Perempuan','nomorHp'=>'0082331012725','jurusan'=>'Teknologi Informasi/Manajemen Informatika/2','divisi'=>'Multimedia','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Muhammad adhan','jenisKelamin'=>'Laki-Laki','nomorHp'=>'008574911923','jurusan'=>'teknik elektro/manajemen informatika/3','divisi'=>'Multimedia','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Satria Bagus Wahyu Ramadhan','jenisKelamin'=>'Laki-Laki','nomorHp'=>'0085933052035','jurusan'=>'Teknologi Informasi/Teknik Informatika/1','divisi'=>'Multimedia','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Fajar Ariadi','jenisKelamin'=>'Laki-Laki','nomorHp'=>'0085745789910','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Multimedia','created_at'=>null,'updated_at'=>null],
['id'=>null,'namaLengkap'=>'Sapta Ahmad Afrizal','jenisKelamin'=>'Laki-Laki','nomorHp'=>'0085735538263','jurusan'=>'Teknologi Informasi/Manajemen Informatika/1','divisi'=>'Multimedia','created_at'=>null,'updated_at'=>null]];

DB::table('peserta')->insert($data);
    }

}
