<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">

      
        <li class="nav-item">
          <a class="nav-link " href="/admin">
            <i class="bi bi-speedometer"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <!-- End Dashboard Nav -->

        <li class="nav-item">
          <!-- collapsed -->
          <a class="nav-link collapsed" data-bs-target="#berita-nav" data-bs-toggle="collapse" >
            <i class="bi bi-journal-text"></i><span>Kelola Pertanyaan</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
          <ul id="berita-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
            <li>
              <a href="/admin/kategori">
                <i class="bi bi-circle"></i><span>Kategori</span>
              </a>
            </li>
            
            <li>
              <a href="/admin/pertanyaan">
                <i class="bi bi-circle"></i><span>Pertanyaan</span>
              </a>
            </li>
      
            
          </ul>
        </li><!-- End Pertanyaan Nav -->
        

        {{-- <li class="nav-item">
          <a class="nav-link collapsed" data-bs-target="#jurnalis-nav" data-bs-toggle="collapse" href="#">
            <i class="bi bi-person-fill-gear"></i><span>Jurnalis</span><i class="bi bi-chevron-down ms-auto"></i>
          </a>
        </li> --}}

        <li class="nav-item">
          <a class="nav-link collapsed" href="/komentar">
            <i class="bi bi-chat-left-text-fill"></i>
            <span>Hasil</span>
          </a>
        </li>

        {{-- <li class="nav-item">
          <a class="nav-link collapsed" href="/analisis">
            <i class="bi bi-graph-up"></i>
            <span>Analisis Berita</span>
          </a>
        </li> --}}
  
    </ul>

  </aside>