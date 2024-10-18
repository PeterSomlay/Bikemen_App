<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="position-relative">
        <div class="d-flex justify-content-center">
        <form action="">
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon1">Átvevő</span>
                <input type="text" class="form-control" aria-label="Átvevő" aria-describedby="basic-addon1" id="recipient" />
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon2">Név</span>
                <input type="text" class="form-control" aria-label="Név" aria-describedby="basic-addon2" id="name" autocomplete="off" />
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon3">Telefonszám</span>
                <input type="tel" class="form-control" aria-label="Telefonszám" aria-describedby="basic-addon3" id="mobil" autocomplete="off"/>
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon4">E-mail</span>
                <input type="email" class="form-control" aria-label="Telefonszám" aria-describedby="basic-addon4" id="email" autocomplete="off"/>
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon5">Kerékpár Márka</span>
                <input type="text" class="form-control" aria-label="Kerékpár Márka" aria-describedby="basic-addon5" id="mark"/>
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon6">Kerékpár Típusa</span>
                <input type="text" class="form-control" aria-label="Kerékpár Típusa" aria-describedby="basic-addon6" id="type"/>
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon7">Kerékpár Színe</span>
                <input type="text" class="form-control" aria-label="Kerékpár Színe" aria-describedby="basic-addon7" id="color"/>
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon8">Ismertető Jegy</span>
                <input type="text" class="form-control" aria-label="Ismertető Jegy" aria-describedby="basic-addon8" id="description"/>
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon9">Behozatal Dátuma</span>
                <input type="date" class="form-control" aria-label="Behozatal Dátuma" aria-describedby="basic-addon9" id="in_date"/>
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon10">Vállalás Dátuma</span>
                <input type="date" class="form-control" aria-label="Vállalás Dátuma" aria-describedby="basic-addon10" id="out_date"/>
            </div>
            <div class="input-group input-group-lg m-4 w-100">
                <span class="input-group-text" id="basic-addon11">Hibák leírása</span>
                <textarea name="errors" class="form-control" rows="20" cols="70" aria-label="Hibák leírása" aria-describedby="basic-addon11" id="errors"></textarea>
            </div>
        </form>
        </div>
    </div>
</x-app-layout>
