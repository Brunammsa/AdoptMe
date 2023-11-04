<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <section class="section-login">
            <article>
                <a href="{{ route('login.social.redirect', 'google') }}" type="button" class="button-providers-login">
                    Google
                </a>
            </article>
            <article>
                <a href="{{ route('login.social.redirect', 'facebook') }}" type="button" class="button-providers-login">
                    Facebook
                </a>
            </article>
        </section>
    </form>
</x-guest-layout>
