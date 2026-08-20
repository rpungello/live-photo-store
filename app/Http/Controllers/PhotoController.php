<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PhotoController extends Controller
{
    use AuthorizesRequests;

    public function index(): Response
    {
        $this->authorize('viewAny', Photo::class);

        return response()->json(Photo::all());
    }

    public function store(Request $request): Response
    {
        $this->authorize('create', Photo::class);

        $data = $request->validate([
            'race_id' => ['required', 'exists:races'],
            'filename' => ['required'],
            'size' => ['required', 'integer'],
            'taken_at' => ['required', 'date'],
        ]);

        return response()->json(Photo::create($data), Response::HTTP_CREATED);
    }

    public function show(Photo $photo): Response
    {
        $this->authorize('view', $photo);

        return response()->json($photo);
    }

    public function update(Request $request, Photo $photo): Response
    {
        $this->authorize('update', $photo);

        $data = $request->validate([
            'race_id' => ['required', 'exists:races'],
            'filename' => ['required'],
            'size' => ['required', 'integer'],
            'taken_at' => ['required', 'date'],
        ]);

        $photo->update($data);

        return response()->json($photo);
    }

    public function destroy(Photo $photo): Response
    {
        $this->authorize('delete', $photo);

        $photo->delete();

        return response()->json();
    }
}
