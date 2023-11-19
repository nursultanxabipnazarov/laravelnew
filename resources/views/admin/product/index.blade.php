<!-- resources/views/products/index.blade.php -->

<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahsulotlar Ro'yxati</title>
</head>
<body>

<h1>Mahsulotlar Ro'yxati</h1>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Foydalanuvchi</th>
            <th>Kategoriya</th>
            <th>Nomi</th>
            <th>Narxi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->user->name }}</td>
                <td>{{ $product->category->name }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }} so'm</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>
