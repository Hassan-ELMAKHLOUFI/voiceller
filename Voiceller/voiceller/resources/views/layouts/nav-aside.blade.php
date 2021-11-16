<!-- SIDE MENU BAR -->
<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{url('/')}}">
            <img src="{{URL::asset('img/brand/logo.svg')}}" class="header-brand-img desktop-lgo" alt="Admintro logo">
            <img src="{{URL::asset('img/brand/favicon.svg')}}" class="header-brand-img mobile-logo" alt="Admintro logo">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        @role('admin')
            <li class="side-item side-item-category mt-4">{{ __('Admin Dashboard') }}</li>
            <li class="slide">
                <a class="side-menu__item"  href="{{ route('admin.dashboard') }}">
                    <span class="side-menu__icon fa fa-th-large"></span>
                    <span class="side-menu__label">{{ __('Dashboard') }}</span>
                </a>
            </li>
            <hr class="slide-divider">
            <li class="side-item side-item-category">{{ __('Admin Panel') }}</li>
            <li class="slide">
                    <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                        <span class="side-menu__icon enlarge lead-3 fa fa-magic"></span>
                        <span class="side-menu__label">{{ __('TTS Management') }}</span><i class="angle fa fa-angle-right"></i>
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ route('admin.tts.dashboard') }}" class="slide-item">{{ __('TTS Dashboard') }}</a></li>
                        <li><a href="{{ route('admin.tts.results') }}" class="slide-item">{{ __('Synthesized TTS Results') }}</a></li>
                        <li><a href="{{ route('admin.tts.configs') }}" class="slide-item">{{ __('TTS Configuration') }}</a></li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                    <span class="side-menu__icon mdi mdi-account-convert"></span>
                    <span class="side-menu__label">{{ __('User Management') }}</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{ route('admin.user.dashboard') }}" class="slide-item">{{ __('User Dashboard') }}</a></li>
                        <li><a href="{{ route('admin.user.list') }}" class="slide-item">{{ __('User List') }}</a></li>
                        <li><a href="{{ route('admin.user.activity') }}" class="slide-item">{{ __('Activity Monitoring') }}</a></li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                    <span class="side-menu__icon enlarge fa fa-google-wallet"></span>
                    <span class="side-menu__label">{{ __('Finance Management') }}</span>
                    @if (auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count())
                        <span class="badge badge-warning">{{ auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count() }}</span>
                    @else
                        <i class="angle fa fa-angle-right"></i>
                    @endif
                </a>
                    <ul class="slide-menu">
                        <li><a href="{{ route('admin.finance.dashboard') }}" class="slide-item">{{ __('Finance Dashboard') }}</a></li>
                        <li><a href="{{ route('admin.finance.payments') }}" class="slide-item">{{ __('All Payments') }}</a></li>
                        <li><a href="{{ route('admin.finance.payments.subscriptions') }}" class="slide-item">{{ __('All Subscriptions') }}</a></li>
                        <li><a href="{{ route('admin.finance.subscriptions') }}" class="slide-item">{{ __('Subscription Plans') }}</a></li>
                        <li><a href="{{ route('admin.finance.prepaid') }}" class="slide-item">{{ __('Prepaid Plans') }}</a></li>
                        <li><a href="{{ route('admin.finance.promocodes') }}" class="slide-item">{{ __('Promocodes') }}</a></li>
                        <li><a href="{{ route('admin.referral.settings') }}" class="slide-item">{{ __('Referral System') }}</a></li>
                        <li><a href="{{ route('admin.referral.payouts') }}" class="slide-item">{{ __('Referral Payouts') }}
                                @if ((auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count()))
                                    <span class="badge badge-warning ml-5">{{ auth()->user()->unreadNotifications->where('type', 'App\Notifications\PayoutRequestNotification')->count() }}</span>
                                @endif
                            </a>
                        </li>
                        <li><a href="{{ route('admin.finance.settings') }}" class="slide-item">{{ __('Payment Settings') }}</a></li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item"  href="{{ route('admin.support') }}">
                    <span class="side-menu__icon mdi mdi-account-alert"></span>
                    <span class="side-menu__label">{{ __('Support Requests') }}</span>
                    @if (App\Models\Support::where('status', 'Open')->count())
                        <span class="badge badge-warning">{{ App\Models\Support::where('status', 'Open')->count() }}</span>
                    @endif
                </a>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                    <span class="side-menu__icon mdi mdi-upload-network"></span>
                    <span class="side-menu__label">{{ __('Notifications') }}</span>
                        @if (auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification')->count())
                            <span class="badge badge-warning" id="total-notifications-a"></span>
                        @else
                            <i class="angle fa fa-angle-right"></i>
                        @endif
                    </a>
                    <ul class="slide-menu">
                        <li><a href="{{ route('admin.notifications') }}" class="slide-item">{{ __('Mass Notifications') }}</a></li>
                        <li><a href="{{ route('admin.notifications.system') }}" class="slide-item">{{ __('System Notifications') }}
                                @if ((auth()->user()->unreadNotifications->where('type', '<>', 'App\Notifications\GeneralNotification')->count()))
                                    <span class="badge badge-warning ml-5" id="total-notifications-b"></span>
                                @endif
                            </a>
                        </li>
                    </ul>
            </li>
            <li class="slide">
                <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                    <span class="side-menu__icon enlarge fa fa-cogs"></span>
                    <span class="side-menu__label">{{ __('General Settings') }}</span><i class="angle fa fa-angle-right"></i></a>
                    <ul class="slide-menu">
                        <li><a href="{{ route('admin.settings.global') }}" class="slide-item">{{ __('Global Settings') }}</a></li>
                        <li><a href="{{ route('admin.settings.appearance') }}" class="slide-item">{{ __('Appearance') }}</a></li>
                        <li><a href="{{ route('admin.settings.frontend') }}" class="slide-item">{{ __('Frontend Settings') }}</a></li>
                        <li><a href="{{ route('admin.settings.blog') }}" class="slide-item">{{ __('Blogs Manager') }}</a></li>
                        <li><a href="{{ route('admin.settings.oauth') }}" class="slide-item">{{ __('Auth Settings') }}</a></li>
                        <li><a href="{{ route('admin.settings.registration') }}" class="slide-item">{{ __('Registration Settings') }}</a></li>
                        <li><a href="{{ route('admin.settings.smtp') }}" class="slide-item">{{ __('SMTP Settings') }}</a></li>
                        <li><a href="{{ route('admin.settings.invoice') }}" class="slide-item">{{ __('Invoice Settings') }}</a></li>
                        <li><a href="{{ route('admin.settings.backup') }}" class="slide-item">{{ __('Database Backup') }}</a></li>
                        <li><a href="{{ route('admin.settings.activation') }}" class="slide-item">{{ __('Activation') }}</a></li>
                    </ul>
            </li>

            <hr class="slide-divider">
        @endrole
        @role('user|subscriber')
            <hr class="slide-divider d-none">
        @endrole
        <li class="side-item side-item-category">{{ __('User Panel') }}</li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('user.tts') }}">
            <span class="side-menu__icon enlarge lead-3 fa fa-magic"></span>
            <span class="side-menu__label">Text-to-Speech</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('user.tts.voices') }}">
                <span class="side-menu__icon mdi mdi-access-point"></span>
                <span class="side-menu__label">{{ __('All Voices') }}</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('/' . $page='#')}}">
            <span class="side-menu__icon enlarge fa fa-google-wallet"></span>
            <span class="side-menu__label">{{ __('My Balance') }}</span><i class="angle fa fa-angle-right"></i></a>
            <ul class="slide-menu">
                <li><a href="{{ route('user.subscriptions') }}" class="slide-item">{{ __('Subscribe Now') }}</a></li>
                <li><a href="{{ route('user.balance.subscriptions') }}" class="slide-item">{{ __('My Subscriptions') }}</a></li>
                <li><a href="{{ route('user.balance.payments') }}" class="slide-item">{{ __('My Payments') }}</a></li>
                @if (config('payment.referral.enabled')  == 'on')
                    <li><a href="{{ route('user.referral') }}" class="slide-item">{{ __('My Referrals') }}</a></li>
                @endif
                <li><a href="{{ route('user.balance') }}" class="slide-item">{{ __('My Balance Dashboard') }}</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('user.tts.results')}}">
            <span class="side-menu__icon mdi mdi-audiobook"></span>
            <span class="side-menu__label">{{ __('My TTS Audio Results') }}</span></a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="{{ url('#')}}">
                <span class="side-menu__icon mdi mdi-account-settings-variant"></span>
                <span class="side-menu__label">{{ __('My Profile Settings') }}</span><i class="angle fa fa-angle-right"></i>
            </a>
            <ul class="slide-menu">
                <li><a href="{{ route('user.profile')}}" class="slide-item">{{ __('My Profile') }}</a></li>
                <li><a href="{{ route('user.password') }}" class="slide-item">{{ __('Change Password') }}</a></li>
            </ul>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('user.support') }}">
                <span class="side-menu__icon mdi mdi-account-alert"></span>
                <span class="side-menu__label">{{ __('Support Request') }}</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('user.notifications') }}">
                <span class="side-menu__icon mdi mdi-upload-network"></span>
                <span class="side-menu__label">{{ __('Notifications') }}</span>
                @if (auth()->user()->unreadNotifications->where('type', 'App\Notifications\GeneralNotification')->count())
                    <span class="badge badge-warning">{{ auth()->user()->unreadNotifications->where('type', 'App\Notifications\GeneralNotification')->count() }}</span>
                @endif
            </a>
        </li>
    </ul>
    @role('user')
    <div class="aside-progress-position">
        <div class="d-flex">
            <span class="fs-10 text-muted pl-5">{{ App\Services\HelperService::formatTotalChars(auth()->user()->available_chars) }} of {{ App\Services\HelperService::formatTotalChars(config('tts.free_chars')) }} chars left</span>
        </div>
        <div class="progress h-15 mt-1 aside-progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: {{ App\Services\HelperService::getPercentage(auth()->user()->available_chars, config('tts.free_chars')) }}%" role="progressbar" aria-valuenow="{{ auth()->user()->available_chars }}" aria-valuemin="0" aria-valuemax="{{ config('tts.free_chars') }}"></div>
        </div>
    </div>
    @endrole
    @role('subscriber')
    <div class="aside-progress-position">
        <div class="d-flex">
            <span class="fs-10 text-muted pl-5">{{ App\Services\HelperService::formatTotalChars(auth()->user()->available_chars) }} of {{ App\Services\HelperService::getTotalCharsFormatted() }} chars left</span>
        </div>
        <div class="progress h-15 mt-1 aside-progress">
            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info" style="width: {{ App\Services\HelperService::getPercentage(auth()->user()->available_chars, App\Services\HelperService::getTotalChars()) }}%" role="progressbar" aria-valuenow="{{ auth()->user()->available_chars }}" aria-valuemin="0" aria-valuemax="{{ App\Services\HelperService::getTotalChars() }}"></div>
        </div>
    </div>
    @endrole
</aside>
<!-- END SIDE MENU BAR -->
