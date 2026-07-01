<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Http\Requests\GradesRequest;
use App\Models\Grade;
use Illuminate\Http\Request;

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
        if(Grade::where('name->ar', $request->name_ar)->orWhere('name->en', $request->name_en)->exists()) {
            flash()->error(__('grade.grade_exists'), ['title' => __('public.error')]);

            return redirect()->back()->withInput();
        }
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
        if(Grade::where('name->ar', $request->name_ar)->orWhere('name->en', $request->name_en)->where('id', '!=', $id)->exists()) {
            flash()->error(__('grade.grade_exists'), ['title' => __('public.error')]);

            return redirect()->back()->withInput();
        }
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

    public function search(Request $request)
    {
        $search = $request->search;
        $orderDirection = $request->order_direction ?? 'asc';
        $orderBy = $request->order_by ?? 'created_at';

        $grades = Grade::where('name->ar', 'like', "%$search%")
            ->orWhere('name->en', 'like', "%$search%")
            ->orderBy($orderBy, $orderDirection)
            ->paginate(10);

        return view('grades.index', compact('grades'));
    }
}
