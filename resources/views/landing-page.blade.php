<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RS Dr. Ayano</title>
    <!-- favicon link -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <!-- google font link -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- flowbite -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
    <!-- aos css -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    @vite('resources/css/app.css')
    <!-- style css -->
    <style type="text/tailwindcss">
        body{
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>
<body>
    

<!-- ====== header ====== -->


<header x-data="{navbarOpen: false}" class="absolute sticky left-0 top-0 z-50 bg-white/90 w-full backdrop-blur">
    <div class="mx-auto h-[90px] max-w-7xl px-8 md:px-6">
        <div class="relative flex h-full items-center justify-between border-b border-slate-500/10">
            <!-- logo -->
            <div class="w-[15rem] max-w-full">
                <a href="#">
                    <h1 class="text-lg lg:text-2xl font-medium lg:font-bold">RS DR. Ayano</h1>
                </a>
            </div>

            <!-- menu -->
            <div class="flex w-full items-center justify-between">
                <nav x-transition :class="!navbarOpen && 'hidden'" id="navbarCollapse" class="absolute right-0 top-[90px] w-full max-w-[350px] rounded-lg border border-blue-200 bg-white py-5 px-6 shadow-lg shadow-blue-400/5 transition-all lg:static lg:block lg:max-w-full lg:border-none lg:shadow-none lg:bg-transparent lg:px-0 lg:py-0">
                    <ul class="flex flex-col justify-center gap-8 lg:flex-row">
                        <li>
                            <a href="#hero" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Home</a>
                        </li>
                        <li>
                            <a href="#appointment" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Make an Appointment</a>
                        </li>
                        <li>
                            <a href="#center" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Center of Excellence</a>
                        </li>
                        <li>
                            <a href="#appointment" class="text-lg font-medium text-slate-700 duration-200 hover:text-blue-600 lg:text-base">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <!-- menu btn -->
            <div class="flex">
                <a href="/login" class="mr-10 hidden rounded-md bg-blue-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 duration-200 hover:bg-blue-600 sm:block lg:mr-0">Login</a>

                <button @click="navbarOpen = !navbarOpen" :class="navbarOpen && 'navbarTogglerActive'" id="navbarToggler" class="block lg:hidden">
                    <ion-icon name="menu-outline" class="text-4xl text-blue-500"></ion-icon>
                </button>
            </div>
        </div>
    </div>
</header>
<!-- ====== END header ====== -->


<!-- ====== hero ====== -->

<section id="hero" class="relative bg-white py-16 lg:pt-[100px]">
        <a href="https://github.com/gamassss/wp-using-laravel" target="_blank">
            <img width="90px" id="git-logo" src="{{ asset('img/gith.png') }}" alt="" class="-translate-x-24 float-right -translate-y-20">
        </a>
    <div class="mx-auto max-w-7xl px-8 md:px-6 mb-28">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-5/12">
                <h1 class="text-slate-800 mb-3 text-4xl font-bold leading-snug sm:text-[42px] lg:text-[40px] xl:text-[42px]">When you need answers, you know <span class="text-blue-600">where to go.</span></h1>
                <h2 class="text-2xl mb-2 font-semibold">The No.1 hospital in the nation, for you.</h2>
                <p class="text-slate-500 mb-8 max-w-[480px] text-base">Effective treatment depends on getting the right diagnosis as soon as possible. Our specialists collaborate across disciplines to listen to your story, evaluate your condition from every angle, and develop a diagnosis and treatment plan that's just for you.
                </p>
                
                <button class="w-full rounded-md bg-blue-500 px-8 py-2.5 font-semibold text-white shadow-md shadow-blue-500/20 hover:bg-blue-600 duration-200 sm:w-auto hover:shadow-lg hover:shadow-blue-300">Book Appointment</button>
                
            </div>

            <div class="hidden px-4 lg:block lg:w-1/12"></div>

            <div class="w-full px-4 lg:w-6/12">
                <div class="lg:ml-auto lg:text-right object-cover">
                    <div class="relative z-10 inline-block pt-11 lg:pt-0">
                        <img width="466px" height="480px" src="{{ asset('img/blob.png') }}" alt="hero section img" class="max-w-full lg:ml-auto object-fill">
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ====== END hero ====== -->

<!-- ====== Center ====== -->
<section id="center" class="py-16 bg-slate-300">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <!-- heading text -->
        <div class="mb-10 text-center">
            <span class="font-medium text-xl text-blue-500">Our Centers</span>
            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Center Of Excellence</h1>
            <p class="mx-auto max-w-2 mt-2 text-slate-500">A center of excellence is a hospital or healthcare facility where patients continually return to receive primary care or treatment for acute conditions, separate from the place of diagnosis.</p>
        </div>

        <!-- box wrapper -->
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 xl:gap-8">
            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500" data-aos="zoom-in-down" data-aos-duration="800">
                <img style="height: 55px; width: 55px" src="{{ asset('img/coe1.png') }}" alt="">
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Neuroscience Center</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">Our team of doctors, nurses, and medical professionals with extensive experience in brain and neurological disorders emphasize patient-centered treatment, employing effective technologies and modern medical innovations, collaborating for successful treatment, patient independence, and living as usual a life as possible.</p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500" data-aos="zoom-in-down" data-aos-duration="800">
                <img style="height: 55px; width: 55px" src="{{ asset('img/coe2.png') }}" alt="">
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Cardiovascular Center</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">Heart disease is the third highest cause of death among Thai people and in recognition of this fact, the Dr. Ayano Hospital’s Cardiology Center offers the very highest of standards in treating heart disease while also helping patients prevent coronary problems by adapting to and managing a heathy lifestyle. </p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500" data-aos="zoom-in-down" data-aos-duration="800">
                <img style="height: 55px; width: 55px" src="{{ asset('img/coe3.png') }}" alt="">
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Gastrohepatology Center</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">Gastrointestinal & Liver Center distinguishes itself with a team of specialists and the collaboration among internal medicine physicians, pediatricians, radiologists, and surgeons with extensive clinical experience in difficult and complex gastrointestinal and liver diseases.</p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500" data-aos="zoom-in-up" data-aos-duration="800">
                <img style="height: 55px; width: 55px" src="{{ asset('img/coe4.png') }}" alt="">
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white text-center">Immunologi Pulmonology & Internal Medicine</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">Pulmonary Center at Dr. Ayano Hospital cares for every lung disease, including asthma, pneumonia, smoking-induced emphysema, airway and lung infections, tuberculosis, hypertension, GERD, and complex lung diseases such as chronic obstructive pulmonary disease and lung cancers.</p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500" data-aos="zoom-in-up" data-aos-duration="800">
                <img style="height: 55px; width: 55px" src="{{ asset('img/coe5.png') }}" alt="">
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Obstetric and Gynecology Clinic</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">The clinic is outfitted with modern diagnostic equipment and therapeutic instrument, accoutered with amenities in a relaxing, highly private environment designed and built with true understanding of the needs of both the patients and families. The clinic services are divided into two sections: obstetrics and gynecology.</p>
            </div>

            <div class="group flex cursor-pointer flex-col items-center rounded-xl border border-blue-500/10 bg-white px-5 py-8 shadow-lg shadow-blue-300/10 duration-200 hover:bg-blue-500" data-aos="zoom-in-up" data-aos-duration="800">
                <img style="height: 55px; width: 55px" src="{{ asset('img/coe6.png') }}" alt="">
                <h4 class="mt-3 mb-1 text-[17px] font-semibold text-slate-600 duration-200 group-hover:text-white">Orthopedic Center</h4>
                <p class="text-center text-sm text-slate-500 duration-200 group-hover:text-blue-200">The center delivers comprehensive treatment to patients of all ages and for all orthopedic pathologies including disorders of the musculoskeletal system – bones, joints, ligaments, tendons, muscles and nerves – with special emphasis on difficult and complex problems.</p>
            </div>
        </div>
    </div>
</section>

<!-- ====== END Center ====== -->


<!-- ====== FAQ ====== -->

<section id="faq" class="py-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <!-- heading text -->
        <div class="mb-5 sm:mb-10">
            <span class="font-medium text-blue-500">Our FAQ</span>
            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">Frequently Asked Questions</h1>
        </div>
            <!-- wrapper -->
            <div class="md:flex md:justify-between md:gap-6">
                <div class="mb-8 flex justify-center md:mb-0 md:w-5/12">
                    <img src="{{ asset('img/faq.png') }}" alt="faq images" class="max-h-[500px] md:max-h-max">
                </div>
                
                <div class="md:w-6/12" data-aos="fade-up-right" data-aos-duration="800">
                    <div class="" x-data="{selected:1}">
                        <ul>
                            <li class="relative mb-5">
                                <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left" @click="selected !== 1 ? selected = 1 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <h4 class="font-medium text-slate-600">What procedures will I have in the Emergency Department?</h4>
                                        <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-blue-500"></ion-icon>
                                    </div>
                                </button>

                                <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500" x-ref="container1" x-bind:style="selected == 1 ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p class="text-slate-500">Treatments and procedures may include lab work, radiological studies, CAT scans, ultrasound, EKG for cardiac review, medication administration and physician evaluations.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="relative mb-5">
                                <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left" @click="selected !== 2 ? selected = 2 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <h4 class="font-medium text-slate-600">Will I be allowed to have visitors during my treatment?</h4>
                                        <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-blue-500"></ion-icon>
                                    </div>
                                </button>

                                <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500" x-ref="container2" x-bind:style="selected == 2 ? 'max-height: ' + $refs.container2.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p class="text-slate-500">Yes, usually, but the number of visitors in the emergency treatment area is kept to a minimum. Occasionally, visitors will be asked to remain in the ED lobby until your loved one is placed into the room and settled into their environment. Usually, two visitors per patient are allowed in most areas of the department.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="relative mb-5">
                                <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left" @click="selected !== 3 ? selected = 3 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <h4 class="font-medium text-slate-600">How is the Emergency Department staffed?</h4>
                                        <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-blue-500"></ion-icon>
                                    </div>
                                </button>

                                <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500" x-ref="container3" x-bind:style="selected == 3 ? 'max-height: ' + $refs.container3.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p class="text-slate-500">The department is staffed with emergency medicine physicians and nurses, physician assistants, technicians, CNAs and unit coordinators along with specialists from the laboratory, cardiology, respiratory and radiology departments.</p>
                                    </div>
                                </div>
                            </li>

                            <li class="relative mb-5">
                                <button type="button" class="w-full rounded-lg bg-blue-50 px-8 py-6 text-left" @click="selected !== 4 ? selected = 4 : selected = null">
                                    <div class="flex items-center justify-between">
                                        <h4 class="font-medium text-slate-600">What interpretation services do you offer?</h4>
                                        <ion-icon name="chevron-down-circle-outline" class="w-8 text-lg text-blue-500"></ion-icon>
                                    </div>
                                </button>

                                <div class="relative max-h-0 overflow-hidden rounded-b-lg bg-blue-50/30 transition-all duration-500" x-ref="container4" x-bind:style="selected == 4 ? 'max-height: ' + $refs.container4.scrollHeight + 'px' : ''">
                                    <div class="p-6">
                                        <p class="text-slate-500">Most doctors speak English, though their fluency may vary.
                                          Interpreters are available with charge. Request must be made in advance. Availability may be limited depending on languages.</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
        </div>
    </div>
</section>

<!-- ====== END FAQ ====== -->

<!-- ====== Blog ====== -->

<section id="blog" class="py-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <!-- heading text -->
        <div class="mb-5 sm:mb-10">
            <span class="font-medium text-blue-500">Our Blog</span>
            <h1 class="text-2xl font-bold text-slate-700 sm:text-3xl">From Our Latest Blog</h1>
        </div>
        <!-- wrapper -->
        <div class="grid gap-6 sm:grid-cols-2 md:grid-cols-3 lg:gap-10">
            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="{{ asset('img/blog/blogx-1.jpg') }}" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-lg hover:shadow-md hover:shadow-blue-500/10 shadow-blue-500/10">
                    <div class="">
                        <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Covid-19</a>
                        <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-blue-500">Menkes: Kasus Covid-19 Sedang Naik, tetapi Sudah sampai Puncak</a>
                    </div>
                    <hr class="my-4 border-slate-100">
                    <div class="flex">
                        <img src="{{ asset('img/blog/user-1.png') }}" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                        <p class="text-sm font-semibold capitalize text-slate-600">Dian Erika Nugraheny <span class="block text-xs text-slate-400">Kompas Author</span></p>
                    </div>
                </div>
            </div>

            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="{{ asset('img/blog/blogx-2.jpeg') }}" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-lg hover:shadow-md hover:shadow-blue-500/10 shadow-blue-500/10">
                    <div class="">
                        <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Cardiovascular</a>
                        <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Covid-19</a>
                        <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-blue-500">Studi Temukan Kerusakan Jantung pada Penyintas Covid-19</a>
                    </div>
                    <hr class="my-4 border-slate-100">
                    <div class="flex">
                        <img src="{{ asset('img/blog/user-2.png') }}" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                        <p class="text-sm font-semibold capitalize text-slate-600">CNN Indonesia <span class="block text-xs text-slate-400">Blog Contributor</span></p>
                    </div>
                </div>
            </div>

            <!-- single-blog -->
            <div class="w-full duration-200 hover:scale-95">
                <div class="max-h-52 w-full overflow-hidden rounded-t-xl">
                    <img src="{{ asset('img/blog/blogx-3.jpg') }}" alt="blog img" class="w-full">
                </div>
                <div class="rounded-b-xl px-5 pb-5 pt-3 shadow-lg hover:shadow-md hover:shadow-blue-500/10 shadow-blue-500/10">
                    <div class="">
                        <a href="#" class="mr-2 rounded-md bg-blue-50 px-3 py-1 text-sm text-slate-600">Cardiovascular</a>
                        <a href="#" class="block pt-4 font-medium capitalize text-slate-800 hover:text-blue-500">Mengenal Tindakan Ablas Jantung untuk Menangani Penyakit Aritmia</a>
                    </div>
                    <hr class="my-4 border-slate-100">
                    <div class="flex">
                        <img src="{{ asset('img/blog/user-3.png') }}" alt="user img" class="mr-3 h-10 w-10 rounded-full object-cover">
                        <p class="text-sm font-semibold capitalize text-slate-600">Detik Indonesia <span class="block text-xs text-slate-400">Detik Author</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ====== END Blog ====== -->

<!-- ====== Appointment ====== -->

<section id="appointment" class="relative overflow-hidden py-16">
    <img src="{{ asset('img/effect.png') }}" alt="effect" class="absolute bottom-[-400px] -z-10 w-full opacity-[0.2]">
    <div class="mx-auto max-w-7xl px-8 md:px-6">
        <div class="-mx-4 flex flex-wrap lg:justify-between">

            <!-- left info-->
            <div class="w-full px-4 md:w-1/2 xl:w-6/12">
                <div class="mb-12 max-w-[570px] lg:mb-0">
                    <span class="font-medium text-blue-500">Make an Appointment</span>
                    <h1 class="mb-3 text-2xl font-bold text-slate-700 sm:text-3xl">Book an Appointment at Dr. Ayano Hospital</h1>
                    <p class="text-slate-500 mb-8">Schedule an appointment with one of our trusted and licensed medical professionals. Vetted & Trusted Doctors. booking your appointment online is easy, safe and secure.</p>
                    
                    
                    <!-- address -->
                    <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-blue-500/10">
                        <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-blue-500 bg-opacity-5 text-blue-500 sm:h-[70px] sm:max-w-[70px]">
                            <ion-icon name="location-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-slate-700">Our Location</h4>
                            <p class="text-base text-slate-400
                            ">Jl. Dharmahusada Permai, Mulyorejo, Kec. Mulyorejo, Kota SBY, Jawa Timur 60115</p>
                        </div>
                    </div>
                    <!-- phone -->
                    <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-blue-500/10">
                        <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-blue-500 bg-opacity-5 text-blue-500 sm:h-[70px] sm:max-w-[70px]">
                            <ion-icon name="call-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-slate-700">Phone Number</h4>
                            <p class="text-base text-slate-400
                            ">(031) 5916290</p>
                        </div>
                    </div>
                    <!-- mail -->
                    <div class="mb-8 flex w-full max-w-[420px] items-center rounded-lg bg-white p-4 shadow-md shadow-blue-500/10">
                        <div class="mr-6 flex h-[60px] w-full max-w-[60px] items-center justify-center overflow-hidden rounded bg-blue-500 bg-opacity-5 text-blue-500 sm:h-[70px] sm:max-w-[70px]">
                            <ion-icon name="mail-outline" class="text-3xl"></ion-icon>
                        </div>
                        <div class="w-full">
                            <h4 class="mb-1 text-xl font-bold text-slate-700">Email Address</h4>
                            <p class="text-base text-slate-400
                            ">sekretariat@rsua.unair.ac.id</p>
                        </div>
                    </div>


                </div>
            </div>

            <!-- right contact-->
            <div class="w-full px-4 md:w-1/2 xl:w-5/12">
                <div class="relative rounded-lg bg-white p-8 shadow-lg shadow-blue-500/10 sm:p-12" data-aos="fade-right" data-aos-duration="1000">
                    <form action="">
                        <div class="mb-6">  
                            <select id="specialities" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a Speciality</option>
                                @foreach ($specialities as $speciality)
                                    <option value="{{ $speciality->id }}">{{ $speciality->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-6">
                            <select id="doctors" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose a Doctor</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <div class="relative">
                                <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                                </div>
                                <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date">
                            </div>
                        </div>
                        <div class="mb-6">
                            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option selected>Choose Time</option>
                                <option value="US">10:00</option>
                                <option value="CA">11:00</option>
                                <option value="FR">12:00</option>
                                <option value="DE">13:00</option>
                                <option value="DE">14:00</option>
                                <option value="DE">15:00</option>
                                <option value="DE">16:00</option>
                            </select>
                        </div>
                        <div class="">
                            <button type="submit" class="w-full rounded border border-blue-300 bg-blue-500 p-3 text-white transition-all hover:bg-opacity-90">Send Appointment</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- ====== END Appointment ====== -->

<!-- ====== footer ====== -->

<footer id="footer" class="bg-slate-100/50 pt-16">
    <div class="mx-auto max-w-7xl px-8 md:px-6">

        <!-- footer top -->
        <div class="grid gap-16 row-gap-10 mb-8 lg:grid-cols-6">
            <div class="md:max-w-md lg:col-span-2" data-aos="fade-up" data-aos-duration="1200">
                <h1 class="text-xl lg:text-3xl text-slate-600 font-bold">RS Dr. Ayano</h1>
                <div class="mt-4 lg:max-w-sm">
                    <p class="text-sm text-slate-500">We are proud to provide the highest quality of healthcare to our patients and their families. If you have any questions or concerns, please do not hesitate to contact us. Thank you for choosing our hospital for your healthcare needs.</p>
                </div>
            </div>

            <div class="grid row-gap-8 grid-cols-2 gap-5 md:grid-cols-4 lg:col-span-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">For Students</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">View degree programs</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Log in to student portal</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">View admissions requirements</a></li>
                    </ul>
                </div>

                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">For Medical Professionals</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Find a doctor</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Refer a patient</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">View clinical trials</a></li>
                    </ul>
                </div>

                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">For International Patients</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Request an appointment</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Financial services</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">International offices</a></li>
                    </ul>
                </div>

                <div class="">
                    <!-- head -->
                    <p class="font-semibold text-slate-700">For Researcher</p>
                    <ul class="mt-2 space-y-2">
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">Find an expert in a research area</a></li>
                        <li><a href="#" class="text-slate-500 transition-colors duration-300 hover:text-slate-700">View Ayano Hospital's lab services</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- End footer top -->

        <!-- footer bottom -->
        <div class="flex flex-col justify-end border-t py-8 sm:flex-row">
            {{-- <p class="text-sm text-slate-500">© Copyright 2022 <a href="#" class="text-slate-700 hover:text-blue-500"> ZED.zahidul</a> All rights reserved.</p> --}}
            <div class="mt-4 flex items-center space-x-4 sm:mt-0">
                <a href="#">
                    <ion-icon name="logo-facebook" class="text-2xl text-slate-500 hover:text-[#4267B2] duration-300"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-twitter" class="text-2xl text-slate-500 hover:text-[#1DA1F2] duration-300"></ion-icon>
                </a>
                <a href="#">
                    <ion-icon name="logo-youtube" class="text-2xl text-slate-500 hover:text-[#FF0000] duration-300"></ion-icon>
                </a>
            </div>
        </div>
        <!-- End footer bottom -->

    </div>
</footer>

<!-- ====== END footer ====== -->

    <!-- ionicons cdn -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!-- alpine js cdn -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- datepicker -->
    <script src="https://unpkg.com/flowbite@1.5.4/dist/datepicker.js"></script>
    <!-- jquery cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- axios cdn -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- aos js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- gsap cdn js-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.3/gsap.min.js"></script>

    <script>
        gsap.from('#git-logo', { duration: 1.5, y:-300, opacity: 70, ease: 'bounce' });
    </script>

    <script>
        AOS.init();
    </script>

    <script>
        $(document).ready(function () {
            $('#specialities').change(function () { 
                let url = '/find-doctor/'+$(this).val();
                // let id = $(this).val();
                // console.log(url)
                // console.log(id)
                axios.get(url).then(function (response) {
                // console.log(response.data[0].name)
                $.each(response.data, function (index, value) { 
                        $('#doctors').append('<option value="'+value.id+'">'+value.name+'</option>');
                    });
                })
            });
        });
    </script>
</body>
</html>