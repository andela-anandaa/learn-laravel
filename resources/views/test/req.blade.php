@extends('temp')

@section('content')

<main class="mdl-layout__content mdl-color--grey-100">
    <div class="mdl-grid demo-content">
    <div class="demo-graphs mdl-shadow--2dp mdl-color--white mdl-cell mdl-cell--8-col">

        <h4>Working with Requests</h4>
        <?php
        echo Form::open(['url' => 'req/post']);

        echo Form::label('username', 'Username', ['class' => 'awesome']);
        echo Form::text('username');

        echo Form::label('email', 'Email');
        echo Form::email('email');
        
        echo Form::select('gender', ['M' => 'Male', 'F' => 'Female']);

        echo Form::submit('Sign Up', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-button--colored']);

        echo Form::close();

        ?>

    </div>

    </div>
</main>

@endsection