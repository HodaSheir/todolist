<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Todo list</title>
        <link href="https://fonts.googleapis.com/css2?family=Fresca&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" media="all">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}" media="all">
        
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.standalone.min.css'>


        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="http://code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
        <script src="https://code.jquery.com/jquery-migrate-3.0.0.min.js"></script>
        <script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script>
        <script src='https://stackpath.bootstrapcdn.com/bootlint/1.1.0/bootlint.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js'></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </head>
    <body >
        <main>
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 order-xl-1 order-sm-1 col-md-12 order-md-2">
                        @include('components.index-tasks')
                    </div>
                    <div class="order-xl-2 order-sm-2 col-xl-6 col-md-12 order-md-1">
                       
                        @include('components.create-task')
                        @include('components.edit-task')
                    </div>
                    <div class="col-xl-3 order-xl-3 order-sm-3 col-md-12 order-md-3">
                        @include('components.completed-tasks')
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
