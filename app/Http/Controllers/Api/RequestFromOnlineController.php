<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\RequestFromOnline;
use Illuminate\Support\Facades\Validator;

class RequestFromOnlineController extends Controller
{
    public function save(Request $request)
{
    \Log::info('API Request:', $request->all());
\Log::info('Uploaded file:', [
    'hasFile' => $request->hasFile('doc_path'),
    'file' => $request->file('doc_path')
]);
    
    $validator = Validator::make($request->all(), [
        'name'     => 'required|string|max:255',
        'mobile'   => 'required|string|max:20',
        'email'    => 'required|email',
        'message'  => 'nullable|string',
        'ip'       => 'nullable|ip',
        'location' => 'nullable|string',
        'doc_path' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:2048', // up to 2MB
        'token'    => 'required|string|unique:request_from_online,token',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'status'  => false,
            'message' => 'Validation failed',
            'errors'  => $validator->errors()
        ], 422);
    }

    $data = $request->only([
        'name', 'mobile', 'email', 'message', 'ip', 'location', 'token'
    ]);

    // Handle file upload
    if ($request->hasFile('doc_path')) {
    $file = $request->file('doc_path');
        $filename = uniqid() . '_' . time() . '.' . $file->getClientOriginalExtension();
        $path = $file->storeAs('soc_uploads', $filename, 'public'); // store in storage/app/public/soc_uploads
        $data['doc_path'] = 'storage/' . $path; // set the public file path
    } else {
        $data['doc_path'] = null;
    }

    $data['converted'] = false;

    try {
        $record = RequestFromOnline::create($data);

        return response()->json([
            'status'  => true,
            'message' => 'Request saved successfully',
            'data'    => $record
        ], 201);
    } catch (\Exception $e) {
        return response()->json([
            'status' => false,
            'message' => 'DB Save Error',
            'error' => $e->getMessage()
        ], 500);
    }
}

}



