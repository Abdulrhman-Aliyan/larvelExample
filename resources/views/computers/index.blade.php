@extends('layout')

@section('title', 'Computers')

@section('content')

<h1 class="page-title">Computers</h1>

<a href="{{ url('computers/create') }}" class="btn btn-primary create-computer-btn">Create Computer</a>

@if (count($computers) > 0)
    <table class="computers-table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Origin</th>
                <th>Price</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($computers as $computer)
                <tr>
                    <td>{{ $computer['id'] }}</td>
                    <td>{{ $computer['name'] }}</td>
                    <td>{{ $computer['origin'] }}</td>
                    <td><strong>{{ $computer['price'] }}$</strong></td>
                    <td>
                        <a href="{{ url('computers', $computer['id']) }}" class="view-icon">
                            Show
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No computers found</p>
@endif

@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const rows = document.querySelectorAll('.computers-table tbody tr');
        rows.forEach(row => {
            row.addEventListener('click', function() {
                rows.forEach(r => r.classList.remove('highlight'));
                this.classList.add('highlight');
            });
            row.addEventListener('mouseover', function() {
                const link = this.querySelector('.view-icon');
                link.style.position = 'relative';
                link.style.right = '0';
                link.style.marginLeft = 'auto';
            });
            row.addEventListener('mouseout', function() {
                const link = this.querySelector('.view-icon');
                link.style.position = 'static';
                link.style.marginLeft = '0';
            });
        });

        const links = document.querySelectorAll('.view-icon');
        links.forEach(link => {
            link.addEventListener('mouseover', function() {
                this.style.transform = 'translateX(10px)';
            });
            link.addEventListener('mouseout', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    });
</script>

<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<style>
    .page-title {
        margin-bottom: 20px; /* Added margin to the h1 element */
    }
    .create-computer-btn {
        background-color: #d9534f;
        border-color: #d43f3a;
        color: white;
        padding: 10px 20px;
        border-radius: 3px;
        margin: 20px 0; /* Adjusted margin */
    }
    .create-computer-btn:hover {
        background-color: #c9302c;
        border-color: #ac2925;
    }
    .computers-table tbody td {
        transition: text-align 0.3s ease;
    }
    .view-icon {
        transition: transform 0.3s ease, text-align 0.3s ease;
    }
</style>