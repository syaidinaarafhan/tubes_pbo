<x-app-layout>
    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('galangdana.tahap1')" :active="request()->routeIs('galangdana.tahap1')">
            {{ __('Next') }}
        </x-nav-link>
    </div>
</x-app-layout>