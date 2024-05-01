@extends('layouts.index')
@section('content')

@include('home.components.navbar')
<section class="section1 h-96 relative"
        style="background-image: url('img/image.png'); background-size: cover; background-position: center;">
        <div class="absolute inset-0">
            <div class="bg-black bg-opacity-50 absolute inset-0"></div>
            <div class="container mx-auto flex flex-col items-center justify-center h-full text-white relative">
                <h1 class="text-4xl md:text-6xl lg:text-8xl font-bold mb-8 text-center px-4 ">Reservations
                </h1>
                <div class=" text-lg font-bold"><a href="/" rel="v:url" property="v:title">Home</a> » <span class="current">Reservations</span></div>
            </div>
        </div>
    </section>
<div class="flex mx-auto  max-w-7xl mt-40 flex-col gap-5">

    <!-- Calendar -->
    <div class="w-full bg-white rounded-lg border border-gray-200 p-3">
        <div id="calendar"></div>
    </div>

    <!-- Event List -->
    <div class="bg-white rounded-lg border border-gray-200 p-3">
        <h2 class="text-xl font-semibold mb-4">Upcoming Events</h2>
        @foreach ($reservations as $reservation)
        <div class="bg-gray-100 rounded-md p-3 mb-2">
            <h3 class="text-lg font-semibold">{{ $reservation->title }}</h3>
            <p class="text-gray-700">{{ $reservation->timeStart }}</p>
        </div>
        @endforeach
    </div>

</div>

@include('calendar.component.modal')

<script>
    document.addEventListener('DOMContentLoaded', async function() {

        const {
            data
        } = await axios.get("/calendar/show")

        const events = data.events;

        var myCalendar = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(myCalendar, {
            headerToolbar: {
                left: 'dayGridMonth,timeGridWeek,timeGridDay',
                center: 'title',
                right: 'listMonth,listWeek,listDay'
            },
            views: {
                listDay: {
                    buttonText: 'Day Events',
                },
                listWeek: {
                    buttonText: 'Week Events'
                },
                listMonth: {
                    buttonText: 'Month Events'
                },
                timeGridWeek: {
                    buttonText: 'Week',
                },
                timeGridDay: {
                    buttonText: "Day",
                },
                dayGridMonth: {
                    buttonText: "Month",
                },
            },
            initialView: "timeGridWeek",
            slotMinTime: "09:00:00",
            slotMaxTime: "19:00:00",
            nowIndicator: true,
            selectable: true,
            selectMirror: true,
            selectOverlap: true,
            weekends: true,
            events: events,
            selectAllow: (info) => {
                let instant = new Date()
                return info.start > instant
            },
            select: (info) => {
                let start = info.start
                let end = info.end

                if (end.getDate() - start.getDate() > 0 && !info.allDay) {
                    alert("You have selected a long duration. Please select a shorter duration.")
                    calendar.unselect()
                    return
                }

                document.getElementById("date-start").value = formatDate(start).day
                if (info.allDay) {
                    document.getElementById("date-end").value = formatDate(start).day
                    document.getElementById("time-start").value = "09:00:00"
                    document.getElementById("time-end").value = "19:00:00"
                } else {
                    document.getElementById("date-end").value = formatDate(end).day
                    document.getElementById("time-start").value = formatDate(start).time
                    document.getElementById("time-end").value = formatDate(end).time
                }

                document.getElementById("clickMe").click()
            },
            eventClick: (info) => {
                console.log(info);
            }
        });

        calendar.render();

        function formatDate(date) {
            let year = String(date.getFullYear())
            let month = String(date.getMonth() + 1).padStart(2, 0)
            let day = String(date.getDate()).padStart(2, 0)

            let hour = String(date.getHours()).padStart(2, 0)
            let min = String(date.getMinutes()).padStart(2, 0)
            let sec = String(date.getSeconds()).padStart(2, 0)

            return {
                day: `${year}-${month}-${day}`,
                time: `${hour}:${min}:${sec}`
            }
        }
    });
</script>

@include('home.components.footer')
@endsection
