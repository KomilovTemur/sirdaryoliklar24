@extends('layouts.admin')
@section('title')
    ADS
@endsection
@section('content')
    <div class="col-12 col-md-6 col-lg-12">
        @if (session('success'))
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">
                        <span>×</span>
                    </button>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                <h3>ADS Table</h3>
                @empty($ads)
                <a href="{{ route('admin.ads.create') }}" class="btn btn-primary ml-auto">Create Ads</a>
                @endempty
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Rasm (Top)</th>
                                <th>Rasm (Sidebar)</th>
                                <th>Action</th>
                            </tr>
                                <tr>
                                    <td>1</td>
                                    <td><img src="/site/images/ads/{{ $ads->img_top ?? 'No photo' }}" alt="Top" width="90px" height="60px"></td>
                                    <td><img src="/site/images/ads/{{ $ads->img_sidebar ?? 'No photo' }}" alt="Sidebar" width="70px" height="60px"></td>
                                    <td>
                                        <a href="{{ route('admin.ads.show', $ads->id  ?? 'No Id' )}}" class="btn btn-warning">Show</a>
                                    </td>
                                </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- Pagination --}}

            <div class="card-footer text-right">
                <nav class="d-inline-block">
                    <ul class="pagination mb-0">
                        {{-- {{ $categories->links() }} --}}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
