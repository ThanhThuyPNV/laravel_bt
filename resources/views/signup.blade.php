<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        @csrf 
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Nhập tên" name="name">
        </div>
        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" placeholder="Nhập tuổi" name="age">
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" name="date">
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" placeholder="Nhập số điện thoại" name="phone">
        </div>
        <div class="form-group">
            <label>Web</label>     
            <input type="text" class="form-control" placeholder="Nhập link trang web" name="web">
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="add">
</div>
        <button type="submit" class="btn btn-primary">Tính</button>

        <div class="display-infor">
            @if(isset ($user))
            {
                <p>Name: {{$user ['name']}}</p>
                <p>Age: {{$user ['age']}}</p>
                <p>Date: {{$user ['date']}}</p>
                <p>Phone: {{$user ['phone']}}</p>
                <p>Web: {{$user ['web']}}</p>
                <p>Address: {{$user ['add']}}</p>
            }
            @endif
        </div>
    </form>
    
</body>
</html>