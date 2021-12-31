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
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table-auto">
                            <thead>
                              <tr>
                                <th class="px-4 py-2">ID</th>
                                <th class="px-4 py-2">スキル名</th>
                                <th class="px-4 py-2">ステータス</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach($skills as $skill)
                                    <tr>
                                    <td class="border px-4 py-2">{{ $skill->id }}</td>
                                    <td class="border px-4 py-2">{{ $skill->skill_name}}</td>
                                    <td class="border px-4 py-2">{{ $skill->skill_status}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
