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
<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('users/type/user') || Request::is('users/create')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true" >
	<a href="{{ url('users/type/user') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon id="Shape" points="0 0 24 0 24 24 0 24"></polygon>
					<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
					<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero"></path>
				</g>
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('User Management') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('users/type/user')) kt-menu__item--open kt-menu__item--here @endif"  aria-haspopup="true">
				<a  href="{{ url('users/type/user') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('User List') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('users/create')) kt-menu__item--open kt-menu__item--here @endif"  aria-haspopup="true">
				<a  href="{{ url('users/create') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Add New') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('packages') || Request::is('packages/create')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('packages') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect id="bound" x="0" y="0" width="24" height="24"></rect>
					<path d="M20.4061385,6.73606154 C20.7672665,6.89656288 21,7.25468437 21,7.64987309 L21,16.4115967 C21,16.7747638 20.8031081,17.1093844 20.4856429,17.2857539 L12.4856429,21.7301984 C12.1836204,21.8979887 11.8163796,21.8979887 11.5143571,21.7301984 L3.51435707,17.2857539 C3.19689188,17.1093844 3,16.7747638 3,16.4115967 L3,7.64987309 C3,7.25468437 3.23273352,6.89656288 3.59386153,6.73606154 L11.5938615,3.18050598 C11.8524269,3.06558805 12.1475731,3.06558805 12.4061385,3.18050598 L20.4061385,6.73606154 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
					<polygon id="Combined-Shape-Copy" fill="#000000" points="14.9671522 4.22441676 7.5999999 8.31727912 7.5999999 12.9056825 9.5999999 13.9056825 9.5999999 9.49408582 17.25507 5.24126912"></polygon>
				</g>
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Packages') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('packages')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('packages') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Packages') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('packages/create')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('packages/create') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Add New') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('offline_payment/create') || Request::is('members/payment_history')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('offline_payment/create') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect id="bound" x="0" y="0" width="24" height="24"></rect>
					<rect id="Rectangle" fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"></rect>
					<rect id="Rectangle-Copy-3" fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"></rect>
					<path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" id="Combined-Shape" fill="#000000"></path>
				</g>
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Payments') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('offline_payment/create')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('offline_payment/create') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Offline Payment') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('members/payment_history')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('members/payment_history') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Payment History') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('languages') || Request::is('languages/create')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('languages') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect x="0" y="0" width="24" height="24"/>
					<path d="M13,18.9450712 L13,20 L14,20 C15.1045695,20 16,20.8954305 16,22 L8,22 C8,20.8954305 8.8954305,20 10,20 L11,20 L11,18.9448245 C9.02872877,18.7261967 7.20827378,17.866394 5.79372555,16.5182701 L4.73856106,17.6741866 C4.36621808,18.0820826 3.73370941,18.110904 3.32581341,17.7385611 C2.9179174,17.3662181 2.88909597,16.7337094 3.26143894,16.3258134 L5.04940685,14.367122 C5.46150313,13.9156769 6.17860937,13.9363085 6.56406875,14.4106998 C7.88623094,16.037907 9.86320756,17 12,17 C15.8659932,17 19,13.8659932 19,10 C19,7.73468744 17.9175842,5.65198725 16.1214335,4.34123851 C15.6753081,4.01567657 15.5775721,3.39010038 15.903134,2.94397499 C16.228696,2.49784959 16.8542722,2.4001136 17.3003976,2.72567554 C19.6071362,4.40902808 21,7.08906798 21,10 C21,14.6325537 17.4999505,18.4476269 13,18.9450712 Z" fill="#000000" fill-rule="nonzero"/>
					<circle fill="#000000" opacity="0.3" cx="12" cy="10" r="6"/>
				</g>
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Languages') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('languages')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('languages') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('All Language') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('languages/create')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('languages/create') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Add New') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('features') || Request::is('faqs') || Request::is('administration/theme_option')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('features') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect x="0" y="0" width="24" height="24"/>
					<path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>
					<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>
				</g>
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Website Settings') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('features')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('features') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Software Features') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('faqs')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('faqs') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Knowledge Base') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('administration/theme_option')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('administration/theme_option') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Theme Options') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>

<li class="kt-menu__item kt-menu__item--submenu kt-menu__item--rel @if(Request::is('administration/general_settings') || Request::is('email_templates') || Request::is('administration/currency_rates') || Request::is('administration/backup_database')) kt-menu__item--open @endif" data-ktmenu-submenu-toggle="hover" aria-haspopup="true">
	<a href="{{ url('administration/general_settings') }}" class="kt-menu__link kt-menu__toggle">
		<span class="kt-menu__link-icon">
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<rect id="Bound" opacity="0.200000003" x="0" y="0" width="24" height="24"></rect>
					<path d="M4.5,7 L9.5,7 C10.3284271,7 11,7.67157288 11,8.5 C11,9.32842712 10.3284271,10 9.5,10 L4.5,10 C3.67157288,10 3,9.32842712 3,8.5 C3,7.67157288 3.67157288,7 4.5,7 Z M13.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L13.5,18 C12.6715729,18 12,17.3284271 12,16.5 C12,15.6715729 12.6715729,15 13.5,15 Z" id="Combined-Shape" fill="#000000" opacity="0.3"></path>
					<path d="M17,11 C15.3431458,11 14,9.65685425 14,8 C14,6.34314575 15.3431458,5 17,5 C18.6568542,5 20,6.34314575 20,8 C20,9.65685425 18.6568542,11 17,11 Z M6,19 C4.34314575,19 3,17.6568542 3,16 C3,14.3431458 4.34314575,13 6,13 C7.65685425,13 9,14.3431458 9,16 C9,17.6568542 7.65685425,19 6,19 Z" id="Combined-Shape" fill="#000000"></path>
				</g>
			</svg>
		</span>
		<span class="kt-menu__link-text">{{ _lang('Administration') }}</span>
		<i class="kt-menu__ver-arrow la la-angle-right"></i>
	</a>
	<div class="kt-menu__submenu ">
		<span class="kt-menu__arrow"></span>
		<ul class="kt-menu__subnav">
			<li class="kt-menu__item @if(Request::is('administration/general_settings')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('administration/general_settings') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('General Settings') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('email_templates')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('email_templates') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Email Template') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('administration/currency_rates')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('administration/currency_rates') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Exchange Rates') }}</span>
				</a>
			</li>
			<li class="kt-menu__item @if(Request::is('administration/backup_database')) kt-menu__item--open @endif"  aria-haspopup="true">
				<a  href="{{ url('administration/backup_database') }}" class="kt-menu__link ">
					<i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
					<span class="kt-menu__link-text">{{ _lang('Database Backup') }}</span>
				</a>
			</li>
		</ul>
	</div>
</li>