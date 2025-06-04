<div class="modal loginModal fade mt-5 " id="loginModalContainer" tabindex="-1" role="dialog" aria-labelledby="loginModalContainerTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered " role="document">
        <div class="modal-content">

            <div class="modal-body ">


                <!-- Main Content -->
                <main id="rlr-main p-3" class="">
                    <div class="">
                        <section class="">
                            <div class="">
                                <div class="row loginFormElement">
                                    <div >
                                        <form></form>
                                        <form class="rlr-authforms loginFormElement" action="{{route("login")}}"  method="POST">
                                            @csrf
                                            <div class="rlr-authforms__header p-0">
                                                <img src="{{ asset('assets/svg/emprise-logo-dark.png') }}" alt="Logo"/>
                                                <h2>Log in to your {{ config('app.name') }}</h2>
                                                <p>Welcome back! Please enter login details.</p>

                                                @include("messages")
                                            </div>
                                            <div class="rlr-authforms__form">
                                                <div class="rlr-authforms__inputgroup"><label
                                                        class="rlr-form-label rlr-form-label--light required"> Email </label> <input
                                                        type="text" autocomplete="off" name="email" class="form-control form-control--light"/>
                                                </div>
                                                <div class="rlr-authforms__inputgroup"><label
                                                        class="rlr-form-label rlr-form-label--light required"> Password </label>
                                                    <input type="password" name="password" autocomplete="off"
                                                           class="form-control form-control--light"/></div>
                                                <div class="rlr-authforms__forgotpassword">
                                                    <div class="form-check-inline">
                                                        <input class="form-check-input rlr-form-check-input" id="rlr-checkbox-1"
                                                               type="checkbox" value="defaultValue"/>
                                                        <label
                                                            class="rlr-form-label rlr-form-label--checkbox rlr-form-label--font-inherit rlr-form-label--bold"
                                                            for="rlr-checkbox-1">Remember me on this device</label>
                                                    </div>
                                                    <a href="account-pages--forgot-password">Forgot password</a>
                                                </div>
                                                <button type="submit"
                                                        class="btn mb-3 rlr-button rlr-button--fullwidth rlr-button--primary">Sign
                                                    in
                                                </button>
                                                {{--                                    <button type="button" class="btn mb-3 rlr-button rlr-button--fullwidth rlr-button--google">Sign in with Google</button>--}}
                                            </div>
                                            <div class="rlr-authforms__notes">
                                                <p>Don’t have an account? <a href="{{ route('register') }}">Sign up</a></p>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </main>

            </div>
        </div>
    </div>
</div>
