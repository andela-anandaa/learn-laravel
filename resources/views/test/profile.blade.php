@extends('temp')

@section('content')

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
    <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">

    	<h4>Profile</h4>
    	<p>Profile for: {{ $name }}</p>
    	<p><a href="{{ route('profile', 'wanjala')}}">James</a>

    </div>

    </div>
</main>

@endsection