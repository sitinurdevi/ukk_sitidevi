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
                                                <img width="100%" src="https://img.inews.co.id/media/600/files/networks/2024/10/07/e5a0d_penyuluhan.jpg" alt="">
                                          </div>
                                          <div class="card-body">
                                                <i class="bi bi-calendar2-week"> 2024-10-07 14:27 WIB</i>
                                                <h3>Sosialisai Larangan Knalpot Brong</h3>
                                                <a href="/berita1" class="card-link">Baca selengkapnya</a>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-lg-4">
                                    <div class="card h-100">
                                          <div class="card-header">
                                                <img width="100%" src="https://assets.radartasik.id/main/2025/01/SMKn-4-tasikmalaya.webp" alt="">
                                          </div>
                                          <div class="card-body">
                                                <i class="bi bi-calendar2-week"> 2024-07-24 11:52 WIB</i>
                                                <h3>Peresmian Safety Riding Lab</h3>
                                                <a href="/berita2">Baca selengkapnya</a>
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
                                                <a href="/berita3">Baca selengkapnya</a>
                                          </div>
                                    </div>
                              </div>
                        </div>
                        <div class="row mt-4">
                              <div class="col-lg-4">
                                    <div class="card h-100">
                                          <div class="card-header">
                                                <img width="100%" src="https://news.bsi.ac.id/wp-content/uploads/2024/07/Dokumen-1-750x430.jpeg" alt="">
                                          </div>
                                          <div class="card-body">
                                                <i class="bi bi-calendar2-week"> 2023-03-02 13:55 WIB</i>
                                                <h3>Aplikasi SIMORING Dari Universitas BSI Untuk PKL</h3>
                                                <a href="/berita4">Baca selengkapnya</a>
                                          </div>
                                    </div>
                              </div>
                              <div class="col-lg-4">
                                    <div class="card h-100">
                                          <div class="card-header">
                                                <img width="100%" src="https://assets.jabarekspres.com/main/2024/05/WhatsApp-Image-2024-05-20-at-13.22.51-1200x675.webp" alt="">
                                          </div>
                                          <div class="card-body">
                                                <i class="bi bi-calendar2-week"> 2023-03-02 13:55 WIB</i>
                                                <h3>SMKN 4 Tasikmalaya Tekankan Keselamatan Berkendara</h3>
                                                <a href="/berita5">Baca selengkapnya</a>
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