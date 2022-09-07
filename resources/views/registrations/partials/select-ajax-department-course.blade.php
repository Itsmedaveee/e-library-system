@foreach ($courses as $course)
    <option value="{{ $course->id }}">{{ $course->code }}</option>
@endforeach