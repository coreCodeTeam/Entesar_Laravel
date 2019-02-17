@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }}, <a href="{{ route('verification.resend') }}">{{ __('click here to request another') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<!-- $user = new user ();
    $now = new DateTime ();
    $standard_date = $now->format ( 'j M Y H:i:s A e' );
    $standard_months = array (
            "Dec",
            "Nov",
            "Oct",
            "Sep",
            "Aug",
            "Jul",
            "Jun",
            "May",
            "Apr",
            "Mar",
            "Feb",
            "Jan" 
    );
    $arabic_months = array (
            "ديسمبر",
            "نوفمبر",
            "أكتوبر",
            "سبتمبر",
            "أغسطس",
            "يوليو",
            "يونيو",
            "مايو",
            "أبريل",
            "مارس",
            "فبراير",
            "يناير" 
    );

    $arabic_date = str_replace ( $standard_months, $arabic_months, $standard_date );
   
          User::create([
              'name' => $data['name'],
              'email' => $data['email'],
              'password' => Hash::make($data['password']),
              'last_visit' => $arabic_date,
          ]);
        return redirect("/login");
    }
 -->