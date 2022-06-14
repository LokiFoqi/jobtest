<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <!-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div> -->
    <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden inline-flex w-full ">
        <div class="max-w-7xl flex sm:px-6 lg:px-8 mx-auto">
            <img src="{{ asset('img/bishkek.png') }}" alt="">
            <div class="cityname mt-8 mt-3">
                <h3><b>Бишкек</b></h3>
                <p>Основан в 1878 году как селение на месте бывшей Кокандской крепости Пишпек, которое в 1926 году было переименовано во Фрунзе в память о советском партийном и военном деятеле Михаиле Фрунзе. Поскольку в киргизском языке отсутствует звук «ф» и недопустимо стечение согласных в начале слова, местными жителями это название произносилось как «Пурунзе». После распада СССР и получения Киргизией независимости встал вопрос о переименовании столицы. </p>
                <a href="{{ route('posts') }}"><x-button class="mt-6">Добавить отзыв    </x-button></a>
            </div> 
        </div>
    </div>
    
</x-app-layout>
