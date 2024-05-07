<html>

<head>
    <title>Form Input Pembelian Sepatu</title>
</head>

<body>
    <center>
        <form   action="<?=     base_url('Pembelian Sepatu/cetak');      ?>"
method="post">
            <table>
                <tr>
                    <th colspan="3">
                        Form Pembelian Sepatu
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>nama</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode">
                    </td>
                </tr>
                <tr>
                    <th>merk sepatu</th>
                    <td>:</td>
                    <td>
                        <input type="text" name="nama" id="nama">
                    </td>
                </tr>
                <tr>
                    <th>no hp</th>
                    <td>:</td>
                    <td>
                        <select name="merk sepatu" id="merk sepatu">
                            <option value="">merk sepatu</option>
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Kickers">Kickers</option>
                            <option value="Eiger">Eiger</option>
                            <option value="Bucherri">Bucherri</option>
                        </select>
                    </td>
                </tr>
                <tr>
                        <td colspan="3" align="center">
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
            </table>
        </form>
    </center>
</body>

</html>