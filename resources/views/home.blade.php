@extends('layouts.main')

@section('content')
    <div class="container mx-auto">
        <div class="md:m-32 my-32 mx-6">
            <section class="bg-transparent dark:bg-gray-900">
                <div class="md:p-14">
                    <h2 class="text-black text-4xl mb-4 uppercase font-bold tracking-widest">Profil Pelajar pancasila
                    </h2>
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-10">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 md:gap-2">
                            <div class="bg-amber-500 shadow-md rounded-lg p-4 flex flex-col">
                                <svg class="w-full text-xl mb-4 p-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512">
                                    <!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path
                                        d="M351.2 4.8c3.2-2 6.6-3.3 10-4.1c4.7-1 9.6-.9 14.1 .1c7.7 1.8 14.8 6.5 19.4 13.6L514.6 194.2c8.8 13.1 13.4 28.6 13.4 44.4v73.5c0 6.9 4.4 13 10.9 15.2l79.2 26.4C631.2 358 640 370.2 640 384v96c0 9.9-4.6 19.3-12.5 25.4s-18.1 8.1-27.7 5.5L431 465.9c-56-14.9-95-65.7-95-123.7V224c0-17.7 14.3-32 32-32s32 14.3 32 32v80c0 8.8 7.2 16 16 16s16-7.2 16-16V219.1c0-7-1.8-13.8-5.3-19.8L340.3 48.1c-1.7-3-2.9-6.1-3.6-9.3c-1-4.7-1-9.6 .1-14.1c1.9-8 6.8-15.2 14.3-19.9zm-62.4 0c7.5 4.6 12.4 11.9 14.3 19.9c1.1 4.6 1.2 9.4 .1 14.1c-.7 3.2-1.9 6.3-3.6 9.3L213.3 199.3c-3.5 6-5.3 12.9-5.3 19.8V304c0 8.8 7.2 16 16 16s16-7.2 16-16V224c0-17.7 14.3-32 32-32s32 14.3 32 32V342.3c0 58-39 108.7-95 123.7l-168.7 45c-9.6 2.6-19.9 .5-27.7-5.5S0 490 0 480V384c0-13.8 8.8-26 21.9-30.4l79.2-26.4c6.5-2.2 10.9-8.3 10.9-15.2V238.5c0-15.8 4.7-31.2 13.4-44.4L245.2 14.5c4.6-7.1 11.7-11.8 19.4-13.6c4.6-1.1 9.4-1.2 14.1-.1c3.5 .8 6.9 2.1 10 4.1z" />
                                </svg>
                                <span class="font-bold tracking-wider uppercase">Beriman, bertakwa kepada Tuhan yang Maha Esa dan berakhlak mulia</span>
                            </div>
                            <div class="bg-red-500 shadow-md rounded-lg p-4 flex flex-col">
                                <svg class="w-full text-xl mb-4 p-4" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M192 0c17.7 0 32 14.3 32 32V144H160V32c0-17.7 14.3-32 32-32zM64 64c0-17.7 14.3-32 32-32s32 14.3 32 32v80H64V64zm192 0c0-17.7 14.3-32 32-32s32 14.3 32 32v96c0 17.7-14.3 32-32 32s-32-14.3-32-32V64zm96 64c0-17.7 14.3-32 32-32s32 14.3 32 32v64c0 17.7-14.3 32-32 32s-32-14.3-32-32V128zm-96 88l0-.6c9.4 5.4 20.3 8.6 32 8.6c13.2 0 25.4-4 35.6-10.8c8.7 24.9 32.5 42.8 60.4 42.8c11.7 0 22.6-3.1 32-8.6V256c0 52.3-25.1 98.8-64 128v96c0 17.7-14.3 32-32 32H160c-17.7 0-32-14.3-32-32V401.6c-17.3-7.9-33.2-18.8-46.9-32.5L69.5 357.5C45.5 333.5 32 300.9 32 267V240c0-35.3 28.7-64 64-64h88c22.1 0 40 17.9 40 40s-17.9 40-40 40H128c-8.8 0-16 7.2-16 16s7.2 16 16 16h56c39.8 0 72-32.2 72-72z"/></svg>
                                <span class="font-bold tracking-wider uppercase text-center">Mandiri</span>
                            </div>
                            <div class="bg-purple-500 shadow-md rounded-lg p-4 flex flex-col">
                                <svg class="w-full text-xl mb-4 p-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M144 0a80 80 0 1 1 0 160A80 80 0 1 1 144 0zM512 0a80 80 0 1 1 0 160A80 80 0 1 1 512 0zM0 298.7C0 239.8 47.8 192 106.7 192h42.7c15.9 0 31 3.5 44.6 9.7c-1.3 7.2-1.9 14.7-1.9 22.3c0 38.2 16.8 72.5 43.3 96c-.2 0-.4 0-.7 0H21.3C9.6 320 0 310.4 0 298.7zM405.3 320c-.2 0-.4 0-.7 0c26.6-23.5 43.3-57.8 43.3-96c0-7.6-.7-15-1.9-22.3c13.6-6.3 28.7-9.7 44.6-9.7h42.7C592.2 192 640 239.8 640 298.7c0 11.8-9.6 21.3-21.3 21.3H405.3zM224 224a96 96 0 1 1 192 0 96 96 0 1 1 -192 0zM128 485.3C128 411.7 187.7 352 261.3 352H378.7C452.3 352 512 411.7 512 485.3c0 14.7-11.9 26.7-26.7 26.7H154.7c-14.7 0-26.7-11.9-26.7-26.7z"/></svg>
                                <span class="font-bold tracking-wider uppercase text-center">Berkebinekaan Global</span>
                            </div>
                            <div class="bg-green-500 shadow-md rounded-lg p-4 flex flex-col">
                                <svg class="w-full text-xl mb-4 p-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M544 248v3.3l69.7-69.7c21.9-21.9 21.9-57.3 0-79.2L535.6 24.4c-21.9-21.9-57.3-21.9-79.2 0L416.3 64.5c-2.7-.3-5.5-.5-8.3-.5H296c-37.1 0-67.6 28-71.6 64H224V248c0 22.1 17.9 40 40 40s40-17.9 40-40V176c0 0 0-.1 0-.1V160l16 0 136 0c0 0 0 0 .1 0H464c44.2 0 80 35.8 80 80v8zM336 192v56c0 39.8-32.2 72-72 72s-72-32.2-72-72V129.4c-35.9 6.2-65.8 32.3-76 68.2L99.5 255.2 26.3 328.4c-21.9 21.9-21.9 57.3 0 79.2l78.1 78.1c21.9 21.9 57.3 21.9 79.2 0l37.7-37.7c.9 0 1.8 .1 2.7 .1H384c26.5 0 48-21.5 48-48c0-5.6-1-11-2.7-16H432c26.5 0 48-21.5 48-48c0-12.8-5-24.4-13.2-33c25.7-5 45.1-27.6 45.2-54.8v-.4c-.1-30.8-25.1-55.8-56-55.8c0 0 0 0 0 0l-120 0z"/></svg>
                                <span class="font-bold tracking-wider uppercase text-center">Bergotong royong</span>
                            </div>
                            <div class="bg-orange-500 shadow-md rounded-lg p-4 flex flex-col">
                                <svg class="w-full text-xl mb-4 p-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M184 0c30.9 0 56 25.1 56 56V456c0 30.9-25.1 56-56 56c-28.9 0-52.7-21.9-55.7-50.1c-5.2 1.4-10.7 2.1-16.3 2.1c-35.3 0-64-28.7-64-64c0-7.4 1.3-14.6 3.6-21.2C21.4 367.4 0 338.2 0 304c0-31.9 18.7-59.5 45.8-72.3C37.1 220.8 32 207 32 192c0-30.7 21.6-56.3 50.4-62.6C80.8 123.9 80 118 80 112c0-29.9 20.6-55.1 48.3-62.1C131.3 21.9 155.1 0 184 0zM328 0c28.9 0 52.6 21.9 55.7 49.9c27.8 7 48.3 32.1 48.3 62.1c0 6-.8 11.9-2.4 17.4c28.8 6.2 50.4 31.9 50.4 62.6c0 15-5.1 28.8-13.8 39.7C493.3 244.5 512 272.1 512 304c0 34.2-21.4 63.4-51.6 74.8c2.3 6.6 3.6 13.8 3.6 21.2c0 35.3-28.7 64-64 64c-5.6 0-11.1-.7-16.3-2.1c-3 28.2-26.8 50.1-55.7 50.1c-30.9 0-56-25.1-56-56V56c0-30.9 25.1-56 56-56z"/></svg>
                                <span class="font-bold tracking-wider uppercase text-center">kreatif</span>
                            </div>
                            <div class="bg-amber-600 shadow-md rounded-lg p-4 flex flex-col">
                                <svg class="w-full text-xl mb-4 p-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M184 0c30.9 0 56 25.1 56 56V456c0 30.9-25.1 56-56 56c-28.9 0-52.7-21.9-55.7-50.1c-5.2 1.4-10.7 2.1-16.3 2.1c-35.3 0-64-28.7-64-64c0-7.4 1.3-14.6 3.6-21.2C21.4 367.4 0 338.2 0 304c0-31.9 18.7-59.5 45.8-72.3C37.1 220.8 32 207 32 192c0-30.7 21.6-56.3 50.4-62.6C80.8 123.9 80 118 80 112c0-29.9 20.6-55.1 48.3-62.1C131.3 21.9 155.1 0 184 0zM328 0c28.9 0 52.6 21.9 55.7 49.9c27.8 7 48.3 32.1 48.3 62.1c0 6-.8 11.9-2.4 17.4c28.8 6.2 50.4 31.9 50.4 62.6c0 15-5.1 28.8-13.8 39.7C493.3 244.5 512 272.1 512 304c0 34.2-21.4 63.4-51.6 74.8c2.3 6.6 3.6 13.8 3.6 21.2c0 35.3-28.7 64-64 64c-5.6 0-11.1-.7-16.3-2.1c-3 28.2-26.8 50.1-55.7 50.1c-30.9 0-56-25.1-56-56V56c0-30.9 25.1-56 56-56z"/></svg>
                                <span class="font-bold tracking-wider uppercase text-center">Bernalar kritis</span>
                            </div>
                        </div>
                            <div class="bg-[url('../img/pancasila.png')] bg-cover bg-center rounded-lg"></div>
                    </div>
                </div>
            </section>
            <div class="flex flex-col gap-16 my-24">
                <a href="#">
                    <span
                        class="bg-purple-400 hover:bg-purple-500 focus:ring-4 focus:outline-none focus:ring-purple-300 font-bold rounded-lg px-4 py-2 tracking-[0.25em] uppercase">popular
                        post <i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <div class="grid md:grid-cols-3 grid-cols-1 gap-24">
                    @foreach ($random_blogs as $random_blog)
                        <div class="flex flex-col">
                            <a href="#" class="group">
                                <div class="relative overflow-hidden group-hover:right-0">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://source.unsplash.com/600x400?laptop" alt="">
                                    <div
                                        class="flex w-full h-full top-0 -right-full group-hover:right-0 absolute backdrop-blur-sm bg-black opacity-50 text-xs p-4 gap-2 uppercase rounded-lg">
                                        @foreach ($random_blog->Categories as $random_categories)
                                            <span
                                                class="text-white tracking-widest">{{ $random_categories->category }}</span>
                                        @endforeach
                                        <span
                                            class="text-white tracking-widest absolute bottom-3 right-4">{{ substr($random_blog->created_at, 0, 10) }}</span>
                                        <div class="flex items-center absolute top-28 left-36 text-white text-base">
                                            <span class="text-white font-bold tracking-[0.25em] mr-3">view</span>
                                            <i class="text-white fa-solid fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('newsShow', $random_blog->blog_title) }}" class="mt-6 self-start">
                                <span
                                    class="font-bold uppercase tracking-wider text-sm">{{ $random_blog->blog_title }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-16 mb-24">
                <a href="#">
                    <span
                        class="bg-purple-400 hover:bg-purple-500 focus:ring-4 focus:outline-none focus:ring-purple-300 font-bold rounded-lg px-4 py-2 tracking-[0.25em] uppercase">Chapter
                        List <i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <div class="grid md:grid-cols-3 grid-cols-1 gap-24">
                    @foreach ($chapters as $chapter)
                        <div class="flex flex-col">
                            <a href="{{ route('showChapter', $chapter->chapter) }}" class="group">
                                <div class="relative overflow-hidden group-hover:right-0">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://source.unsplash.com/600x400?laptop" alt="">
                                    <div
                                        class="flex w-full h-full top-0 -right-full group-hover:right-0 absolute backdrop-blur-sm bg-black opacity-50 text-xs p-4 gap-2 uppercase rounded-lg">
                                        <div class="flex items-center absolute top-28 left-36 text-white text-base">
                                            <span class="text-white font-bold tracking-[0.25em] mr-3">view</span>
                                            <i class="text-white fa-solid fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="mt-6 self-start">
                                <span class="font-bold uppercase tracking-wider text-sm">{{ $chapter->chapter }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex flex-col gap-16">
                <a href="#">
                    <span
                        class="bg-purple-400 hover:bg-purple-500 focus:ring-4 focus:outline-none focus:ring-purple-300 font-bold rounded-lg px-4 py-2 tracking-[0.25em] uppercase">latest
                        post <i class="fa-solid fa-arrow-right"></i></span>
                </a>
                <div class="grid md:grid-cols-3 grid-cols-1 gap-24">
                    @foreach ($blogs as $blog)
                        <div class="flex flex-col">
                            <a href="{{ route('newsShow', $blog->blog_title) }}" class="group">
                                <div class="relative overflow-hidden group-hover:right-0">
                                    <img class="w-full h-full object-cover rounded-lg"
                                        src="https://source.unsplash.com/600x400?montain" alt="">
                                    <div
                                        class="flex w-full h-full top-0 -right-full group-hover:right-0 absolute backdrop-blur-sm bg-black opacity-50 text-xs p-4 gap-2 uppercase rounded-lg">
                                        @foreach ($blog->Categories as $blog_categories)
                                            <span class="text-white tracking-widest">{{ $blog_categories->category }}</span>
                                        @endforeach
                                        <span
                                            class="text-white tracking-widest absolute bottom-3 right-4">{{ substr($blog->created_at, 0, 10) }}</span>
                                        <div class="flex items-center absolute top-28 left-36 text-white text-base">
                                            <span class="text-white font-bold tracking-[0.25em] mr-3">view</span>
                                            <i class="text-white fa-solid fa-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <a href="{{ route('newsShow', $blog->blog_title) }}" class="mt-6 self-start">
                                <span class="font-bold uppercase tracking-wider text-sm">{{ $blog->blog_title }}</span>
                            </a>
                        </div>
                    @endforeach
                </div>
                <span
                    class="text-center bg-purple-400 hover:bg-purple-500 focus:ring-4 focus:outline-none focus:ring-purple-300 font-bold rounded-lg px-4 py-2 mx-auto tracking-[0.25em] uppercase">
                    <a href="/news">more <i class="fa-solid fa-arrow-right"></i></a>
                </span>
                <div class="container relative z-10 drop-shadow-lg">
                    <a href="#"
                        class="flex w-12 h-16 absolute right-5 border-2 border-black items-center justify-center text-2xl">
                        <i class="fa-solid fa-arrow-up-long"></i>
                    </a>
                </div>
            </div>
        </div>
        <footer class="flex p-4 bg-transparent md:p-8">
            <div class="w-full mx-auto ">
                <div class="md:flex md:justify-between">
                    <span class="text-sm md:text-center uppercase font-bold md:order-1">
                        сука блять © 2023
                    </span>
                    <div class="flex space-x-6 md:justify-center md:mt-0 md:order-2">
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path
                                    d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                    clip-rule="evenodd" />
                            </svg>
                        </a>
                    </div>
                    <span class="font-bold text-sm md:order-3">
                        BE INSPIRED. BE INSPIRING.
                    </span>
                </div>
            </div>
        </footer>
    </div>
@endsection
