<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>就職者さんデータ入力フォーム</title>
        <link href="/css/app.css" rel="stylesheet">
    </head>
    <body class="input">
        <x-header>
            <x-slot name="logo">
                未来のかたち
            </x-slot>
            <x-slot name="title">
                就職者さんデータ入力フォーム
            </x-slot>
            <x-slot name="inform">
                記入がむずかしいところは、空白のままでOKです。
            </x-slot>
        </x-header>
        <main class="main">
            <form action="/input" method="post" class="main__form form">
                @csrf
                <div class="form__input">
                    <h3 class="form__input__title">利用者さんについて</h3>
                    @if (count($errors) > 0)
                        <p>入力項目を再度確認してください。</p>
                    @endif
                    <div class="form__input__box">
                        <label>氏名（イニシャル）</label>
                        <input type="text" name="name" >
                        @if ($errors->has('name'))
                            <span class="error__name">{{$errors->first('name')}}</span>
                        @endif
                    </div>
                </div>
                <button type='submit'>OK</button>
            </form>
        </main>
    </body>
</html>
