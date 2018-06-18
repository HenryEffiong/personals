<!-- Sidebar -->
    <aside class="menu">
        <div class="left-aside-container">

            <!-- User profile -->
            <div class="user-profile"></div>
            <!-- /User profile -->

<!-- Main menu -->
<div class="menu-container handheld">
                <ul class="sidebar-accordion">

                    <li><a href="{{route('cms/event')}}"><i class="icon-briefcase"></i> <span>Events</span></a>
                        <ul>
                            <li><a href="{{route('cms/event')}}">All</a></li>
                            <li><a href="{{route('cms/eventcreate')}}">Create New Event</a></li>
                        </ul>
                    </li>


                    <li><a href="#"><i class="icon-briefcase"></i> <span>Members</span></a>
                        <ul>
                            <li><a href="{{route('cms/member')}}">All</a></li>
                            <li><a href="{{route('cms/membercreate')}}">Create New Member</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-briefcase"></i> <span>Titles</span></a>
                        <ul>
                            <li><a href="{{route('cms/title')}}">All</a></li>
                            <li><a href="{{route('cms/titlecreate')}}">Create New Title</a></li>
                        </ul>
                    </li>

                    <li><a href="#"><i class="icon-briefcase"></i> <span>Lists</span></a>
                        <ul>
                            <li><a href="{{route('cms/list')}}">All</a></li>
                            <li><a href="{{route('cms/listcreate')}}">Create New List</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="icon-briefcase"></i> <span>Galleries</span></a>
                        <ul>
                            <li><a href="{{route('cms/gallery')}}">All</a></li>
                            <li><a href="{{route('cms/gallerycreate')}}">Create New Picture</a></li>
                        </ul>
                    </li>
                    <li><a href="{{route('cms/volunteer')}}"><i class="icon-comment-discussion"></i> <span>Volunteers</span></a></li>
                    <li><a href="{{route('cms/contact')}}"><i class="icon-comment-discussion"></i> <span>Contact Messages</span></a></li>
                    <li><a href="{{route('cms/setting.show', 1)}}"><i class="icon-comment-discussion"></i> <span>Site Settings</span></a></li>

</ul>

<script>
if ($.fn.navAccordion) {
    $('.sidebar-accordion').each(function() {
        $(this).navAccordion({
            eventType: 'click',
            hoverDelay: 100,
            autoClose: true,
            saveState: false,
            disableLink: true,
            speed: 'fast',
            showCount: false,
            autoExpand: true,
            classExpand: 'acc-current-parent'
        });
    });
}

var pgurl = window.location.href.substr(window.location.href.lastIndexOf("http://followtechnique.com/")+1);
$(".sidebar ul.sidebar-accordion li a").each(function(){
    if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
    {
        $(this).addClass(" active");
        $(this).parent().parent().css("display","block");
        $(this).parent().parent().parent().addClass(" active");
        $(this).parent().parent().parent().parent().css("display","block");
        $(this).parent().parent().parent().parent().parent().addClass(" active");
    }
})
$(".leftmenu ul.sidebar-accordion li a").each(function(){
    if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
    {
        $(this).addClass(" active");
        $(this).parent().parent().css("display","block");
        $(this).parent().parent().parent().addClass(" active");
        $(this).parent().parent().parent().parent().css("display","block");
        $(this).parent().parent().parent().parent().parent().addClass(" active");
    }
})
</script>
 </div>

            <div class="menu-container screen">
    <ul class="sidebar-accordion">

    <li><a href="#"><i class="icon-display4"></i><span class="list-label"> Dashboard</span></a></li>
    {{--<li><a href="#"><i class="icon-chart"></i><span class="list-label"> Analytics Dashboard</span></a></li>--}}
    {{--<li><a href="#"><i class="icon-store2"></i><span class="list-label"> Store dashboard</span></a></li>--}}

    {{-- <li class="list-title">Apps</li> --}}
    {{-- <li><a href="#"><i class="icon-cart2"></i> <span>E-commerce</span></a>
        <ul>
            <li><a href="ecom_products3f4e.html?t=metalgrey-material">Products</a></li>
            <li><a href="ecom_product3f4e.php?t=metalgrey-material">Single product</a></li>
            <li><a href="ecom_orders3f4e.html?t=metalgrey-material">Orders list</a></li>
            <li><a href="ecom_cart3f4e.php?t=metalgrey-material">My Cart</a></li>
            <li><a href="ecom_checkout3f4e.html?t=metalgrey-material">Checkout</a></li>
        </ul>
    </li> --}}
    {{--<li><a href="#"><i class="icon-user"></i> <span>Registered Users</span></a></li>--}}
    {{--<li><a href=""><i class="icon-comment-discussion"></i> <span>Orders</span></a></li>--}}
    {{----}}
    <li><a href="{{route('cms/event')}}"><i class="icon-briefcase"></i> <span>Events</span></a>
        <ul>
            <li><a href="{{route('cms/event')}}">All</a></li>
            <li><a href="{{route('cms/eventcreate')}}">Create New Event</a></li>
        </ul>
    </li>


     <li><a href="#"><i class="icon-briefcase"></i> <span>Members</span></a>
        <ul>
            <li><a href="{{route('cms/member')}}">All</a></li>
            <li><a href="{{route('cms/membercreate')}}">Create New Member</a></li>
        </ul>
    </li>
    <li><a href="#"><i class="icon-briefcase"></i> <span>Titles</span></a>
        <ul>
            <li><a href="{{route('cms/title')}}">All</a></li>
            <li><a href="{{route('cms/titlecreate')}}">Create New Title</a></li>
        </ul>
    </li>

    <li><a href="#"><i class="icon-briefcase"></i> <span>Lists</span></a>
        <ul>
            <li><a href="{{route('cms/list')}}">All</a></li>
            <li><a href="{{route('cms/listcreate')}}">Create New List</a></li>
        </ul>
    </li>
    <li><a href="#"><i class="icon-briefcase"></i> <span>Galleries</span></a>
        <ul>
            <li><a href="{{route('cms/gallery')}}">All</a></li>
            <li><a href="{{route('cms/gallerycreate')}}">Create New Picture</a></li>
        </ul>
    </li>
    <li><a href="{{route('cms/volunteer')}}"><i class="icon-comment-discussion"></i> <span>Volunteers</span></a></li>
    <li><a href="{{route('cms/contact')}}"><i class="icon-comment-discussion"></i> <span>Contact Messages</span></a></li>

</ul>

<script>
if ($.fn.navAccordion) {
    $('.sidebar-accordion').each(function() {
        $(this).navAccordion({
            eventType: 'click',
            hoverDelay: 100,
            autoClose: true,
            saveState: false,
            disableLink: true,
            speed: 'fast',
            showCount: false,
            autoExpand: true,
            classExpand: 'acc-current-parent'
        });
    });
}

var pgurl = window.location.href.substr(window.location.href.lastIndexOf("http://followtechnique.com/")+1);
$(".sidebar ul.sidebar-accordion li a").each(function(){
    if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
    {
        $(this).addClass(" active");
        $(this).parent().parent().css("display","block");
        $(this).parent().parent().parent().addClass(" active");
        $(this).parent().parent().parent().parent().css("display","block");
        $(this).parent().parent().parent().parent().parent().addClass(" active");
    }
})
$(".leftmenu ul.sidebar-accordion li a").each(function(){
    if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
    {
        $(this).addClass(" active");
        $(this).parent().parent().css("display","block");
        $(this).parent().parent().parent().addClass(" active");
        $(this).parent().parent().parent().parent().css("display","block");
        $(this).parent().parent().parent().parent().parent().addClass(" active");
    }
})
</script>
            </div>
            <!-- /Main menu -->
            <style>
            @media screen and (min-width: 1024px){
                .menu-container.screen{
                    display: inherit;
                }
                .menu-container.handheld{
                    display: none;
                }
            }
            @media screen and (max-width: 1023px){
                .menu-container.screen{
                    display: none;
                }
                .menu-container.handheld{
                    display: inherit;
                }
            }
            </style>
</div>
</aside>