<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <form method="post" action="{{ route('product.store') }}">
    @csrf
    @method('post')
        <input type="text" name="name" placeholder="Nameproduct">
        <input type="text" name="qty" placeholder="qty">
        <input type="text" name="price" placeholder="price">
        <input type="text" name="dec" placeholder="decription">
        <input type="submit" name="sub">
</form>
</body>
</html>