@extends('layouts.default')

@section('title', 'お問い合わせ - 完了 -')

@section('content')

    <div class="container w-1/2 my-10 mx-auto">

        <h1 class="text-center text-4xl font-extrabold pb-10">お問い合わせありがとうございました。</h1>

        <div class="border-b-2 mb-10"></div>

        <div class="text-center">
            <button class="shadow-lg px-6 py-4 bg-blue-400 text-lg text-white font-semibold rounded  hover:bg-blue-500 hover:shadow-sm hover:translate-y-0.5 transform transition">
                <a href="/contact">トップへ戻る</a>
            </button>
        </div>
    </div>


@endsection

