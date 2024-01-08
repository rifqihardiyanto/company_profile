@extends('dashboard.layout.index')

@section('title', 'Logo')

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
                    <form action={{ route('logo.update', $logo->id) }} class="form-logo modal-content" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="modal-header">
                            <h5 class="modal-title modal-tambah" id="modalTopTitle">Edit @yield('title')</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Logo Header</label>
                                    <input class="form-control" type="file" id="formFile" name="logo_header" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Logo Header Mobile</label>
                                    <input class="form-control" type="file" id="formFile" name="logo_header_mobile" />
                                </div>
                            </div>
                            <div class="row g-2">
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Logo Footer</label>
                                    <input class="form-control" type="file" id="formFile" name="logo_footer" />
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
                        <th>Logo Header</th>
                        <th>Logo Header Mobile</th>
                        <th>Logo Footer</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-10">
                        <tr>
                            <td>
                                <img src="{{ asset('uploads/' . $logo->logo_header) }}" width="100" height="100" alt="">
                            </td>
                            <td>
                                <img src="{{ asset('uploads/' . $logo->logo_header_mobile) }}" width="100" height="100" alt="">
                            </td>
                            <td>
                                <img src="{{ asset('uploads/' . $logo->logo_footer) }}" width="100" height="100" alt="">
                            </td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
    <!--/ Bootstrap Table with Header Dark -->

@endsection

