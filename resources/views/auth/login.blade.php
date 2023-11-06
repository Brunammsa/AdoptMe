<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <section class="login">
            <p>Faça login com</p>
            <article>
                <a href="{{ route('login.social.redirect', 'google') }}" type="button" class="login-button">
                    Google
                </a>
            </article>
            <article>
                <a href="{{ route('login.social.redirect', 'facebook') }}" type="button" class="login-button">
                    Facebook
                </a>
            </article>
        </section>
    </form>
</x-guest-layout>
