<h1>Data Produk</h1>

<a href="/products/create">Tambah Produk</a>

@foreach($products as $product)
    <p>
        {{ $product->nama }} - Rp{{ $product->harga }}
    </p>
@endforeach