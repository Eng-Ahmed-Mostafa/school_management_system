<div class="modal fade" id="addGrade" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header d-flex justify-content-between align-items-center">
                <h1 class="modal-title fs-5" id="exampleModalLabel">{{ __('grade.add_grade') }}</h1>
            </div>
            <form action="{{ route('grades.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="name_en" class="form-label">{{ __('grade.stage_name_en') }}</label>
                                <input type="text" class="form-control" id="name_en" name="name_en" required>
                            </div>
                            @error('name_en')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="name_ar" class="form-label">{{ __('grade.stage_name_ar') }}</label>
                                <input type="text" class="form-control" id="name_ar" name="name_ar">
                            </div>
                            @error('name_ar')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="notes" class="form-label">{{ __('grade.grade_note') }}</label>
                        <textarea class="form-control" id="notes" name="notes"></textarea>
                    </div>
                    @error('notes')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('public.close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('public.add') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
