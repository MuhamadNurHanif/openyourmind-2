@extends('layout.app')

@section('title', 'Daftar Artikel - Open Your Mind')

@section('content')
    <div class="py-24 sm:py-15 rounded-l-3xl rounded-r-3xl">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:mx-0">
                <h2 class="text-4xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-5xl">From the blog</h2>

                <div class="mt-2 flex justify-between items-center">
                    <p class="text-lg/8 text-gray-600">Temukan Wawasan Baru untuk Kesehatan Mental yang Lebih Baik</p>

                    <!-- Dropdown Button -->
                    <div class="relative ml-auto">
                        <button id="dropdownButton"
                            class="bg-gray-900 text-white px-4 py-2 rounded-md shadow-md hover:bg-gray-700 flex items-center gap-2">
                            Kategori
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>

                        <!-- Dropdown Menu (Muncul Tepat di Tengah Tombol) -->
                        <div id="dropdownMenu"
                            class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white border border-gray-200 rounded-md shadow-lg hidden">
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Bisnis</a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Gaya Hidup</a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Kesehatan</a>
                            <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-100">Teknologi</a>
                        </div>
                    </div>


                </div>
            </div>
            <div
                class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <article class="flex max-w-xl flex-col items-start justify-between">
                    <div class="flex items-center gap-x-4 text-xs">
                        <time datetime="2020-03-16" class="text-gray-500">Mar 16, 2020</time>
                        <a href="#"
                            class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Marketing</a>
                    </div>
                    <div class="group relative">
                        <h3 class="mt-3 text-lg/6 font-semibold text-gray-900 group-hover:text-gray-600">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Boost your conversion rate
                            </a>
                        </h3>
                        <p class="mt-5 line-clamp-3 text-sm/6 text-gray-600">Illo sint voluptas. Error voluptates culpa
                            eligendi. Hic vel totam vitae illo. Non aliquid explicabo necessitatibus unde. Sed
                            exercitationem placeat consectetur nulla deserunt vel. Iusto corrupti dicta.</p>
                    </div>
                    <div class="relative mt-8 flex items-center gap-x-4">
                        <img src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt="" class="size-10 rounded-full bg-gray-50">
                        <div class="text-sm/6">
                            <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Michael Foster
                                </a>
                            </p>
                            <p class="text-gray-600">Co-Founder / CTO</p>
                        </div>
                    </div>
                </article>

                <!-- More posts... -->
            </div>
        </div>
    </div>
    <script>
        document.getElementById("dropdownButton").addEventListener("click", function() {
            document.getElementById("dropdownMenu").classList.toggle("hidden");
        });

        document.addEventListener("click", function(event) {
            if (!document.getElementById("dropdownButton").contains(event.target)) {
                document.getElementById("dropdownMenu").classList.add("hidden");
            }
        });
    </script>
@endsection
