window.projectVersion = 'master';

(function (root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:App" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App.html">App</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Console" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Console.html">Console</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Console_Kernel" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Console/Kernel.html">Kernel</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Exceptions" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Exceptions.html">Exceptions</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Exceptions_Handler" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Exceptions/Handler.html">Handler</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http.html">Http</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Http_Controllers" class="opened">                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Controllers.html">Controllers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:App_Http_Controllers_Auth" >                    <div style="padding-left:54px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Controllers/Auth.html">Auth</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Controllers_Auth_ForgotPasswordController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/ForgotPasswordController.html">ForgotPasswordController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_LoginController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/LoginController.html">LoginController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_RegisterController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/RegisterController.html">RegisterController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_ResetPasswordController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/ResetPasswordController.html">ResetPasswordController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Auth_VerificationController" >                    <div style="padding-left:80px" class="hd leaf">                        <a href="App/Http/Controllers/Auth/VerificationController.html">VerificationController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Http_Controllers_AccessController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/AccessController.html">AccessController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_ConfirmController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/ConfirmController.html">ConfirmController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_Controller" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/Controller.html">Controller</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_PeriodController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/PeriodController.html">PeriodController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_ReasonController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/ReasonController.html">ReasonController</a>                    </div>                </li>                            <li data-name="class:App_Http_Controllers_UserController" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Controllers/UserController.html">UserController</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http_Middleware" class="opened">                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Middleware.html">Middleware</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Middleware_Absence" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/Absence.html">Absence</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_Admin" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/Admin.html">Admin</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_Authenticate" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/Authenticate.html">Authenticate</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_CheckForMaintenanceMode" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/CheckForMaintenanceMode.html">CheckForMaintenanceMode</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_EncryptCookies" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/EncryptCookies.html">EncryptCookies</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_RedirectIfAuthenticated" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/RedirectIfAuthenticated.html">RedirectIfAuthenticated</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_TrimStrings" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/TrimStrings.html">TrimStrings</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_TrustProxies" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/TrustProxies.html">TrustProxies</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_VerifyCsrfToken" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/VerifyCsrfToken.html">VerifyCsrfToken</a>                    </div>                </li>                            <li data-name="class:App_Http_Middleware_XSSProtection" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Middleware/XSSProtection.html">XSSProtection</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Http_Requests" class="opened">                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Http/Requests.html">Requests</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Http_Requests_StorePeriodFormRequest" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Requests/StorePeriodFormRequest.html">StorePeriodFormRequest</a>                    </div>                </li>                            <li data-name="class:App_Http_Requests_StoreReasonFormRequest" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Requests/StoreReasonFormRequest.html">StoreReasonFormRequest</a>                    </div>                </li>                            <li data-name="class:App_Http_Requests_StoreUserFormRequest" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Requests/StoreUserFormRequest.html">StoreUserFormRequest</a>                    </div>                </li>                            <li data-name="class:App_Http_Requests_UpdateReasonFormRequest" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Requests/UpdateReasonFormRequest.html">UpdateReasonFormRequest</a>                    </div>                </li>                            <li data-name="class:App_Http_Requests_UpdateUserFormRequest" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="App/Http/Requests/UpdateUserFormRequest.html">UpdateUserFormRequest</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Http_Kernel" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Http/Kernel.html">Kernel</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Libs" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Libs.html">Libs</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Libs_Datamap" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Libs/Datamap.html">Datamap</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Policies" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Policies.html">Policies</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Policies_PeriodPolicy" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Policies/PeriodPolicy.html">PeriodPolicy</a>                    </div>                </li>                            <li data-name="class:App_Policies_UserPolicy" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Policies/UserPolicy.html">UserPolicy</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:App_Providers" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="App/Providers.html">Providers</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:App_Providers_AppServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/AppServiceProvider.html">AppServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_AuthServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/AuthServiceProvider.html">AuthServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_BroadcastServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/BroadcastServiceProvider.html">BroadcastServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_EventServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/EventServiceProvider.html">EventServiceProvider</a>                    </div>                </li>                            <li data-name="class:App_Providers_RouteServiceProvider" class="opened">                    <div style="padding-left:44px" class="hd leaf">                        <a href="App/Providers/RouteServiceProvider.html">RouteServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:App_Access" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Access.html">Access</a>                    </div>                </li>                            <li data-name="class:App_Period" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Period.html">Period</a>                    </div>                </li>                            <li data-name="class:App_Reason" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/Reason.html">Reason</a>                    </div>                </li>                            <li data-name="class:App_User" class="opened">                    <div style="padding-left:26px" class="hd leaf">                        <a href="App/User.html">User</a>                    </div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [

        {"type": "Namespace", "link": "App.html", "name": "App", "doc": "Namespace App"}, {
            "type": "Namespace",
            "link": "App/Console.html",
            "name": "App\\Console",
            "doc": "Namespace App\\Console"
        }, {
            "type": "Namespace",
            "link": "App/Exceptions.html",
            "name": "App\\Exceptions",
            "doc": "Namespace App\\Exceptions"
        }, {
            "type": "Namespace",
            "link": "App/Http.html",
            "name": "App\\Http",
            "doc": "Namespace App\\Http"
        }, {
            "type": "Namespace",
            "link": "App/Http/Controllers.html",
            "name": "App\\Http\\Controllers",
            "doc": "Namespace App\\Http\\Controllers"
        }, {
            "type": "Namespace",
            "link": "App/Http/Controllers/Auth.html",
            "name": "App\\Http\\Controllers\\Auth",
            "doc": "Namespace App\\Http\\Controllers\\Auth"
        }, {
            "type": "Namespace",
            "link": "App/Http/Middleware.html",
            "name": "App\\Http\\Middleware",
            "doc": "Namespace App\\Http\\Middleware"
        }, {
            "type": "Namespace",
            "link": "App/Http/Requests.html",
            "name": "App\\Http\\Requests",
            "doc": "Namespace App\\Http\\Requests"
        }, {
            "type": "Namespace",
            "link": "App/Libs.html",
            "name": "App\\Libs",
            "doc": "Namespace App\\Libs"
        }, {
            "type": "Namespace",
            "link": "App/Policies.html",
            "name": "App\\Policies",
            "doc": "Namespace App\\Policies"
        }, {
            "type": "Namespace",
            "link": "App/Providers.html",
            "name": "App\\Providers",
            "doc": "Namespace App\\Providers"
        },

        {
            "type": "Class",
            "fromName": "App",
            "fromLink": "App.html",
            "link": "App/Access.html",
            "name": "App\\Access",
            "doc": "&quot;App\\Access&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Access",
            "fromLink": "App/Access.html",
            "link": "App/Access.html#method_users",
            "name": "App\\Access::users",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Access",
            "fromLink": "App/Access.html",
            "link": "App/Access.html#method_scopeByAccess",
            "name": "App\\Access::scopeByAccess",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Console",
            "fromLink": "App/Console.html",
            "link": "App/Console/Kernel.html",
            "name": "App\\Console\\Kernel",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Console\\Kernel",
            "fromLink": "App/Console/Kernel.html",
            "link": "App/Console/Kernel.html#method_schedule",
            "name": "App\\Console\\Kernel::schedule",
            "doc": "&quot;Define the application&#039;s command schedule.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Console\\Kernel",
            "fromLink": "App/Console/Kernel.html",
            "link": "App/Console/Kernel.html#method_commands",
            "name": "App\\Console\\Kernel::commands",
            "doc": "&quot;Register the commands for the application.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Exceptions",
            "fromLink": "App/Exceptions.html",
            "link": "App/Exceptions/Handler.html",
            "name": "App\\Exceptions\\Handler",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Exceptions\\Handler",
            "fromLink": "App/Exceptions/Handler.html",
            "link": "App/Exceptions/Handler.html#method_report",
            "name": "App\\Exceptions\\Handler::report",
            "doc": "&quot;Report or log an exception.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Exceptions\\Handler",
            "fromLink": "App/Exceptions/Handler.html",
            "link": "App/Exceptions/Handler.html#method_render",
            "name": "App\\Exceptions\\Handler::render",
            "doc": "&quot;Render an exception into an HTTP response.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers",
            "fromLink": "App/Http/Controllers.html",
            "link": "App/Http/Controllers/AccessController.html",
            "name": "App\\Http\\Controllers\\AccessController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\AccessController",
            "fromLink": "App/Http/Controllers/AccessController.html",
            "link": "App/Http/Controllers/AccessController.html#method_index",
            "name": "App\\Http\\Controllers\\AccessController::index",
            "doc": "&quot;Display a listing of \\App\\Access.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\AccessController",
            "fromLink": "App/Http/Controllers/AccessController.html",
            "link": "App/Http/Controllers/AccessController.html#method_create",
            "name": "App\\Http\\Controllers\\AccessController::create",
            "doc": "&quot;Show the form for creating a new \\App\\Access.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\AccessController",
            "fromLink": "App/Http/Controllers/AccessController.html",
            "link": "App/Http/Controllers/AccessController.html#method_store",
            "name": "App\\Http\\Controllers\\AccessController::store",
            "doc": "&quot;Store a newly created \\App\\Access in storage.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\AccessController",
            "fromLink": "App/Http/Controllers/AccessController.html",
            "link": "App/Http/Controllers/AccessController.html#method_edit",
            "name": "App\\Http\\Controllers\\AccessController::edit",
            "doc": "&quot;Show the form for editing \\App\\Access.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\AccessController",
            "fromLink": "App/Http/Controllers/AccessController.html",
            "link": "App/Http/Controllers/AccessController.html#method_update",
            "name": "App\\Http\\Controllers\\AccessController::update",
            "doc": "&quot;Update the specified \\App\\Access in Database.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\AccessController",
            "fromLink": "App/Http/Controllers/AccessController.html",
            "link": "App/Http/Controllers/AccessController.html#method_destroy",
            "name": "App\\Http\\Controllers\\AccessController::destroy",
            "doc": "&quot;Remove the specified \\App\\Access from Database.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers\\Auth",
            "fromLink": "App/Http/Controllers/Auth.html",
            "link": "App/Http/Controllers/Auth/ForgotPasswordController.html",
            "name": "App\\Http\\Controllers\\Auth\\ForgotPasswordController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\Auth\\ForgotPasswordController",
            "fromLink": "App/Http/Controllers/Auth/ForgotPasswordController.html",
            "link": "App/Http/Controllers/Auth/ForgotPasswordController.html#method___construct",
            "name": "App\\Http\\Controllers\\Auth\\ForgotPasswordController::__construct",
            "doc": "&quot;Create a new controller instance.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers\\Auth",
            "fromLink": "App/Http/Controllers/Auth.html",
            "link": "App/Http/Controllers/Auth/LoginController.html",
            "name": "App\\Http\\Controllers\\Auth\\LoginController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\Auth\\LoginController",
            "fromLink": "App/Http/Controllers/Auth/LoginController.html",
            "link": "App/Http/Controllers/Auth/LoginController.html#method___construct",
            "name": "App\\Http\\Controllers\\Auth\\LoginController::__construct",
            "doc": "&quot;Create a new controller instance.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers\\Auth",
            "fromLink": "App/Http/Controllers/Auth.html",
            "link": "App/Http/Controllers/Auth/RegisterController.html",
            "name": "App\\Http\\Controllers\\Auth\\RegisterController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\Auth\\RegisterController",
            "fromLink": "App/Http/Controllers/Auth/RegisterController.html",
            "link": "App/Http/Controllers/Auth/RegisterController.html#method___construct",
            "name": "App\\Http\\Controllers\\Auth\\RegisterController::__construct",
            "doc": "&quot;Create a new controller instance.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\Auth\\RegisterController",
            "fromLink": "App/Http/Controllers/Auth/RegisterController.html",
            "link": "App/Http/Controllers/Auth/RegisterController.html#method_validator",
            "name": "App\\Http\\Controllers\\Auth\\RegisterController::validator",
            "doc": "&quot;Get a validator for an incoming registration request.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\Auth\\RegisterController",
            "fromLink": "App/Http/Controllers/Auth/RegisterController.html",
            "link": "App/Http/Controllers/Auth/RegisterController.html#method_create",
            "name": "App\\Http\\Controllers\\Auth\\RegisterController::create",
            "doc": "&quot;Create a new user instance after a valid registration.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers\\Auth",
            "fromLink": "App/Http/Controllers/Auth.html",
            "link": "App/Http/Controllers/Auth/ResetPasswordController.html",
            "name": "App\\Http\\Controllers\\Auth\\ResetPasswordController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\Auth\\ResetPasswordController",
            "fromLink": "App/Http/Controllers/Auth/ResetPasswordController.html",
            "link": "App/Http/Controllers/Auth/ResetPasswordController.html#method___construct",
            "name": "App\\Http\\Controllers\\Auth\\ResetPasswordController::__construct",
            "doc": "&quot;Create a new controller instance.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers\\Auth",
            "fromLink": "App/Http/Controllers/Auth.html",
            "link": "App/Http/Controllers/Auth/VerificationController.html",
            "name": "App\\Http\\Controllers\\Auth\\VerificationController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\Auth\\VerificationController",
            "fromLink": "App/Http/Controllers/Auth/VerificationController.html",
            "link": "App/Http/Controllers/Auth/VerificationController.html#method___construct",
            "name": "App\\Http\\Controllers\\Auth\\VerificationController::__construct",
            "doc": "&quot;Create a new controller instance.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers",
            "fromLink": "App/Http/Controllers.html",
            "link": "App/Http/Controllers/ConfirmController.html",
            "name": "App\\Http\\Controllers\\ConfirmController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\ConfirmController",
            "fromLink": "App/Http/Controllers/ConfirmController.html",
            "link": "App/Http/Controllers/ConfirmController.html#method_index",
            "name": "App\\Http\\Controllers\\ConfirmController::index",
            "doc": "&quot;save all periods that are confirmed\nand all periods that has to confirm in session\nan show them in view&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\ConfirmController",
            "fromLink": "App/Http/Controllers/ConfirmController.html",
            "link": "App/Http/Controllers/ConfirmController.html#method_confirm",
            "name": "App\\Http\\Controllers\\ConfirmController::confirm",
            "doc": "&quot;change the confirmation for Periods in Database&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers",
            "fromLink": "App/Http/Controllers.html",
            "link": "App/Http/Controllers/Controller.html",
            "name": "App\\Http\\Controllers\\Controller",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers",
            "fromLink": "App/Http/Controllers.html",
            "link": "App/Http/Controllers/PeriodController.html",
            "name": "App\\Http\\Controllers\\PeriodController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\PeriodController",
            "fromLink": "App/Http/Controllers/PeriodController.html",
            "link": "App/Http/Controllers/PeriodController.html#method___construct",
            "name": "App\\Http\\Controllers\\PeriodController::__construct",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\PeriodController",
            "fromLink": "App/Http/Controllers/PeriodController.html",
            "link": "App/Http/Controllers/PeriodController.html#method_show",
            "name": "App\\Http\\Controllers\\PeriodController::show",
            "doc": "&quot;Display the specified \\App\\Period.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\PeriodController",
            "fromLink": "App/Http/Controllers/PeriodController.html",
            "link": "App/Http/Controllers/PeriodController.html#method_index",
            "name": "App\\Http\\Controllers\\PeriodController::index",
            "doc": "&quot;Display a listing \\App\\Period by user.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\PeriodController",
            "fromLink": "App/Http/Controllers/PeriodController.html",
            "link": "App/Http/Controllers/PeriodController.html#method_indexAll",
            "name": "App\\Http\\Controllers\\PeriodController::indexAll",
            "doc": "&quot;Display a listing of all \\App\\Period.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\PeriodController",
            "fromLink": "App/Http/Controllers/PeriodController.html",
            "link": "App/Http/Controllers/PeriodController.html#method_store",
            "name": "App\\Http\\Controllers\\PeriodController::store",
            "doc": "&quot;Store a newly created \\App\\Period in Database.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\PeriodController",
            "fromLink": "App/Http/Controllers/PeriodController.html",
            "link": "App/Http/Controllers/PeriodController.html#method_destroy",
            "name": "App\\Http\\Controllers\\PeriodController::destroy",
            "doc": "&quot;Remove the specified \\App\\Period from Database.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers",
            "fromLink": "App/Http/Controllers.html",
            "link": "App/Http/Controllers/ReasonController.html",
            "name": "App\\Http\\Controllers\\ReasonController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\ReasonController",
            "fromLink": "App/Http/Controllers/ReasonController.html",
            "link": "App/Http/Controllers/ReasonController.html#method_index",
            "name": "App\\Http\\Controllers\\ReasonController::index",
            "doc": "&quot;Display a listing of \\App\\Reason.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\ReasonController",
            "fromLink": "App/Http/Controllers/ReasonController.html",
            "link": "App/Http/Controllers/ReasonController.html#method_create",
            "name": "App\\Http\\Controllers\\ReasonController::create",
            "doc": "&quot;Show the form for creating a new \\App\\Reason.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\ReasonController",
            "fromLink": "App/Http/Controllers/ReasonController.html",
            "link": "App/Http/Controllers/ReasonController.html#method_store",
            "name": "App\\Http\\Controllers\\ReasonController::store",
            "doc": "&quot;Store a newly created \\App\\Reason in Database.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\ReasonController",
            "fromLink": "App/Http/Controllers/ReasonController.html",
            "link": "App/Http/Controllers/ReasonController.html#method_edit",
            "name": "App\\Http\\Controllers\\ReasonController::edit",
            "doc": "&quot;Show the form for editing \\App\\Reason.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\ReasonController",
            "fromLink": "App/Http/Controllers/ReasonController.html",
            "link": "App/Http/Controllers/ReasonController.html#method_update",
            "name": "App\\Http\\Controllers\\ReasonController::update",
            "doc": "&quot;Update the specified \\App\\Reason in Database.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\ReasonController",
            "fromLink": "App/Http/Controllers/ReasonController.html",
            "link": "App/Http/Controllers/ReasonController.html#method_destroy",
            "name": "App\\Http\\Controllers\\ReasonController::destroy",
            "doc": "&quot;Remove the specified \\App\\Reason From Database.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Controllers",
            "fromLink": "App/Http/Controllers.html",
            "link": "App/Http/Controllers/UserController.html",
            "name": "App\\Http\\Controllers\\UserController",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\UserController",
            "fromLink": "App/Http/Controllers/UserController.html",
            "link": "App/Http/Controllers/UserController.html#method___construct",
            "name": "App\\Http\\Controllers\\UserController::__construct",
            "doc": "&quot;UserController constructor.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\UserController",
            "fromLink": "App/Http/Controllers/UserController.html",
            "link": "App/Http/Controllers/UserController.html#method_index",
            "name": "App\\Http\\Controllers\\UserController::index",
            "doc": "&quot;Display a listing of \\App\\User.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\UserController",
            "fromLink": "App/Http/Controllers/UserController.html",
            "link": "App/Http/Controllers/UserController.html#method_create",
            "name": "App\\Http\\Controllers\\UserController::create",
            "doc": "&quot;Show the form for creating a new \\App\\User.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\UserController",
            "fromLink": "App/Http/Controllers/UserController.html",
            "link": "App/Http/Controllers/UserController.html#method_store",
            "name": "App\\Http\\Controllers\\UserController::store",
            "doc": "&quot;Store a newly created \\App\\User in Database.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\UserController",
            "fromLink": "App/Http/Controllers/UserController.html",
            "link": "App/Http/Controllers/UserController.html#method_edit",
            "name": "App\\Http\\Controllers\\UserController::edit",
            "doc": "&quot;Show the form for editing the specified \\App\\User.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\UserController",
            "fromLink": "App/Http/Controllers/UserController.html",
            "link": "App/Http/Controllers/UserController.html#method_update",
            "name": "App\\Http\\Controllers\\UserController::update",
            "doc": "&quot;Update the specified \\App\\User in Database.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Controllers\\UserController",
            "fromLink": "App/Http/Controllers/UserController.html",
            "link": "App/Http/Controllers/UserController.html#method_destroy",
            "name": "App\\Http\\Controllers\\UserController::destroy",
            "doc": "&quot;Remove the specified resource from storage.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http",
            "fromLink": "App/Http.html",
            "link": "App/Http/Kernel.html",
            "name": "App\\Http\\Kernel",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/Absence.html",
            "name": "App\\Http\\Middleware\\Absence",
            "doc": "&quot;Class Absence\ngrand|deny Access for Absence Tool&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Middleware\\Absence",
            "fromLink": "App/Http/Middleware/Absence.html",
            "link": "App/Http/Middleware/Absence.html#method_handle",
            "name": "App\\Http\\Middleware\\Absence::handle",
            "doc": "&quot;Handle an incoming request.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/Admin.html",
            "name": "App\\Http\\Middleware\\Admin",
            "doc": "&quot;Class Admin&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Middleware\\Admin",
            "fromLink": "App/Http/Middleware/Admin.html",
            "link": "App/Http/Middleware/Admin.html#method_handle",
            "name": "App\\Http\\Middleware\\Admin::handle",
            "doc": "&quot;Handle an incoming request.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/Authenticate.html",
            "name": "App\\Http\\Middleware\\Authenticate",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Middleware\\Authenticate",
            "fromLink": "App/Http/Middleware/Authenticate.html",
            "link": "App/Http/Middleware/Authenticate.html#method_redirectTo",
            "name": "App\\Http\\Middleware\\Authenticate::redirectTo",
            "doc": "&quot;Get the path the user should be redirected to when they are not authenticated.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/CheckForMaintenanceMode.html",
            "name": "App\\Http\\Middleware\\CheckForMaintenanceMode",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/EncryptCookies.html",
            "name": "App\\Http\\Middleware\\EncryptCookies",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/RedirectIfAuthenticated.html",
            "name": "App\\Http\\Middleware\\RedirectIfAuthenticated",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Middleware\\RedirectIfAuthenticated",
            "fromLink": "App/Http/Middleware/RedirectIfAuthenticated.html",
            "link": "App/Http/Middleware/RedirectIfAuthenticated.html#method_handle",
            "name": "App\\Http\\Middleware\\RedirectIfAuthenticated::handle",
            "doc": "&quot;Handle an incoming request.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/TrimStrings.html",
            "name": "App\\Http\\Middleware\\TrimStrings",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/TrustProxies.html",
            "name": "App\\Http\\Middleware\\TrustProxies",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/VerifyCsrfToken.html",
            "name": "App\\Http\\Middleware\\VerifyCsrfToken",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Middleware",
            "fromLink": "App/Http/Middleware.html",
            "link": "App/Http/Middleware/XSSProtection.html",
            "name": "App\\Http\\Middleware\\XSSProtection",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Middleware\\XSSProtection",
            "fromLink": "App/Http/Middleware/XSSProtection.html",
            "link": "App/Http/Middleware/XSSProtection.html#method_handle",
            "name": "App\\Http\\Middleware\\XSSProtection::handle",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Middleware\\XSSProtection",
            "fromLink": "App/Http/Middleware/XSSProtection.html",
            "link": "App/Http/Middleware/XSSProtection.html#method_shouldPassThrough",
            "name": "App\\Http\\Middleware\\XSSProtection::shouldPassThrough",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Requests",
            "fromLink": "App/Http/Requests.html",
            "link": "App/Http/Requests/StorePeriodFormRequest.html",
            "name": "App\\Http\\Requests\\StorePeriodFormRequest",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\StorePeriodFormRequest",
            "fromLink": "App/Http/Requests/StorePeriodFormRequest.html",
            "link": "App/Http/Requests/StorePeriodFormRequest.html#method_authorize",
            "name": "App\\Http\\Requests\\StorePeriodFormRequest::authorize",
            "doc": "&quot;Determine if the user is authorized to make this request.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\StorePeriodFormRequest",
            "fromLink": "App/Http/Requests/StorePeriodFormRequest.html",
            "link": "App/Http/Requests/StorePeriodFormRequest.html#method_rules",
            "name": "App\\Http\\Requests\\StorePeriodFormRequest::rules",
            "doc": "&quot;Get the validation rules that apply to the request.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Requests",
            "fromLink": "App/Http/Requests.html",
            "link": "App/Http/Requests/StoreReasonFormRequest.html",
            "name": "App\\Http\\Requests\\StoreReasonFormRequest",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\StoreReasonFormRequest",
            "fromLink": "App/Http/Requests/StoreReasonFormRequest.html",
            "link": "App/Http/Requests/StoreReasonFormRequest.html#method_authorize",
            "name": "App\\Http\\Requests\\StoreReasonFormRequest::authorize",
            "doc": "&quot;Determine if the user is authorized to make this request.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\StoreReasonFormRequest",
            "fromLink": "App/Http/Requests/StoreReasonFormRequest.html",
            "link": "App/Http/Requests/StoreReasonFormRequest.html#method_rules",
            "name": "App\\Http\\Requests\\StoreReasonFormRequest::rules",
            "doc": "&quot;Get the validation rules that apply to the request.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Requests",
            "fromLink": "App/Http/Requests.html",
            "link": "App/Http/Requests/StoreUserFormRequest.html",
            "name": "App\\Http\\Requests\\StoreUserFormRequest",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\StoreUserFormRequest",
            "fromLink": "App/Http/Requests/StoreUserFormRequest.html",
            "link": "App/Http/Requests/StoreUserFormRequest.html#method_authorize",
            "name": "App\\Http\\Requests\\StoreUserFormRequest::authorize",
            "doc": "&quot;Determine if the user is authorized to make this request.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\StoreUserFormRequest",
            "fromLink": "App/Http/Requests/StoreUserFormRequest.html",
            "link": "App/Http/Requests/StoreUserFormRequest.html#method_rules",
            "name": "App\\Http\\Requests\\StoreUserFormRequest::rules",
            "doc": "&quot;Get the validation rules that apply to the request.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Requests",
            "fromLink": "App/Http/Requests.html",
            "link": "App/Http/Requests/UpdateReasonFormRequest.html",
            "name": "App\\Http\\Requests\\UpdateReasonFormRequest",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\UpdateReasonFormRequest",
            "fromLink": "App/Http/Requests/UpdateReasonFormRequest.html",
            "link": "App/Http/Requests/UpdateReasonFormRequest.html#method_authorize",
            "name": "App\\Http\\Requests\\UpdateReasonFormRequest::authorize",
            "doc": "&quot;Determine if the user is authorized to make this request.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\UpdateReasonFormRequest",
            "fromLink": "App/Http/Requests/UpdateReasonFormRequest.html",
            "link": "App/Http/Requests/UpdateReasonFormRequest.html#method_rules",
            "name": "App\\Http\\Requests\\UpdateReasonFormRequest::rules",
            "doc": "&quot;Get the validation rules that apply to the request.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Http\\Requests",
            "fromLink": "App/Http/Requests.html",
            "link": "App/Http/Requests/UpdateUserFormRequest.html",
            "name": "App\\Http\\Requests\\UpdateUserFormRequest",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\UpdateUserFormRequest",
            "fromLink": "App/Http/Requests/UpdateUserFormRequest.html",
            "link": "App/Http/Requests/UpdateUserFormRequest.html#method_authorize",
            "name": "App\\Http\\Requests\\UpdateUserFormRequest::authorize",
            "doc": "&quot;Determine if the user is authorized to make this request.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Http\\Requests\\UpdateUserFormRequest",
            "fromLink": "App/Http/Requests/UpdateUserFormRequest.html",
            "link": "App/Http/Requests/UpdateUserFormRequest.html#method_rules",
            "name": "App\\Http\\Requests\\UpdateUserFormRequest::rules",
            "doc": "&quot;Get the validation rules that apply to the request.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Libs",
            "fromLink": "App/Libs.html",
            "link": "App/Libs/Datamap.html",
            "name": "App\\Libs\\Datamap",
            "doc": "&quot;Class Datamap\nstores same basic static data&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Libs\\Datamap",
            "fromLink": "App/Libs/Datamap.html",
            "link": "App/Libs/Datamap.html#method_getAppLanguages",
            "name": "App\\Libs\\Datamap::getAppLanguages",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Libs\\Datamap",
            "fromLink": "App/Libs/Datamap.html",
            "link": "App/Libs/Datamap.html#method_getAbsenceReasons",
            "name": "App\\Libs\\Datamap::getAbsenceReasons",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Libs\\Datamap",
            "fromLink": "App/Libs/Datamap.html",
            "link": "App/Libs/Datamap.html#method_getOneReason",
            "name": "App\\Libs\\Datamap::getOneReason",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Libs\\Datamap",
            "fromLink": "App/Libs/Datamap.html",
            "link": "App/Libs/Datamap.html#method_getAccessPoints",
            "name": "App\\Libs\\Datamap::getAccessPoints",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Libs\\Datamap",
            "fromLink": "App/Libs/Datamap.html",
            "link": "App/Libs/Datamap.html#method_getOneAccessPoint",
            "name": "App\\Libs\\Datamap::getOneAccessPoint",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Libs\\Datamap",
            "fromLink": "App/Libs/Datamap.html",
            "link": "App/Libs/Datamap.html#method_getFirstAdmin",
            "name": "App\\Libs\\Datamap::getFirstAdmin",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Libs\\Datamap",
            "fromLink": "App/Libs/Datamap.html",
            "link": "App/Libs/Datamap.html#method_getMonth",
            "name": "App\\Libs\\Datamap::getMonth",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Libs\\Datamap",
            "fromLink": "App/Libs/Datamap.html",
            "link": "App/Libs/Datamap.html#method_getMonthName",
            "name": "App\\Libs\\Datamap::getMonthName",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App",
            "fromLink": "App.html",
            "link": "App/Period.html",
            "name": "App\\Period",
            "doc": "&quot;App\\Period&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Period",
            "fromLink": "App/Period.html",
            "link": "App/Period.html#method_reason",
            "name": "App\\Period::reason",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Period",
            "fromLink": "App/Period.html",
            "link": "App/Period.html#method_user",
            "name": "App\\Period::user",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Period",
            "fromLink": "App/Period.html",
            "link": "App/Period.html#method_scopeByConfirmed",
            "name": "App\\Period::scopeByConfirmed",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Period",
            "fromLink": "App/Period.html",
            "link": "App/Period.html#method_scopeByNotConfirmed",
            "name": "App\\Period::scopeByNotConfirmed",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Period",
            "fromLink": "App/Period.html",
            "link": "App/Period.html#method_scopeByOlderThen",
            "name": "App\\Period::scopeByOlderThen",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Period",
            "fromLink": "App/Period.html",
            "link": "App/Period.html#method_scopeByInMonth",
            "name": "App\\Period::scopeByInMonth",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Period",
            "fromLink": "App/Period.html",
            "link": "App/Period.html#method_pending",
            "name": "App\\Period::pending",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Period",
            "fromLink": "App/Period.html",
            "link": "App/Period.html#method_pendingColor",
            "name": "App\\Period::pendingColor",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Period",
            "fromLink": "App/Period.html",
            "link": "App/Period.html#method_pendingText",
            "name": "App\\Period::pendingText",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Policies",
            "fromLink": "App/Policies.html",
            "link": "App/Policies/PeriodPolicy.html",
            "name": "App\\Policies\\PeriodPolicy",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Policies\\PeriodPolicy",
            "fromLink": "App/Policies/PeriodPolicy.html",
            "link": "App/Policies/PeriodPolicy.html#method_access",
            "name": "App\\Policies\\PeriodPolicy::access",
            "doc": "&quot;Determine whether the user can view the period.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Policies",
            "fromLink": "App/Policies.html",
            "link": "App/Policies/UserPolicy.html",
            "name": "App\\Policies\\UserPolicy",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Policies\\UserPolicy",
            "fromLink": "App/Policies/UserPolicy.html",
            "link": "App/Policies/UserPolicy.html#method_edit",
            "name": "App\\Policies\\UserPolicy::edit",
            "doc": "&quot;Determine whether the user can update the model.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Providers",
            "fromLink": "App/Providers.html",
            "link": "App/Providers/AppServiceProvider.html",
            "name": "App\\Providers\\AppServiceProvider",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\AppServiceProvider",
            "fromLink": "App/Providers/AppServiceProvider.html",
            "link": "App/Providers/AppServiceProvider.html#method_boot",
            "name": "App\\Providers\\AppServiceProvider::boot",
            "doc": "&quot;Bootstrap any application services.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\AppServiceProvider",
            "fromLink": "App/Providers/AppServiceProvider.html",
            "link": "App/Providers/AppServiceProvider.html#method_register",
            "name": "App\\Providers\\AppServiceProvider::register",
            "doc": "&quot;Register any application services.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\AppServiceProvider",
            "fromLink": "App/Providers/AppServiceProvider.html",
            "link": "App/Providers/AppServiceProvider.html#method_provides",
            "name": "App\\Providers\\AppServiceProvider::provides",
            "doc": "&quot;&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Providers",
            "fromLink": "App/Providers.html",
            "link": "App/Providers/AuthServiceProvider.html",
            "name": "App\\Providers\\AuthServiceProvider",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\AuthServiceProvider",
            "fromLink": "App/Providers/AuthServiceProvider.html",
            "link": "App/Providers/AuthServiceProvider.html#method_boot",
            "name": "App\\Providers\\AuthServiceProvider::boot",
            "doc": "&quot;Register any authentication \/ authorization services.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Providers",
            "fromLink": "App/Providers.html",
            "link": "App/Providers/BroadcastServiceProvider.html",
            "name": "App\\Providers\\BroadcastServiceProvider",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\BroadcastServiceProvider",
            "fromLink": "App/Providers/BroadcastServiceProvider.html",
            "link": "App/Providers/BroadcastServiceProvider.html#method_boot",
            "name": "App\\Providers\\BroadcastServiceProvider::boot",
            "doc": "&quot;Bootstrap any application services.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Providers",
            "fromLink": "App/Providers.html",
            "link": "App/Providers/EventServiceProvider.html",
            "name": "App\\Providers\\EventServiceProvider",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\EventServiceProvider",
            "fromLink": "App/Providers/EventServiceProvider.html",
            "link": "App/Providers/EventServiceProvider.html#method_boot",
            "name": "App\\Providers\\EventServiceProvider::boot",
            "doc": "&quot;Register any events for your application.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App\\Providers",
            "fromLink": "App/Providers.html",
            "link": "App/Providers/RouteServiceProvider.html",
            "name": "App\\Providers\\RouteServiceProvider",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\RouteServiceProvider",
            "fromLink": "App/Providers/RouteServiceProvider.html",
            "link": "App/Providers/RouteServiceProvider.html#method_boot",
            "name": "App\\Providers\\RouteServiceProvider::boot",
            "doc": "&quot;Define your route model bindings, pattern filters, etc.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\RouteServiceProvider",
            "fromLink": "App/Providers/RouteServiceProvider.html",
            "link": "App/Providers/RouteServiceProvider.html#method_map",
            "name": "App\\Providers\\RouteServiceProvider::map",
            "doc": "&quot;Define the routes for the application.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\RouteServiceProvider",
            "fromLink": "App/Providers/RouteServiceProvider.html",
            "link": "App/Providers/RouteServiceProvider.html#method_mapWebRoutes",
            "name": "App\\Providers\\RouteServiceProvider::mapWebRoutes",
            "doc": "&quot;Define the \&quot;web\&quot; routes for the application.&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\Providers\\RouteServiceProvider",
            "fromLink": "App/Providers/RouteServiceProvider.html",
            "link": "App/Providers/RouteServiceProvider.html#method_mapApiRoutes",
            "name": "App\\Providers\\RouteServiceProvider::mapApiRoutes",
            "doc": "&quot;Define the \&quot;api\&quot; routes for the application.&quot;"
        },

        {
            "type": "Class",
            "fromName": "App",
            "fromLink": "App.html",
            "link": "App/Reason.html",
            "name": "App\\Reason",
            "doc": "&quot;App\\Reason&quot;"
        },

        {
            "type": "Class",
            "fromName": "App",
            "fromLink": "App.html",
            "link": "App/User.html",
            "name": "App\\User",
            "doc": "&quot;App\\User&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\User",
            "fromLink": "App/User.html",
            "link": "App/User.html#method_fullName",
            "name": "App\\User::fullName",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\User",
            "fromLink": "App/User.html",
            "link": "App/User.html#method_periods",
            "name": "App\\User::periods",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\User",
            "fromLink": "App/User.html",
            "link": "App/User.html#method_accesses",
            "name": "App\\User::accesses",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\User",
            "fromLink": "App/User.html",
            "link": "App/User.html#method_getAccesses",
            "name": "App\\User::getAccesses",
            "doc": "&quot;&quot;"
        },
        {
            "type": "Method",
            "fromName": "App\\User",
            "fromLink": "App/User.html",
            "link": "App/User.html#method_hasAccess",
            "name": "App\\User::hasAccess",
            "doc": "&quot;&quot;"
        },


        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0, -1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function (term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function (term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function (matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function (ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function (type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function (ele) {
            ele.html(treeHtml);
        }
    };

    $(function () {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function () {

    // Enable the version switcher
    $('#version-switcher').change(function () {
        window.location = $(this).val()
    });


    // Toggle left-nav divs on click
    $('#api-tree .hd span').click(function () {
        $(this).parent().parent().toggleClass('opened');
    });

    // Expand the parent namespaces of the current page.
    var expected = $('body').attr('data-name');

    if (expected) {
        // Open the currently selected node and its parents.
        var container = $('#api-tree');
        var node = $('#api-tree li[data-name="' + expected + '"]');
        // Node might not be found when simulating namespaces
        if (node.length > 0) {
            node.addClass('active').addClass('opened');
            node.parents('li').addClass('opened');
            var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
            // Position the item nearer to the top of the screen.
            scrollPos -= 200;
            container.scrollTop(scrollPos);
        }
    }


    var form = $('#search-form .typeahead');
    form.typeahead({
        hint: true,
        highlight: true,
        minLength: 1
    }, {
        name: 'search',
        displayKey: 'name',
        source: function (q, cb) {
            cb(Sami.search(q));
        }
    });

    // The selection is direct-linked when the user selects a suggestion.
    form.on('typeahead:selected', function (e, suggestion) {
        window.location = suggestion.link;
    });

    // The form is submitted when the user hits enter.
    form.keypress(function (e) {
        if (e.which == 13) {
            $('#search-form').submit();
            return true;
        }
    });


});


