<b>View中添加子View，并且给子视图传递值</b>
<br>
@forelse ($vars as $va)
    <li>  <a href={{ $va['id'] }}  target="view_window"> {{ $va['name'] }} </a></li>
@empty
    <p>No city</p>
@endforelse
<br>
<br>