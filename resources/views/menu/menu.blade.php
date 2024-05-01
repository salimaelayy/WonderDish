@extends('layouts.index')
@section('content')
    <!-- Section Menu -->

    @include('home.components.navbar')


    <section class="section1 h-96 relative"
        style="background-image: url('img/image.png'); background-size: cover; background-position: center;">
        <div class="absolute inset-0">
            <div class="bg-black bg-opacity-50 absolute inset-0"></div>
            <div class="container mx-auto flex flex-col items-center justify-center h-full text-white relative">
                <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold mb-8 text-center px-4 ">Our Menu
                </h1>
                <div class=" text-lg font-bold"><a href="/" rel="v:url" property="v:title">Home</a> » <span class="current">Menu</span></div>
            </div>
        </div>
    </section>


        <!-- Section Plats  -->
        <!-- component -->
<!-- This is an example component -->

        <!-- @foreach ($menus as $menu)
        <h2 class="text-2xl md:text-3xl font-semibold mb-4 mt-8 text-center"></h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white shadow-md rounded-lg p-6">
                <img src="{{asset('storage/img/' . $menu->image ) }}" alt="">
                <h3 class="text-lg font-semibold mb-2">{{ $menu->name }}</h3>
                <p class="text-gray-700 mb-4">{{ $menu->description }}</p>
                <p class="text-lg font-semibold mb-4">Prix :{{ $menu->price }}</p>
                <div class="flex justify-between">
                    <button
                    class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700 transition duration-300">Commander</button>
                    
                    
                    <!-- Modal toggle -->
                    {{-- <button data-modal-target="default-modal" data-modal-toggle="default-modal"
                        class="block text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                        type="button">
                        Réserver
                    </button> --}}

                    <!-- Main modal -->
                    {{-- <div id="default-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            (<div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Terms of Service
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    
                                    <form method="post" class="w-full  flex flex-col gap-y-5 " action="/calendar/store">
                                        @csrf
                                        <label for="">Chose your table</label>
                                        <select name="title" id="pet-select">
                                            <option value="" disabled>select ur table</option>
                                            @foreach ($tablles as $tablle)
                                                <option value="{{ $tablle->name }}">{{ $tablle->name }}</option>
                                            @endforeach
                                        </select>
                        
                                        <label for="">Start Day</label>
                                        <input name="dateStart" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}"
                                        id="date-start" type="date">
                                        <label for="">Start time</label>
                                        <input name="timeStart"  required min="08:00:00" max="19:00:00"
                                        value="09:30:00" id="time-start" type="time">
                                        
                                        
                                        <label for="">end Day</label>
                                        <input name="dateEnd" id="date-end"  type="date">
                                        <label for="">end time</label>
                                        <input name="timeEnd" id="time-end"  type="time">


                                        <button
                                        class="w-f
                                        py-3 bg-purple-950">hgfhgfhg</button>
                                    </form>
                                </div>
                                <!-- Modal footer -->
                                <div
                                class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                                <button data-modal-hide="default-modal" type="button"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                                accept</button>
                                <button data-modal-hide="default-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
                                </div>
                            </div>)
                        </div>
                    </div> --}}
                </div>
            </div>
            @endforeach -->
            
            <section class="section py-4">
                <div class="container mx-auto my-8">
                    <p class=" text-start text-6xl ">Let's TakeAway Something.</p>
                </div>
                <div class="container mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach ($menus as $menu)
                    <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
                        <div class="h-56 md:h-64 lg:h-72" style="background-image: url('{{ asset('img/pizza.jpg' /* . $menu->image */ ) }}'); background-size: cover; background-position: center;"></div>
                        <div class="p-4 sm:p-6">
                            <p class="font-bold text-gray-700 text-2xl leading-7 mb-1">{{ $menu->name }}</p>
                            <div class="flex flex-row">
                                <p class="text-[#3C3C4399] text-lg mr-2 line-through">{{ $menu->old_price }}</p>
                                <p class="text-lg font-bold text-[#0FB478]">{{ $menu->price }}$</p>
                            </div>
                            <p class="text-[#7C7C80] font-[15px] mt-4">{{ $menu->description }}</p>
                            <a target="_blank" href="foodiesapp://food/{{ $menu->id }}" class="block mt-6 w-full px-4 py-3 font-medium tracking-wide text-center capitalize transition-colors duration-300 transform bg-[#FFC933] rounded-[14px] hover:bg-[#FFC933DD] focus:outline-none focus:ring focus:ring-teal-300 focus:ring-opacity-80">
                                Order
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </section>


    </section>
    @include('home.components.footer')
@endsection
