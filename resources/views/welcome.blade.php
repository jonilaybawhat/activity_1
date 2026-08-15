<x-layout title="Music Player UI">
    <style>
    .lyrics {
        color: #e5e7eb;
        text-align: center;
        max-width: 450px;
    }
    .lyrics h2 { color: #7f5af0; font-size: 28px; margin-bottom: 15px; }
    .lyrics pre { font-family: inherit; line-height: 1.6; font-size: 15px; color: #9ca3af; white-space: pre-wrap; }

    .player{ width:360px; background:#1f2937; color:white; border-radius:25px; padding:25px; box-shadow:0 20px 40px rgba(0,0,0,.5); }
    .cover{ width:100%; height:300px; border-radius:20px; background:linear-gradient(135deg,#7f5af0,#2cb67d); display:flex; align-items:center; justify-content:center; font-size:100px; }
    .info{ text-align:center; margin-top:20px; }
    .info h2{ font-size:26px; }
    .info p{ color:#bdbdbd; margin-top:8px; }
    .progress{ margin:30px 0 15px; }
    .bar{ width:100%; height:8px; background:#444; border-radius:50px; overflow:hidden; }
    .fill{ width:45%; height:100%; background:#7f5af0; }
    .time{ display:flex; justify-content:space-between; margin-top:8px; color:#bbb; font-size:13px; }
    .controls{ display:flex; justify-content:space-around; align-items:center; margin-top:25px; }
    .btn{ width:55px; height:55px; border-radius:50%; border:none; background:#374151; color:white; font-size:22px; cursor:pointer; transition:.3s; }
    .btn:hover{ transform:scale(1.08); background:#4b5563; }
    .play{ width:70px; height:70px; background:#7f5af0; font-size:28px; }
    .play:hover{ background:#6842eb; }
    .playlist{ margin-top:30px; }
    .playlist h3{ margin-bottom:15px; }
    .song{ display:flex; justify-content:space-between; padding:12px; margin-bottom:10px; border-radius:10px; background:#2d3748; transition:.3s; }
    .song:hover{ background:#3b4658; }
    .song.active{ border-left:5px solid #7f5af0; }
    </style>

    <div class="lyrics">
        <h2>Lyrics</h2>
        <pre>
Oh, whoa-oh-oh-oh-oh
Oh, whoa-oh-oh-oh, oh
Oh, whoa, oh-oh-oh, oh, oh-oh, oh, oh-oh, oh

[Justin Bieber (Ludacris):]
You know you love me, I know you care (Yo, uh-huh)
Just shout whenever and I'll be there (Yo, uh-huh)
You are my love, you are my heart (Yo, uh-huh)
And we will never, ever, ever be apart (Yo, uh-huh)
Are we an item? Girl, quit playing (Yo, uh-huh)
We're just friends, what are you saying? (Yo, uh-huh)
Said, "There's another" and looked right in my eyes (Yo, uh-huh)
My first love broke my heart for the first time, and I was like (Yo, uh-huh)

[Justin Bieber:]
Baby, baby, baby, oh
Like baby, baby, baby, no
Like baby, baby, baby, oh
Thought you'd always be mine, mine
Baby, baby, baby, oh
Like baby, baby, baby, no
Like baby, baby, baby, oh
Thought you'd always be mine, mine

[Justin Bieber (Ludacris):]
Oh, for you, I would've done whatever (Yo, uh-huh)
And I just can't believe we ain't together (Yo, uh-huh)
And I wanna play it cool, but I'm losing you (Yo, uh-huh)
I'll buy you anything, I'll buy you any ring (Yo, uh-huh)
And I'm in pieces, baby, fix me (Yo, uh-huh)
And just shake me 'til you wake me from this bad dream (Yo, uh-huh)
I'm going down, down, down, down (Yo, uh-huh)
And I just can't believe my first love won't be around, and I'm like

[Justin Bieber:]
Baby, baby, baby, oh
Like baby, baby, baby, no
Like baby, baby, baby, oh
Thought you'd always be mine, mine
Baby, baby, baby, oh
Like baby, baby, baby, no
Like baby, baby, baby, oh
Thought you'd always be mine, mine

[Ludacris:]
(Luda) When I was thirteen, I had my first love
There was nobody that compared to my baby, and nobody came between us nor could ever come above
She had me going crazy, oh, I was starstruck
She woke me up daily, don't need no Starbucks (Woo)
She made my heart pound, and skip a beat
When I see her in the street
And at school on the playground, but I really wanna see her on the weekend
She knows she got me dazing
'Cause she was so amazing
And now my heart is breaking
But I just keep on saying

[Justin Bieber:]
Baby, baby, baby, oh
Like baby, baby, baby, no
Like baby, baby, baby, oh
Thought you'd always be mine, mine
Baby, baby, baby, oh
Like baby, baby, baby, no
Like baby, baby, baby, oh
Thought you'd always be mine, mine

I'm gone (Yeah-yeah-yeah, yeah-yeah-yeah)
Now I'm all gone (Yeah-yeah-yeah, yeah-yeah-yeah)
Now I'm all gone (Yeah-yeah-yeah, yeah-yeah-yeah)
Now I'm all gone (Gone, gone, gone, gone), I'm gone
        </pre>
    </div>

    <div class="player">
        <div class="cover">🎵</div>

        <div class="info">
            <h2>Baby</h2>
            <p>Justin Bieber ft. Ludacris</p>
        </div>

        <div class="progress">
            <div class="bar">
                <div class="fill"></div>
            </div>
            <div class="time">
                <span>1:24</span>
                <span>3:48</span>
            </div>
        </div>

        <div class="controls">
            <button class="btn">⏮</button>
            <button class="btn play">▶</button>
            <button class="btn">⏭</button>
        </div>

        <div class="playlist">
            <h3>Playlist</h3>
            <div class="song active">
                <span>Baby</span>
                <span>3:48</span>
            </div>
            <div class="song">
                <span>Another Song</span>
                <span>4:12</span>
            </div>
            <div class="song">
                <span>Favorite Track</span>
                <span>2:56</span>
            </div>
            <div class="song">
                <span>Summer Vibes</span>
                <span>3:15</span>
            </div>
        </div>
    </div>
</x-layout>