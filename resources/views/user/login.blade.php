<x-layout>

    <section class="start">
        <div class="container">

            <!-- start of title -->
            <form class="form-group" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form">
                    <h2 class="text1" data-translate="log-title">Log in</h2>
                </div>
                <!-- end of title -->

                <!-- email -->
                <x-form.input type="email" name="email" placeholder="email" class="fa-regular fa-envelope" />
                <!-- end of email-->

                <!-- password -->
                <x-form.input type="password" name="password" placeholder="*********" class="fa-solid fa-lock"  />
                <!--end of password  -->

                <!-- Remember me -->
                <div class="check">
                    <input type="checkbox" value="lsRememberMe" id="rememberMe"> <label for="rememberMe" data-translate="log-rem">Remember Me</label>
                </div>
                <!-- end of remember me -->

                <!-- log in btn -->
                <a href="#" class="login-btn"  role="button" aria-pressed="true">
                    <button id="btn-login" data-translate="log-title">
                        Log in
                    </button>
                </a>
                <!-- end of log in btn -->

                <!-- page sign up -->
                <div class="login">
                    <p data-translate="log-acc">Don't have an account?</p>
                    <a class="nav-link" href="/register" data-translate="log-sign">Sign up</a>
                </div>
                <!-- end -->

            </form>
        </div>
    </section>
</x-layout>
