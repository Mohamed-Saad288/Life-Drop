<x-layout>
    <!-- start of sign up form -->
    <section class="start">
        <div class="container">
            <form class="form-group1" action="{{ route('register.store') }}" method="POST">
                @csrf
                <!-- start of title -->
                <div class="form">
                    <h2 class="text1" data-translate="log-sign">Sign Up</h2>
                </div>
                <!-- end of title -->

                <!-- username -->
                <x-form.input name="name"  placeholder="Name"  class="fa-regular fa-user"/>
                <!-- username -->

                <!-- email -->
                <x-form.input class="fa-regular fa-envelope" name="email" type="email" placeholder="write valid email" />
                <!-- email -->

                <!-- password -->
                <x-form.input class="fa-solid fa-lock" name="password" placeholder="***********" type="password" />
                <!--end of password  -->

                <!-- log in btn -->
                <a href="#" class="signup-btn"  role="button" aria-pressed="true">
                    <button id="btn-signup" data-translate="log-sign">
                        Sign Up
                    </button>
                </a>
                <!-- end of log in btn -->

                <!-- return to log in -->
                <div class="login">
                    <p data-translate="sign-acc">Already have an Account</p>
                    <a class="nav-link" href="/login" data-translate="log-title">Login</a>
                </div>
                <!-- end return to log in  -->
            </form>
        </div>
    </section>
    <!-- end of sign up form -->
</x-layout>
