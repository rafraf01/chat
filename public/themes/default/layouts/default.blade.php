<!DOCTYPE html>
<html>
    <head>
        <title>{!! Theme::get('title') !!}</title>
        <meta charset="utf-8">
        <meta name="keywords" content="{!! Theme::get('keywords') !!}">
        <meta name="description" content="{!! Theme::get('description') !!}">
        <meta name="csrf_token" content="{{ csrf_token() }}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
        {!! Theme::asset()->styles() !!}
        {!! Theme::asset()->scripts() !!}
    </head>
    <body>
<!--        {!! Theme::partial('header') !!}-->

            {!! Theme::content() !!}

<!--        {!! Theme::partial('footer') !!}-->

        {!! Theme::asset()->container('footer')->scripts() !!}
    </body>
</html>
