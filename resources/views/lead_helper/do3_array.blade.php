<b>变量传递到View</b>
<br>
@forelse ($vars as $va)
    <li>  <a href={{ $va['id'] }}  target="view_window"> {{ $va['name'] }} </a></li>
@empty
    <p>No city</p>
@endforelse
<br>
<br>