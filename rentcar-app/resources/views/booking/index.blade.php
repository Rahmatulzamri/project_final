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
              <th> no </th>
              <th> tanggal mulai </th>
              <th> tanggal selesai</th>
              <th> total harga</th>
              <th> total denda</th>
              <th> status</th>
              <th> pelanggan id </th>
              <th> mobil id </th>
              <th> admin id</th>
              <th> aksi </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($booking as $key=>$item)
            <tr>
              <td> {{$key+1}} </td>
              <td> {{$item->tanggal_mulai}} </td>
              <td> {{$item->tanggal_selesai}} </td>
              <td> {{$item->total_harga}} </td>
              <td> {{$item->total_denda}} </td>
              <td> {{$item->status}} </td>
              <td> {{$item->pelanggan_id}} </td>
              <td> {{$item->mobil_id}} </td>
              <td> {{$item->admin_id}} </td>
              <td>
                  <form action="/booking/{{$item->id}}" method="POST">
                    <a href="/booking/{{$item->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    @csrf
                    @method("DELETE")
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
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
    background-color: #121212; /* Dark background for the entire page */
    color: #ffffff; /* White text for the entire page */
  }

  .card {
    background-color: #1e1e1e; /* Dark background for card */
    border: none;
  }

  .card-body {
    color: #ffffff; /* White text in card body */
  }

  .btn-primary {
    background-color: #007BFF;
    border-color: #007BFF;
  }

  .table-dark {
    background-color: #2c2c2c; /* Dark background for table */
  }

  .table-dark th,
  .table-dark td {
    color: #ffffff; /* White text for table */
  }

  .fc {
    background-color: #1e1e1e; /* Dark background for FullCalendar */
    color: #ffffff; /* White text for FullCalendar */
  }
  
  .fc .fc-daygrid-day {
    background-color: #2c2c2c; /* Dark background for each day */
    border: 1px solid #3a3a3a; /* Border color for day cells */
  }

  .fc .fc-daygrid-day-number {
    color: #ffffff; /* White text for day numbers */
  }

  .fc .fc-toolbar {
    background-color: #333333; /* Darker background for toolbar */
    color: #ffffff; /* White text for toolbar */
  }

  .fc .fc-toolbar-title {
    color: #ffffff; /* White text for toolbar title */
  }

  .fc .fc-button {
    background-color: #007BFF; /* Blue background for buttons */
    border-color: #007BFF;
    color: #ffffff; /* White text for buttons */
  }

  .fc .fc-button:hover {
    background-color: #0056b3; /* Darker blue for button hover */
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
    background-color: #ff9800; /* Orange background for events */
    border-color: #ff9800;
    color: #121212; /* Dark text for contrast */
  }

  .fc .fc-event:hover {
    background-color: #e68900; /* Darker orange for event hover */
    border-color: #e68900;
  }

  .fc .fc-day-today {
    background-color: #444444; /* Highlight for today's date */
  }

  .fc .fc-popover {
    background-color: #2c2c2c; /* Dark background for popovers */
    color: #ffffff; /* White text for popovers */
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
