@extends('dashboard.layout.index')

@section('title', 'Slider')

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
                    <form action={{ route('slider.update', $slider->id) }} class="form-slider modal-content" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title modal-tambah" id="modalTopTitle">Edit @yield('title')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Judul @yield('title')</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $slider->judul }}" name="judul" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Sub Judul @yield('title')</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $slider->sub_judul }}" name="sub_judul" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="input-group">
                                    <span class="input-group-text">Deskripsi</span>
                                    <textarea class="form-control" value="{{ $slider->deskripsi }}" aria-label="With textarea" placeholder="Deskripsi" name="deskripsi">{{ $slider->deskripsi }}</textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Gambar</label>
                                    <input class="form-control" type="file" id="formFile" name="gambar" />
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
                        <th>Judul @yield('title')</th>
                        <th>Sub Judul @yield('title')</th>
                        <th>Deskripsi</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-10">
                        <tr>
                            <td>{{ $slider->judul }}</td>
                            <td>{{ $slider->sub_judul }}</td>
                            <td style="white-space: normal !important;">{{ $slider->deskripsi }}</td>
                            <td>
                                <img src="{{ asset('uploads/' . $slider->gambar) }}" width="100" height="100" alt="">
                            </td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection

