@extends('layouts.default')  
<style>
    .item-table th td {
        text-align: center;
    }
    .upl-btn {
        padding: 7px 18px;
        border: 2px solid darkorange;
        border-radius: 5px;
        font-size: 12px;
        font-weight: bold;
        color: darkorange;
        background-color: white;
        display: inline-block;
        text-decoration: none;
    }
    .upl-btn:hover {
        background-color: darkorange;
        color: white;
        transition: 0.5s;
    }
    .del-btn {
        padding: 7px 18px;
        border: 2px solid turquoise;
        border-radius: 5px;
        font-size: 12px;
        font-weight: bold;
        color: turquoise;
        background-color: white;
        display: inline-block;
        text-decoration: none;
    }
    .del-btn:hover {
        background-color: turquoise;
        color: white;
        transition: 0.5s;
    }
    .date-item {
        text-align: center;
        margin: 5px 0;
    }
    .task-item {
        border: 1px solid lightgrey;
        border-radius: 5px;
        width: 90%;
        height: 28px;
        padding-left: 10px;
        margin: 5px 0;
    }
    .btn-box {
        text-align: center;
        margin: 5px 0;
    }
    .item-table {
        width: 100%;
        margin: 30px 0;
    }
    .item-table tr {
        margin: 5px;
    }
</style>
@section('task')
@if (count($errors) > 0)
<ul>
  @foreach ($errors->all() as $error)
  <li>
    {{$error}}
  </li>
  @endforeach
</ul>
@endif
<table class='item-table'>
    <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
    </tr>
    @foreach($todos as $todo)
    <tr>
        <td class='date-item'>{{$todo->created_at}}</td>
        <form method="post" action="{{ route('todo.update') }}">
        @csrf
            <td>
                <input type="text"  name='content' value='{{ $todo->content }}' class='task-item'>
            </td>
            <input type='hidden' name='id' value='{{ $todo->id }}'>
            <td class='btn-box'><input type='submit' class='upl-btn' value='更新'></td>
        </form>
        <form method="post" action="{{ route('todo.delete') }}">
        @csrf
            <input type='hidden' name='id' value='{{ $todo->id }}'>
            <td class='btn-box'><input type='submit' class='del-btn' value='削除'></td>
        </form>
    </tr>
    @endforeach
</table>
@endsection