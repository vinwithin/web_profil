
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <nav
        class="container inline-flex flex-col lg:flex-row  justify-around max-w-full bg-slate-50 lg:items-center items-start">
        <div class=" justify-items-start ">
            <img src="https://ml44p8frztli.i.optimole.com/w:2000/h:746/q:mauto/f:avif/https://himasi.unja.ac.id/wp-content/uploads/2020/03/cropped-logo.png"
                alt="" class="lg:w-44  w-96">
        </div>
        <div class="lg:w-auto inline-flex lg:mt-0 float-right max-w-full">
            <ul class="flex flex-col  lg:flex-row ms-auto ">
                <li>
                    <a href="" class="px-4 py-2">Beranda</a>
                </li>
                <li class="relative" >
                    <button href="" class="px-4 py-0 outline-none focus:outline-none" >Tentang Kami</button>
                    <div class="content lg:absolute bg-slate-500 left-4 rounded-md p-2 z-10 hidden" >
                        <ul class="space-y-2 lg:w-36">
                            <li>
                                <a href="">Sejarah</a>
                            </li>
                            <li>
                                <a href="">Visi dan Misi</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="relative">
                    <button href="" class="px-4 py-0 outline-none focus:outline-none">Struktur</button>
                    <div class="content lg:absolute bg-slate-500 left-4 rounded-md p-2 z-10 hidden">
                        <ul class="space-y-2 lg:w-64">
                            <li>
                                <a href="" class="text-sm">Badan Pengurus Harian</a>
                            </li>
                            <li>
                                <a href="" class="text-sm">Hubungan Masyarakat</a>
                            </li>
                            <li>
                                <a href="" class="text-sm">Media dan Informasi</a>
                            </li>
                            <li>
                                <a href="" class="text-sm">Minat dan Bakat</a>
                            </li>
                            <li>
                                <a href="" class="text-sm">Pengembangan Sumber Daya Anggota</a>
                            </li>
                            <li>
                                <a href="" class="text-sm">Riset dan teknologi</a>
                            </li>
                            <li>
                                <a href="" class="text-sm">Sosial dan Keagamaan</a>
                            </li>
                            <li>
                                <a href="" class="text-sm">Dana Usaha</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="" class="px-4 py-2">Kegiatan</a>
                </li>
                <li class="relative">
                    <button href="" class="px-4 py-0">Berita</button>
                    <div class="content lg:absolute bg-slate-500 left-4 rounded-md p-2 z-10 hidden" >
                        <ul class="space-y-2 lg:w-44">
                            <li>
                                <a href="">Prestasi Mahasiswa</a>
                            </li>
                            <li>
                                <a href="">Kampus Merdeka</a>
                            </li>
                            <li>
                                <a href="">Beasiswa</a>
                            </li>
                            <li>
                                <a href="">Kompetisi</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="relative">
                    <button href="" class="px-4 py-0">Artikel</button>
                    <div class="content lg:absolute bg-slate-500 left-4 rounded-md p-2 z-10 hidden" >
                        <ul class="space-y-2 lg:w-36">
                            <li>
                                <a href="">Programming</a>
                            </li>
                            <li>
                                <a href="">Serba Serbi IT</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="" class="px-4 py-2">Galery</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="flex bg-fixed bg-center lg:h-screen bg-opacity-100 h-96 bg-no-repeat max-w-full bg-cover bg-transparent"
     style="background-image:url(https://ml44p8frztli.i.optimole.com/w:auto/h:auto/q:mauto/f:avif/http://himasi.unja.ac.id/wp-content/uploads/2023/03/DSC01837-scaled.jpg); background-color:rgba(0, 0, 0, 0.37); linear-gradient(to right, #6DB3F2, #6DB3F2); background-blend-mode: darken">
        <div class="flex flex-col justify-center ">
            <h1 class="text-white text-6xl">HIMASI</h1>
            <h3 class="text-slate-100 text-2xl">"Fakultas Sains dan Teknologi Universitas Jambi"</h3>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
        const dropdownButton = document.querySelectorAll('.relative');
        for (let i = 0; i < dropdownButton.length; i++) {
        // dropdownButton[i].style.backgroundColor = "red";
        

        dropdownButton[i].addEventListener('mouseenter', function () {
            const dropdown = this.querySelectorAll('.content');
            for (let n = 0; n < dropdown.length; n++) {
            dropdown[n].classList.remove('hidden');
            }
        });

        dropdownButton[i].addEventListener('mouseleave', function () {
            const dropdown = this.querySelectorAll('.content');
            for (let j = 0; j < dropdown.length; j++) {
            dropdown[j].classList.add('hidden');
            }
        });
        }
    });
      
    </script>
</body>

</html>
