<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order Details</title>
<style>
    body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}

.container {
  max-width: 800px;
  margin: 20px auto;
  padding: 20px;
  background-color: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

h1 {
  text-align: center;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

table, th, td {
  border: 1px solid #ddd;
}

th, td {
  padding: 10px;
  text-align: left;
}

thead {
  background-color: #f2f2f2;
}

tfoot {
  font-weight: bold;
}

.text-right {
  text-align: right;
}
</style>
</head>
<body>
  <div class="container">
    <h1>Order Details</h1>
    <table>
      <thead>
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Unit Price</th>
          <th>Total</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Product A</td>
          <td>3</td>
          <td>$20</td>
          <td>$60</td>
        </tr>
        <tr>
          <td>Product B</td>
          <td>2</td>
          <td>$15</td>
          <td>$30</td>
        </tr>
        <!-- Add more rows for other products -->
      </tbody>
      <tfoot>
        <tr>
          <td colspan="3" class="text-right">Subtotal:</td>
          <td>$90</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right">Tax (7%):</td>
          <td>$6.30</td>
        </tr>
        <tr>
          <td colspan="3" class="text-right">Total:</td>
          <td>$96.30</td>
        </tr>
      </tfoot>
    </table>
  </div>
</body>
</html>
