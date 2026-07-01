<x-app-layout>
    {{-- change all style to bootstrap 5 --}}
    <div class="d-flex justify-content-between align-items-center">
        <h2 class="page-title p-1">
            {{ __('grade.list_grades') }}
        </h2>
        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addGrade">
            {{ __('grade.add_grade') }}
        </button>
    </div>

    @include('grades.create')

    <div class="p-1 mt-3">
        {{-- search and sort functionality  --}}
        <form method="GET" action="{{ route('grades.search') }}" class="mb-4 d-flex align-items-center">
            @csrf
            <input type="text" name="search" value="{{ request('search') }}" placeholder="{{ __('public.search') }}"
                class="form-control me-2">
            <select name="order_by" class="form-select me-2">
                <option>{{ __('public.sort_by') }}</option>
                <option value="name->ar" {{ request('order_by') == 'name->ar' ? 'selected' : '' }}>{{ __('public.name_ar') }}
                </option>
                <option value="name->en" {{ request('order_by') == 'name->en' ? 'selected' : '' }}>{{ __('public.name_en') }}
                </option>
                <option value="created_at" {{ request('order_by') == 'created_at' ? 'selected' : '' }}>
                    {{ __('public.created_at') }}</option>
            </select>
            {{-- sort name or date --}}
            <select name="order_direction" class="form-select me-2">
                <option value="asc" {{ request('order_direction') == 'asc' ? 'selected' : '' }}>{{ __('public.ascending') }}
                </option>
                <option value="desc" {{ request('order_direction') == 'desc' ? 'selected' : '' }}>{{ __('public.descending') }}
                </option>
            </select>
            <button type="submit" class="btn btn-primary">{{ __('public.submit') }}</button>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th class="py-2 px-4 border-b">#</th>
                    <th class="py-2 px-4 border-b">{{ __('grade.grade_name') }}</th>
                    <th class="py-2 px-4 border-b">{{ __('grade.grade_note') }}</th>
                    <th class="py-2 px-4 border-b">{{ __('public.actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($grades as $grade)
                    <tr>
                        <td class="py-2 px-4 border-b">{{ $loop->iteration }}</td>
                        <td class="py-2 px-4 border-b">{{ $grade->getNameTranslate() }}</td>
                        <td class="py-2 px-4 border-b">{{ $grade->notes }}</td>
                        <td class="py-2 px-4 border-b d-flex gap-2">
                            <button type="button" class="btn btn-success" data-bs-toggle="modal"
                                data-bs-target="#editGrade{{ $grade->id }}">
                                {{ __('public.edit') }}
                            </button>
                            <form action="{{ route('grades.destroy', $grade->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('{{ __('public.delete_confirm') }}')">{{ __('public.delete') }}</button>
                            </form>
                        </td>
                    </tr>
                    @include('grades.edit', ['grade' => $grade])
                @endforeach
            </tbody>
        </table>

        {{ $grades->links('pagination::bootstrap-5') }}
    </div>

</x-app-layout>
