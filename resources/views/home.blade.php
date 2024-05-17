<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h6 class="text-xl font-bold">Bài luyện tập</h6>
                    <div class="flex w-100 flex-wrap">
                        @forelse($public_quizzes as $quiz)
                            <div class="px-4 py-2 w-full lg:w-6/12 xl:w-3/12 h-100">
                                <div
                                    class="flex relative flex-col mb-6 min-w-0 break-words bg-white rounded shadow-lg xl:mb-0">
                                    <div class="flex-auto p-4">
                                        <a href="{{ route('quiz.show', $quiz->slug) }}"><b>{{ $quiz->title }}</b></a>
                                        <p class="text-sm">Thời gian làm bài <span>{{ $quiz->limited_time }} phút</span>
                                        </p>
                                        <p class="text-sm">Số lượng câu hỏi: <span>{{ $quiz->questions_count }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="mt-2">Không có bài tập luyện</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h6 class="text-xl font-bold">Bài Kiểm tra</h6>
                    <div class="flex w-100 flex-wrap">
                        @forelse($registered_only_quizzes as $quiz)
                            <div class="px-4 py-2 w-full lg:w-6/12 xl:w-3/12">
                                <div
                                    class="flex relative flex-col mb-6 min-w-0 break-words bg-white rounded shadow-lg xl:mb-0">
                                    <div class="flex-auto p-4">
                                        <a href="{{ route('quiz.show', $quiz->slug) }}"><b>{{ $quiz->title }}</b></a>
                                        <p class="text-sm">Thời gian làm bài <span>{{ $quiz->limited_time }} phút</span></p>
                                        <p class="text-sm">Số lượng câu hỏi: <span>{{ $quiz->questions_count }}</span></p>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="mt-2">Không tìm thấy bài kiềm tra nào.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
