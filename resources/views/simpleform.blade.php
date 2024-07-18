<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('products.store')}}" method="post">
        @csrf
        <input type="text" name="productName" placeholder="productName" required><br><br>
        <input type="text" name="productCategory" placeholder="productCategory" required><br><br>
        <input type="number" name="productPrice" placeholder="productPrice" required><br><br>
        <input type="text" name="productColors" placeholder="productColors" required><br><br>
        <input type="text" name="productManufacturer" placeholder="productManufacturer" required><br><br>
        <input type="text" name="productShortDescription" placeholder="productShortDescription" required><br><br>
        <input type="text" name="productLongDescription" placeholder="productLongDescription" required><br><br>
        <input type="submit" value="Save">
    </form>

</body>

</html>