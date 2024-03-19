@extends('partials.app')
@section('content')

    <!-- BEGIN SITE MAIN -->
    <main id="main" class="site-main">
        <section class="page-title layout-02">
            <div class="container">
                <div class="inner align-center">
                    <h1 class="title">Giriş Yap</h1>
                    <div class="desc">Hesabınız yok mu? <a href="{{ route('signin')}}" title="Create an account">Hesap Oluştur</a></div>
                </div>
            </div>
        </section><!-- PAGE TITLE -->
        <div class="site-content">
            <div class="container">
                <form action="{{route('signin-function')}}" method="post" class="sign-in">
                    @csrf
                    <div class="field-input">
                        <label for="email">Email*</label>
                        <input type="text" name="email" id="email" value="" placeholder="ex: eyyupcoker@gmail.com">
                    </div>
                    <div class="field-input field-password">
                        <label for="password">Şifre*</label>
                        <input type="password" name="password" id="password" value="" placeholder="********">
                        <i class="lar la-eye view-password"></i>
                    </div>
                    <div class="field-submit">
                        <button type="submit" name="submit" class="btn btn-primary" value="Giriş Yap">Giriş Yap</button>
                    </div>
                </form>
            </div>
        </div><!-- SITE CONTENT -->
    </main>
    <!-- END SITE MAIN -->
@endsection
