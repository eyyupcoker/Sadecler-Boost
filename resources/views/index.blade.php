@extends('partials.app')
@section('content')
<!-- END SITE HEADER -->

<!-- BEGIN SITE MAIN -->
<main id="main" class="site-main">
    <div class="site-content pt0 pb0">
        <section class="section background-bottom-cover opt160 overflow-hidden"
            style="background-image: url({{asset('assets/images/mainpagebg.jpg')}}/);">
            <div class="container">
                <div class="row">
                    <div class="homeText col-lg-6">
                        <div class="heading heading-alway-white mb32">
                            <div class="heading-sub">SADECLER ELOBOOST</div>
                            <h2 class="heading-title size-xxxl">TÜRKİYE'NİN <br> EN <br> GÜVENİLİR <br> ELOBOOST SİTESİ
                            </h2>
                        </div>
                        <div class="d-flex flex-row">
                            <div class="button-wrap flex flex-align-c">
                                <a href="{{ route('boost')}}" style="margin-right: 40px; width: 200px;"
                                    class="btn btn-warning" role="button">VALORANT BOOST</a>
                            </div>
                            <div class="button-wrap flex flex-align-c">
                                <a href="#" style="width: 200px;" class="btn btn-warning" role="button">LOL BOOST</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="images layout-02 lg-mt32">
                            <div class="inner xs-w50">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="section spdt">
            <div class="container">
                <div class="block-counter layout-02">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">4</span><span class="suffix"></span></div>
                                <div class="title">Yıllık Tecrübe</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">600</span><span class="suffix">+</span></div>
                                <div class="title">Yapılan Boost</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">99.7</span><span class="suffix">%</span></div>
                                <div class="title">Başarı Yüzdesi</div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="counter-box">
                                <div class="number"><span class="counter">15</span></div>
                                <div class="title">Profesyonel Ekip</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section spdtb">
            <div class="container">
                <div class="row flex-align-c">
                    <div class="col-lg-6">
                        <div class="images layout-06">
                            <img class="wow animate__fadeInLeft"
                                style="height: 50vh; object-fit: cover; border-radius: 10%;"
                                src="{{asset('assets/images/valorant-logo-2.jpg')}}/" alt="Banner">
                            <div class="dot dot-01 navy"></div>
                            <div class="dot dot-02 violet"></div>
                            <div class="dot dot-03 yellow"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="lg-mt32">
                            <div class="heading mb32">
                                <h2 class="heading-title size-l">Sadecler Eloboost Dünyasına Hoş Geldiniz!</h2>
                                <div class="heading-desc">Sizlere Sadecler Eloboost dünyasına hoş geldiniz diyoruz! Elo
                                    Boosting hizmetimizle oyun deneyiminizi bir üst seviyeye taşımanıza yardımcı
                                    oluyoruz.<br><br>
                                    Sadecler Eloboost, Valorant ve League of Legends oyuncularının zaferlerine bir adım
                                    daha yaklaşmalarına yardımcı olan birinci sınıf bir Elo Boosting hizmeti
                                    sunmaktadır. Amacımız, oyuncuların oyunlardaki potansiyelini en üst düzeye
                                    çıkarmalarını sağlamak ve rekabetin en yüksek seviyesine ulaşmalarına yardımcı
                                    olmaktır. <br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section spdt">
            <div class="container">
                <div class="block-image-box layout-01">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image-box">
                                <div class="thumbnail">
                                    <img src="{{asset('assets/images/raze-1.png')}}/" alt="Thumbnail"
                                        class="homepageImages">
                                </div>
                                <div class="content">
                                    <h4 class="title">Ekibimiz</h4>
                                    <div class="desc">Tamamı profesyonel ve tecrübeli boosterlardan oluşan kadromuz
                                    </div>
                                    <div class="button-wrap">
                                        <a href="contact-01.html" class="button text" title="Know More">Daha fazla <i
                                                class="las la-long-arrow-alt-right color-navy"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-box">
                                <div class="thumbnail">
                                    <img src="assets/images/yuumi-1.png" alt="Thumbnail" class="homepageImages">
                                </div>
                                <div class="content">
                                    <h4 class="title">Destek</h4>
                                    <div class="desc">7/24 Canlı Destek ekibi</div>
                                    <div class="button-wrap">
                                        <a href="contact-01.html" class="button text" title="Know More">Daha fazla<i
                                                class="las la-long-arrow-alt-right color-navy"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-box">
                                <div class="thumbnail">
                                    <img src="assets/images/riven-1.png" alt="Thumbnail" class="homepageImages">
                                </div>
                                <div class="content">
                                    <h4 class="title">Güvenlik</h4>
                                    <div class="desc">Hizmet esnasında üçüncü parti yazılım, küfür, hile vb. hiçbir ban
                                        sebebi harekete yer verilmez.</div>
                                    <div class="button-wrap">
                                        <a href="contact-01.html" class="button text" title="Know More">Daha fazla <i
                                                class="las la-long-arrow-alt-right color-navy"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="image-box">
                                <div class="thumbnail">
                                    <img src="assets/images/sova-1.png" alt="Thumbnail" class="homepageImages">
                                </div>
                                <div class="content">
                                    <h4 class="title">Hız</h4>
                                    <div class="desc">Vaad edilen süre içerisinde boost işleminin bitme garantisi.</div>
                                    <div class="button-wrap">
                                        <a href="contact-01.html" class="button text" title="Know More">Daha fazla <i
                                                class="las la-long-arrow-alt-right color-navy"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-banner layout-06 spdtb align-right">
            <div class="container">
                <div class="inner">
                    <div class="images layout-06">
                        <img class="wow animate__fadeInLeft rounded-5"
                            style="height: 660px; width: 700px;  object-fit: cover;"
                            src="{{asset('assets/images/yoru.png')}}/" alt="Banner">
                        <div class="dot dot-04 red"></div>
                        <div class="dot dot-05 violet"></div>
                        <div class="dot dot-06 yellow"></div>
                    </div>
                    <div class="content align-left">
                        <div class="heading">
                            <h2 class="heading-title size-l">Hizmetlerimiz</h2>
                            <div class="heading-desc">

                                <h4>Elo Boosting:</h4> League of Legends ve Valorant oyuncuları için profesyonel Elo
                                Boosting hizmetleri sunuyoruz. Hesaplarınızı istediğiniz lige taşıyoruz.
                                <br><br>
                                <h4>Duo Boosting:</h4> Sizinle birlikte oynayarak kazanmanıza yardımcı oluyoruz.
                                Hedeflerinizi birlikte gerçekleştirelim.
                                <br><br>
                                <h4>Placement Maçları:</h4> Yeni sezon başlangıcında en iyi sonuçları almanız için size
                                yardımcı oluyoruz. Yeni bir başlangıç yapmak için hazır mısınız?
                                <br><br>
                                <h4>Koçluk Desteği:</h4> Bireysel ve profesyonel potansiyelinizi en üst düzeye
                                çıkarmanıza yardımcı olacak koçluk hizmetleri sunuyoruz. Deneyimli koçlarımız,
                                hedeflerinize ulaşmanız için sizi destekler ve rehberlik eder.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-banner layout-06 spdt align-left">
            <div class="container">
                <div class="inner">
                    <div class="images layout-06">
                        <img class="wow animate__fadeInRight rounded-5"
                            style="height: 660px; width: 700px; object-fit: cover;"
                            src="{{asset('assets/images/omen.jpg')}}/" alt="Banner">
                        <div class="dot dot-07 navy"></div>
                        <div class="dot dot-08 violet"></div>
                        <div class="dot dot-09 yellow"></div>
                    </div>
                    <div class="content align-right">
                        <div class="heading">
                            <h2 class="heading-title size-l">Neden Biz?</h2>
                            <div class="heading-desc">
                                <h4>Profesyonel ve Güvenilir Ekibimiz:</h4>Sadecler Eloboost'un profesyonel ve deneyimli
                                ekibi, Valorant ve League of Legends dünyasında kendini kanıtlamıştır. Oyunculuk geçmişi
                                ve uzmanlıklarıyla, müşterilerimizin ihtiyaçlarını anlayacak ve onları zaferlerine
                                ulaştırmak için çalışacaktır.
                                <br><br>
                                <h4>Hızlı ve Güvenli Hizmet:</h4>
                                <p>Hesabınızı korumak için en iyi güvenlik önlemlerini alıyoruz ve boost işlemlerini
                                    hızlı bir şekilde tamamlıyoruz.</p>
                                <h4>Müşteri Memnuniyeti:</h4>
                                <p>Müşterilerimizin mutluluğu bizim önceliğimizdir. Her zaman sizinle iletişim
                                    halindeyiz.</p>
                                <h4>İletişim:</h4>
                                <p> Sadecler Eloboost ile hedeflerinize ulaşmak için bizimle iletişime geçmekten
                                    çekinmeyin. Size rehberlik etmek için buradayız. Sadecler Eloboost ile zaferlere
                                    giden yolculuğunuz başlıyor!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section spdt">
            <div class="container">
                <div class="heading align-center mb60">
                    <h2 class="heading-title size-l">Sıkça Sorulan Sorular</h2>
                    <p class="heading-desc">Aradığın cevabı bulamadın mı ? <a href="#"
                            title="Contact our support now">Bize Ulaş</a></p>
                </div>
                <div class="block-accordion enable layout-02">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="accordion-item border-line">
                                <h4 class="title">Eloboosting nedir?</h4>
                                <div class="content">
                                    <p>Eloboosting, bir oyuncunun oyun hesabının daha yüksek bir lig veya seviyeye
                                        yükseltilmesi işlemidir. Profesyonel oyuncular veya eloboosting uzmanları
                                        hesabınızı geliştirirken size yardımcı olur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion-item border-line">
                                <h4 class="title">Boost işlemim ne kadar sürer</h4>
                                <div class="content">
                                    <p>Boost işlemlerinizin süresi bulunduğunuz ranktan ulaşmak istediğiniz ranka göre
                                        değişkenlik gösterirken mümkün olabilecek en kısa sürede bitirilip size teslim
                                        edilir.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion-item border-line">
                                <h4 class="title">Hesabımın banlanma ihtimali var mı ?</h4>
                                <div class="content">
                                    <p>Boost işlemi esnasında hiçbir şekilde 3. parti yazılım kullanılmaz fakat oyun
                                        kuralları gereği hesap paylaşımı yasak olduğu için çok küçükte olsa bir banlanma
                                        riski mevcuttur.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion-item border-line">
                                <h4 class="title">Eloboosting hizmetinizin fiyatları nedir?</h4>
                                <div class="content">
                                    <p>Fiyatlar, oyun, hedef seviye ve hizmetin hızı gibi faktörlere bağlı olarak
                                        değişebilir. Detaylı fiyatlandırma bilgisi için web sitemizi ziyaret edin veya
                                        bizimle iletişime geçin.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion-item border-line">
                                <h4 class="title">İşlem sırasında destek alabilir miyim?</h4>
                                <div class="content">
                                    <p>Evet, işlem sırasında herhangi bir sorunuz veya endişeniz olduğunda 7/24 müşteri
                                        desteği sunuyoruz. Sorularınızı çözmek için her zaman buradayız.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="accordion-item border-line">
                                <h4 class="title">Hangi özelliklere sahip oyuncularla çalışıyorsunuz?</h4>
                                <div class="content">
                                    <p>Oyuncu seçiminde yüksek dereceli, profesyonel ve güvenilir boosterları tercih
                                        ediyoruz. Müşterilerimize en iyi hizmeti sunmak için dikkatli bir şekilde oyuncu
                                        seçiyoruz.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-banner spdtb layout-07 overflow-hidden">
            <div class="container">
                <div class="inner spdtb bg-dark rounded-5">
                    <div class="content pdr100">
                        <div class="heading heading-alway-white mb32">
                            <h2 class="heading-title size-l" style="font-size: 35px;">Discord sunucumuza katılın ve
                                topluluğumuzun bir parçası olun.</h2>

                        </div>
                        <div class="button-wrap">
                            <a href="contact-01.html" class="button bg-success" title="Join Tournament"><img
                                    src="assets/images/dc-icon.png"
                                    style="height: 40px; width: 40px; margin-right: 15px;" alt=""><span
                                    style="color:white;">Discord'a Katıl</span></a>
                        </div>
                    </div>
                    <img class="wow animate__fadeInLeft" style="height: 440px;  object-fit: cover; margin-left: 50px;"
                        src="{{asset('assets/images/agentgrup.png')}}/" alt="Banner">
                </div>
            </div>
        </section>
    </div><!-- SITE CONTENT -->
</main>
<!-- END SITE MAIN -->

@endsection
