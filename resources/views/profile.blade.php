@extends('layouts.app')

@section('title', 'Profile Settings')

@section('contents')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<h1 class="font-bold text-2xl ml-3 mb-3">Profile Changes</h1>
<hr class="mb-3" />

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<form id="profile-form" method="POST" enctype="multipart/form-data" action="{{ route('profile.update') }}">
    @csrf
    <div class="grid grid-rows-2 grid-flow-col gap-4">
        <div>
            <label class="label">
                <span class="text-base label-text">Name</span>
            </label>
            <input name="name" type="text" value="{{ auth()->user()->name }}" class="w-full input input-bordered" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text">Email</span>
            </label>
            <input name="email" type="text" value="{{ auth()->user()->email }}" class="w-full input input-bordered" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text">Password</span>
            </label>
            <input id="password" name="password" type="password" placeholder="New Password (leave blank to keep current)" class="w-full input input-bordered" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text">Confirm Password</span>
            </label>
            <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Confirm New Password" class="w-full input input-bordered" />
        </div>
        <div>
            <label class="label">
                <span class="text-base label-text">Profile Picture</span>
            </label>
            <input id="pic" name="pic" type="file" class="w-full input input-bordered" />
        </div>
        <div class="">
            <img id="show-pic" src="{{ auth()->user()->pic ? url('storage/images/profile/' . auth()->user()->pic) : url('storage/images/no_image.jpg')  }}" class="block w-1/4 rounded-md py-1.5 sm:leading-6">
        </div> 
    </div>
    <div class="mt-6">
        <button type="submit" class="btn btn-block">Save Profile</button>
    </div>
</form>

<script type="text/javascript">
    $(document).ready(function(){
        $('#pic'). change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#show-pic').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });

        $('#profile-form').submit(function(e) {
            let password = $('#password').val();
            let password_confirmation = $('#password_confirmation').val();

            if (password || password_confirmation) {
                if (!password || !password_confirmation) {
                    alert('Both password fields must be filled out.');
                    e.preventDefault();
                } else if (password !== password_confirmation) {
                    alert('Passwords do not match.');
                    e.preventDefault();
                }
            }
        });
    });


</script>
@endsection
