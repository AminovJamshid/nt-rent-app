<x-main-layout>
    <section class="relative md:py-24 pt-24 pb-16">
        <div class="container relative">
            <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                <div class="lg:col-span-8 md:col-span-7">
                    <div class="grid grid-cols-1 relative">
                        <div class="tiny-one-item">
                            <div class="tiny-slide">
                                <img src="{{'/storage/'.$ad->images->first()?->name}}"
                                     class="rounded-md shadow dark:shadow-gray-700" alt="">
                            </div>
                        </div>
                    </div>

                    <h4 class="text-2xl font-medium mt-6 mb-3">{{ $ad->title}}</h4>
                    <span class="text-slate-400 flex items-center">
                    <i data-feather="map-pin" class="size-5 me-2"></i>{{ $ad->address}}
                </span>

                    <ul class="py-6 flex items-center list-none">
                        <li class="flex items-center lg:me-6 me-4">
                            <i data-feather="map" class="lg:text-3xl text-2xl me-2 text-green-600"></i>
                            <span class="lg:text-xl">{{$ad->branch->name}}</span>
                        </li>

                        <li class="flex items-center lg:me-6 me-4">
                            <i data-feather="user" class="lg:text-3xl text-2xl me-2 text-green-600"></i>
                            <span class="lg:text-xl">{{ $ad->gender}}</span>
                        </li>

                        <li class="flex items-center">
                            <i data-feather="home" class="lg:text-3xl text-2xl me-2 text-green-600"></i>
                            <span class="lg:text-xl">{{$ad->rooms}}</span>
                        </li>
                    </ul>

                    <p class="text-slate-400">{{ $ad->description}}</p>

                    <div class="w-full leading-[0] border-0 mt-6">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin"
                            style="border:0" class="w-full h-[500px]" allowfullscreen></iframe>
                    </div>
                </div>

                <div class="lg:col-span-4 md:col-span-5">
                    <div class="sticky top-20">
                        <div class="rounded-md bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700">
                            <div class="p-6">
                                <h5 class="text-2xl font-medium">Qo'shimcha ma'lumotlar:</h5>

                                <div class="flex justify-between items-center mt-4">
                                    <span class="text-xl font-medium flex">
                                        <i data-feather="dollar-sign" class="lg:text-3xl text-2xl me-2 text-green-600"></i>
                                        {{ $ad->price}}</span>

                                    <span class="bg-green-600/10 text-green-600 text-sm px-2.5 py-0.75 rounded h-6">
                                        {{ $ad->status->name}}
                                    </span>
                                </div>

                                <ul class="list-none mt-4">
                                    <li class="flex justify-between items-center mt-2">
                                        <span class="lg:text-xl flex">
                                            <i data-feather="map" class="lg:text-3xl text-2xl me-2 text-green-600"></i>
                                            Filial:
                                        </span>
                                        <span class="font-medium text-sm">{{ $ad->branch->name}}</span>
                                    </li>
                                    <li class="flex justify-between items-center mt-2">
                                        <span class="lg:text-xl flex">
                                            <i data-feather="user" class="lg:text-3xl text-2xl me-2 text-green-600"></i>
                                            Kimlarga:
                                        </span>
                                        <span class="font-medium text-sm">{{ $ad->gender}}</span>
                                    </li>
                                    <li class="flex justify-between items-center mt-2">
                                        <span class="lg:text-xl flex">
                                            <i data-feather="home" class="lg:text-3xl text-2xl me-2 text-green-600"></i>
                                            Xonalar:
                                        </span>
                                        <span class="font-medium text-sm">{{ $ad->rooms}}</span>
                                    </li>
                                </ul>
                            </div>

                            <div class="flex">
                                <div class="p-1 w-1/2">
                                    <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">
                                        <i data-feather="bookmark" class="text-2xl me-2"></i>
                                        Saqlash
                                    </a>
                                </div>
                                <div class="p-1 w-1/2">
                                    <a href="" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">
                                        <i data-feather="phone" class="text-2xl me-2"></i>
                                        Bog'lanish
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="mt-12 text-center">
                            <div class="mt-6">
                                <form action="/ads/delete/{{ $ad->i }}" method="post">
                                    <input type="hidden" name="_method" value="delete">
                                    <button type="submit"
                                            class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md">
                                        <i data-feather="trash" class="align-middle me-2"></i>O'chirish
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--end section-->
</x-main-layout>
