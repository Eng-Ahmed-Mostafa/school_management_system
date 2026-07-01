<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Http\Requests\GradesRequest;
use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::paginate(10);

        return view('grades.index', compact('grades'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GradesRequest $request)
    {
        try {
            $validated = $request->validated();

            $grade = new Grade;
            $grade->name = json_encode([
                'ar' => $validated['name_ar'],
                'en' => $validated['name_en'],
            ]);
            $grade->notes = $validated['notes'] ?? null;
            $grade->save();

            flash()->success(__('public.added'), ['title' => __('public.success')]);

            return redirect()->route('grades.index');
        } catch (\Exception $e) {
            flash()->error($e->getMessage(), ['title' => __('public.error')]);

            return redirect()->back()->withInput();
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(GradesRequest $request, string $id)
    {
        try {
            $grade = Grade::findOrFail($id);

            $validated = $request->validated();

            $grade->name = json_encode([
                'ar' => $validated['name_ar'],
                'en' => $validated['name_en'],
            ]);

            $grade->notes = $validated['notes'] ?? null;
            $grade->save();

            flash()->success(__('public.updated'), ['title' => __('public.success')]);

            return redirect()->route('grades.index');
        } catch (\Exception $e) {
            flash()->error($e->getMessage(), ['title' => __('public.error')]);

            return redirect()->back()->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $grade = Grade::findOrFail($id);
            $grade->delete();

            flash()->success(__('public.deleted'), ['title' => __('public.success')]);

            return redirect()->route('grades.index');
        } catch (\Exception $e) {
            flash()->error($e->getMessage(), ['title' => __('public.error')]);

            return redirect()->back();
        }
    }
}
