@extends('admin.layouts.app')
@section('title') Create Admin @endsection
@section('content')
    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('admin.admins.store') }}" method="post" >
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <x-forms.input label="First Name" input-name="first_name" input-id="first_name" :errors="$errors->get('first_name')" :value="old('first_name')" placeholder="First Name" :required="true" />
                    </div>
                    <div class="col-md-6">
                        <x-forms.input label="Last Name" input-name="last_name" input-id="last_name" :errors="$errors->get('last_name')" :value="old('last_name')" placeholder="Last Name" :required="true" />
                    </div>
                    <div class="col-md-6">
                        <x-forms.input label="Email" input-name="email" input-id="email" :errors="$errors->get('email')" :value="old('email')" placeholder="Email" :required="true" type="email" />
                    </div>
                    <div class="col-md-6">
                        <x-forms.input label="Password" input-name="password" input-id="password" :errors="$errors->get('password')" :value="old('password')" placeholder="Password" :required="true" type="password" />
                    </div>
                    <div class="col-md-6">
                        <h6>Permissions</h6>
                        @foreach(config('constants.permissions') as $key=>$permission)
                            <x-forms.input :label="$permission['label']" input-name="permissions[]" input-id="permission_{{$permission['value']}}" :errors="$errors->get('permissions')" :value="$permission['value']" type="checkbox" :checked="in_array($permission['value'],old('permissions',[]))" />
                        @endforeach
                    </div>
                    <div class="col-md-6">
                        <x-forms.input label="Super Admin" input-name="super_admin" input-id="super_admin" :errors="$errors->get('super_admin')" value="1" type="checkbox" :checked="old('super_admin',0)" />
                    </div>
                </div>
                <button type="submit" class="btn btn-success" >Save</button>
            </form>
        </div>
    </div>
@endsection
