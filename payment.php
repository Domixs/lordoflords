<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .payment-container {
        margin: 50px auto;
        padding: 20px;
        max-width: 500px;
        background-color: #fff;
        box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
    }

    h1 {
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-top: 10px;
    }

    input {
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
    }

    button {
        margin-top: 20px;
        padding: 10px;
        border-radius: 5px;
        background-color: #0099cc;
        color: #fff;
        border: none;
        cursor: pointer;
    }

    button:hover {
        background-color: #0086b3;
    }
</style>
</head>
<body>
    <div class="payment-container">
        <h1>Payment Details</h1>
        <form method="post" action="/process-payment">
            <label for="card-number">Card Number</label>
            <input type="text" id="card-number" name="card-number" placeholder="Enter card number" required>
            <label for="expiry-date">Expiry Date</label>
            <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" required>
            <label for="cvv">CVV</label>
            <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
            <label for="amount">Amount</label>
            <input type="number" id="amount" name="amount" placeholder="Enter amount" required>
            <button type="submit">Pay Now</button>
        </form>
    </div><script>
    // Optional client-side validation using JavaScript
    const form = document.querySelector('form');
    form.addEventListener('submit', (event) => {
        const cardNumberInput = document.querySelector('#card-number');
        const expiryDateInput = document.querySelector('#expiry-date');
        const cvvInput = document.querySelector('#cvv');
        const amountInput = document.querySelector('#amount');

        if (!validateCardNumber(cardNumberInput.value)) {
            alert('Invalid card number');
            event.preventDefault();
        }

        if (!validateCardExpiry(expiryDateInput.value)) {
            alert('Invalid expiry date');
            event.preventDefault();
        }

        if (!validateCvv(cvvInput.value)) {
            alert('Invalid CVV');
            event.preventDefault();
        }

        if (!validateAmount(amountInput.value)) {
            alert('Invalid amount');
            event.preventDefault();
        }
    });

    function validateCardNumber(cardNumber) {
        // Implement
        const cardRegex = /^[0-9]{16}$/;
        return cardRegex.test(cardNumber);
    }

    function validateCardExpiry(expiryDate) {
        // Implement
        const dateRegex = /^(0[1-9]|1[0-2])\/([0-9]{2})$/;
        if (!dateRegex.test(expiryDate)) {
            return false;
        }
        const [month, year
</body>
</html>