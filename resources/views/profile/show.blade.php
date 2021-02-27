@extends('layouts/admin')

@section('title','Profile')

@section('content')
<div class="card shadow-base bd-0 rounded-0 widget-4">
        <div class="card-header ht-75">
          <div class="hidden-xs-down">
            <a href="" class="mg-r-10"><span class="tx-medium">498</span> Followers</a>
            <a href=""><span class="tx-medium">498</span> Following</a>
          </div>
          <div class="tx-24 hidden-xs-down">
            <a href="" class="mg-r-10"><i class="icon ion-ios-email-outline"></i></a>
            <a href=""><i class="icon ion-more"></i></a>
          </div>
        </div><!-- card-header -->
        <div class="card-body">
          <div class="card-profile-img">
            <img src="{{Auth::user()->profile_photo_url}}" alt="{{Auth::user()->name}}">
          </div><!-- card-profile-img -->
          <h4 class="tx-normal tx-roboto tx-white">Katherine M. Pechon</h4>
          <p class="mg-b-25">Wine Connoisseur</p>

          <p class="wd-md-500 mg-md-l-auto mg-md-r-auto mg-b-25">Singer, Lawyer, Achiever, Wearer of unrelated hats, Data Visualizer, Mayonaise Tester. I don't know what alt-tab does. Storyteller.</p>

          <p class="mg-b-0 tx-24">
            <a href="" class="tx-white-8 mg-r-5"><i class="fab fa-facebook-official"></i></a>
            <a href="" class="tx-white-8 mg-r-5"><i class="fab fa-twitter"></i></a>
            <a href="" class="tx-white-8 mg-r-5"><i class="fab fa-pinterest"></i></a>
            <a href="" class="tx-white-8"><i class="fab fa-instagram"></i></a>
          </p>
        </div><!-- card-body -->
      </div><!-- card -->

      <div class="ht-70 bg-gray-100 pd-x-20 d-flex align-items-center justify-content-center shadow-base">
        <ul class="nav nav-outline active-info align-items-center flex-row" role="tablist">
          <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#posts" role="tab">Posts</a></li>
       
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Favorites</a></li>
          <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting" role="tab">Settings</a></li>
        </ul>
      </div>

      
      <div class="tab-content br-profile-body">
          <div class="tab-pane fade" id="setting">
          <x-app-layout>
    

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                @livewire('profile.update-profile-information-form')

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

                <x-jet-section-border />
            @endif

            @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.two-factor-authentication-form')
                </div>

                <x-jet-section-border />
            @endif

            <div class="mt-10 sm:mt-0">
                @livewire('profile.logout-other-browser-sessions-form')
            </div>

            @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                <x-jet-section-border />

                <div class="mt-10 sm:mt-0">
                    @livewire('profile.delete-user-form')
                </div>
            @endif
        </div>
    </div>
</x-app-layout>

          </div>
        <div class="tab-pane fade active show" id="posts">
            <h1>Input Posts</h1>
        </div>
        
      </div><!-- br-pagebody -->


@endsection