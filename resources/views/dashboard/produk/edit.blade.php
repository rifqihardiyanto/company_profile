@extends('dashboard.layout.index')

@section('title', 'Produk')

@section('container')

    <!-- Bootstrap Table with Header - Dark -->
    <!-- Slide from Top Modal -->
    <div class="col-lg-4 col-md-6">
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 modal-tambah" data-bs-toggle="modal" data-bs-target="#modal-form">
                Edit @yield('title')
            </button>

            <!-- Modal -->
            <div class="modal modal-top fade" id="modal-form" tabindex="-1">
                <div class="modal-dialog">
                    <form action={{ route('product.update', $product->id) }} class="form-Kategori modal-content" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title modal-tambah" id="modalTopTitle">Edit @yield('title')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleFormControlSelect1" class="form-label">Pilih Kategori &#42;</label>
                                <select class="form-select" id="id_kategori" name="id_kategori" required
                                    aria-label="Default select example">
                                    @foreach ($categories as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Nama @yield('title')</label>
                                    <input type="text" class="form-control" placeholder="Enter Produk" value="{{ $product->nama_produk }}"
                                        name="nama_produk" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="input-group">
                                    <span class="input-group-text">Deskripsi 1</span>
                                    <textarea class="form-control" aria-label="With textarea" placeholder="Deskripsi" name="deskripsi_1">{{ $product->deskripsi_1 }}</textarea>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Deskripsi 2</span>
                                    <textarea class="form-control" aria-label="With textarea" placeholder="Deskripsi" name="deskripsi_2">{{ $product->deskripsi_2 }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_1" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_2" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_3" />
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar_4" />
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="card">
        <h5 class="card-header">Dashboard | @yield('title')</h5>
        <div class="table-responsive text-nowrap">
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Nama @yield('title')</th>
                        <th>Kategori</th>
                        <th>Deskripsi</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                        <th>Gambar</th>
                        <th>Gambar</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-10">
                        <tr>
                            <td>{{ $product->nama_produk }}</td>
                            <td>{{ $product->category->nama_kategori }}</td>
                            <td style="white-space: normal !important;">{{ $product->deskripsi_1 }}</td>
                            <td style="white-space: normal !important;">{{ $product->deskripsi_2 }}</td>
                            <td>
                                <img src="{{ asset('uploads/' . $product->gambar_1) }}" width="100" height="100" alt="">
                            </td>
                            <td>
                                <img src="{{ asset('uploads/' . $product->gambar_2) }}" width="100" height="100" alt="">
                            </td>
                            <td>
                                <img src="{{ asset('uploads/' . $product->gambar_3) }}" width="100" height="100" alt="">
                            </td>
                            <td>
                                <img src="{{ asset('uploads/' . $product->gambar_4) }}" width="100" height="100" alt="">
                            </td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection

