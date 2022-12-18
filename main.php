<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify: Music For Everyone</title>
    <link rel="stylesheet" href="\proj\spotifynew.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="icon" href="favicon.png">
</head>
<body>
    <header>
        <div class="menu">
            <div class="spotify">
                <i class="bi bi-spotify" title="Spotify"></i>
                <h1 title="Spotify">Spotify</h1>
                <i class="bi bi-r-circle"></i>
            </div>

            <div class="playlist">
                <div class="home">
                    <i class="bi bi-house-door"></i>
                    <h4>Home</h4>
                </div>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <h4>Search</h4>
                </div>
                <div class="library">
                    <i class="bi bi-collection"></i>
                    <h4>Your Library</h4>
                </div>
                <div></div>
                <div class="create">
                    <i class="bi bi-plus-square"></i>
                    <h4 onclick="openlink()">Create Playlist</h4>
                </div>
                <div class="liked">
                    <i class="bi bi-chat-square-heart"></i>
                    <h4 onclick="openlink1()">Liked Songs</h4>
                </div>
            </div>
        </div>
            
        <div class="song">
            <div class="main1">
                <a href="registration.php"><button>Sign up</button></a>
                <a href="login.php"><button>Log in</button></a>
            </div>
            <div class="main2">
                <div class="namemix2">Focus</div>
                <div class="list">
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            Peaceful Piano
                            <div>Relax and indulge with beautiful piano pieces</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            Deep Focus
                            <div>Keep calm and focus with ambient and post-rock music.</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            Instrumental Study
                            <div>Focus with soft study music in the background.</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            chill lofi beats
                            <div>The perfect study beats. Crush your productivity.</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            Coding Mode
                            <div>Dedicated to all the programmers out there.</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            Focus Flow
                            <div>Uptempo instrumental hip hop beats.</div>
                        </h4>
                    </li>
                </div>
                <div class="namemix2">Spotify Playlists</div>
                <div class="list">
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            Today's Top Hits
                            <div>SZA is on top of the Hottest 50!</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            RapCavier
                            <div>New music from Lil Durk, Juice WRLD and A Boogie Wit da Hoodie.</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            All Out 2010s
                            <div>The biggest songs of the 2010s.</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            Rock Classics
                            <div>Rock legends epic songs that continue to inspire generations.</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            Chill hits
                            <div>Kick back to the best new and recent chill hits.</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <a onclick="openlink()"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                        </div>
                        <h4>
                            Viva Latino
                            <div>Today's top Latin hits, elevando nuestra música. Cover: Villano Antillano</div>
                        </h4>
                    </li>
                </div>
            </div>
        </div>

        <div class="preview">
            <div class="p-1">
                PREVIEW OF SPOTIFY<br>
                Sign up to get unlimited songs and podcasts with occasional ads. No credit card needed.
            </div>
            <div class="p-2">
                <a href="registration.php"><button>Sign up free</button></a>
            </div>
        </div>
    </header>

    <div id="mc" class="mc">
        <div class="m-content">
            <div class="m-header">
                <h2>Create a playlist</h2>
            </div>
            <div class="m-body">
                <p>Log in to create and share playlists.</p><br>
            </div>
            <div class="m-footer">
                <a href=""><button onclick="closelink()">Not now</button></a>
                <a href="login.php"><button>Log in</button></a>
            </div>
        </div>
    </div>

    <div id="ml" class="ml">
        <div class="m-content">
            <div class="m-header">
                <h2>Enjoy your Liked Songs</h2>
            </div>
            <div class="m-body">
                <p>Log in to see all the songs you've liked in one easy playlist.</p>
            </div>
            <div class="m-footer">
                <a href=""><button onclick="closelink1()">Not now</button></a>
                <a href="login.php"><button>Log in</button></a>
            </div>
        </div>
    </div>

    <script>
        var mpopup = document.getElementById('mc');
        var mpopup1 = document.getElementById('ml');
        function openlink(){
            mpopup.style.display = "block";
        }
        function closelink(){
            mpopup.style.display = "none";
        }
        function openlink1(){
            mpopup1.style.display = "block";
        }
        function closelink1(){
            mpopup1.style.display = "none";
        }
        window.onclick = function(event) {
            if (event.target == mpopup || event.target == mpopup1) {
                mpopup.style.display = "none";
                mpopup1.style.display = "none";
            }
        }
    </script>
</body>
</html>