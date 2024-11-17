@extends('layouts.app')

@section('title')
    {{ $page->title }}
@endsection

@section('content')
<<<<<<< HEAD
    <x-admin-edit title="Page" :object="$page" />
    {!! breadcrumbs([$page->title => $page->url]) !!}
    <h1>{{ $page->title }}</h1>
    <div class="mb-4">
        <div><strong>Created:</strong> {!! format_date($page->created_at) !!}</div>
        <div><strong>Last updated:</strong> {!! format_date($page->updated_at) !!}</div>
    </div>
=======
{!! breadcrumbs([$page->title => $page->url]) !!}
<h1>{{ $page->title }}</h1>
<div class="mb-4">
    <div><strong>Created:</strong> {!! format_date($page->created_at) !!}</div>
    <div><strong>Last updated:</strong> {!! format_date($page->updated_at) !!}</div>
</div>

<div class="site-page-content parsed-text">
    {!! $page->parsed_text !!}
</div>

@if($page->can_comment)
    @comments(['model' => $page,
            'perPage' => 5
        ])
@endif
>>>>>>> 40004c366c26637c703cd497a00681348f4783a9

    <div class="site-page-content parsed-text">
        {!! $page->parsed_text !!}
    </div>

    @if ($page->can_comment)
        <div class="container">
            @comments([
                'model' => $page,
                'perPage' => 5,
                'allow_dislikes' => $page->allow_dislikes,
            ])
        </div>
    @endif
@endsection
