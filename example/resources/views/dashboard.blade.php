<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-nav-bar>
        
    </x-nav-bar>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
        @foreach ($campaigns as $campaign)
                @if($campaign->fotoGalangDana)
                    <img src="{{ asset('/Kampanye/' . $campaign->fotoGalangDana) }}" alt="{{ $campaign->judulKampanye }}">
                @endif
        @endforeach
    <x-danger-button>
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
            <x-nav-link :href="route('galangdana.page')" :active="request()->routeIs('galangdana.page')">
                {{ __('GalangDana') }}
            </x-nav-link>
        </div>
    </x-danger-button>
</x-app-layout>
