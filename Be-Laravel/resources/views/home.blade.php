<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chủ</title>
  <!-- Link CSS của Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Sách giả </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="#">Yêu thích</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Giỏ hàng</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Dăng nhập</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Đăng kí</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>

  <div class="container mt-4">
    <h1 class="text-center mb-4">Danh sách sản phẩm</h1>
    <div class="row">
      <!-- Sản phẩm 1 -->
      @if(isset($products) && is_object($products))
                @foreach($products as $pro)
      <div class="col-md-3 mb-4">
        <div class="card">
          <img src="{{$pro->img}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{$pro->title}}</h5>
            <p class="card-text">{{$pro->description}}</p>
            <a href="#" class="btn btn-primary">Xem chi tiết</a>
          </div>
        </div>  
      </div> 
      @endforeach
      @endif    
    </div>
  </div>

  <!-- Script của Bootstrap 5 (để hoạt động các component Javascript của Bootstrap) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
