@extends('partials.app')
@section('content')
        <!--BOOST SECTİON START-->
        <section class="boostSection">
            <div class="container">
                <h1 class="mb-4 text-center fw-bold" style="font-size: 50px;">VALORANT WIN BOOST </h1>

                <!-- Buttons -->
                <div class="mb-4 text-center">
                    <a href="{{ route('boost')}}" class="btn btn-success btn-lg mb-3 me-3">Elo Boost</a>
                    <a href="{{ route('duoboostpage')}}" class="btn btn-success btn-lg mb-3 me-3">Duo Boost</a>
                    <a href="{{ route('radiantboostpage')}}" class="btn btn-success btn-lg mb-3 me-3">Radiant Boost</a>
                    <a href="{{ route('winboostpage')}}" class="btn btn-warning btn-lg mb-3 me-3">Win Boost</a>
                    <a href="{{ route('placementboostpage')}}" class="btn btn-success btn-lg mb-3 me-3">Yerleştirme Maçları</a>
                </div>

                <!-- Eloboost Details -->
                <div class="container">
                    <div class="row d-flex justify-content-between align-items-center border">
                        <div class="col-7 p-2 rounded" style="margin-right: 50px;">
                            <div class="form-group">
                                <img id="leagueImage" src="" alt="Eloboost Image"
                                    class="img-league mb-2 mx-auto d-block"><br>
                                <label for="currentLeague">Mevcut Lig:</label>
                                <select class="form-select mb-3" id="currentLeague">
                                    <option value="iron">Demir</option>
                                    <option value="bronze">Bronz</option>
                                    <option value="silver">Gümüş</option>
                                    <option value="gold">Altın</option>
                                    <option value="platinum">Platin</option>
                                    <option value="diamond">Elmas</option>
                                    <option value="ascendant">Yücelik</option>
                                    <option value="immortal">Ölümsüzlük</option>
                                    <option value="radiant">Radyant</option>
                                </select>
                                <label for="leagueDivision"> Mevcut Lig Aşaması:</label>
                                <select class="form-select mb-3" id="leagueDivision">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                                <label for="winNumber">Maç Sayısı</label>
                                <select class="form-select mb-3" id="winNumber">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm p-2 rounded border-start">
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
        </section>
        <!--BOOST SECTİON END-->
        <script src="{{asset('assets/js/winboost.js')}}/"></script>
        @endsection
