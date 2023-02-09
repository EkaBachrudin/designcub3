@extends('layouts.layout')
@section('style')
    <style>
    </style>
@endsection

@section('content')
    <div class="shadow p-5 mt-5 lg:w-1/2">
        <p class="text-xl font-bold underline ">TUGAS 2</p>
        <p class="leading-normal text-justify indent-[20px]">
            Masih di project yang sama, buatlah 1 rute lain untuk membuat form sederhana yang
            berisi email subscription.
        </p>
        <br>
        <p class="font-bold">User behavior:</p>
        <p class="leading-normal text-justify indent-[20px]">Tombol subscribe akan melakukan POST request ke backend dengan urutan validasi:</p>
        <ul class="list-disc px-5">
            <li>Input harus diisi</li>
            <li>Input minimum 10 karakter</li>
            <li>Input harus berupa format email</li>
        </ul>
        <br>
        <p class="leading-normal text-justify text-red-500">Jika validasi salah, tampilkan pesan error berwarna merah dibawah form tersebut.</p>
        <p class="leading-normal text-justify text-green-500">Jika validasi benar, tampilkan pesan sukses berwarna hijau dibawah form tersebut.</p>
        <br>
        <p class="leading-normal text-justify">simpan data ke database dengan nama table subscriptions</p>
    </div>
    <div class="shadow p-5 mt-5 lg:w-1/2 mb-[100px]">
        <div class="p-5 bg-stone-700 rounded">
            <input id="email" name="email" type="text" class="p-2" placeholder="email"><button onclick="storeEmail()" class="bg-red-500 p-2 text-white active:bg-red-300 active:text-black">Subscribe</button>
        </div>
        <ul id="errors">

        </ul>
    </div>
    <div>
-
    </div>
@endsection

@section('javascript')
    <script>

        storeEmail = () => {
            $('#errors').empty()
            var $form = $( this ),
                term = $("input[name='email']" ).val(),
                url = "/api/subscribe";
                console.log(term)

            var posting = $.post( url, { email: term } );

            posting.done(function( data ) {
                console.log(data)
                if(data.errors){
                    var msg = "";
                    for (var i = 0; i < data.errors.email.length; i++) {
                        msg += `<li class="text-red-500 font-bold mt-1">${data.errors.email[i]}</li>`;
                    }
                }else{
                    var msg = `<li class="text-green-500 font-bold mt-1">${data.message}</li>`;
                }
                $('#errors').append(msg);
            });
        }

    </script>
@endsection
