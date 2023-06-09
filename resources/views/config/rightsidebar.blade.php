<aside id="leftsidebar" class="sidebar">
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li>
                <div class="sidebar-profile clearfix">
                    <div class="profile-img">
                        <img src="{{asset('admin/images/usrbig.jpg')}}" alt="profile">
                    </div>
                    <div class="profile-info">
                        <h3>حسین حیاتی</h3>
                        <p>خوش آمدید !</p>
                    </div>
                </div>
            </li>
            <li class="header">-- اصلی</li>
            <li class="active">
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-home"></i>
                    <span>خانه</span>
                </a>
                <ul class="ml-menu">
                    <li class="active">
                        <a href="index.html">داشبورد 1</a>
                    </li>

                </ul>
            </li>
            <li class="{{Request::routeIs('categories.index') ? 'active': ''}}{{Request::routeIs('users.update') ? 'active': ''}}">
                <a href="{{route('categories.index')}}">
                    <i class="menu-icon ti-menu-alt"></i>
                    <span>دسته بندی ها</span>
                </a>
            </li>
            <li class="{{Request::routeIs('posts.index') ? 'active': ''}}{{Request::routeIs('posts.update') ? 'active': ''}}">
                <a href="{{route('posts.index')}}">
                    <i class="menu-icon  ti-view-grid "></i>
                    <span>پست ها</span>
                </a>
            </li>
            <li class="{{Request::routeIs('posts.index') ? 'active': ''}}{{Request::routeIs('posts.update') ? 'active': ''}}">
                <a href="{{route('tabs.index')}}">
                    <i class="menu-icon  ti-layers-alt "></i>
                    <span>شرایط ثبت نام</span>
                </a>
            </li>
            <li class="{{Request::routeIs('articles.index') ? 'active': ''}}{{Request::routeIs('users.update') ? 'active': ''}}">
                <a href="{{route('articles.index')}}">
                    <i class="menu-icon  ti-layout-menu-v "></i>
                    <span>مقالات</span>
                </a>
            </li>
            <li class="{{Request::routeIs('social.index') ? 'active': ''}}">
                <a href="{{route('social.index')}}">
                    <i class="menu-icon  ti-instagram"></i>
                    <span>سوشیال مدیا</span>
                </a>
            </li>
            <li class="{{Request::routeIs('gallery.index') ? 'active': ''}}">
                <a href="{{route('gallery.index')}}">
                    <i class="menu-icon  ti-gallery"></i>
                    <span>گالری تصاویر</span>
                </a>
            </li>
            <li class="{{Request::routeIs('singin.index') ? 'active': ''}}">
                <a href="{{route('singin.index')}}">
                    <i class="menu-icon  ti-user"></i>
                    <span>ثبت نام </span>
                </a>
            </li>
            <li class="{{Request::routeIs('message.index') ? 'active': ''}}">
                <a href="{{route('message.index')}}">
                    <i class="menu-icon  ti-email"></i>
                    <span>پیام ها </span>
                </a>
            </li>
            <li class="{{Request::routeIs('settings.index') ? 'active': ''}}">
                <a href="{{route('settings.index')}}">
                    <i class="menu-icon  ti-settings"></i>
                    <span>تنظیمات سایت</span>
                </a>
            </li>
            <li class="{{Request::routeIs('users.index') ? 'active': ''}}
            {{Request::routeIs('users.create') ? 'active': ''}}{{Request::routeIs('users.update') ? 'active': ''}}">
                <a href="{{route('users.index')}}">
                    <i class="menu-icon ti-user"></i>
                    <span>کاربران</span>
                </a>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-shopping-cart-full"></i>
                    <span>فروشگاه</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/ecommerce/products.html">محصولات</a>
                    </li>
                    <li>
                        <a href="pages/ecommerce/product-detail.html">جزئیات محصول</a>
                    </li>
                    <li>
                        <a href="pages/ecommerce/cart.html">سبد خرید</a>
                    </li>
                    <li>
                        <a href="pages/ecommerce/product-list.html">فهرست محصول</a>
                    </li>
                    <li>
                        <a href="pages/ecommerce/invoice.html">صورت حساب</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-crown"></i>
                    <span>ابزارک ها</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/widgets/chart-widget.html">ابزارک نمودار</a>
                    </li>
                    <li>
                        <a href="pages/widgets/data-widget.html">ابزارک داده</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-magnet"></i>
                    <span>رابط کاربری</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/ui/alerts.html">هشدارها</a>
                    </li>
                    <li>
                        <a href="pages/ui/animations.html">انیمیشن ها</a>
                    </li>
                    <li>
                        <a href="pages/ui/badges.html">نشان ها</a>
                    </li>
                    <li>
                        <a href="pages/ui/modal.html">مودال</a>
                    </li>
                    <li>
                        <a href="pages/ui/buttons.html">دکمه ها</a>
                    </li>
                    <li>
                        <a href="pages/ui/collapse.html">سقوط</a>
                    </li>
                    <li>
                        <a href="pages/ui/dialogs.html">دیالوگ ها</a>
                    </li>
                    <li>
                        <a href="pages/ui/cards.html">کارت ها</a>
                    </li>
                    <li>
                        <a href="pages/ui/labels.html">برچسب ها</a>
                    </li>
                    <li>
                        <a href="pages/ui/list-group.html">گروه فرست</a>
                    </li>
                    <li>
                        <a href="pages/ui/media-object.html">شی رسانه</a>
                    </li>
                    <li>
                        <a href="pages/ui/notifications.html">اطلاعیه ها</a>
                    </li>
                    <li>
                        <a href="pages/ui/preloaders.html">پیش بارگذارها</a>
                    </li>
                    <li>
                        <a href="pages/ui/progressbars.html">نوارهای پیشرفت</a>
                    </li>
                    <li>
                        <a href="pages/ui/range-sliders.html">اسلایدرهای محدوده</a>
                    </li>
                    <li>
                        <a href="pages/ui/sortable-nestable.html">قابل مرتب شدن و ناپایداری</a>
                    </li>
                    <li>
                        <a href="pages/ui/tabs.html">زبانه ها</a>
                    </li>
                    <li>
                        <a href="pages/ui/waves.html">امواج</a>
                    </li>
                    <li>
                        <a href="pages/ui/typography.html">تایپوگرافی</a>
                    </li>
                    <li>
                        <a href="pages/ui/helper-classes.html">کلاس های کمکی</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-face-smile"></i>
                    <span>آیکون ها</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/icons/material-icons.html">آیکون های متریال</a>
                    </li>
                    <li>
                        <a href="pages/icons/font-awesome.html">فونت Awesome</a>
                    </li>
                    <li>
                        <a href="pages/icons/simple-line-icons.html">آیکون های خط ساده</a>
                    </li>
                    <li>
                        <a href="pages/icons/themify.html">آیکون های Themify</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-layout"></i>
                    <span>فرم ها</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/forms/basic-form-elements.html">فرم پایه</a>
                    </li>
                    <li>
                        <a href="pages/forms/advanced-form-elements.html">فرم پیشرفته</a>
                    </li>
                    <li>
                        <a href="pages/forms/form-examples.html">مثال های فرم</a>
                    </li>
                    <li>
                        <a href="pages/forms/form-validation.html">اعتبار سنجی فرم</a>
                    </li>
                    <li>
                        <a href="pages/forms/form-wizard.html">فرم جادویی</a>
                    </li>
                    <li>
                        <a href="pages/forms/editors.html">ویرایشگرها</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-menu-alt"></i>
                    <span>جداول</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/tables/normal-tables.html">جداول معمولی</a>
                    </li>
                    <li>
                        <a href="pages/tables/advance-tables.html">جداول داده پیشرفته</a>
                    </li>
                    <li>
                        <a href="pages/tables/export-table.html">جدول خروجی</a>
                    </li>
                    <li>
                        <a href="pages/tables/child-row-table.html">جدول ردیف کودک</a>
                    </li>
                    <li>
                        <a href="pages/tables/group-table.html">گروه بندی</a>
                    </li>
                    <li>
                        <a href="pages/tables/editable-table.html">جداول قابل ویرایش</a>
                    </li>
                </ul>
            </li>
            <li class="header">-- برنامه ها</li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-email"></i>
                    <span>ایمیل</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/email/inbox.html">صندوق ورودی</a>
                    </li>
                    <li>
                        <a href="pages/email/compose.html">نوشتن</a>
                    </li>
                    <li>
                        <a href="pages/email/view-mail.html">خواندن ایمیل</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="pages/apps/chat.html">
                    <i class="menu-icon ti-comment"></i>
                    <span>چت</span>
                </a>
            </li>
            <li>
                <a href="pages/apps/calendar.html">
                    <i class="menu-icon ti-calendar"></i>
                    <span>تقویم</span>
                </a>
            </li>
            <li>
                <a href="pages/apps/task.html">
                    <i class="menu-icon ti-check-box"></i>
                    <span>نوار وظیفه</span>
                </a>
            </li>
            <li>
                <a href="pages/apps/portfolio.html">
                    <i class="menu-icon ti-briefcase"></i>
                    <span>نمونه کارها</span>
                </a>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-vector"></i>
                    <span>سایر</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/apps/dragdrop.html">کشیدن و رها کردن</a>
                    </li>
                    <li>
                        <a href="pages/apps/contact_list.html">فهرست تماس</a>
                    </li>
                    <li>
                        <a href="pages/apps/contact_grid.html">گرید تماس</a>
                    </li>
                    <li>
                        <a href="pages/apps/support.html">پشتیبانی</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-stats-up"></i>
                    <span>نمودارها</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/charts/amchart.html">نمودار AM</a>
                    </li>
                    <li>
                        <a href="pages/charts/echart.html">نمودار E</a>
                    </li>
                    <li>
                        <a href="pages/charts/apexcharts.html">نمودارهای Apex</a>
                    </li>
                    <li>
                        <a href="pages/charts/morris.html">موریس</a>
                    </li>
                    <li>
                        <a href="pages/charts/chartjs.html">نمودار JS</a>
                    </li>
                    <li>
                        <a href="pages/charts/sparkline.html">اسپارک لاین</a>
                    </li>
                    <li>
                        <a href="pages/charts/jquery-knob.html">جی کوئری Knoob</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-map-alt"></i>
                    <span>نقشه ها</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/maps/google.html">نقشه گوگل</a>
                    </li>
                    <li>
                        <a href="pages/maps/jqvmap.html">نقشه وکتور</a>
                    </li>
                    <li>
                        <a href="pages/maps/datamap.html">نقشه داده</a>
                    </li>
                </ul>
            </li>
            <li class="header">-- اضافی</li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-split-v"></i>
                    <span>خط زمانی</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/timeline/timeline.html">خط زمانی 1</a>
                    </li>
                    <li>
                        <a href="pages/timeline/timeline2.html">خط زمانی 2</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-image"></i>
                    <span>رسانهها</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/medias/image-gallery.html">گالری تصویر</a>
                    </li>
                    <li>
                        <a href="pages/medias/carousel.html">اسلایدر Carousel</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-user"></i>
                    <span>احراز هویت</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/examples/login-register.html">ورود و ثبت نام</a>
                    </li>
                    <li>
                        <a href="pages/examples/sign-in.html">ورود</a>
                    </li>
                    <li>
                        <a href="pages/examples/sign-up.html">ثبت نام</a>
                    </li>
                    <li>
                        <a href="pages/examples/forgot-password.html">فراموشی رمزعبور</a>
                    </li>
                    <li>
                        <a href="pages/examples/locked.html">قفل شده</a>
                    </li>
                    <li>
                        <a href="pages/examples/404.html">404 - یافت نشد</a>
                    </li>
                    <li>
                        <a href="pages/examples/500.html">500 - خطای سرور</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-receipt"></i>
                    <span>صفحات اضافی</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="pages/examples/profile.html">پروفایل</a>
                    </li>
                    <li>
                        <a href="pages/examples/pricing.html">قیمت گذاری</a>
                    </li>
                    <li>
                        <a href="pages/examples/faqs.html">پرسش و پاسخ</a>
                    </li>
                    <li>
                        <a href="pages/examples/blank.html">صفحه خالی</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" onClick="return false;" class="menu-toggle">
                    <i class="menu-icon ti-angle-double-down"></i>
                    <span>منوی چندسطحی</span>
                </a>
                <ul class="ml-menu">
                    <li>
                        <a href="#" onClick="return false;">
                            <span>آیتم منو</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return false;">
                            <span>آیتم منو - 2</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" onClick="return false;" class="menu-toggle">
                            <span>سطح - 2</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="#" onClick="return false;">
                                    <span>آیتم منو</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" onClick="return false;" class="menu-toggle">
                                    <span>سطح - 3</span>
                                </a>
                                <ul class="ml-menu">
                                    <li>
                                        <a href="#" onClick="return false;">
                                            <span>سطح - 4</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <hr>
                <div class="leftSideProgress">
                    <div class="progress-list">
                        <div class="details">
                            <div class="title">استفاده از دیسک</div>
                        </div>
                        <div class="status">
                            <span>52</span>%
                        </div>
                        <div class="progress-s progress">
                            <div class="progress-bar progress-bar-success width-per-52" role="progressbar"
                                 aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="leftSideProgress">
                    <div class="progress-list m-b-10">
                        <div class="details">
                            <div class="title">بارگذاری سرور</div>
                        </div>
                        <div class="status">
                            <span>79</span>%
                        </div>
                        <div class="progress-s progress">
                            <div class="progress-bar progress-bar-warning width-per-79" role="progressbar"
                                 aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>
