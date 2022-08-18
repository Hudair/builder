@php $permissions = permission_list(); @endphp

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('dashboard')) kt-menu__item--open kt-menu__item--here @endif"  >
	<a href="{{ url('dashboard') }}" class="kt-menu__link">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect id="bound" x="0" y="0" width="24" height="24"></rect>
					<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
					<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" id="Combined-Shape" fill="#000000"></path>
				</g>
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Dashboard') }}</span>
	</a>
</li>


@if( has_feature('websites_limit') )
	<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('projects') || Request::is('projects/create')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
		<a href="{{ url('projects') }}" class="kt-menu__link kt-menu__toggle">
			<span class="kt-menu__link-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<rect id="bound" x="0" y="0" width="24" height="24"></rect>
						<path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
						<polygon id="Combined-Shape-Copy" fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912"></polygon>
					</g>
				</svg>
			</span>
			<span class="kt-menu__link-text">{{ _lang('Projects') }}</span>
			<i class="kt-menu__ver-arrow la la-angle-right"></i>
		</a>
		<div class="kt-menu__submenu ">
			<span class="kt-menu__arrow"></span>
			<ul class="kt-menu__subnav">
				<li class="kt-menu__item @if(Request::is('projects')) kt-menu__item--open @endif"  aria-haspopup="true">
					<a  href="{{ url('projects') }}" class="kt-menu__link ">
						<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
						<span class="kt-menu__link-text">{{ _lang('Projects') }}</span>
					</a>
				</li>
				<li class="kt-menu__item @if(Request::is('projects/create')) kt-menu__item--open @endif"  aria-haspopup="true">
					<a  href="{{ url('projects/create') }}" class="kt-menu__link ">
						<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
						<span class="kt-menu__link-text">{{ _lang('Add New') }}</span>
					</a>
				</li>
			</ul>
		</div>
	</li>
@endif