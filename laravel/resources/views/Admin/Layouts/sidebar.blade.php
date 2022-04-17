<div class="sticky">
    <div class="horizontal-main hor-menu clearfix side-header">
        <div class="horizontal-mainwrapper container clearfix">
            <!--Nav-->
            <nav class="horizontalMenu clearfix">
                <ul class="horizontalMenu-list">
                    @foreach ($MenuAdmin as $item)
                    @php
                    $parent = $item->child()->where('view',1)->orderby('tartib')
                    ->get();
                    $sub='';
                    $sub1="";
                    if($parent->count())
                    {
                    $sub="sub-icon";
                    $sub1="dropdown";
                    }
                    @endphp
                    <li aria-haspopup="true"><a href="{{$item->link}}" class="{{$sub}}">{!!$item->pic!!}{{$item->name}}
                            @if ($parent->count())
                            <i class="fe fe-chevron-down horizontal-icon"></i>
                            @endif
                        </a>
                        @if ($parent->count())
                        <ul class="sub-menu">
                            @foreach($parent as $pp)
                            <li><a class="slide-item" href="{{$pp->link}}">{{$pp->name}}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    @endforeach
                    </li>
                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>