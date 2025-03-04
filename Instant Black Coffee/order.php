<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Coffee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .order-container {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        .order-container h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
            margin-right: 20px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input,
        .form-group select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .total-price {
            font-weight: bold;
            margin-top: 10px;
            text-align: center;
        }
        .order-btn {
            width: 100%;
            background: orange;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
    </style>
    <script>
        function updateTotal() {
            let prices = {"Black Coffee": 4, "Vanilla Coffee": 5, "Mocha Coffee": 6, "Caramel Coffee": 5, "Hazelnut Coffee": 5, "Espresso Shot": 3};
            let selectedCoffee = document.getElementById('coffee').value;
            let quantity = parseInt(document.getElementById('quantity').value);
            let total = prices[selectedCoffee] * quantity;
            document.getElementById('total-price').innerText = "Total Price: $" + total.toFixed(2);
        }
    </script>
</head>
<body>
    <div class="order-container">
        <h2>Order Your Coffee</h2>
        <form>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="text" id="phone" placeholder="e.g., +62 812-3456-7890" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" placeholder="Enter your delivery address" required>
            </div>
            <div class="form-group">
                <label for="coffee">Select Coffee:</label>
                <select id="coffee" onchange="updateTotal()">
                    <option value="Black Coffee">Black Coffee - $4</option>
                    <option value="Vanilla Coffee">Vanilla Coffee - $5</option>
                    <option value="Mocha Coffee">Mocha Coffee - $6</option>
                    <option value="Caramel Coffee">Caramel Coffee - $5</option>
                    <option value="Hazelnut Coffee">Hazelnut Coffee - $5</option>
                    <option value="Espresso Shot">Espresso Shot - $3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" id="quantity" value="1" min="1" onchange="updateTotal()">
            </div>
            <div class="total-price" id="total-price">Total Price: $4.00</div>
            <button type="submit" class="order-btn">Place Order</button>
        </form>
    </div>
</body>
</html>
