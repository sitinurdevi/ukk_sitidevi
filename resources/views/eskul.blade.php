<x-header/>

      <div class="container">
      <!-- SECTION ESKUL -->
       <div class="row text-center mt-5">
            <div class="col-lg-12">
                  <h2>Ekstrakurikuler</h2>
                  <div class="row mt-5">

                        <!--kolom 1-->
                        @foreach ($eskuls as $item )
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          {{-- gambar --}}
                                          <img src={{ $item->gambar }} alt="" width="100px" class="rounded-circle mb-3">
                                          {{-- judul --}}
                                          <h4>{{ $item->judul }}</h4>
                                          {{-- deskripsi --}}
                                          <p class="d-none d-lg-block">{{ $item->deskripsi }}</p>
                                    </div>
                              </div>
                        </div>  
                        
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src={{ $item->gambar }} alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>{{ $item->judul }}</h4>
                                          <p class="d-none d-lg-block">{{ $item->deskripsi }}</p>
                                    </div>
                              </div>
                        </div>
                        @endforeach
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/futsal.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Futsal</h4>
                                          <p class="d-none d-lg-block">Melatih keterampilan bermain futsal dengan fokus pada kerjasama tim dan strategi permainan.</p>
                                    </div>
                              </div>
                        </div>

                        <!--kolom 2-->
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/pramuks.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Pramuka</h4>
                                          <p class="d-none d-lg-block">Mengembangkan karakter, keterampilan, dan rasa tanggung jawab melalui kegiatan kepramukaan.</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/PKS.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>PKS</h4>
                                          <p class="d-none d-lg-block">Menanamkan disiplin dan tanggung jawab untuk menjaga ketertiban di lingkungan sekolah.</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/laskar.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Laskar Pustaka</h4>
                                          <p class="d-none d-lg-block">Meningkatkan minat baca dan pengelolaan perpustakaan untuk mendukung literasi siswa.</p>
                                    </div>
                              </div>
                        </div>

                        <!--kolom 3-->
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/voli.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Voli</h4>
                                          <p class="d-none d-lg-block">Melatih kemampuan bermain voli dengan fokus pada teknik dan kerja sama tim.</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/rohis.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Rohis</h4>
                                          <p class="d-none d-lg-block">Menanamkan nilai-nilai keagamaan Islam melalui kajian, diskusi, dan kegiatan ibadah bersama.</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/IT.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>IT Club</h4>
                                          <p class="d-none d-lg-block">Mengembangkan keterampilan teknologi informasi, termasuk pemrograman, desain grafis, dan jaringan.</p>
                                    </div>
                              </div>
                        </div>

                        <!--kolom 4-->
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/PB.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Bulu Tangkis</h4>
                                          <p class="d-none d-lg-block">Meningkatkan kemampuan bermain bulu tangkis sambil menjaga kesehatan dan semangat sportivitas.</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/CIN.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Cinematografi</h4>
                                          <p class="d-none d-lg-block">Mengajarkan seni pembuatan film, mulai dari pengambilan gambar, editing, hingga produksi video kreatif.</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/PMR.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>PMR</h4>
                                          <p class="d-none d-lg-block">Melatih siswa untuk siap siaga dalam memberikan pertolongan pertama dan kegiatan kemanusiaan.</p>
                                    </div>
                              </div>
                        </div>
                  
                        <!--kolom 5-->
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/SNI.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Seni</h4>
                                          <p class="d-none d-lg-block">Mengeksplorasi bakat seni siswa, seperti tari, musik, dan teater.</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/PLH.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>PLH</h4>
                                          <p class="d-none d-lg-block">Mengedukasi tentang pelestarian lingkungan melalui berbagai kegiatan ramah lingkungan.</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/SB.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Sepak Bola</h4>
                                          <p class="d-none d-lg-block">Mengembangkan keterampilan bermain sepak bola sambil meningkatkan daya tahan fisik dan kerjasama tim.</p>
                                    </div>
                              </div>
                        </div>

                        <!--kolom 6-->
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/BS.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Basket</h4>
                                          <p class="d-none d-lg-block">Mengasah keterampilan bermain bola basket dan membangun jiwa kompetitif yang sehat.</p>
                                    </div>
                              </div>
                        </div>
                        <div class="col-4 col-md-3 mb-4">
                              <div class="card h-100 shadow">
                                    <div class="card-body">
                                          <img src="./assets/image/boxi.jpg" alt="" width="100px" class="rounded-circle mb-3">
                                          <h4>Boxing</h4>
                                          <p class="d-none d-lg-block">Melatih teknik tinju untuk kebugaran fisik, kepercayaan diri, dan pengendalian diri.</p>
                                    </div>
                              </div>
                        </div>
                  </div>           
            </div>
       </div>
      <!-- TUTUP SECTION ESKUL -->
       </div>
       
<x-footer/>

      <script src="./script/bs/bootstrap.min.js"></script>
</body>
</html>