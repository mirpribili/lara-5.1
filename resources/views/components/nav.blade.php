<?//div.row>div.col-rx-5{left}+div.col-rx-2{logo}+div.col-rx-5{Right}?>
<div class="row">
    <div class="col-xs-5">
        @foreach($menu['left']as $item)
            <a href="{{$item->url}}">{{$item->title}}</a>
        @endforeach
    </div>
    <div class="col-xs-2">logo</div>
    <div class="col-xs-5">
        @foreach($menu['right']as $item)
            <a href="{{$item->url}}">{{$item->title}}</a>
        @endforeach
    </div>
</div>
