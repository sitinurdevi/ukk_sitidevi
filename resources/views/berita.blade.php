<x-header/>

      <div class="container">
      <!-- SECTION BERITA  -->
            <div class="row mt-5">
                  <div class="col-lg-12">
                        <h2>Berita</h2>
                        <p>Aktivitas terbaru SMKN 4 Tasikmalaya</p>
                        <div class="row">
                              @foreach ($beritas as $item )
                              <div class="col-lg-4">
                                    <div class="card h-100">
                                          <div class="card-header">
                                                <img width="100%" src={{ $item->gambar }} alt="">
                                          </div>
                                          <div class="card-body">
                                                <i class="bi bi-calendar2-week">{{ $item->waktu }}</i>
                                                <h3>{{ $item->judul }}</h3>
                                                <a href={{ $item->link }} class="card-link">Baca selengkapnya</a>
                                          </div>
                                    </div>
                              </div>
                              @endforeach
                              <div class="col-lg-4">
                                    <div class="card h-100">
                                          <div class="card-header">
                                                <img width="100%" src="https://assets.radartasik.id/main/2025/01/SMKn-4-tasikmalaya.webp" alt="">
                                          </div>
                                          <div class="card-body">
                                                <i class="bi bi-calendar2-week"> 2024-07-24 11:52 WIB</i>
                                                <h3>Peresmian Safety Riding Lab</h3>
                                                <a href="https://www.pikiran-rakyat.com/otomotif/pr-018109177/honda-resmikan-safety-riding-lab-di-smkn-4-tasikmalaya-ciptakan-bibit-keselamatan-di-jawa-barat?page=all" class="card-link">Baca selengkapnya</a>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-lg-4">
                                    <div class="card h-100">
                                          <div class="card-header">
                                                <img width="100%" src="https://asset-2.tribunnews.com/jabar/foto/bank/images/Peresmian-antara-PT-Daya-Adicipta-Motora-dan-SMK-Negeri-4-Tasikmalaya.jpg" alt="">
                                          </div>
                                          <div class="card-body">
                                                <i class="bi bi-calendar2-week"> 2023-03-02 13:55 WIB</i>
                                                <h3>DAM Jalin Kerjasama Dengan SMKN 4 Tasikmalaya</h3>
                                                <a href="https://www.ayotasik.com/berita-tasik/337810758/sinergi-bagi-negeri-dam-jalin-kerjasama-dengan-smkn-4-tasikmalaya" class="card-link">Baca selengkapnya</a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
      <!-- TUTUP SECTION BERITA  -->
       </div>
       
<x-footer/>

      <script src="./script/bs/bootstrap.min.js"></script>
</body>
</html>