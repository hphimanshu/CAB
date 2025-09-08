 $year = now()->year;
        $docType = $request->document_type;

        // Clean filename: e.g., devmala-vyas_pan_card_2025.pdf
        $filename = Str::slug($user->name) . "_{$docType}_{$year}." . $request->document_file->extension();
        $folderPath = "user_documents/{$user->user_id}/{$docType}";
        $file = $request->file('document_file');

        // Upload file to storage
        $filePath = $request->file('document_file')->storeAs("public/{$folderPath}", $filename);
        // $path = $file->store("{$folderPath}", 'public');
        // $path = $file->storeAs("{$folderPath}", $filename, 'public');
        dd($path);

        // Save record to DB
        UserDocument::create([
            'user_id' => $user->id,
            'document_type' => $docType,
            'file_path' => $path,
        ]);
