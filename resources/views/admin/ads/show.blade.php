@extends('layouts.admin')
@section('title')
    Show ADS
@endsection

@section('css')
    <!-- Data Tables CSS -->
    <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
    <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
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
                <h3> Id  -> {{ $ads->id ?? 'Xatolik' }}</h3>
                <a href="{{ url()->previous() }}" class="btn btn-info ml-auto">Back</a>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped" id="table-1">
                        <tr>
                            <th>Sarlavha (Top)</th> <td>{{ $ads->title_top ?? 'Xatolik'}}</td>
                        </tr>
                        <tr>
                            <th>Rasm (Top)</th> <td><img src="/site/images/ads/{{ $ads->img_top ?? 'Xatolik' }}" alt="Top" width="90px" height="60px"></td>
                        </tr>
                        <tr>
                            <th>Havola (Top)</th> <td>{{ $ads->url_top ?? 'Xatolik'}}</td>
                        </tr>
                        {{-- Sidebar --}}
                        <tr>
                            <th>Sarlavha (Sidebar)</th> <td>{{ $ads->title_sidebar ?? 'Xatolik'}}</td>
                        </tr>
                        <tr>
                            <th>Rasm (Sidebar)</th> <td><img src="/site/images/ads/{{ $ads->img_sidebar ?? 'Xatolik'}}" alt="Top" width="90px" height="60px"></td>
                        </tr>
                        <tr>
                            <th>Havola (Sidebar)</th> <td>{{ $ads->url_sidebar ?? 'Xatolik'}}</td>
                        </tr>
                    </table>
                </div>
            </div>

       
        </div>
    </div>
@endsection