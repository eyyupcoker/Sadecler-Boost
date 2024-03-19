@extends('partials.app')
@section('content')
            <!--BOOST SECTİON START-->
            <section class="boostSection">
                <div class="container">
                    <h1 class="mb-4 text-center fw-bold" style="font-size: 50px;">VALORANT DUO BOOST </h1>

                    <!-- Buttons -->
                    <div class="mb-4 text-center">
                        <a href="{{ route('boost')}}" class="btn btn-success btn-lg mb-3 me-3">Elo Boost</a>
                        <a href="{{ route('duoboostpage')}}" class="btn btn-warning btn-lg mb-3 me-3">Duo Boost</a>
                        <a href="{{ route('radiantboostpage')}}" class="btn btn-success btn-lg mb-3 me-3">Radiant Boost</a>
                        <a href="{{ route('winboostpage')}}" class="btn btn-success btn-lg mb-3 me-3">Win Boost</a>
                        <a href="{{ route('placementboostpage')}}" class="btn btn-success btn-lg mb-3 me-3">Yerleştirme Maçları</a>
                    </div>

                    <!-- Eloboost Details -->
                    <div class="row">
                        <div class="col-md border p-2 rounded" style="margin-right: 40px;">
                            <img id="leagueImage" src="" alt="Eloboost Image" class="img-league mb-2 mx-auto d-block"><br>
                            <label for="currentLeague">Mevcut Lig:</label>
                            <select class="form-select mb-3" id="currentLeague">
                                <option value="iron">Demir</option>
                                <option value="bronze">Bronz</option>
                                <option value="silver">Gümüş</option>
                                <option value="gold">Altın</option>
                                <option value="platinum">Platin</option>
                                <option value="diamond">Elmas</option>
                                <option value="ascendant">Yücelik</option>
                            </select>
                            <label for="leagueDivision"> Mevcut Lig Aşaması:</label>
                            <select class="form-select mb-3" id="leagueDivision">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                            <label for="leaguePoints">Kademe Puanı</label>
                            <select class="form-select" id="leaguePoints">
                                <option value="1">0-50</option>
                                <option value="2">51-100</option>
                            </select>
                        </div>
                        <div class="col-md border p-2 rounded">
                            <img id="targetLeagueImage" src="" alt="Target League Image" class="img-league mb-2 mx-auto d-block"><br>
                            <label for="targetLeague">Hedef Lig:</label>
                            <select class="form-select mb-3" id="targetLeague">
                                <option value="iron">Demir</option>
                                <option value="bronze">Bronz</option>
                                <option value="silver">Gümüş</option>
                                <option value="gold">Altın</option>
                                <option value="platinum">Platin</option>
                                <option value="diamond">Elmas</option>
                                <option value="ascendant">Yücelik</option>
                                <option value="immortal">Ölümsüzlük</option>
                            </select>
                            <label for="targetLeagueDivision">Hedef Lig Aşaması:</label>
                            <select class="form-select mb-3" id="targetLeagueDivision">
                                <option value="1">1</option>
                                <option value="2" selected>2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md mt-5 me-5">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" role="switch" id="extraWin">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Boost sonu 1 win daha alınsın +15TL</label>
                                  </div>
                                  <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="liveStream">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Canlı yayın yapılsın +50TL</label>
                                  </div>
                                  <div class="form-check form-switch mt-2">
                                    <input class="form-check-input" type="checkbox" role="switch" id="offlineMode">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Çevrimdışı Mod +15TL</label>
                                  </div>
                            </div>
                            <div class="col-md mt-5">
                                <label class="eloBoostPrice me-2" for="price">Ücret:</label>
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
            </section>
            <!--BOOST SECTİON END-->
            <script src="{{asset('assets/js/duoboost.js')}}/"></script>
@endsection
