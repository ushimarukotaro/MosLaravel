<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-600 leading-tight">
            {{ __('修理依頼登録画面') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <p>{{ Auth::user()->name }}店でログイン中</p>
                </div>
            </div>
        </div>
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <ul>
                        <li>{{ Auth::user()->email; }}</li>
                        <li>{{ Auth::user()->shop_number; }}</li>
                    </ul>
                </div>
            </div>
        </div>

        
    </div>
</x-app-layout>
