<h2>下面是数据库中，城市的内容！！</h2>
<br>
<@forelse ($city as $ci)
    <li> {{ $ci['id'] }} in {{ $ci['name'] }}</li>
@empty
    <p>No city</p>
@endforelse