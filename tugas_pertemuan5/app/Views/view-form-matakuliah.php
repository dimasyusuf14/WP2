<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form method="post" action="<?= base_url('form/cetak/data') ?>">
            <table>
                <tr>
                    <th colspan="3">
                        Form Input Data Mata Kuliah
                    </th>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <th>Kode MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="kode" id="kode" value="<?= old('kode')?>">
                    </td>
                </tr>
                <tr>
                    <th>Nama MTK</th>
                    <th>:</th>
                    <td>
                        <input type="text" name="nama" id="nama" value="<?= old('nama')?>">
                    </td>
                    
                </tr>
                <tr>
                    <th>SKS</th>
                    <th>:</th>
                    <td>
                        <select name="sks" id="sks">
                            <option value="">Pilih SKS</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" align="center">
                        <input type="submit" value="Submit">
                    </td>
                </tr>
                <div><?= \Config\Services::validation()->listErrors();?></div>
            </table>
           
        </form>
    </center>
</body>

</html>