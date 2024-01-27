<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
     body {
      background-color: #1aa5c4;
    }

    .total {
        color: white;
    }
    .container {
      max-width: 400px;
      margin-top: 100px;
      color: #1aa5c4;
      height: 300px;
    }

    #paymentForm {
        color: white;
    }

    .container label {
        color: white;
    }

    
</style>
</head>
<body>

    <h2 class="total">Total Pembayaran: $100</h2>
    
    <form id="paymentForm">
        <label for="cardNumber">Nomor Kartu Kredit:</label>
        <input type="text" id="cardNumber" placeholder="1234 5678 9012 3456">
        
        <button type="button" onclick="processPayment()">Proses Pembayaran</button>
    </form>

    <script>
        function processPayment() {
            // Simulasi validasi input
            var cardNumber = document.getElementById('cardNumber').value;
            var expiryDate = document.getElementById('expiryDate').value;
            var cvv = document.getElementById('cvv').value;

            if (cardNumber && expiryDate && cvv) {
                // Simulasi permintaan pembayaran berhasil
                alert('Pembayaran berhasil!');
            } else {
                alert('Mohon isi semua informasi pembayaran.');
            }
        }
    </script>

</body>
</html>
