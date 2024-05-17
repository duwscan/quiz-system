<div x-data="{ minutesLeft: {{ $timeLeft }} }" x-init="setInterval(() => {
    if (minutesLeft > 1) { minutesLeft--; } else {
        $wire.submit();
    }
}, 60000);">

    <div class="mb-2">
        Thời gian làm bài còn lại: <span x-text="minutesLeft" class="font-bold"></span> phút.
    </div>
    <div class="divide-y">
        @foreach($questionsState as $question)
            {{--        {{ dd($question->text) }}--}}
            <div class="py-3">
                <h2 class="mb-4 text-2xl">{{ $question['text'] }}</h2>

                @if ($question['code_snippet'])
                    <pre class="mb-4 border-2 border-solid bg-gray-50 p-2">{{ $question['code_snippet']}}</pre>
                @endif
                <div class="mb-3">
                    @foreach ($question['options'] as $option)
                        <div>
                            <label for="option.{{ $option['id'] }}">
                                <input type="radio" id="option.{{ $option['id'] }}"
                                       wire:model="answersOfQuestions.{{ $question['id'] }}"
                                       value="{{ $option['id'] }}" class="mr-2"
                                >
                                {{ $option['text'] }}
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>

        @endforeach
    </div>

    <div class="w-full flex gap-3">
        @if ($hasPreviousPage)
            <div class="mt-4">
                <x-secondary-button
                    x-on:click="$wire.previousQuestions();">
                    Quay lại
                </x-secondary-button>
            </div>
        @endif
        @if ($hasNextPage)
            <div class="mt-4">
                <x-secondary-button
                    x-on:click="$wire.nextQuestions();">
                    Kế tiếp
                </x-secondary-button>
            </div>
        @else
            <div class="mt-4">
                <x-primary-button x-on:click="$wire.submit();">Submit
                </x-primary-button>
            </div>
        @endif
    </div>

</div>
