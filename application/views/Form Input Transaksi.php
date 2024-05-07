<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form Input Transaksi</title>
</head>
<body>
  <h1>Form Input Transaksi</h1>
  <form action="proses_transaksi.php" method="POST">
    <label for="nama_pembeli">Nama Pembeli:</label><br>
    <input type="text" id="nama_pembeli" name="nama_pembeli" required><br><br>

    <label for="no_hp">Nomor HP:</label><br>
    <input type="text" id="no_hp" name="no_hp" required><br><br>

    <label for="merk_sepatu">Merk Sepatu:</label><br>
    <select id="merk_sepatu" name="merk_sepatu">
      <option value="Nike">Nike - Rp375,000</option>
      <option value="Adidas">Adidas - Rp300,000</option>
      <option value="Kickers">Kickers - Rp250,000</option>
      <option value="Eiger">Eiger - Rp275,000</option>
      <option value="Bucherri">Bucherri - Rp400,000</option>
    </select><br><br>

    <label for="ukuran_sepatu">Ukuran Sepatu:</label><br>
    <select id="ukuran_sepatu" name="ukuran_sepatu">
      <option value="32">32</option>
      <option value="33">33</option>
      <option value="34">34</option>
      <option value="35">35</option>
      <option value="36">36</option>
      <option value="37">37</option>
      <option value="38">38</option>
      <option value="39">39</option>
      <option value="40">40</option>
      <option value="41">41</option>
      <option value="42">42</option>
      <option value="43">43</option>
      <option value="44">44</option>
    </select><br><br>

    <input type="submit" value="Submit">
  </form>
</body>
</html>