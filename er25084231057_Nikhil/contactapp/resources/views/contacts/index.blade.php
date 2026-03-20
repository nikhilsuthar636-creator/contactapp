@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <!-- 🔷 Top Bar -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold text-dark">📇 Contacts</h2>

        <a href="{{ route('contacts.create') }}" class="btn btn-success px-4 shadow">
            ➕ New
        </a>
    </div>

    <!-- ✅ Success Alert -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show shadow-sm">
            {{ session('success') }}
            <button class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- 📦 Card -->
    <div class="card border-0 shadow-lg rounded-4">

        <!-- 🔳 Card Header -->
        <div class="card-header text-white fw-bold"
             style="background: linear-gradient(45deg, #4e73df, #1cc88a);">
            📋 Contact List
        </div>

        <div class="card-body p-0">

            <table class="table table-hover align-middle mb-0 text-center">

                <thead class="bg-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th width="180">Actions</th>
                    </tr>
                </thead>

                <tbody>
                @forelse($contacts as $c)
                    <tr>

                        <td class="fw-bold">{{ $c->id }}</td>

                        <td>
                            <div class="fw-semibold">{{ $c->name }}</div>
                        </td>

                        <td>
                            <span class="badge bg-info text-dark px-3 py-2">
                                {{ $c->email }}
                            </span>
                        </td>

                        <td>{{ $c->phone }}</td>

                        <td>
                            <!-- ✏️ Edit -->
                            <a href="{{ route('contacts.edit',$c->id) }}"
                               class="btn btn-sm btn-warning me-1 shadow-sm">
                                ✏️
                            </a>

                            <!-- ❌ Delete -->
                            <form action="{{ route('contacts.delete',$c->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')

                                <button class="btn btn-sm btn-danger shadow-sm"
                                        onclick="return confirm('Delete this contact?')">
                                    🗑
                                </button>
                            </form>
                        </td>

                    </tr>

                @empty
                    <tr>
                        <td colspan="5" class="py-4 text-muted">
                            🚫 No Contacts Available
                        </td>
                    </tr>
                @endforelse
                </tbody>

            </table>

        </div>

    </div>

</div>

@endsection