<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            スキル
        </h2>
    </x-slot>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 flex justify-center">

                        <form class="w-full max-w-sm" action="/skill/update" method="POST">
                            @csrf
                            @method('PATCH')
                            <input value="{{ $skill->id }}" required name="id" type="hidden">
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    ID
                                    </label>
                                </div>
                                <div class="md:w-2/3">
                                    {{ $skill->id }}
                                </div>
                            </div>
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-full-name">
                                    スキル名
                                    </label>
                                </div>
                                <div class="md:w-2/3">
                                    <input value="{{ $skill->skill_name }}" required name="skill_name" class=" appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500"  placeholder="">
                                </div>
                            </div>
                            <div class="md:flex md:items-center mb-6">
                                <div class="md:w-1/3">
                                    <label class="block text-gray-500 font-bold md:text-left mb-1 md:mb-0 pr-4" for="inline-password">
                                    ステータス
                                    </label>
                                </div>
                                <div class="md:w-2/3">
                                    <select  name="skill_status" class=" appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-password">
                                        @foreach (\App\Models\skill::SKILL_STATUS_OBJECT as $key => $skillName)
                                            <option value="{{ $key }}" @if($key === $skill->skill_status) selected @endif>{{ $skillName }}</option>
                                        @endforeach
                                     </select>
                                </div>
                            </div>
                            <div class="md:flex md:items-center">
                                <div class="md:w-2/3">
                                    <button onclick="location.href='/skill'" class="shadow bg-yellow-500 hover:bg-yellow-200 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="button">
                                    戻る
                                    </button>
                                    <button type="submit" class="shadow bg-blue-500 hover:bg-blue-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" >
                                        更新
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
