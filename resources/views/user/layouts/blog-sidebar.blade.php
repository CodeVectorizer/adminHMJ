<aside class="sidebar col-md-4 col-sm-12">              
    <div class="col-md-12 sidebar-link">
        <h4 class="sidebar title-section">Berita Terbaru</h4>
        @foreach ($data['blogsTab'] as $artikel)                        
            <a href="{{ route('blog.detail',['artikel' => $artikel->slug]) }}" class="subtitle-section article-link">{{ $artikel->judul }}</a>                   
        @endforeach
    </div>
    <div class="col-md-12 sidebar-link">
        <h4 class="sidebar title-section">Kategori</h4>
        <ul>
            @foreach($data['blogKategori'] as $kategori)
            <li> <a href="{{ route('blog.kategori',['kategori' => strtolower($kategori['kategori'])]) }}" class="subtitle-section">{{$kategori->kategori}}</a></li>            
            @endforeach
        </ul>
    </div>
    <div class="col-md-12 sidebar-link">
        <h4 class="sidebar title-section">Link</h4>
        <ul>
            <li><a href="https://www.polije.ac.id" class="subtitle-section">Politeknik Negeri Jember</a></li>
            <li><a href="http://jti.polije.ac.id" class="subtitle-section">Jurusan Teknologi Informasi
                    Polije</a></li>            
            <li><a href="https://www.instagram.com/bempolije" class="subtitle-section">BEM KM POLIJE</a></li>
                
        </ul>
    </div>
</aside>