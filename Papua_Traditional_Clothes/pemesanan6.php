<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pemesanan</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>
     body {
      background-color: #1aa5c4;
    }
    .container {
      max-width: 400px;
      margin-top: 100px;
      color: #1aa5c4;
      height: 300px;
    }

    .container h2 {
        color: white;
    }

    .container label {
        color: white;
    }

    
</style>
</head>

<body>
  <div class="container mt-5">
    <h2>Pemesanan</h2>
    
    <!-- Informasi Produk -->
    <div class="card">
        <head><a href="index2.php">Kembali ke Beranda</a></head>
      <div class="card-body">
        <h5 class="card-title">Pakaian adat Anak</h5>
        <p class="card-text">Produk yang anda pilih adalah produk terbaik.</p>
        <p class="card-text">Harga: 200.000.00</p>
      </div>
    </div>

    <!-- Formulir Pemesanan -->
    <form id="orderForm">
      <div class="form-group mt-3">
        <label for="nama">Nama:</label>
        <input type="text" class="form-control" id="nama" name="nama" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="alamat">Alamat Pengiriman:</label>
        <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
      </div>

      <!-- Tombol Pembayaran -->
      <a href="pembayaran.php"><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#paymentModal">
        Lanjutkan ke Pembayaran
      </button></a>
    </form>