@extends('frontend.layouts.master')

@section('content')

{{-- @dd(session('cart')) --}}
<section class="content-wrap">
<div class="container">

    <h3 class="text-center" >Choosed Apartment</h3>
    <div class="row">
        <table class="table table-hover">
            <thead>
                <tr>
                    <td width="5%">SL</td>
                    <td width="15%">Owner</td>
                    <td width="35%">Price</td>
                    <td width="35%">Location</td>
                    <td width="10%">Action</td>
                </tr>
            </thead>
            @php $total =0; $sl =0;@endphp
            <tbody>
                @if (session('cart'))

                  @foreach (session('cart') as $id =>$apartment)
                   @php
                       $total +=$apartment['price'];
                   @endphp
                  <tr>
                      <td>{{++$sl}}</td>
                      <td>{{$apartment['owner_name']}}</td>
                      <td>৳{{$apartment['price']}}</td>
                      <td>{{$apartment['location_name']}}</td>
                      <td>
                          <button class="btn btn-outline-danger"> <a href="{{ route('rent.destroy',[$id]) }}">Delete</a> </button>
                      </td>
                  </tr>
                  @endforeach
                    
                @endif

            </tbody>
            <tfoot>
                <tr>
                    <td><a class="btn btn-info" href="{{url('/all-apartment')}}">Continue browsing</a></td>
                    <td><a class="btn btn-success" href="{{route('rent.checkout')}}">Checkout</a></td>
                    <td colspan="2"></td>
                    <td><strong>Total: ৳{{$total}}</strong></td>
                </tr>
            </tfoot>
        </table>

    </div>

</div>
    
</section>
@endsection




@push('custom-css')

<style>
body {
    font-family: Poppins;
    font-size: 14px;
    font-weight: 300;
    line-height: 20px;
    text-align: left;
    text-transform: none;
}
.main-nav,
.dropdown-menu,
.login-register,
.btn.btn-create-listing,
.logged-in-nav,
.btn-phone-number {
  font-family: Poppins;
  font-size: 14px;
  font-weight: 500;
  text-align: left;
  text-transform: none;
}

.btn,
.form-control,
.bootstrap-select .text,
.sort-by-title,
.woocommerce ul.products li.product .button {
  font-family: Poppins;
  font-size: 14px; 
}

h1, h2, h3, h4, h5, h6, .item-title {
  font-family: Poppins;
  font-weight: 500;
  text-transform: inherit;
}

.post-content-wrap h1, .post-content-wrap h2, .post-content-wrap h3, .post-content-wrap h4, .post-content-wrap h5, .post-content-wrap h6 {
  font-weight: 500;
  text-transform: inherit;
  text-align: inherit; 
}

.top-bar-wrap {
    font-family: Roboto;
    font-size: 15px;
    font-weight: 300;
    line-height: 25px;
    text-align: left;
    text-transform: none;   
}
.footer-wrap {
    font-family: Poppins;
    font-size: 14px;
    font-weight: 300;
    line-height: 25px;
    text-align: left;
    text-transform: none;
}

body,
#main-wrap,
.fw-property-documents-wrap h3 span, 
.fw-property-details-wrap h3 span {
background-color: #f4f4f4; 
}

body,
.form-control,
.bootstrap-select .text,
.item-title a,
.listing-tabs .nav-tabs .nav-link,
.item-wrap-v2 .item-amenities li span,
.item-wrap-v2 .item-amenities li:before,
.item-parallax-wrap .item-price-wrap,
.list-view .item-body .item-price-wrap,
.property-slider-item .item-price-wrap,
.page-title-wrap .item-price-wrap,
.agent-information .agent-phone span a,
.property-overview-wrap ul li strong,
.mobile-property-title .item-price-wrap .item-price,
.fw-property-features-left li a,
.lightbox-content-wrap .item-price-wrap,
.blog-post-item-v1 .blog-post-title h3 a,
.blog-post-content-widget h4 a,
.property-item-widget .right-property-item-widget-wrap .item-price-wrap,
.login-register-form .modal-header .login-register-tabs .nav-link.active,
.agent-list-wrap .agent-list-content h2 a,
.agent-list-wrap .agent-list-contact li a,
.agent-contacts-wrap li a,
.menu-edit-property li a,
.statistic-referrals-list li a,
.chart-nav .nav-pills .nav-link,
.dashboard-table-properties td .property-payment-status,
.dashboard-mobile-edit-menu-wrap .bootstrap-select > .dropdown-toggle.bs-placeholder,
.payment-method-block .radio-tab .control-text,
.post-title-wrap h2 a,
.lead-nav-tab.nav-pills .nav-link,
.deals-nav-tab.nav-pills .nav-link,
.btn-light-grey-outlined:hover,
button:not(.bs-placeholder) .filter-option-inner-inner,
.fw-property-floor-plans-wrap .floor-plans-tabs a,
.products > .product > .item-body > a,
.woocommerce ul.products li.product .price,
.woocommerce div.product p.price, 
.woocommerce div.product span.price,
.woocommerce #reviews #comments ol.commentlist li .meta,
.woocommerce-MyAccount-navigation ul li a {
color: #111111; 
}



a,
a:hover,
a:active,
a:focus,
.primary-text,
.btn-clear,
.btn-apply,
.btn-primary-outlined,
.btn-primary-outlined:before,
.item-title a:hover,
.sort-by .bootstrap-select .bs-placeholder,
.sort-by .bootstrap-select > .btn,
.sort-by .bootstrap-select > .btn:active,
.page-link,
.page-link:hover,
.accordion-title:before,
.blog-post-content-widget h4 a:hover,
.agent-list-wrap .agent-list-content h2 a:hover,
.agent-list-wrap .agent-list-contact li a:hover,
.agent-contacts-wrap li a:hover,
.agent-nav-wrap .nav-pills .nav-link,
.dashboard-side-menu-wrap .side-menu-dropdown a.active,
.menu-edit-property li a.active,
.menu-edit-property li a:hover,
.dashboard-statistic-block h3 .fa,
.statistic-referrals-list li a:hover,
.chart-nav .nav-pills .nav-link.active,
.board-message-icon-wrap.active,
.post-title-wrap h2 a:hover,
.listing-switch-view .switch-btn.active,
.item-wrap-v6 .item-price-wrap,
.listing-v6 .list-view .item-body .item-price-wrap,
.woocommerce nav.woocommerce-pagination ul li a, 
.woocommerce nav.woocommerce-pagination ul li span,
.woocommerce-MyAccount-navigation ul li a:hover {
color: #03c7bb; 
}
.agent-list-position a {
color: #03c7bb!important; 
}

.control input:checked ~ .control__indicator,
.top-banner-wrap .nav-pills .nav-link,
.btn-primary-outlined:hover,
.page-item.active .page-link,
.slick-prev:hover,
.slick-prev:focus,
.slick-next:hover,
.slick-next:focus,
.mobile-property-tools .nav-pills .nav-link.active,
.login-register-form .modal-header,
.agent-nav-wrap .nav-pills .nav-link.active,
.board-message-icon-wrap .notification-circle,
.primary-label,
.fc-event, .fc-event-dot,
.compare-table .table-hover > tbody > tr:hover,
.post-tag,
.datepicker table tr td.active.active,
.datepicker table tr td.active.disabled,
.datepicker table tr td.active.disabled.active,
.datepicker table tr td.active.disabled.disabled,
.datepicker table tr td.active.disabled:active,
.datepicker table tr td.active.disabled:hover,
.datepicker table tr td.active.disabled:hover.active,
.datepicker table tr td.active.disabled:hover.disabled,
.datepicker table tr td.active.disabled:hover:active,
.datepicker table tr td.active.disabled:hover:hover,
.datepicker table tr td.active.disabled:hover[disabled],
.datepicker table tr td.active.disabled[disabled],
.datepicker table tr td.active:active,
.datepicker table tr td.active:hover,
.datepicker table tr td.active:hover.active,
.datepicker table tr td.active:hover.disabled,
.datepicker table tr td.active:hover:active,
.datepicker table tr td.active:hover:hover,
.datepicker table tr td.active:hover[disabled],
.datepicker table tr td.active[disabled],
.ui-slider-horizontal .ui-slider-range {
background-color: #03c7bb; 
}

.control input:checked ~ .control__indicator,
.btn-primary-outlined,
.page-item.active .page-link,
.mobile-property-tools .nav-pills .nav-link.active,
.agent-nav-wrap .nav-pills .nav-link,
.agent-nav-wrap .nav-pills .nav-link.active,
.chart-nav .nav-pills .nav-link.active,
.dashaboard-snake-nav .step-block.active,
.fc-event,
.fc-event-dot {
border-color: #03c7bb; 
}

.slick-arrow:hover {
background-color: rgba(17,17,17,1); 
}

.slick-arrow {
background-color: #03c7bb; 
}

.property-banner .nav-pills .nav-link.active {
background-color: rgba(17,17,17,1) !important; 
}

.property-navigation-wrap a.active {
color: #03c7bb;
-webkit-box-shadow: inset 0 -3px #03c7bb;
box-shadow: inset 0 -3px #03c7bb; 
}

.btn-primary,
.fc-button-primary,
.woocommerce nav.woocommerce-pagination ul li a:focus, 
.woocommerce nav.woocommerce-pagination ul li a:hover, 
.woocommerce nav.woocommerce-pagination ul li span.current {
color: #fff;
background-color: #03c7bb;
border-color: #03c7bb; 
}
.btn-primary:focus, .btn-primary:focus:active,
.fc-button-primary:focus,
.fc-button-primary:focus:active {
color: #fff;
background-color: #03c7bb;
border-color: #03c7bb; 
}
.btn-primary:hover,
.fc-button-primary:hover {
color: #fff;
background-color: #111111;
border-color: #111111; 
}
.btn-primary:active, 
.btn-primary:not(:disabled):not(:disabled):active,
.fc-button-primary:active,
.fc-button-primary:not(:disabled):not(:disabled):active {
color: #fff;
background-color: #111111;
border-color: #111111; 
}

.btn-secondary,
.woocommerce span.onsale,
.woocommerce ul.products li.product .button,
.woocommerce #respond input#submit.alt, 
.woocommerce a.button.alt, 
.woocommerce button.button.alt, 
.woocommerce input.button.alt,
.woocommerce #review_form #respond .form-submit input,
.woocommerce #respond input#submit, 
.woocommerce a.button, 
.woocommerce button.button, 
.woocommerce input.button {
color: #fff;
background-color: #00948b;
border-color: #00948b; 
}
.woocommerce ul.products li.product .button:focus,
.woocommerce ul.products li.product .button:active,
.woocommerce #respond input#submit.alt:focus, 
.woocommerce a.button.alt:focus, 
.woocommerce button.button.alt:focus, 
.woocommerce input.button.alt:focus,
.woocommerce #respond input#submit.alt:active, 
.woocommerce a.button.alt:active, 
.woocommerce button.button.alt:active, 
.woocommerce input.button.alt:active,
.woocommerce #review_form #respond .form-submit input:focus,
.woocommerce #review_form #respond .form-submit input:active,
.woocommerce #respond input#submit:active, 
.woocommerce a.button:active, 
.woocommerce button.button:active, 
.woocommerce input.button:active,
.woocommerce #respond input#submit:focus, 
.woocommerce a.button:focus, 
.woocommerce button.button:focus, 
.woocommerce input.button:focus {
color: #fff;
background-color: #00948b;
border-color: #00948b; 
}
.btn-secondary:hover,
.woocommerce ul.products li.product .button:hover,
.woocommerce #respond input#submit.alt:hover, 
.woocommerce a.button.alt:hover, 
.woocommerce button.button.alt:hover, 
.woocommerce input.button.alt:hover,
.woocommerce #review_form #respond .form-submit input:hover,
.woocommerce #respond input#submit:hover, 
.woocommerce a.button:hover, 
.woocommerce button.button:hover, 
.woocommerce input.button:hover {
color: #fff;
background-color: #00948b;
border-color: #00948b; 
}
.btn-secondary:active, 
.btn-secondary:not(:disabled):not(:disabled):active {
color: #fff;
background-color: #00948b;
border-color: #00948b; 
}

.btn-primary-outlined {
color: #03c7bb;
background-color: transparent;
border-color: #03c7bb; 
}
.btn-primary-outlined:focus, .btn-primary-outlined:focus:active {
color: #03c7bb;
background-color: transparent;
border-color: #03c7bb; 
}
.btn-primary-outlined:hover {
color: #fff;
background-color: #111111;
border-color: #111111; 
}
.btn-primary-outlined:active, .btn-primary-outlined:not(:disabled):not(:disabled):active {
color: #03c7bb;
background-color: rgba(26, 26, 26, 0);
border-color: #111111; 
}

.btn-secondary-outlined {
color: #00948b;
background-color: transparent;
border-color: #00948b; 
}
.btn-secondary-outlined:focus, .btn-secondary-outlined:focus:active {
color: #00948b;
background-color: transparent;
border-color: #00948b; 
}
.btn-secondary-outlined:hover {
color: #fff;
background-color: #00948b;
border-color: #00948b; 
}
.btn-secondary-outlined:active, .btn-secondary-outlined:not(:disabled):not(:disabled):active {
color: #00948b;
background-color: rgba(26, 26, 26, 0);
border-color: #00948b; 
}

.btn-call {
color: #00948b;
background-color: transparent;
border-color: #00948b; 
}
.btn-call:focus, .btn-call:focus:active {
color: #00948b;
background-color: transparent;
border-color: #00948b; 
}
.btn-call:hover {
color: #00948b;
background-color: rgba(26, 26, 26, 0);
border-color: #00948b; 
}
.btn-call:active, .btn-call:not(:disabled):not(:disabled):active {
color: #00948b;
background-color: rgba(26, 26, 26, 0);
border-color: #00948b; 
}
.icon-delete .btn-loader:after{
  border-color: #03c7bb transparent #03c7bb transparent
}

.header-v1 {
background-color: #ffffff;
border-bottom: 1px solid #ffffff; 
}

.header-v1 a {
color: #111111; 
}

.header-v1 a:hover,
.header-v1 a:active {
color: #00948b;
background-color: rgba(255,255,255,0); 
}

.header-v2 .header-top,
.header-v5 .header-top,
.header-v2 .header-contact-wrap {
background-color: #ffffff; 
}

.header-v2 .header-bottom, 
.header-v5 .header-bottom {
background-color: #004274;
}

.header-v2 .header-contact-wrap .header-contact-right, .header-v2 .header-contact-wrap .header-contact-right a, .header-contact-right a:hover, header-contact-right a:active {
color: #004274; 
}

.header-v2 .header-contact-left {
color: #004274; 
}

.header-v2 .header-bottom,
.header-v2 .navbar-nav > li,
.header-v2 .navbar-nav > li:first-of-type,
.header-v5 .header-bottom,
.header-v5 .navbar-nav > li,
.header-v5 .navbar-nav > li:first-of-type {
border-color: rgba(0, 174, 255, 0.2);
}

.header-v2 a,
.header-v5 a {
color: #ffffff; 
}

.header-v2 a:hover,
.header-v2 a:active,
.header-v5 a:hover,
.header-v5 a:active {
color: #00aeff;
background-color: rgba(0, 174, 255, 0.1); 
}

.header-v2 .header-contact-right a:hover, 
.header-v2 .header-contact-right a:active,
.header-v3 .header-contact-right a:hover, 
.header-v3 .header-contact-right a:active {
background-color: transparent;
}

.header-v2 .header-social-icons a,
.header-v5 .header-social-icons a {
color: #004274; 
}

.header-v3 .header-top {
background-color: #004274; 
}

.header-v3 .header-bottom {
background-color: #004274; 
}

.header-v3 .header-contact,
.header-v3-mobile {
background-color: #00aeff;
color: #ffffff; 
}

.header-v3 .header-bottom,
.header-v3 .login-register,
.header-v3 .navbar-nav > li,
.header-v3 .navbar-nav > li:first-of-type {
border-color: rgba(0, 174, 239, 0.2); 
}

.header-v3 a, 
.header-v3 .header-contact-right a:hover, .header-v3 .header-contact-right a:active {
color: #FFFFFF; 
}

.header-v3 a:hover,
.header-v3 a:active {
color: #00aeff;
background-color: rgba(0, 174, 255, 0.1); 
}

.header-v3 .header-social-icons a {
color: #004274; 
}

.header-v4 {
background-color: #ffffff; 
}

.header-v4 a {
color: #43c9be; 
}

.header-v4 a:hover,
.header-v4 a:active {
color: #ef3f49;
background-color: rgba(0, 174, 255, 0.1); 
}

.header-v6 .header-top {
background-color: #004274; 
}

.header-v6 a {
color: #FFFFFF; 
}

.header-v6 a:hover,
.header-v6 a:active {
color: #00aeff;
background-color: rgba(0, 174, 255, 0.1); 
}

.header-v6 .header-social-icons a {
color: #FFFFFF; 
}

.header-mobile {
background-color: #f2884f; 
}
.header-mobile .toggle-button-left,
.header-mobile .toggle-button-right {
color: #FFFFFF; 
}

.nav-mobile .logged-in-nav a,
.nav-mobile .main-nav,
.nav-mobile .navi-login-register {
background-color: #ffffff; 
}

.nav-mobile .logged-in-nav a,
.nav-mobile .main-nav .nav-item .nav-item a,
.nav-mobile .main-nav .nav-item a,
.navi-login-register .main-nav .nav-item a {
color: #004274;
border-bottom: 1px solid #dce0e0;
background-color: #ffffff;
}

.nav-mobile .btn-create-listing,
.navi-login-register .btn-create-listing {
color: #fff;
border: 1px solid #03c7bb;
background-color: #03c7bb; 
}

.nav-mobile .btn-create-listing:hover, .nav-mobile .btn-create-listing:active,
.navi-login-register .btn-create-listing:hover,
.navi-login-register .btn-create-listing:active {
color: #fff;
border: 1px solid #03c7bb;
background-color: rgba(0, 174, 255, 0.65); 
}

.header-transparent-wrap .header-v4 {
background-color: transparent;
border-bottom: 1px solid rgba(0,148,139,1); 
}

.header-transparent-wrap .header-v4 a {
color: #00948b; 
}

.header-transparent-wrap .header-v4 a:hover,
.header-transparent-wrap .header-v4 a:active {
color: #ffffff;
background-color: rgba(255, 255, 255, 0.1); 
}

.main-nav .navbar-nav .nav-item .dropdown-menu {
background-color: rgba(255, 255, 255, 0.95); 
}

.main-nav .navbar-nav .nav-item .nav-item a {
color: #00948b;
border-bottom: 1px solid #dce0e0; 
}

.main-nav .navbar-nav .nav-item .nav-item a:hover,
.main-nav .navbar-nav .nav-item .nav-item a:active {
color: #00948b; 
}

.header-main-wrap .btn-create-listing {
color: #ffffff;
border: 1px solid #f2e400;
background-color: #ffe066; 
}

.header-main-wrap .btn-create-listing:hover,
.header-main-wrap .btn-create-listing:active {
color: rgba(17,17,17,1);
border: 1px solid #f2e400;
background-color: rgba(242,228,0,0.99); 
}

.header-transparent-wrap .header-v4 .btn-create-listing {
color: #ffffff;
border: 1px solid #ffffff;
background-color: rgba(255,224,102,1); 
}

.header-transparent-wrap .header-v4 .btn-create-listing:hover,
.header-transparent-wrap .header-v4 .btn-create-listing:active {
color: rgba(255,255,255,1);
border: 1px solid #f2e400;
background-color: rgba(255,238,0,1); 
}

.header-transparent-wrap .logged-in-nav a,
.logged-in-nav a {
color: #0a0000;
border-color: #dce0e0;
background-color: #FFFFFF; 
}

.header-transparent-wrap .logged-in-nav a:hover,
.header-transparent-wrap .logged-in-nav a:active,
.logged-in-nav a:hover,
.logged-in-nav a:active {
color: #43c9be;
background-color: rgba(0, 174, 255, 0.1);
border-color: #dce0e0; 
}

.form-control::-webkit-input-placeholder,
.search-banner-wrap ::-webkit-input-placeholder,
.advanced-search ::-webkit-input-placeholder,
.advanced-search-banner-wrap ::-webkit-input-placeholder,
.overlay-search-advanced-module ::-webkit-input-placeholder {
color: #a1a7a8; 
}
.bootstrap-select > .dropdown-toggle.bs-placeholder, 
.bootstrap-select > .dropdown-toggle.bs-placeholder:active, 
.bootstrap-select > .dropdown-toggle.bs-placeholder:focus, 
.bootstrap-select > .dropdown-toggle.bs-placeholder:hover {
color: #a1a7a8; 
}
.form-control::placeholder,
.search-banner-wrap ::-webkit-input-placeholder,
.advanced-search ::-webkit-input-placeholder,
.advanced-search-banner-wrap ::-webkit-input-placeholder,
.overlay-search-advanced-module ::-webkit-input-placeholder {
color: #a1a7a8; 
}

.search-banner-wrap ::-moz-placeholder,
.advanced-search ::-moz-placeholder,
.advanced-search-banner-wrap ::-moz-placeholder,
.overlay-search-advanced-module ::-moz-placeholder {
color: #a1a7a8; 
}

.search-banner-wrap :-ms-input-placeholder,
.advanced-search :-ms-input-placeholder,
.advanced-search-banner-wrap ::-ms-input-placeholder,
.overlay-search-advanced-module ::-ms-input-placeholder {
color: #a1a7a8; 
}

.search-banner-wrap :-moz-placeholder,
.advanced-search :-moz-placeholder,
.advanced-search-banner-wrap :-moz-placeholder,
.overlay-search-advanced-module :-moz-placeholder {
color: #a1a7a8; 
}

.advanced-search .form-control,
.advanced-search .bootstrap-select > .btn,
.location-trigger,
.vertical-search-wrap .form-control,
.vertical-search-wrap .bootstrap-select > .btn,
.step-search-wrap .form-control,
.step-search-wrap .bootstrap-select > .btn,
.advanced-search-banner-wrap .form-control,
.advanced-search-banner-wrap .bootstrap-select > .btn,
.search-banner-wrap .form-control,
.search-banner-wrap .bootstrap-select > .btn,
.overlay-search-advanced-module .form-control,
.overlay-search-advanced-module .bootstrap-select > .btn,
.advanced-search-v2 .advanced-search-btn,
.advanced-search-v2 .advanced-search-btn:hover {
border-color: #dce0e0; 
}

.advanced-search-nav,
.search-expandable,
.overlay-search-advanced-module {
background-color: #FFFFFF; 
}
.btn-search {
color: #ffffff;
background-color: #43c9be;
border-color: #43c9be;
}
.btn-search:hover, .btn-search:active  {
color: #ffffff;
background-color: #68c9c1;
border-color: #43c9be;
}
.advanced-search-btn {
color: #000000;
background-color: #ffffff;
border-color: #dce0e0; 
}
.advanced-search-btn:hover, .advanced-search-btn:active {
color: #ffffff;
background-color: #43c9be;
border-color: #43c9be; 
}
.advanced-search-btn:focus {
color: #000000;
background-color: #ffffff;
border-color: #dce0e0; 
}
.search-expandable-label {
color: #ffffff;
background-color: #43c9be;
}
.advanced-search-nav {
padding-top: 10px;
padding-bottom: 10px;
}
.features-list-wrap .control--checkbox,
.features-list-wrap .control--radio,
.range-text, 
.features-list-wrap .control--checkbox, 
.features-list-wrap .btn-features-list, 
.overlay-search-advanced-module .search-title, 
.overlay-search-advanced-module .overlay-search-module-close {
  color: #222222;
}
.advanced-search-half-map {
background-color: #FFFFFF; 
}
.advanced-search-half-map .range-text, 
.advanced-search-half-map .features-list-wrap .control--checkbox, 
.advanced-search-half-map .features-list-wrap .btn-features-list {
  color: #222222;
}

.save-search-btn {
  border-color: #43c9be ;
  background-color: #00948b ;
  color: #ffffff ;
}
.save-search-btn:hover,
.save-search-btn:active {
  border-color: #43c9be;
  background-color: #111111 ;
  color: #ffffff ;
}
.label-featured {
background-color: #43c9be;
color: #ffffff; 
}

.dashboard-side-wrap {
background-color: #43c9be; 
}

.side-menu a {
color: #ffffff; 
}

.side-menu a.active,
.side-menu .side-menu-parent-selected > a,
.side-menu-dropdown a,
.side-menu a:hover {
color: #000000; 
}
.dashboard-side-menu-wrap .side-menu-dropdown a.active {
color: #00aeff
}

.detail-wrap {
background-color: rgba(0,174,255,0.1);
border-color: #00948b; 
}
.top-bar-wrap,
.top-bar-wrap .dropdown-menu,
.switcher-wrap .dropdown-menu {
background-color: #000000;
}
.top-bar-wrap a,
.top-bar-contact,
.top-bar-slogan,
.top-bar-wrap .btn,
.top-bar-wrap .dropdown-menu,
.switcher-wrap .dropdown-menu,
.top-bar-wrap .navbar-toggler {
color: #ffffff;
}
.top-bar-wrap a:hover,
.top-bar-wrap a:active,
.top-bar-wrap .btn:hover,
.top-bar-wrap .btn:active,
.top-bar-wrap .dropdown-menu li:hover,
.top-bar-wrap .dropdown-menu li:active,
.switcher-wrap .dropdown-menu li:hover,
.switcher-wrap .dropdown-menu li:active {
color: rgba(0,174,239,0.75);
}
.footer-top-wrap {
background-color: #00948b; 
}

.footer-bottom-wrap {
background-color: #00948b; 
}

.footer-top-wrap,
.footer-top-wrap a,
.footer-bottom-wrap,
.footer-bottom-wrap a,
.footer-top-wrap .property-item-widget .right-property-item-widget-wrap .item-amenities,
.footer-top-wrap .property-item-widget .right-property-item-widget-wrap .item-price-wrap,
.footer-top-wrap .blog-post-content-widget h4 a,
.footer-top-wrap .blog-post-content-widget,
.footer-top-wrap .form-tools .control,
.footer-top-wrap .slick-dots li.slick-active button:before,
.footer-top-wrap .slick-dots li button::before,
.footer-top-wrap .widget ul:not(.item-amenities):not(.item-price-wrap):not(.contact-list):not(.dropdown-menu):not(.nav-tabs) li span {
color: #000000; 
}

  .footer-top-wrap a:hover,
  .footer-bottom-wrap a:hover,
  .footer-top-wrap .blog-post-content-widget h4 a:hover {
    color: rgba(17,17,17,1); 
  }
.houzez-osm-cluster {
    background-image: url({{asset('frontend/ui')}}/wp-content/themes/houzez/img/map/cluster-icon.png);
    text-align: center;
    color: #fff;
    width: 48px;
    height: 48px;
    line-height: 48px;
}





elementor-79 .elementor-element.elementor-element-dba5d97:not(.elementor-motion-effects-element-type-background) {
background-color: #FBDB00;
background-position: center center;
background-size: cover;
background: none !important;

}
.btn:not(:disabled):not(.disabled) {

color: #333;
}
.item-body a.btn.btn-secondary.btn-sm {
display: none;
}
button.houzez_agent_property_form.btn.btn-secondary.btn-half-width {
display: none;
}
.property-form a.btn.btn-secondary-outlined.btn-full-width.mt-10 {
width: 50%;
margin-top: 0px;
margin-left: 1%;
}
.header-v1 a:hover, .header-v1 a:active {
color: #00948b !important;
background-color: rgba(255,255,255,0);
}
.save-search-btn {
border-color: #00948b;
background-color: #00948b !important;
color: #ffffff !important;
}
span.hide-on-click {
color: #fff;
}
.listing-view a.btn.btn-success.btn-sm {
background: #55C861 !important;
color: #fff;
border: 1px solid #55C861;
</style>
    
@endpush

@push('custom-scripts')



    
@endpush

