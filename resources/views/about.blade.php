<x-layout title="About - Justin Bieber">
    <style>
    .about-card {
        width: 100%;
        max-width: 600px;
        background: #1f2937;
        border-radius: 25px;
        padding: 35px;
        box-shadow: 0 20px 40px rgba(0,0,0,.5);
        text-align: center;
    }

    .avatar-container {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        background: linear-gradient(135deg,#7f5af0,#2cb67d);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 50px;
        margin: 0 auto 20px;
        box-shadow: 0 10px 20px rgba(127, 90, 240, 0.3);
    }

    .about-card h1 {
        font-size: 32px;
        margin-bottom: 5px;
    }

    .about-card .subtitle {
        color: #7f5af0;
        font-weight: bold;
        font-size: 16px;
        margin-bottom: 20px;
    }

    .about-card p {
        color: #bdbdbd;
        line-height: 1.6;
        font-size: 15px;
        margin-bottom: 25px;
        text-align: justify;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 15px;
        border-top: 1px solid #374151;
        padding-top: 25px;
    }

    .stat-box h3 {
        font-size: 22px;
        color: #2cb67d;
    }

    .stat-box p {
        font-size: 12px;
        color: #9ca3af;
        margin: 5px 0 0 0;
        text-align: center;
    }
    </style>

    <div class="about-card">
        <div class="avatar-container">🎤</div>
        <h1>Justin Bieber</h1>
        <div class="subtitle">Global Pop Icon</div>

        <p>
            Born March 1, 1994, in London, Ontario, Canada, Justin Bieber was discovered
            in 2008 through videos he posted on YouTube. His debut EP "My World" and the
            breakout single "Baby" launched him into global stardom as a teenager. Over the
            years he has evolved from a teen pop sensation into a multi-Grammy-winning artist,
            exploring R&B, pop, and electronic influences across albums like "Purpose,"
            "Changes," and "Justice."
        </p>

        <div class="stats-grid">
            <div class="stat-box">
                <h3>2</h3>
                <p>Grammy Awards</p>
            </div>
            <div class="stat-box">
                <h3>8</h3>
                <p>Studio Albums</p>
            </div>
            <div class="stat-box">
                <h3>90M+</h3>
                <p>Monthly Listeners</p>
            </div>
        </div>
    </div>
</x-layout>