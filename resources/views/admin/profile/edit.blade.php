@extends('layouts.admin')

@section('page_title', 'Profile Settings')

@section('content')
    <div class="max-w-4xl">

        <div class="bg-white border border-gray-200 rounded-xl shadow-sm">

            @include('admin.profile.partials.update-profile-information-form')
            @include('admin.profile.partials.update-password-form')
            @include('admin.profile.partials.delete-user-form')
        </div>
    </div>
@endsection
