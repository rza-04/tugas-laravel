<h1>Tambah Produk</h1>

<form action="/products" method="POST">
    @csrf

    <input type="text" name="nama" placeholder="Nama Produk">

    <input type="number" name="harga" placeholder="Harga">

    <button type="submit">Simpan</button>
</form>