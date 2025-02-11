<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ToDo</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>

                .btn.btn-primary.btn-lg {
                    font-size: 20px; 
                    padding: 15px 30px; 
                    border-radius: 5px; 
                    background-color: #007bff; 
                    color: white; 
                    border: none; 
                    text-align: center; 
                    display: inline-block; 
                    cursor: pointer;
                    margin-top:400px;
                    margin-left:450px;
                    width: 50%;
                
                }
        </style>
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
    <a href="{{ route('tasks.index') }}" type="submit" class="btn btn-primary btn-lg">Go to Tasks</a>
    </body>
</html>
