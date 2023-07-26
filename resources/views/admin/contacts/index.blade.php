@extends('layouts.admin')

@section('title')
    Contacts
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
                <h3>Kelib tushgan Savollar</h3>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered table-md">
                        <tbody>
                            <tr>
                                <th>#</th>
                                <th>Ismi</th>
                                <th>Pochtasi</th>
                                <th>Raqami</th>
                                <th>Mavzu</th>
                                <th>Matn</th>
                                <th>Boshqarish</th>
                            </tr>

                            @foreach ($users as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->topic }}</td>
                                    <td>{{ $user->text }}</td>
                                    <td>
                                        <form style="display: inline" action="{{ route('admin.addContacts.destroy', $user->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are You Delete?')">Delete</button>
                                        </form>
                                       
                                    </td>
                                </tr>
                            @endforeach

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
