{{-- <!-- Button trigger modal -->
<button id="clickMe" type="button" class="btn btn-primary d-none" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body ">
                <form method="post" class="w-full  flex flex-col gap-y-5 " action="/calendar/store">
                    @csrf
                    <label for="">Event Title</label>
                    <input name="title" placeholder="Event Title" type="text">
                    <label for="">Start Day</label>
                    <input name="dateStart" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start" type="date">
                    <label for="">Start time</label>
                    <input name="timeStart" step="1800" required min="08:00:00" max="19:00:00" value="09:30:00" id="time-start"
                        type="time">


                    <label for="">end Day</label>
                    <input name="dateEnd" id="date-end" type="date">
                    <label for="">end time</label>
                    <input name="timeEnd" id="time-end" type="time">


                    <button class="w-f
                     py-3 bg-purple-950">hgfhgfhg</button>
                </form>

            </div>
 
        </div>
    </div>
</div> --}}




<!-- Modal toggle -->
<button id="clickMe" data-modal-target="default-modal" data-modal-toggle="default-modal" class="d-none" type="button">

</button>

<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Terms of Service
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="default-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form method="post" class="w-full  flex flex-col gap-y-5 " action="/calendar/store">
                @csrf
                <label for="">Chose your table</label>
                {{-- <input name="title" placeholder="chose ur table" type="text"> --}}
                <select name="title" id="pet-select">
                    <option value="" disabled>select ur table</option>
                    @foreach ($tablles as $tablle)
                        <option value="{{ $tablle->name }}">{{ $tablle->name }}</option>
                    @endforeach
                </select>

                <label for="">Start Day</label>
                <input name="dateStart" min="{{ date('Y-m-d') }}" value="{{ date('Y-m-d') }}" id="date-start"
                    type="date">
                <label for="">Start time</label>
                <input name="timeStart" step="1800" required min="08:00:00" max="19:00:00" value="09:30:00"
                    id="time-start" type="time">


                <label for="">end Day</label>
                <input name="dateEnd" id="date-end" type="date">
                <label for="">end time</label>
                <input name="timeEnd" id="time-end" type="time">


                <button class="w-f
                 py-3 bg-purple-950">Réserver</button>
            </form>
            <!-- Modal footer -->
            <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="default-modal" type="button"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">I
                    accept</button>
                <button data-modal-hide="default-modal" type="button"
                    class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Decline</button>
            </div>
        </div>
    </div>
</div>
