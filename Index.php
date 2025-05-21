<!DOCTYPE html>
<html>
<head>
  <title>Top Up Game</title>
</head>
<body>
  <h2>Top Up Mobile Legends</h2>
  <form action="process.php" method="POST">
    <label>ID Game:</label>
    <input type="text" name="game_id" required><br>

    <label>Server:</label>
    <input type="text" name="server" required><br>

    <label>Pilih Nominal:</label>
    <select name="nominal">
      <option value="ML5">5 Diamonds</option>
      <option value="ML12">12 Diamonds</option>
      <option value="ML50">50 Diamonds</option>
    </select><br>

    <input type="submit" value="Beli Sekarang">
  </form>
</body>
</html>
