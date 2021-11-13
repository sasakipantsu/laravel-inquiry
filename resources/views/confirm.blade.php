@extends('layouts.default')

@section('title', 'お問い合わせ - 確認 -')

@section('content')

    <div class="container w-1/2 my-10 mx-auto">

        <h1 class="text-center text-4xl font-extrabold pb-10">お問い合わせ確認</h1>

        <div class="border-b-2 mb-10"></div>

        <form action="/contact/create" method="POST">
            @csrf
            <div class="flex justify-between mb-10">
                    <p class="p-2 text-l font-bold">氏名</p>
                <div class="w-3/5">
                    <p class="w-full p-2">{{ $items['name'] }}</p>
                </div>
                <input type="hidden" name="name" value="{{ $items['name'] }}">
            </div>

            <div class="flex justify-between mb-10">
                <p class="p-2 text-l font-bold">メールアドレス</p>
                <div class="w-3/5">
                    <p class="w-full p-2">{{ $items['email'] }}</p>
                </div>
                <input type="hidden" name="email" value="{{ $items['email'] }}">
            </div>

            <div class="flex justify-between mb-10">
                <p class="p-2 text-l font-bold">お問い合わせ内容</p>
                <div class="w-3/5">
                    <p class="w-full p-2">{{ $items['contents'] }}</p>
                </div>
                <input type="hidden" name="contents" value="{{ $items['contents'] }}">
            </div>

            <div class="text-center">
                <button name="back" type="submit" class="shadow-lg px-6 py-4 bg-gray-400 text-lg text-white font-semibold rounded  hover:bg-gray-500 hover:shadow-sm hover:translate-y-0.5 transform transition" value="true">入力画面へ戻る</button>

                <button type="submit" class="shadow-lg px-6 py-4 bg-blue-400 text-lg text-white font-semibold rounded  hover:bg-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition">確認画面へ</button>
            </div>
    </div>

    </form>

@endsection

