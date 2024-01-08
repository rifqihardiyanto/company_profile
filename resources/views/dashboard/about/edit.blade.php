@extends('dashboard.layout.index')

@section('title', 'About')

@section('container')

    <!-- Bootstrap Table with Header - Dark -->
    <!-- Slide from Top Modal -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="col-lg-4 col-md-6">
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 modal-tambah" data-bs-toggle="modal" data-bs-target="#modal-form">
                Edit @yield('title')
            </button>

            <!-- Modal -->
            <div class="modal modal-top fade" id="modal-form" tabindex="-1">
                <div class="modal-dialog">
                    <form action={{ route('about.update', $contact->id) }} class="form-about modal-content" enctype="multipart/form-data" method="POST">
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
                                        placeholder="Enter Slider" value="{{ $contact->judul }}" name="judul" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="input-group">
                                    <span class="input-group-text">Deskripsi</span>
                                    <textarea class="form-control" value="{{ $contact->deskripsi }}" aria-label="With textarea" placeholder="Deskripsi" name="deskripsi">{{ $contact->deskripsi }}</textarea>
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Deskripsi Footer</span>
                                    <textarea class="form-control" value="{{ $contact->deskripsi_footer }}" aria-label="With textarea" placeholder="Deskripsi" name="deskripsi_footer">{{ $contact->deskripsi_footer  }}</textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">No Hp</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $contact->no_hp }}" name="no_hp" />
                                </div>
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">No Hp Support</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $contact->no_support }}" name="no_support" />
                                </div>
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">No Hp Konsultasi</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $contact->no_konsultasi }}" name="no_konsultasi" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Email</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $contact->email }}" name="email" />
                                </div>
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Email Support</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $contact->email_support }}" name="email_support" />
                                </div>
                            </div>
                            <div class="row">
                                <div class="col mb-3">
                                    <label for="nameSlideTop" class="form-label">Lokasi</label>
                                    <input type="text" class="form-control"
                                        placeholder="Enter Slider" value="{{ $contact->lokasi }}" name="lokasi" />
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
                        <th>Deskripsi</th>
                        <th>Deskripsi Footer</th>
                        <th>No Hp</th>
                        <th>No Support</th>
                        <th>No Konsultasi</th>
                        <th>Email</th>
                        <th>Email Support</th>
                        <th>Lokasi</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-10">
                        <tr>
                            <td>{{ $contact->judul }}</td>
                            <td style="white-space: normal !important;">{{ $contact->deskripsi }}</td>
                            <td style="white-space: normal !important;">{{ $contact->deskripsi_footer }}</td>
                            <td>{{ $contact->no_hp }}</td>
                            <td>{{ $contact->no_support }}</td>
                            <td>{{ $contact->no_konsultasi }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->email_support }}</td>
                            <td>{{ $contact->lokasi }}</td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection

