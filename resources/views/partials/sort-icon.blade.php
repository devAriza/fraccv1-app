@if($sortField === $field)
    <i class="fas fa-sort-{{ $sortDirection === 'asc' ? 'up' : 'down' }}"></i>
@else
    <i class="fas fa-sort text-muted"></i>
@endif