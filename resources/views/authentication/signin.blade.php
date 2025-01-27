<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<x-head />

<body>

    <section class="auth bg-base d-flex flex-wrap">
        <div class="auth-left d-lg-block d-none">
            <div class="d-flex align-items-center flex-column h-100 justify-content-center">
                <img src="{{ asset('assets/images/homes.png') }}" alt="">
            </div>
        </div>
        <div class="auth-right py-32 px-24 d-flex flex-column justify-content-center">
            <div class="max-w-464-px mx-auto w-100">
                <div>
                    <a href="{{ route('index') }}" class="mb-40 max-w-290-px">
                        <img src="{{ asset('assets/images/home.png') }}" alt="">
                    </a>
                    <h4 class="mb-12">Sign In to your Account</h4>
                    <p class="mb-32 text-secondary-light text-lg">Welcome back! please enter your detail</p>
                </div>
                <form action="{{ route('signin.submit') }}" method="POST">
                    @csrf
                    <div class="icon-field mb-16">
                        <span class="icon top-50 translate-middle-y">
                            <iconify-icon icon="mage:email"></iconify-icon>
                        </span>
                        <input type="email" name="email" class="form-control h-56-px bg-neutral-50 radius-12"
                            placeholder="Email" required>
                    </div>
                    <div class="position-relative mb-20">
                        <div class="icon-field">
                            <span class="icon top-50 translate-middle-y">
                                <iconify-icon icon="solar:lock-password-outline"></iconify-icon>
                            </span>
                            <input type="password" name="password" class="form-control h-56-px bg-neutral-50 radius-12"
                                id="your-password" placeholder="Password" required>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary text-sm btn-sm px-12 py-16 w-100 radius-12 mt-32">Sign in</button>

                    <div class="">
                        <div class="d-flex justify-content-between gap-2">
                            <div class="form-check style-check d-flex align-items-center">
                                <input class="form-check-input border border-neutral-300" type="checkbox" value="" id="remeber">
                                <label class="form-check-label" for="remeber">Remember me </label>
                            </div>
                            <a  href="forgotpassword" class="text-primary-600 fw-medium">Forgot Password?</a>
                        </div>
                    </div>

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif


                    <div class="mt-32 center-border-horizontal text-center">
                        <span class="bg-base z-1 px-4">Or sign in with</span>
                    </div>

                    <div class="mt-32 d-flex align-items-center gap-3">
                        <a href="https://www.facebook.com" target="_blank" class="w-50">
                            <button type="button"
                                class="fw-semibold text-primary-light py-16 px-24 w-100 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50">
                                <iconify-icon icon="ic:baseline-facebook"
                                    class="text-primary-600 text-xl line-height-1"></iconify-icon>
                                Facebook
                            </button>
                        </a>
                        <a href="https://accounts.google.com" target="_blank" class="w-50">
                            <button type="button"
                                class="fw-semibold text-primary-light py-16 px-24 w-100 border radius-12 text-md d-flex align-items-center justify-content-center gap-12 line-height-1 bg-hover-primary-50">
                                <iconify-icon icon="logos:google-icon"
                                    class="text-primary-600 text-xl line-height-1"></iconify-icon>
                                Google
                            </button>
                        </a>
                    </div>

                    <div class="mt-32 text-center text-sm">
                        <p class="mb-0">don't have an account? <a href="{{ route('signup') }}"
                                class="text-primary-600 fw-semibold">Sign up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    @php
        $script = '<script>
                                                            // ================== Password Show Hide Js Start ==========
                                                            function initializePasswordToggle(toggleSelector) {
                                                                $(toggleSelector).on("click", function() {
                                                                    $(this).toggleClass("ri-eye-off-line");
                                                                    var input = $($(this).attr("data-toggle"));
                                                                    if (input.attr("type") === "password") {
                                                                        input.attr("type", "text");
                                                                    } else {
                                                                        input.attr("type", "password");
                                                                    }
                                                                });
                                                            }
                                                            // Call the function
                                                            initializePasswordToggle(".toggle-password");
                                                            // ========================= Password Show Hide Js End ===========================
                                                        </script>';
    @endphp

    <x-script />

</body>

</html>