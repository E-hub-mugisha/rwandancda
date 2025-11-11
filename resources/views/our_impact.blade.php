@extends('layouts.base')
@section('title','Our Impact')
@section('content')

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" rel="stylesheet">
<style>
    /* Reset & base */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', sans-serif;
    }

    body,
    html {
        height: 100%;
        background: #f5f7fa;
        color: #333;
    }

    /* Center content */
    .container {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        /* min-height: 100vh; */
        padding: 20px;
    }

    /* Logo */
    .logo img {
        width: 150px;
        margin-bottom: 20px;
    }

    /* Heading */
    h1 {
        font-size: 3rem;
        color: #1b3e6b;
        margin-bottom: 15px;
    }

    p.subtitle {
        font-size: 1.2rem;
        margin-bottom: 40px;
        color: #555;
        max-width: 600px;
    }

    /* Impact stats */
    .impact {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 30px;
        margin-bottom: 50px;
    }

    .impact-card {
        background: #fff;
        border-radius: 12px;
        padding: 25px 30px;
        width: 200px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s;
    }

    .impact-card:hover {
        transform: translateY(-5px);
    }

    .impact-card h2 {
        font-size: 2.2rem;
        color: #1b3e6b;
        margin-bottom: 10px;
    }

    .impact-card p {
        font-size: 1rem;
        color: #555;
    }

    /* Coming soon countdown (optional) */
    .countdown {
        margin-bottom: 40px;
        font-size: 1.2rem;
        color: #333;
    }

    /* Footer / Social links */
    .footer-icon {
        display: flex;
        gap: 20px;
        justify-content: center;
    }

    .footer-icon a {
        color: #1b3e6b;
        font-size: 1.5rem;
        transition: color 0.3s;
    }

    .footer-icon a:hover {
        color: #ff6b6b;
    }

    /* Responsive */
    @media(max-width: 768px) {
        .impact {
            gap: 20px;
        }

        .impact-card {
            width: 150px;
            padding: 20px;
        }

        h1 {
            font-size: 2.5rem;
        }
    }

    @media(max-width: 480px) {
        .impact-card {
            width: 120px;
            padding: 15px;
        }

        h1 {
            font-size: 2rem;
        }

        p.subtitle {
            font-size: 1rem;
        }
    }
</style>

<div class="container p-5">
    <!-- Logo -->
    <div class="logo mb-4 mt-4">
        <img src="https://www.rwandancda.org/new/img/logos/logo.png" alt="Rwanda NCD Alliance Logo">
    </div>

    <!-- Heading -->
    <h1>Coming Soon</h1>
    <p class="subtitle">our impact in the fight against non-communicable diseases in Rwanda.</p>

    <!-- Impact Stats -->
    <div class="impact">
        <div class="impact-card">
            <h2>25+</h2>
            <p>Member Organizations</p>
        </div>
        <div class="impact-card">
            <h2>2M+</h2>
            <p>People Reached Through Awareness Programs</p>
        </div>
        <div class="impact-card">
            <h2>10+</h2>
            <p>Community Projects Supported</p>
        </div>
        <div class="impact-card">
            <h2>10+</h2>
            <p>Global Partnerships</p>
        </div>
    </div>

    <!-- Optional countdown -->
    <!-- <div class="countdown">Launching in 30 days</div> -->

    <!-- Social Links -->
    <div class="footer-icon">
        <a href="https://twitter.com/RwandaNCDA" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://facebook.com/RwandaNCDA" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://linkedin.com/company/rwanda-ncda" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.rwandancda.org" target="_blank"><i class="fas fa-globe"></i></a>
    </div>
</div>
@endsection