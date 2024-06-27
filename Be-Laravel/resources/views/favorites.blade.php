<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Yêu Thích</title>
    <link rel="stylesheet" href="styles.css">
</head>
<style>
                    body {
                    font-family: Arial, sans-serif;
                }

                header {
                    display: flex;
                    justify-content: space-between;
                    align-items: center;
                    background-color: #f8f8f8;
                    padding: 10px 20px;
                    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                }

                header .logo {
                    font-size: 24px;
                    font-weight: bold;
                }

                header nav a {
                    margin: 0 15px;
                    text-decoration: none;
                    color: #333;
                }

                header nav a.active {
                    font-weight: bold;
                    color: #007bff;
                }

                header .search-bar {
                    display: flex;
                }

                header .search-bar input {
                    padding: 5px;
                }

                header .search-bar button {
                    padding: 5px 10px;
                    margin-left: 5px;
                    background-color: #007bff;
                    color: white;
                    border: none;
                    cursor: pointer;
                }

                main {
                    padding: 20px;
                    text-align: center;
                }

                .favorites {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 20px;
                    justify-content: center;
                }

                .favorite-item {
                    border: 1px solid #ddd;
                    padding: 10px;
                    text-align: center;
                    width: 200px;
                }

                .favorite-item img {
                    width: 100%;
                    height: auto;
                }

                .favorite-item h2 {
                    font-size: 18px;
                    margin: 10px 0;
                }

                .favorite-item p {
                    font-size: 16px;
                    color: #555;
                }

                .favorite-item form {
                    margin-top: 10px;
                }

                .favorite-item button {
                    padding: 5px 10px;
                    background-color: #007bff;
                    color: white;
                    border: none;
                    cursor: pointer;
                }

                footer {
                    text-align: center;
                    padding: 10px;
                    background-color: #f8f8f8;
                }

</style>
<body>
    <header>
        <div class="logo">ShopLogo</div>
        <nav>
            <a href="/">Trang chủ</a>
            <a href="/shop">Cửa hàng</a>
            <a href="/cart">Giỏ hàng</a>
            <a href="/favorites" class="active">Yêu thích</a>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Tìm kiếm...">
            <button>Tìm</button>
        </div>
    </header>

    <main>
        <h1>Danh Sách Yêu Thích</h1>
        <div class="favorites">
            @foreach($favorites as $item)
            <div class="favorite-item">
                <img src="{{ $item->img }}" alt="{{ $item->name_product }}">
                <h2>{{ $item->name_product }}</h2>
                <p>{{ $item->price }} VND</p>
                {{-- <form action="{{ route('favorites.remove', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Xóa</button>
                </form> --}}
            </div>
            @endforeach
        </div>
    </main>

    <footer>
        <p>&copy; 2024 ShopLogo. All rights reserved.</p>
    </footer>
</body>
</html>
