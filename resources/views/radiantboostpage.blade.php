@extends('partials.app')
@section('content')

        <!--BOOST SECTİON START-->
        <section class="boostSection">
            <div class="container">
                <h1 class="mb-4 text-center fw-bold" style="font-size: 50px;">VALORANT RADIANT BOOST </h1>

                <!-- Buttons -->
                <div class="mb-4 text-center">
                    <a href="{{ route('boost')}}" class="btn btn-success btn-lg mb-3 me-3">Elo Boost</a>
                    <a href="{{ route('duoboostpage')}}" class="btn btn-success btn-lg mb-3 me-3">Duo Boost</a>
                    <a href="{{ route('radiantboostpage')}}" class="btn btn-warning btn-lg mb-3 me-3">Radiant Boost</a>
                    <a href="{{ route('winboostpage')}}" class="btn btn-success btn-lg mb-3 me-3">Win Boost</a>
                    <a href="{{ route('placementboostpage')}}" class="btn btn-success btn-lg mb-3 me-3">Yerleştirme Maçları</a>
                </div>

                <!-- Eloboost Details -->

                <div class="row border">
                    <div class="d-flex justify-content-evenly">
                        <img id="leagueImage" src="assets/images/leagues/immortal1.png" alt="Eloboost Image"
                            class="img-league mb-2 mx-auto">
                        <img id="leagueImage" src="assets/images/leagues/immortal2.png" alt="Eloboost Image"
                            class="img-league mb-2 mx-auto">
                        <img id="leagueImage" src="assets/images/leagues/immortal3.png" alt="Eloboost Image"
                            class="img-league mb-2 mx-auto">
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-7 p-2 rounded" style="margin-right: 50px;">
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Mevcut Kademe Puanı:</label>
                                    <input class="form-control mt-1" type="number" min="1" id="currentPoints" value="1">
                                    <label for="exampleFormControlInput1" class="mt-4">Hedef Kademe Puanı:</label>
                                    <input class="form-control mt-1" type="number" min="1" id="targetPoints" value="1">
                                    <label for="server" class="mt-4">Server:</label>
                                    <select class="form-select mb-3 mt-1" id="currentLeague">
                                        <option value="turkey">Türkiye</option>
                                        <option value="europe">Avrupa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm p-2 rounded mt-4 border-start">
                                <div class="col-md ms-5">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch" id="extraWin">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Boost sonu 1 win
                                            daha
                                            alınsın +15TL</label>
                                    </div>
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" role="switch" id="liveStream">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Canlı yayın
                                            yapılsın
                                            +50TL</label>
                                    </div>
                                    <div class="form-check form-switch mt-2">
                                        <input class="form-check-input" type="checkbox" role="switch" id="offlineMode">
                                        <label class="form-check-label" for="flexSwitchCheckChecked">Çevrimdışı Mod
                                            +15TL</label>
                                    </div>
                                    <label class="eloBoostPrice mt-5 me-2" for="price">Ücret:</label>
                                    <span class="eloBoostPrice" id="price">0 TL</span>
                                    <input type="hidden" name="price" id="hiddenPrice" value="">
                                    @if(Auth::check())
                                        <br><button class="btn btn-primary btn-lg mt-3" id="orderBtn" type="submit">Sipariş Oluştur</button>
                                    @endif
                                    @if(!Auth::check())
                                        <br><a class="btn btn-danger btn-lg mt-3" href="{{ route('signin') }}">Sipariş Oluşturmak İçin<br>Öncelikle Giriş Yapmalısınız</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="alert alert-warning mt-3" role="alert" id="pointAlert4" style="display: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                    Mevcut kademe puanı hedef kademe puanıyla aynı veya yüksek olamaz!
                </div>
                <div class="alert alert-warning mt-3" role="alert" id="pointAlert3" style="display: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                    Mevcut kademe puanı ve hedef kademe puanı geçerli bir sayı olmalı!
                </div>
                <div class="alert alert-warning mt-3" role="alert" id="pointAlert2" style="display: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                    Mevcut kademe puanı ve hedef kademe puanı 1 ile 1000 arasında olmalı!
                </div>
                <div class="alert alert-warning mt-3" role="alert" id="pointAlert" style="display: none;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation-circle-fill" viewBox="0 0 16 16">
                        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                    </svg>
                    Hedef puan, mevcut puandan 20 veya daha yüksek olmalı!
                </div>
            </div>
        </section>
        <!--BOOST SECTİON END-->
        <script src="{{asset('assets/js/radiantboost.js')}}/"></script>
        @endsection
