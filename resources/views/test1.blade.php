@extends('layouts.layout')
@section('style')
    <style>
    </style>
@endsection

@section('content')
    <div class="shadow p-5 mt-5 lg:w-1/2">
        <p class="text-xl font-bold underline ">TUGAS 1</p>
        <p class="leading-normal text-justify indent-[20px]">Indonesia memiliki wilayah administratif yang dibagi mulai dari provinsi, kota/kabupaten,
        kecamatan dan kelurahan.
        Buatlah 4 level dropdown mulai dari provinsi, kota/kabupaten, kecamatan, dan
        kelurahan menggunakan html, css dan javascript sederhana. Setiap dropdown harus
        melakukan pengambilan data yang ada pada database dengan menggunakan Laravel.</p>
            </div>
    <div class="shadow p-5 mt-5 lg:w-1/2">
        <div class="provinces">
            <label for="province" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Province</label>
            <select onchange="province()" id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                @foreach ($data as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="regencies">
            <label for="regency" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select regencie</label>
            <select  onchange="regency()" id="regencie" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </select>
        </div>
        <div class="districts">
            <label for="district" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select district</label>
            <select  onchange="district()" id="district" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </select>
        </div>
        <div class="villanges">
            <label for="villange" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select villange</label>
            <select id="villange" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            </select>
        </div>
    </div>
@endsection

@section('javascript')
    <script>
        province = () => {
            $('#regencie').empty()
            $('#district').empty()
            $('#villange').empty()
            var province_id = $("#province").val()
            var jqxhr = $.ajax( `http://localhost:8000/api/regencies/${province_id}` )
            .done(function(data) {
                var options = "<option>Select Regency</option>";
                for (var i = 0; i < data.data.length; i++) {
                    options += `<option value=${data.data[i].id}>${data.data[i].name}</option>`;//interpolation
                }
                $('#regencie').append(options);
            })
            .fail(function() {
                alert( "error" );
            })
        }

        regency = () => {
            $('#district').empty()
            $('#villange').empty()
            var regencie_id = $("#regencie").val()
            var jqxhr = $.ajax( `http://localhost:8000/api/districts/${regencie_id}` )
            .done(function(data) {
                var options = "<option>Select District</option>";
                for (var i = 0; i < data.data.length; i++) {
                    options += `<option value=${data.data[i].id}>${data.data[i].name}</option>`;//interpolation
                }
                $('#district').append(options);
            })
            .fail(function() {
                alert( "error" );
            })
        }

        district = () => {
            $('#villange').empty()
            var district_id = $("#district").val()
            var jqxhr = $.ajax( `http://localhost:8000/api/villages/${district_id}` )
            .done(function(data) {
                var options = "<option>Select District</option>";
                for (var i = 0; i < data.data.length; i++) {
                    options += `<option value=${data.data[i].id}>${data.data[i].name}</option>`;//interpolation
                }
                $('#villange').append(options);
            })
            .fail(function() {
                alert( "error" );
            })
        }
    </script>
@endsection
