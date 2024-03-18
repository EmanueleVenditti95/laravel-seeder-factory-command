<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')
</head>
<body>
    <main>
        @foreach ($products as $product)
            <ul>
                @foreach ($categories as $category)  
                    @if ($product->category_id == $category->id)
                        <li>{{$category->name}}</li>                    
                    @endif                  
                @endforeach
                <li>{{ $product->name }}</li>
                <li>{{ $product->description }}</li>
                <li>${{ $product->cost }}</li>    
            </ul>
        @endforeach
    </main>
</body>
</html>