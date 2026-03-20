@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row justify-content-center">
        <div class="col-md-6">

            <!-- 🔙 Back -->
            <a href="{{ route('contacts.index') }}" class="btn btn-light shadow-sm mb-3">
                ⬅ Back
            </a>

            <!-- 🌈 Glass Card -->
            <div class="card border-0 shadow-lg rounded-4 p-4"
                 style="background: rgba(255,255,255,0.9); backdrop-filter: blur(10px);">

                <!-- 🔷 Title -->
                <h3 class="text-center mb-4 fw-bold"
                    style="background: linear-gradient(45deg,#4e73df,#1cc88a);
                           -webkit-background-clip: text;
                           -webkit-text-fill-color: transparent;">
                    ➕ Add New Contact
                </h3>

                <!-- ❌ Errors -->
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
                <form method="POST" action="{{ route('contacts.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label fw-semibold">👤 Name</label>
                        <input type="text" name="name"
                               class="form-control rounded-3 shadow-sm"
                               placeholder="Enter full name">
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-semibold">📧 Email</label>
                        <input type="email" name="email"
                               class="form-control rounded-3 shadow-sm"
                               placeholder="Enter email">
                    </div>

                    <div class="mb-4">
                        <label class="form-label fw-semibold">📱 Phone</label>
                        <input type="text" name="phone"
                               class="form-control rounded-3 shadow-sm"
                               placeholder="Enter phone number">
                    </div>

                    <!-- 🔘 Buttons -->
                    <div class="d-flex justify-content-between">

                        <a href="{{ route('contacts.index') }}"
                           class="btn btn-outline-secondary px-4 rounded-pill">
                            ⬅ Back
                        </a>

                        <button type="submit"
                                class="btn text-white px-4 rounded-pill shadow"
                                style="background: linear-gradient(45deg,#4e73df,#1cc88a);">
                            💾 Save
                        </button>

                    </div>

                </form>

            </div>

        </div>
    </div>

</div>

@endsection