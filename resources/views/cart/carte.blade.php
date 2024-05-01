@extends('layouts.index')
@section('content')
    <!-- Section Menu -->

    @include('home.components.navbar')

    <section class="section1 h-96 relative"
        style="background-image: url('img/image.png'); background-size: cover; background-position: center;">
        <div class="absolute inset-0">
            <div class="bg-black bg-opacity-50 absolute inset-0"></div>
            <div class="container mx-auto flex flex-col items-center justify-center h-full text-background relative">
                <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold mb-8 text-center px-4 ">Cart
                </h1>
                <div class=" text-lg font-bold"><a href="/" rel="v:url" property="v:title">Home</a> » <span class="current">Cart</span></div>
            </div>
        </div>
    </section>
<section class="py-24 relative  bg-background ">
    <div class="w-full max-w-7xl px-4 md:px-5 lg-6 mx-auto py-6 px-auto shadow-xl rounded-md">

        <h2 class="title font-manrope font-bold text-4xl leading-10 mb-8 text-center text-primary">Shopping Cart
        </h2>
        <div class="hidden lg:grid grid-cols-2 py-6">
            <div class="font-normal text-xl leading-8 text-secondary">Product</div>
            <p class="font-normal text-xl leading-8 text-secondary flex items-center justify-between">
                <span class="w-full max-w-[200px] text-center">Delivery Charge</span>
                <span class="w-full max-w-[260px] text-center">Quantity</span>
                <span class="w-full max-w-[200px] text-center">Total</span>
            </p>
        </div>

        @for ($i = 0; $i < 4; $i++)
        <div class="grid grid-cols-1 lg:grid-cols-2 min-[550px]:gap-6 border-t border-gray-200 py-6">
            <div class="flex items-center flex-col min-[550px]:flex-row gap-3 min-[550px]:gap-6 w-full max-xl:justify-center max-xl:max-w-xl max-xl:mx-auto">
                <div class="img-box"><img src="https://placehold.it/200x200" alt="perfume bottle image" class="xl:w-[140px]"></div>
                <div class="pro-data w-full max-w-sm ">
                    <h5 class="font-semibold text-xl leading-8 text-secondary max-[550px]:text-center">Product Name</h5>
                    <p class="font-normal text-lg leading-8 text-text my-2 min-[550px]:my-3 max-[550px]:text-center">Category</p>
                    <h6 class="font-medium text-lg leading-8 text-accent  max-[550px]:text-center">$120.00</h6>
                </div>
            </div>
            <div class="flex items-center flex-col min-[550px]:flex-row w-full max-xl:max-w-xl max-xl:mx-auto gap-2">
                <h6 class="font-manrope font-bold text-2xl leading-9 text-text w-full max-w-[176px] text-center">$15.00</h6>
                <div class="flex items-center w-full mx-auto justify-center">
                    <button class="group rounded-l-full px-6 py-[18px] border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                        <i class="fas fa-minus"></i>
                    </button>
                    <input type="text" class="border-y border-gray-200 outline-none text-gray-900 font-semibold text-lg w-full max-w-[118px] min-w-[80px] placeholder:text-gray-900 py-[15px] text-center bg-transparent" placeholder="1">
                    <button class="group rounded-r-full px-6 py-[18px] border border-gray-200 flex items-center justify-center shadow-sm shadow-transparent transition-all duration-500 hover:shadow-gray-200 hover:border-gray-300 hover:bg-gray-50">
                        <i class="fas fa-plus"></i>
                    </button>
                </div>
                <h6 class="text-accent font-manrope font-bold text-2xl leading-9 w-full max-w-[176px] text-center">$120.00</h6>
            </div>
        </div>
        @endfor

        <div class="bg-gray-50 rounded-xl p-6 w-full mb-8 max-lg:max-w-xl max-lg:mx-auto">
            <div class="flex items-center justify-between w-full mb-6">
                <p class="font-normal text-xl leading-8 text-text">Sub Total</p>
                <h6 class="font-semibold text-xl leading-8 text-secondary">$360.00</h6>
            </div>
            <div class="flex items-center justify-between w-full pb-6 border-b border-gray-200">
                <p class="font-normal text-xl leading-8 text-text">Delivery Charge</p>
                <h6 class="font-semibold text-xl leading-8 text-secondary">$45.00</h6>
            </div>
            <div class="flex items-center justify-between w-full py-6">
                <p class="font-manrope font-medium text-2xl leading-9 text-primary">Total</p>
                <h6 class="font-manrope font-medium text-2xl leading-9 text-accent">$405.00</h6>
            </div>
        </div>
        <div class="flex items-center flex-col sm:flex-row justify-center gap-3 mt-8">
            
            <button class="rounded-full w-full max-w-[280px] py-4 text-center justify-center items-center bg-accent font-semibold text-lg text-white flex transition-all duration-500 hover:bg-indigo-700">Continue to Payment
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>
</section>

    
    @include('home.components.footer')