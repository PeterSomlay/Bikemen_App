<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="position-relative">
        <div class="d-flex justify-content-center m-4">
                <h1>DÁTUM KIIRATÁSA !</h1>
        </div>
        <div class="d-flex justify-content-center m-4">
            <h3>Ma dolgozik: NEVEK KIIRATÁSA !</h3>
        </div>
        <div class="d-flex justify-content-center">
            <ul class="list-group w-50">
                <li class="list-group-item bg-dark active display-5">A legutóbbi zárás adatai:</li>
                <li class="list-group-item d-flex justify-content-between align-item-center display-5">Készpénz:
                    <span class="badge text-success badge-pill">ÉRTÉK KIIRATÁSA ! Ft</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-item-center display-5">Kártya:
                    <span class="badge text-success badge-pill">ÉRTÉK KIIRATÁSA ! Ft</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-item-center display-5">Egyéb:
                    <span class="badge text-success badge-pill">ÉRTÉK KIIRATÁSA ! Ft</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-item-center display-5">Kivenni a kasszából:
                    <span class="badge text-success badge-pill">ÉRTÉK KIIRATÁSA ! Ft</span>
                </li>
            </ul>
        </div>
        <div class="d-flex justify-content-center m-4">
            <h3>Mai munkák: <a href="" class="text-primary text-decoration-none">ÉRTÉK KIIRATÁSA !</a></h3>
        </div>
        <div class="d-flex justify-content-center m-4">
            <h3>Alkatrészre váró munkák: <a href="" class="text-primary text-decoration-none">ÉRTÉK KIIRATÁSA !</a></h3>
        </div>
        <div class="d-flex justify-content-center m-4">
            <h3>Garanciális dolgok: <a href="" class="text-primary text-decoration-none">ÉRTÉK KIIRATÁSA !</a></h3>
        </div>
        <div class="d-flex justify-content-center m-4">
            <h3>Beszerzés: <a href="" class="text-primary text-decoration-none">ÉRTÉK KIIRATÁSA !</a></h3>
        </div>
        <div class="d-flex justify-content-center m-4">
            <h3>10 Napja elkészült kerékpárok vagy alkatrészek, amik még itt vannak: <a href="" class="text-primary text-decoration-none">ÉRTÉK KIIRATÁSA !</a></h3>
        </div>
        <div class="d-flex justify-content-center">
            <ul class="list-group w-50 mb-5 mt-3">
                <li class="list-group-item bg-dark active display-6"><a href="" class="text-decoration-none text-white">Emlékeztetők:</a></li>
                <li class="list-group-item display-6">Befizetni a bérleti díjat</li>
                <li class="list-group-item display-6">2024-10-20 Merida találkozó</li>
                <li class="list-group-item display-6">Felhívni a riasztóst</li>
                <li class="list-group-item display-6">Rendelést leadni</li>
            </ul>
        </div>
    </div>
</x-app-layout>
