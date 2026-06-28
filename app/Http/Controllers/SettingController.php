<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Setting::pluck('value', 'key')->toArray();
        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            // General Settings
            'email'            => ['nullable', 'email', 'max:255'],
            'phone'            => ['nullable', 'regex:/^[6-9]\d{9}$/', 'string', 'max:20'],
            'whatsapp'         => ['nullable', 'regex:/^[6-9]\d{9}$/', 'string', 'max:20'],
            'working_hours'    => ['nullable', 'string', 'max:255'],
            'address'          => ['nullable', 'string', 'max:1000'],
            
            // Social Media Links
            'social_facebook'  => ['nullable', 'url', 'max:255'],
            'social_instagram' => ['nullable', 'url', 'max:255'],
            'social_youtube'   => ['nullable', 'url', 'max:255'],
            'social_linkedin'  => ['nullable', 'url', 'max:255'],
        ]);

        foreach ($validated as $key => $value) {
            Setting::updateOrCreate(
                ['key' => $key],
                ['value' => $value]
            );
        }

        return redirect()->back()->with('success', 'Settings updated successfully.');
    }
}
