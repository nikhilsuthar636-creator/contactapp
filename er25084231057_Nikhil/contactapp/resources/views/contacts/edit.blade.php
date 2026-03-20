@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-6">

        <!-- 🔙 Top Back Button -->
        <a href="{{ route('contacts.index') }}" class="btn btn-outline-dark mb-3">
            ⬅ Back to List
        </a>

        <div class="card shadow">
            <div class="card-header bg-warning text-dark text-center">
                <h4>✏️ Edit Contact</h4>
            </div>

            <div class="card-body">

                <!-- ❌ Error Messages -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- ✅ Form -->
                <form method="POST" action="{{ route('contacts.update',$contact->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{ $contact->name }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $contact->email }}" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" value="{{ $contact->phone }}" class="form-control">
                    </div>

                    <div class="d-flex justify-content-between">
                        <!-- 🔙 Bottom Back -->
                        <a href="{{ route('contacts.index') }}" class="btn btn-secondary">
                            ⬅ Back
                        </a>

                        <!-- 🔄 Update -->
                        <button class="btn btn-primary">
                            🔄 Update
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>

@endsection