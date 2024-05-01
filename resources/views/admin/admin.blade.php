@extends('layouts.index')

@section('content')
@include('home.components.navbar')

    <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1 class="pt-60 text-center text-5xl">Welcom admin ! let's edit your restaurant !</h1>
        {{-- <form action="{{ route('menu.store') }}" method="POST" enctype="multipart/form-data"> --}}
        @csrf
        <div class="flex lg:flex-row flex-col items-center justify-center gap-2 mb-8   w-[100%] lg:h-[80vh] h-fit">
            {{-- <div>
                <img class="w-[42vw] h-[88vh] rounded-md  pt-24" src="{{ asset('img/image.png') }}" alt=""
                    srcset="">
            </div> --}}

            <div class="w-[40vw] flex flex-col gap-3 pt-20 ">

                {{-- <h1 class="text-3xl mt-2 font-semibold">ADD ITEMS TO YOUR MENU</h1> --}}
                <input class="border-2 rounded-md border-slate-600 w-[40vw] h-[7vh] p-4" name="name"
                    placeholder="le nom du plat" type="text">
                <input class="border-2 rounded-md border-slate-600 w-[40vw] h-[7vh] p-4" name="price"
                    placeholder="le prix du plat" type="number">
                    <input class="border-2 rounded-md border-slate-600 w-[40vw] h-[7vh] p-4" name="description"
                    placeholder="la description du plat" type="text">
                <input class="border-2 rounded-md border-slate-600 w-[40vw] h-[7vh] p-2 " name="image"
                    placeholder="l'image du plat" type="file">
                <button class="bg-black py-2 text-white rounded-md border-black  w-[40vw] h-[7vh]">submit</button>
    </form>

    {{--  --}}
    @foreach ($menus as $menu)
        <form action="{{ route('menu.destroy', $menu) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('DELETE')
            <div class="card w-72 px-10 bg-white shadow-lg rounded-lg overflow-hidden">
                <img width="200" src="{{ asset('storage/img/' . $menu->image) }}" alt="">
                <a href="{{ route('menu.store') }}"></a>
                <div class="card-body p-4">
                    <h2 class="text-xl font-bold mb-2">{{ $menu->name }}</h2>
                    <p class="text-gray-700">{{ $menu->description }}</p>
                    <p class="text-gray-700">{{ $menu->price }} $</p>
                    <div class="flex justify-end mt-4">
                        <button class="bg-yellow-300 px-5 w-[15vw] h-[5vh] py-1 rounded-md text-sm font-mono">
                            Delete</button>
        </form>
        {{--  --}}


        
    @endforeach
    {{--  --}}
@endsection
