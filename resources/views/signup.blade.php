@extends('partials.app')
@section('content')

    <!-- BEGIN SITE MAIN -->
    <main id="main" class="site-main">
        <section class="page-title layout-02">
            <div class="container">
                <div class="inner align-center">
                    <h1 class="title">Hesap Oluştur</h1>
                    <div class="desc">Zaten hesabınız var mı? <a href="{{ route('signin')}}" title="Sign In">Giriş Yap</a></div>
                </div>
            </div>
        </section><!-- PAGE TITLE -->
        <div class="site-content">
            <div class="container">
                <form action="{{route('signup-function')}}" name="PostRegister" method="post" class="sign-up" enctype="multipart/form-data">
                    @csrf
                    <div class="field-input">
                        <label for="first_name">İsim*</label>
                        <input type="text" name="first_name" id="first_name" pattern="[A-Za-zğüşıöçĞÜŞİÖÇ]+"
                               title="Sadece harf girişi yapabilirsiniz" placeholder="ex: Eyyup" required>
                    </div>
                    <div class="field-input">
                        <label for="last_name">Soyad*</label>
                        <input type="text" name="last_name" id="last_name" pattern="[A-Za-zğüşıöçĞÜŞİÖÇ]+"
                               title="Sadece harf girişi yapabilirsiniz" placeholder="ex: Çoker" required>
                    </div>
                    <div class="field-input">
                        <label for="email">Email*</label>
                        <input type="text" name="email" id="email" placeholder="ex: eyyupcoker@gmail.com">
                    </div>
                    <div class="field-input field-password">
                        <label for="password">Şifre*</label>
                        <input type="password" name="password" id="password" placeholder="********">
                        <i class="lar la-eye view-password"></i>
                    </div>
                    <div class="field-input">
                        <label for="phone">Telefon Numarası*</label>
                        <input type="tel" pattern="[0]{1}[0-9]{3}[0-9]{3}[0-9]{2}[0-9]{2}" name="phone" id="phone"
                               placeholder="ex: 0555 555 55 55">
                    </div>
                    <div class="field-submit">
                        <button type="submit" name="submit" class="btn btn-primary" value="Kayıt Ol">Kayıt Ol</button>
                    </div>
                </form>
            </div>
        </div><!-- SITE CONTENT -->
    </main>
    <!-- END SITE MAIN -->
@endsection
