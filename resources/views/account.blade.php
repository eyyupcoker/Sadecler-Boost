@extends('partials.app')
@section('content')
    <section class="container">
        <div class="accountContainer">
            <div class="row accountInformationPage">
                <div class="col-4 accountPageSlices">
                    <h3 class="accountPageTitles">Hesap Bilgileri</h3></br>
                    @foreach($users as $user)
                        <h5 class="accountPageLowerTitles">Ad:</h5><p class="accountPageText">{{$user->first_name}}</p></br>
                        <h5 class="accountPageLowerTitles">Soyad:</h5><p class="accountPageText">{{$user->last_name}}</p></br>
                        <h5 class="accountPageLowerTitles">E-Mail:</h5><p class="accountPageText">{{$user->email}}</p></br>
                        <h5 class="accountPageLowerTitles">Telefon:</h5><p class="accountPageText">{{$user->phone}}</p></br>
                    @endforeach
                </div>
                <div class="col-4 accountPageSlices">
                    <h3 class="accountPageTitles">Aktif Boostlar</h3></br>
                    @if ($boosts->isEmpty())
                        <p style="text-align: center;" class="accountPageText">Şuanda Aktif Boost İşleminiz Bulunmamaktadır</p></br>
                    @else
                        @foreach ($boosts as $boost)
                                <h5 class="accountPageLowerTitles">Tarih:</h5><a href="{{url('/boost-details/'.$boost->id)}}" class="accountPageText">{{$boost->created_at}}</a></br>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
@endsection
