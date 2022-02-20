<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todoリスト</title>
    <style>
    h1 {
      font-size:26px;
      color:black;
      margin-left: 30px;
      margin-bottom: 10px;
    }
    .cardbox {
        position: relative;
        background-color: indigo;
        width: 100vw;
        height: 100vh;
    }
    .card {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: white;
        width: 50%;
        border-radius: 10px;
    }
    .card-form {
        display: flex;
        justify-content: space-between;
        margin: 10px 30px;
    }
    .input-item {
        border: 1px solid lightgrey;
        border-radius: 5px;
        width: 80%;
        height: 35px;
    }
    .add-btn {
        padding: 7px 18px;
        border: 2px solid orchid;
        border-radius: 5px;
        font-size: 12px;
        font-weight: bold;
        color: orchid;
        background-color: white;
        display: inline-block;
        text-decoration: none;
    }
    .add-btn:hover {
        background-color: orchid;
        color: white;
        transition: 0.5s;
    }
   
    </style>
  </head>
  <body>
    <div class='cardbox'>
        <div class='card'>
            <h1>Todo List</h1>
            <form  method="post" class='card-form'>
                @csrf
                <input type="text" class='input-item' name='content'>
                <input type='submit' formaction="{{ route('todo.add') }}" class='add-btn' value='追加'>
            </form>
            <div>
            @yield('task')
            </div>
        </div>
    </div>
</body>
</html>