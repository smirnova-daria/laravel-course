@extends('layouts.main')

@section('title')
    @parent Админка
@endsection

@section('menu')
    @include('admin.menu')
@endsection

@section('content')

        <div class="mt-6">
            <h1 class="text-2xl  text-center font-bold">Добавление новостной статьи</h1>
            <div class="mt-6">
                <form action="#" method="POST">
                    <div class="shadow-md sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white px-4 py-5 sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-3">
                                    <label for="news-title" class="block text-sm font-medium text-gray-700">Заголовок
                                        статьи</label>
                                    <div class="mt-1 flex rounded-md shadow-sm">
                                        <input type="text" name="news-title" id="news-title"
                                               class="block w-full flex-1 rounded-none rounded-r-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                               placeholder="Заголовок">
                                    </div>
                                </div>


                                <div class="col-span-6">
                                    <label for="news-text" class="block text-sm font-medium text-gray-700">Текст
                                        новости</label>
                                    <div class="mt-1">
                                        <textarea id="news-text" name="news-text" rows="10"
                                                  class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                                    </div>
                                    <p class="mt-2 text-sm text-gray-500">Добавьте текст новостной статьи</p>
                                </div>

                                <div class="col-span-2">
                                    <label for="news-category"
                                           class="block text-sm font-medium text-gray-700">Категория</label>
                                    <select id="news-category" name="news-category" autocomplete="country-name"
                                            class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                        <option>Спорт</option>
                                        <option>Политика</option>
                                        <option>Экономика</option>
                                    </select>
                                </div>
                                <div class="bg-gray-50 px-4 py-3 text-right sm:px-6 col-span-6">
                                    <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Save</button>
                                </div>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
