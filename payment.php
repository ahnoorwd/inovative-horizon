<?php
$conn = new mysqli("localhost", "root", "", "education_platform");
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['student_name'];
    $amount = $_POST['amount'];
    $method = $_POST['payment_method'];
    $transaction = $_POST['transaction_id'];

    $stmt = $conn->prepare("INSERT INTO payments (student_name, amount, payment_method, transaction_id) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sdss", $name, $amount, $method, $transaction);

    if ($stmt->execute()) {
        echo "<script>alert('Payment recorded successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Payment Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h4 class="card-title text-center mb-4">Pay Your Bill</h4>
        <form method="POST" action="">
            <div class="mb-3">
                <label class="form-label">Student Name</label>
                <input type="text" name="student_name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Amount</label>
                <input type="number" step="0.01" name="amount" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Payment Method</label>
                <select name="payment_method" class="form-select" required>
                    <option value="">Select Method</option>
                    <option value="Credit Card">Credit Card</option>
                    <option value="Bank Transfer">Bank Transfer</option>
                    <option value="PayPal">PayPal</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Transaction ID</label>
                <input type="text" name="transaction_id" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Submit Payment</button>
        </form>
    </div>
</div>

</body>
</html>
