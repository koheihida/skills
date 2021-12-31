<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            スキル
        </h2>
    </x-slot>

    <div id="app">
    @if(session('status'))
        <flash-message-component session="{{ session('status') }}"></flash-message-component>
    @endif

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    {{ $skill }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
