@extends('layouts.default')

@section('title', 'お問い合わせ')

@section('content')

    <div class="container w-1/2 my-10 mx-auto">

            <h1 class="text-center text-4xl font-extrabold pb-10">お問い合わせ</h1>

        <div class="border-b-2 mb-10"></div>

        <form action="/contact/confirm" method="POST">
            @csrf
            <div class="flex justify-between">
                <p class="p-2 text-l font-bold">氏名<span class="ml-6 p-1 rounded-md bg-red-500 text-white">必須</span></p>
                <div class="w-3/5">
                    <input type="text" name="name" class="w-full p-2 border-solid border-2 border-gray-400 rounded-md" value="{{ old('name') }}">
                </div>
            </div>
            <div class="mb-10">
                @if ($errors->has('name'))
                <p class="p-2 bg-red-200 rounded-md">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <div class="flex justify-between">
                <p class="p-2 text-l font-bold">メールアドレス<span class="ml-6 p-1 rounded-md bg-red-500 text-white">必須</span></p>
                <div class="w-3/5">
                    <input type="email" name="email" class="w-full p-2 border-solid border-2 border-gray-400 rounded-md" value="{{ old('email') }}">
                </div>
            </div>
            <div class="mb-10">
                @if ($errors->has('email'))
                <p class="p-2 bg-red-200 rounded-md">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <div class="flex justify-between">
                <p class="p-2 text-l font-bold">お問い合わせ内容<span class="ml-6 p-1 rounded-md bg-red-500 text-white">必須</span></p>
                <div class="w-3/5">
                    <textarea type="texterea" name="contents" rows="7" class="w-full p-2 border-solid border-2 border-gray-400 rounded-md">{{ old('contents') }}</textarea>
                </div>
            </div>
            <div class="mb-10">
                @if ($errors->has('contents'))
                <p class="p-2 bg-red-200 rounded-md">{{ $errors->first('contents') }}</p>
                @endif
            </div>

            <div class="text-center">
                <button type="submit" class="shadow-lg px-6 py-4 bg-blue-400 text-lg text-white font-semibold rounded  hover:bg-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition">確認画面へ</button>
            </div>
        </form>
    </div>

@endsection

