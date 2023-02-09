@extends('layouts.layout')
@section('style')
    <style>
    </style>
@endsection

@section('content')
    <div class="mt-10 flex justify-center items-center">
         <div class="space-y-10 lg:flex lg:space-x-10 lg:space-y-0">

            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:shadow-lg">
                <a href="/test1">
                    <img class="rounded-t-lg" src="{{asset('images/image1.jpg')}}" alt="" />
                </a>
                <div class="p-5">
                    <p class="text-slate-500">TUGAS 1</p>
                    <a href="/test1">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">Multi level dropdown</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Buatlah 4 level dropdown mulai dari provinsi, kota/kabupaten, kecamatan, dan
                        kelurahan menggunakan html, css dan javascript sederhana. Setiap dropdown harus
                        melakukan pengambilan data yang ada pada database dengan menggunakan Laravel.
                    </p>
                </div>
            </div>
            <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 hover:shadow-lg">
                <a href="/test2">
                    <img class="rounded-t-lg" src="{{asset('images/image2.jpg')}}" alt="" />
                </a>
                <div class="p-5">
                    <p class="text-slate-500">TUGAS 2</p>
                    <a href="/test2">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white hover:underline">Validation input</h5>
                    </a>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                        Masih di project yang sama, buatlah 1 rute lain untuk membuat form sederhana yang
                        berisi email subscription.
                </div>
            </div>



         </div>
    </div>
@endsection

@section('javascript')
    <script>

    </script>
@endsection

