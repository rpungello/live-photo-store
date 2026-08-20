<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Photo::class);

        return Photo::all();
    }

    public function store(Request $request)
    {
        $this->authorize('create', Photo::class);

        $data = $request->validate([
            'race_id' => ['required', 'exists:races'],
            'filename' => ['required'],
            'size' => ['required', 'integer'],
            'taken_at' => ['required', 'date'],
        ]);

        return Photo::create($data);
    }

    public function show(Photo $photo)
    {
        $this->authorize('view', $photo);

        return $photo;
    }

    public function update(Request $request, Photo $photo)
    {
        $this->authorize('update', $photo);

        $data = $request->validate([
            'race_id' => ['required', 'exists:races'],
            'filename' => ['required'],
            'size' => ['required', 'integer'],
            'taken_at' => ['required', 'date'],
        ]);

        $photo->update($data);

        return $photo;
    }

    public function destroy(Photo $photo)
    {
        $this->authorize('delete', $photo);

        $photo->delete();

        return response()->json();
    }
}
