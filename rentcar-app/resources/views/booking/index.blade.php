@extends('layout.master')

@section('isi')
<div class="card">
    <div class="card-body">
        <h4 class="card-title">Tabel Booking</h4>
        <p class="card-description">
            <a href="{{ route('booking.create') }}"><button class="btn btn-primary">Tambah data</button></a>
        </p>
        <div class="table-responsive">
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Mulai</th>
                        <th>Tanggal Selesai</th>
                        <th>Total Harga</th>
                        <th>Total Denda</th>
                        <th>Status</th>
                        <th>Pelanggan ID</th>
                        <th>Mobil ID</th>
                        <th>Admin ID</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($booking as $key=>$item)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $item->tanggal_mulai }}</td>
                        <td>{{ $item->tanggal_selesai }}</td>
                        <td>{{ $item->total_harga }}</td>
                        <td>{{ $item->total_denda }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->pelanggan_id }}</td>
                        <td>{{ $item->mobil_id }}</td>
                        <td>{{ $item->admin_id }}</td>
                        <td>
                            <form action="/booking/{{ $item->id }}" method="POST" class="d-inline">
                                <a href="/booking/{{ $item->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
                                @csrf
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Container for the large calendar -->
        <div id="large-calendar" class="mt-4"></div>
    </div>
</div>

<!-- FullCalendar CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.5/index.global.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

<!-- FullCalendar JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.5/index.global.min.js" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Custom CSS for FullCalendar -->
<style>
    body {
        background-color: #121212;
        color: #ffffff;
    }

    .card {
        background-color: #1e1e1e;
        border: none;
    }

    .card-body {
        color: #ffffff;
    }

    .btn-primary {
        background-color: #007BFF;
        border-color: #007BFF;
    }

    .table-dark {
        background-color: #2c2c2c;
    }

    .table-dark th,
    .table-dark td {
        color: #ffffff;
    }

    .fc {
        background-color: #1e1e1e;
        color: #ffffff;
    }
  
    .fc .fc-daygrid-day {
        background-color: #2c2c2c;
        border: 1px solid #3a3a3a;
    }

    .fc .fc-daygrid-day-number {
        color: #ffffff;
    }

    .fc .fc-toolbar {
        background-color: #333333;
        color: #ffffff;
    }

    .fc .fc-toolbar-title {
        color: #ffffff;
    }

    .fc .fc-button {
        background-color: #007BFF;
        border-color: #007BFF;
        color: #ffffff;
    }

    .fc .fc-button:hover {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .fc .fc-button-primary:not(:disabled):active, 
    .fc .fc-button-primary:not(:disabled).fc-button-active {
        background-color: #0056b3;
        border-color: #0056b3;
    }

    .fc .fc-button-primary:focus {
        box-shadow: 0 0 0 0.2rem rgba(0,123,255,.25);
    }

    .fc .fc-event {
        background-color: #ff9800;
        border-color: #ff9800;
        color: #121212;
    }

    .fc .fc-event:hover {
        background-color: #e68900;
        border-color: #e68900;
    }

    .fc .fc-day-today {
        background-color: #444444;
    }

    .fc .fc-popover {
        background-color: #2c2c2c;
        color: #ffffff;
        border: 1px solid #3a3a3a;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('large-calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        height: 'auto',
        events: [
            @foreach($booking as $item)
            {
                title: '{{ $item->status }}',
                start: '{{ $item->tanggal_mulai }}',
                end: '{{ $item->tanggal_selesai }}'
            },
            @endforeach
        ],
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay'
        },
        buttonText: {
            today: 'Today',
            month: 'Month',
            week: 'Week',
            day: 'Day'
        }
    });

    calendar.render();
});
</script>

@endsection
