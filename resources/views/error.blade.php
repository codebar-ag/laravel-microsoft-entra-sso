<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ __('SSO Authentication Error') }} — {{ config('app.name') }}</title>
    <style>
        *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(to bottom, #0a0a0a, #171717);
            color: #e5e5e5;
            padding: 1.5rem;
        }

        .card {
            max-width: 28rem;
            width: 100%;
            background: #1c1c1c;
            border: 1px solid #2a2a2a;
            border-radius: 1rem;
            padding: 2.5rem;
            text-align: center;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,.5);
        }

        .icon-wrap {
            width: 4rem;
            height: 4rem;
            margin: 0 auto 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: rgba(239, 68, 68, .1);
            border: 1px solid rgba(239, 68, 68, .2);
        }

        .icon-wrap svg { width: 1.75rem; height: 1.75rem; color: #ef4444; }

        h1 { font-size: 1.25rem; font-weight: 600; margin-bottom: .5rem; color: #fafafa; }

        .message {
            font-size: .875rem;
            color: #a3a3a3;
            line-height: 1.6;
            margin-bottom: 2rem;
        }

        .error-detail {
            font-size: .8rem;
            color: #737373;
            background: #141414;
            border: 1px solid #262626;
            border-radius: .5rem;
            padding: .75rem 1rem;
            margin-bottom: 2rem;
            word-break: break-word;
            font-family: 'SF Mono', 'Cascadia Code', 'Fira Code', monospace;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            padding: .625rem 1.5rem;
            font-size: .875rem;
            font-weight: 500;
            color: #fff;
            background: #2563eb;
            border: none;
            border-radius: .5rem;
            text-decoration: none;
            transition: background .15s, box-shadow .15s;
            cursor: pointer;
        }

        .btn:hover { background: #1d4ed8; box-shadow: 0 0 0 3px rgba(37, 99, 235, .3); }

        .btn svg { width: 1rem; height: 1rem; }

        .footer {
            margin-top: 1.5rem;
            font-size: .75rem;
            color: #525252;
        }
    </style>
</head>
<body>
    <div class="card">
        <div class="icon-wrap">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                <path fill-rule="evenodd" d="M9.401 3.003c1.155-2 4.043-2 5.197 0l7.355 12.748c1.154 2-.29 4.499-2.599 4.499H4.645c-2.309 0-3.752-2.5-2.598-4.5L9.4 3.003zM12 8.25a.75.75 0 01.75.75v3.75a.75.75 0 01-1.5 0V9a.75.75 0 01.75-.75zm0 8.25a.75.75 0 100-1.5.75.75 0 000 1.5z" clip-rule="evenodd" />
            </svg>
        </div>

        <h1>{{ __('Authentication Failed') }}</h1>
        <p class="message">{{ __('We couldn\'t sign you in with your Microsoft account. This could be a temporary issue — please try again.') }}</p>

        @if(isset($error))
            <div class="error-detail">{{ $error }}</div>
        @endif

        <a href="{{ url('/login') }}" class="btn">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M17 10a.75.75 0 01-.75.75H5.612l4.158 3.96a.75.75 0 11-1.04 1.08l-5.5-5.25a.75.75 0 010-1.08l5.5-5.25a.75.75 0 111.04 1.08L5.612 9.25H16.25A.75.75 0 0117 10z" clip-rule="evenodd" />
            </svg>
            {{ __('Back to Login') }}
        </a>

        <p class="footer">{{ config('app.name') }} &mdash; Microsoft Entra SSO</p>
    </div>
</body>
</html>
