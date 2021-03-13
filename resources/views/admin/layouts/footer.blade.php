
<footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; {{date('Y')}} <div class="bullet"></div> Developed By <a href="#">Biro Sistem Informasi</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="{{ asset('dist/assets/js/stisla.js') }}"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('dist/assets/js/page/modules-datatables.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/dataTables.bootstrap4.min.js" integrity="sha512-OQlawZneA7zzfI6B1n1tjUuo3C5mtYuAWpQdg+iI9mkDoo7iFzTqnQHf+K5ThOWNJ9AbXL4+ZDwH7ykySPQc+A==" crossorigin="anonymous"></script>


  <!-- Template JS File -->
  <script src="{{ asset('dist/assets/js/scripts.js') }}"></script>
  <script src="{{ asset('dist/assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  @yield('js-pages')
  <!-- <script type="text/javascript" src="{{ asset('dist/assets/js/page/bootstrap-modal.js')}}"> -->

  {{-- </script> --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script> --}}
<script src="https://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>

{{-- <script type="text/javascript">
  var path = "{{ route('autocomplete') }}";
  let hasil = "";
  let jancok;
  const search = document.querySelector('#search');
  const searchItem = document.querySelectorAll(".search-item");
  const searchResult = document.querySelector('.search-result');
  const result = (data) => {
    const items = data;    
    const listItem = items.map(i => {
      return (
        `<div class='search-item'><a href='#''>${i.biro}s</a><a href='#' class='search-close'><i class='fas fa-times'></i></a></div>`        
      );
    });
    console.log(listItem);
    return listItem;    
  };
function resetSearch(){
  searchResult.innerHTML = "";
  console.log('halo');
}
const fetchData = async (query) => {
  jancok = await fetch(`${path}?querys=${query}`, {
    mode: 'cors'
  }).then(res => {    
    return res.json();
  });
  console.log(jancok);
}


  const getData = async () => {    
    await fetchData();
    console.log(jancok);
    jancok.slice(0,10).forEach((i) => {
     hasil += `<div class='search-item'><a href='#'>${i.biro}s</a><a href='#' class='search-close'><i class='fas fa-times'></i></a></div>`;                              
    });
    searchResult.innerHTML =Ke hasil;
  }
  
  
  getData();
  
  
  
  search.addEventListener('input', (e) => {    
      fetchData(e.target.value);     
      getData();
  })   --}}
  
 
{{-- </script> --}}
{{-- <script type="text/javascript">
  var path = "{{ route('autocomplete') }}";
  let hasil = "";
  const search = document.querySelector('#search');
  const searchItem = document.querySelectorAll(".search-item");
  const searchResult = document.querySelector('.search-result');
  const result = (data) => {
    const items = data;    
    const listItem = items.map(i => {
      return (
        `<div class='search-item'><a href='#''>${i.biro}s</a><a href='#' class='search-close'><i class='fas fa-times'></i></a></div>`        
      );
    });
    console.log(listItem);
    return listItem;    
  };
function resetSearch(){
  searchResult.innerHTML = "";
  console.log('halo');
}
  function getData(query){
    resetSearch();
    fetch(`${path}?querys=${query}`, {
    mode: 'cors'
  })
  .then(response => response.json())
  .then((data) => {
console.log(data);
    data.slice(0,10).forEach((i) => {
     hasil += `<div class='search-item'><a href='#'>${i.biro}s</a><a href='#' class='search-close'><i class='fas fa-times'></i></a></div>`;                              
    });
  });
  searchResult.innerHTML = "";

  searchResult.innerHTML = hasil;
  }
  
  
  
  search.addEventListener('keypress', (e) => {   
    const resetCok = document.querySelector('.search-result');
    resetCok.innerHTML = "";
    resetCok.insertAdjacentHTML("afterbegin","")

      getData(e.target.value);     
  })   --}}
  
 
{{-- </script> --}}

<script type="text/javascript">
  var path = "{{ route('autocomplete') }}";

  $('#search').on('keyup',function(e){
    
  $value=$(this).val();
  $.ajax({
  type : 'get',
  url : path,
  data:{'search':$value},
  success:function(data){    
  if(!e.target.value) {
      $('.search-biro').html('');
    }else {
  $('.search-biro').html(data);

    }
  }
  });
  })
  </script>
  <script type="text/javascript">
  $.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
  </script>
</body>
</html>
