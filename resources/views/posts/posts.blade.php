<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="mt-8 bg-white dark:bg-gray-800  inline-flex w-full ">
        <div class="max-w-7xl flex sm:px-6 lg:px-8 mx-auto">
            <img src="{{ asset('img/bishkek.png') }}" alt="">
            <div class="cityname mt-8 mt-3">
                <h3><b>Бишкек</b></h3>
                <p>Основан в 1878 году как селение на месте бывшей Кокандской крепости Пишпек, которое в 1926 году было переименовано во Фрунзе в память о советском партийном и военном деятеле Михаиле Фрунзе. Поскольку в киргизском языке отсутствует звук «ф» и недопустимо стечение согласных в начале слова, местными жителями это название произносилось как «Пурунзе». После распада СССР и получения Киргизией независимости встал вопрос о переименовании столицы. </p>
                <form method="POST" action="{{ route('addpost') }}">
                @csrf
                <input type="text" name="comment" id="">
                    <x-button class="ml-3">
                            Добавить отзыв
                    </x-button>
                </form>
            </div> 
        </div>
    </div>
    @can('show-posts')
    <div class="max-w-7xl sm:px-6 lg:px-8 mx-auto text-center text-xl">Все отзывы</div>
   
    <div class="bg-white dark:bg-gray-800 overflow-hidden w-full">
    @foreach ($posts as $post)
        <div class="max-w-7xl sm:px-6 lg:px-8 mx-auto">
            <p>Автор: <b>{{ $post->user->name }}</b></p>
            <p>{{ $post->comment }}</p>
        </div>
        <div class="line bg-gray-800 max-w-7xl sm:px-6 lg:px-8 h-1 mx-auto mt-2 mb-4"></div>
    @endforeach
    @endcan
    </div>
</x-app-layout>
