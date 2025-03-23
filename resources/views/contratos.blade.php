@extends('main')

@section('content')

<div class="d-flex justify-content-between align-items-center row ms-0 ps-0 me-0 mb-5">
    <h3 class="text-dark col-xl-3">Contratos</h3>
</div>
<div class="card shadow">
    <div class="card-body">
        <livewire:contracts-table />
    </div>
</div>

@endsection

@push('scripts')


@endpush