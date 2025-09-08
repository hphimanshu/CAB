<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\UserDocument;


class DocUploadController extends Controller
{
    public function edit(User $user)
    {
        // Pass the user model to the view
        return view('docupload', compact('user'));
    }

 public function store(Request $request, User $user)
{
    $request->validate([
        'document_type' => 'required|string',
        'document_file' => 'required|file|mimes:pdf,jpg,jpeg|max:5120', // Max 5MB
    ]);

  

    try {
       $year = now()->year;
        $docType = $request->document_type;

        $filename = Str::slug($user->name) . "_{$docType}_{$year}." . $request->document_file->extension();
$folderPath = "user_documents/{$user->user_id}/{$docType}";
$file = $request->file('document_file');

// Check for existing file with same name
        if (Storage::disk('public')->exists("$folderPath/$filename")) {
            return back()->with('error', 'A document with the same name already exists. Please rename your file.');
        }

// Store using the desired filename
$path = $file->storeAs($folderPath, $filename, 'public');
// dd($path);

// Save record to DB
UserDocument::create([
    'user_id' => $user->id,
    'document_type' => $docType,
    'file_path' => "public/$path",
]);
        return back()->with('success', 'Document uploaded successfully.');
    } catch (\Exception $e) {
        \Log::error("Document upload failed: " . $e->getMessage());

        return back()->with('error', 'Something went wrong while uploading the document. Please try again.');
    }
}
public function fetchDocuments($user_id)
{
    $user = User::where('user_id', $user_id)->first();

    if (!$user) {
        return response()->json(['error' => 'User not found'], 404);
    }

    $documents = UserDocument::where('user_id', $user->id)->get()->groupBy('document_type');

    $folderPath = storage_path("app/public/user_documents/{$user->user_id}");

    if (!is_dir($folderPath) || $documents->isEmpty()) {
        return response()->json(['error' => 'No documents found for this user'], 404);
    }

    return response()->json($documents);
}




}
