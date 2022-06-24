<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 h-screen bg-cover" style="background-image: url({{ asset('images/global-jet_flickr_gin_and_tonic_featured.jpg') }})">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="text-6xl">Welcome to the Gindex!</h1>
                    <!-- Creative Commons photo courtesy of Flickr user Global Jet -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
