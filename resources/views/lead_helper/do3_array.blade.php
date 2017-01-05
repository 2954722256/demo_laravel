<h2>一些变量的调用</h2>
<br>
<@forelse ($vars as $va)
    <li>  <a href={{ $va['id'] }}  target="view_window"> {{ $va['name'] }} </a></li>
@empty
    <p>No city</p>
@endforelse