<x-app-layout>

    <div class="flex justify-center items-center">

        @if ($todayExams)
            <div
                class="bg-white  bg-opacity-20 backdrop-filter backdrop-blur-lg rounded-lg p-6 shadow-lg border border-white border-opacity-30 text-white">
                <p class="text-black text-lg font-medium text-center pb-2">

                    {{ $todayExams->exam_date }}
                </p>
                <div class="flex flex-col items-center py-6 px-20 bg-gray-100 border border-gray-200 rounded-lg shadow">
                    <h5 class="mb-2 text-2xl cursor-default font-bold tracking-tight text-gray-900">UBT
                        {{ $todayExams->set }}</h5>

                    <p id="attemptButton" data-set-number ="{{ $todayExams->set }}"
                        class="attemptButton cursor-pointer inline-flex items-center px-3 py-2 text-base font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                        Start Exam
                        <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </p>
                </div>
            </div>
            @include('exam_question.exam_table')

            @include('exam_question.exam')
        @else
            <p class="text-2xl text-gray-950">No exams scheduled for today.</p>
        @endif
    </div>

</x-app-layout>
