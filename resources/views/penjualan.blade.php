<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nota Penjualan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            text-align: left; 
        }

        .nota {
            border: 3px solid black;
            padding: 5px;
            width: 400px;
            margin: 1px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .item {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
            width: 100%;
        }

        .total {
            font-weight: bold;
            color: green;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <h1>Nota Penjualan</h1>
    <div class="nota">
        <div class="item">
            <span>Produk 1</span>
            <span>Rp 150.000</span>
        </div>
        <div class="item">
            <span>Produk 2</span>
            <span>Rp 200.000</span>
        </div>
        <div class="item">
            <span>Produk 3</span>
            <span>Rp 300.000</span>
        </div>
        <hr>
        <div class="total">
            <span>Total:</span>
            <span>Rp 650.000</span>
        </div>
    </div>
</body>
</html>
