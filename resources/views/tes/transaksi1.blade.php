<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @foreach ($transaksi as $tes)
    {{ $tes->status }}
    <!-- @foreach($tes->product as $h)
    {{$h->nama_product}} -->
    {{$tes->product->count()}}
    <!-- @endforeach -->
    @endforeach
</body>

</html>