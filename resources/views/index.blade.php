@extends('layout')

@section('title', 'Page Title')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">トップページ兼todo表</div>
        <div class="panel-body">
            追加するコンテンツを記載していく
        </div>

        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>やりたいこと</th>
                        <th>優先度</th>
                        <th>状況</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>コントローラからビューを呼び出して表示</td>
                        <td>高</td>
                        <td>これから</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>データベースから値を取得</td>
                        <td>高</td>
                        <td>これから</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>この表もDBから取り出す</td>
                        <td>低</td>
                        <td>暇つぶしでやろう</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
