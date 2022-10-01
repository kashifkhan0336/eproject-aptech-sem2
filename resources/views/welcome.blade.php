<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       <form action="{{url('/customer/register')}}" method="post">
           @csrf
           <label>
               <input type="text" name="username">
           </label>
           <label>
               <input type="password" name="password">
           </label>
           <label>
               <input type="text" name="firstName">
           </label>
           <label>
               <input type="text" name="lastName">
           </label>
           <label>
               <input type="email" name="email">
           </label>
           <input type="submit" value="Submit">
       </form>
    </body>
</html>
