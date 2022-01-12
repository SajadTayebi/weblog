@extends('front.index')

@section('content')
    <main id="main">

        <!--==========================
          About Us Section
        ============================-->
    @include('front.layouts.about')

    <!--==========================
      Services Section
    ============================-->
    @include('front.layouts.services')

    <!--==========================
      Why Us Section
    ============================-->
    @include('front.layouts.whyUs')

    <!--==========================
      Call To Action Section
    ============================-->
    @include('front.layouts.callToAction')

    <!--==========================
      Features Section
    ============================-->
    @include('front.layouts.features')

    <!--==========================
      Portfolio Section
    ============================-->
    @include('front.layouts.portfolio')

    <!--==========================
      Clients Section
    ============================-->
    @include('front.layouts.clients')

    <!--==========================
      Team Section
    ============================-->
    @include('front.layouts.team')

    <!--==========================
      Pricing Section
    ============================-->
    @include('front.layouts.pricing')

    <!--==========================
      Frequently Asked Questions Section
    ============================-->
        @include('front.layouts.faq')

    </main>
@endsection
