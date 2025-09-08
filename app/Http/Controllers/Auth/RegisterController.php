<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function showRegisterForm()
    {
        return view('register');
    }

    // ✅ 1. Single User Registration
    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|digits:10',
            'pan_card' => 'required|alpha_num|size:10',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:Super Admin,sarthee,customer,AF,SS',
        ]);

        $id = User::max('id') + 1;
        $fullName = ucfirst($request->first_name) . ' ' . ucfirst($request->last_name);

        $prefixMap = [
            'Super Admin' => 'SuperAdmin',
            'sarthee' => 'sarthee',
            'customer' => 'cust',
            'AF' => 'AF',
            'SS' => 'SS',
        ];

        $user_id = $prefixMap[$request->role] . sprintf("%03d", $id) . '_' . ucfirst($request->first_name);

        User::create([
            'user_id' => $user_id,
            'name' => $fullName,
            'email' => $request->email,
            'mobile_number' => $request->mobile,
            'pan_number' => $request->pan_card,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        $totalUsers = User::count();

        return redirect()->back()->with('success', "User registered successfully. Total users: $totalUsers");
    }

    // ✅ 2. Excel Bulk Import
//     public function importCsv(Request $request)
// {
//     $request->validate([
//         'csv_file' => 'required|mimes:csv,txt',
//     ]);

//     try {
//         $path = $request->file('csv_file')->getRealPath();
//         $file = fopen($path, 'r');

//         $header = fgetcsv($file); // Skip header

//         $errors = [];
//         $rowNumber = 1;

//         while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
//             $rowNumber++;

//             $userData = [
//                 'user_id'         => $data[0],
//                 'name'            => $data[1],
//                 'email'           => $data[2],
//                 'mobile_number'   => $data[3],
//                 'pan_number'      => $data[4],
//                 'role'            => $data[5],
//                 'password'        => Hash::make($data[6]),
//             ];

//             $validator = Validator::make($userData, [
//                 'user_id'         => 'required|unique:users,user_id',
//                 'name'            => 'required|string|max:255',
//                 'email'           => 'required|email|unique:users,email',
//                 'mobile_number'   => 'required|digits:10',
//                 'pan_number'      => 'required|alpha_num|size:10',
//                 'role'            => 'required|in:Super Admin,sarthee,customer,AF,SS',
//                 'password'        => 'required',
//             ]);

//             if ($validator->fails()) {
//                 $errors[] = "Row $rowNumber: " . implode(', ', $validator->errors()->all());
//                 continue;
//             }

//             User::create($userData);
//         }

//         fclose($file);

//         if (count($errors)) {
//             return back()->with('error', implode('<br>', $errors));
//         }

//         return back()->with('success', 'Users imported successfully!');
//     } catch (\Exception $e) {
//         return back()->with('error', 'Something went wrong: ' . $e->getMessage());
//     }
// }

public function importCsv(Request $request)
{
    $request->validate([
        'csv_file' => 'required|mimes:csv,txt',
    ]);

    try {
        $path = $request->file('csv_file')->getRealPath();
        $file = fopen($path, 'r');

        $header = fgetcsv($file); // Skip header

        $errors = [];
        $rowNumber = 1;
        $importedCount = 0;

        while (($data = fgetcsv($file, 1000, ',')) !== FALSE) {
            $rowNumber++;

            $name = $data[0] ?? '';
            $email = $data[1] ?? '';
            $mobile = $data[2] ?? '';
            $pan = $data[3] ?? '';
            $role = $data[4] ?? '';
            $plainPassword = $data[5] ?? '';

            // Generate user_id
            $id = User::max('id') + 1;
            $firstName = explode(' ', trim($name))[0];
            $prefixMap = [
                'Super Admin' => 'SuperAdmin',
                'sarthee' => 'sarthee',
                'customer' => 'cust',
                'AF' => 'AF',
                'SS' => 'SS',
            ];

            $user_id = isset($prefixMap[$role]) 
                ? $prefixMap[$role] . sprintf("%03d", $id) . '_' . ucfirst($firstName)
                : null;

            $userData = [
                'user_id'         => $user_id,
                'name'            => $name,
                'email'           => $email,
                'mobile_number'   => $mobile,
                'pan_number'      => $pan,
                'role'            => $role,
                'password'        => Hash::make($plainPassword),
            ];

            $validator = Validator::make($userData, [
                'user_id'         => 'required|unique:users,user_id',
                'name'            => 'required|string|max:255',
                'email'           => 'required|email|unique:users,email',
                'mobile_number'   => 'required|digits:10',
                'pan_number'      => 'required|alpha_num|size:10',
                'role'            => 'required|in:Super Admin,sarthee,customer,AF,SS',
                'password'        => 'required',
            ]);

            if ($validator->fails()) {
                $errors[] = "Row $rowNumber: " . implode(', ', $validator->errors()->all());
                continue;
            }

            User::create($userData);
            $importedCount++;
        }

        fclose($file);

        if (count($errors)) {
            return back()->with('error', implode('<br>', $errors));
        }

        return back()->with('success', "$importedCount users imported successfully!");
    } catch (\Exception $e) {
        return back()->with('error', 'Something went wrong: ' . $e->getMessage());
    }
}



}
