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
                <div class="grid">
                    <div>
                        <div class="imgplay">
                            <img src="lofi.jpg" alt="">
                            <h5>Lofi girl</h5>
                            <a href="https://open.spotify.com/playlist/0vvXsWCC9xrXsKd4FyS8kM"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                            <i class="bi bi-file-fill"></i>
                        </div>
                        <h4>
                            Lofi hip hop - beats to relax/study to
                            <div>A daily selection of chill beats</div>
                        </h4>
                    </div>
                    <div>
                        <div>haha</div>
                        <div>description</div>
                    </div>
                    <div>
                        <div>haha</div>
                        <div>description</div>
                    </div>
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