<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotify: Music For Everyone</title>
    <link rel="stylesheet" href="\proj\fourth.css">
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

            <div class="playlist" id="playlist">
                <div class="home">
                    <i class="bi bi-house-door"></i>
                    <h4 onclick="replace('song1')">Home</h4>
                </div>
                <div class="search">
                    <i class="bi bi-search"></i>
                    <h4>Search</h4>
                </div>
                <div class="library">
                    <i class="bi bi-collection"></i>
                    <h4 onclick="replace('song2')">Your Library</h4>
                </div>
                <div></div>
                <div class="create">
                    <i class="bi bi-plus-square"></i>
                    <h4 onclick="createlist()">Create Playlist</h4>
                </div>
                <div class="liked">
                    <i class="bi bi-chat-square-heart"></i>
                    <h4 onclick="">Liked Songs</h4>
                </div>
            </div>
        </div>

        <div class="song" id="song1">
            <div class="profile1">
                <div class="tog">
                    <i class="bi bi-list"></i>
                </div>
                <div class="dropdown-content">
                    <a onclick="replace('song1')">Home</a>
                    <a>Search</a>
                    <a onclick="replace('song2')">Your Library</a>
                </div>
            </div>
            <a href="premium1.php" class="pr">Premium</a></li>
            <a href="spravka.php" class="sp">Справка</a></li>
            <div class="profile">
                <div class="tog">
                    <img src="maiedit.jpg">
                    <h5 title="mai"><?php echo $_SESSION['username']; ?></h5>
                    <i class="bi bi-caret-down-fill"></i>
                </div>
                <div class="dropdown-content">
                    <a href="https://www.spotify.com/by-ru/account/overview/?utm_source=spotify&utm_medium=menu&utm_campaign=your_account" target="_blank">Account<i class="bi bi-box-arrow-up-right"></i></a>
                    <a href="https://open.spotify.com/user/31ii5hmi3xtje7xogmglfbyzvzoa">Profile</a>
                    <a href="logout.php">Log Out</a>
                </div>
            </div>
            <div class="pushits"></div>
            <div class="hits">
                <div class="hitimg">
                    <img src="chill.jpg" alt="">
                </div>
                <div class="hit2">
                    <div class="plname">
                        PLAYLIST
                    </div>
                    <div class="name">
                        Chilled Hits
                    </div>
                    <div class="desc">
                        Kick back to the best new and recent chill hits.
                    </div>
                    <div class="buttons">
                        <button>Play</button>
                        <button id="demo" onclick="changetext()">Follow</button>
                    </div>
                </div>
            </div>
            <div class="namemix">
                <h4>Your top mixes</h4>
            </div>
            <div class="mixes">
                <div class="list">
                    <li class="item">
                        <div class="imgplay">
                            <img src="fujii.jpg" alt="">
                            <h5>Fujii Kaze Mix</h5>
                            <a href="https://open.spotify.com/playlist/37i9dQZF1EIVsG94rZMFez"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                            <i class="bi bi-file-fill"></i>
                        </div>
                        <h4>
                            Fujii Kaze Mix
                            <div>Creepy Nuts, King Gnu and ZUTOMAYO more</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="boywithuke.jpeg" alt="">
                            <h5>BoyWithUke mix</h5>
                            <a href="https://open.spotify.com/playlist/37i9dQZF1EIXXEUt1E2n84"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                            <i class="bi bi-file-fill"></i>
                        </div>
                        <h4>
                            BoyWihtUke Mix
                            <div>blackbear, Oliver Tree, Connor Price and more</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="xxten.jpg" alt="">
                            <h5>XXXTENTACION</h5>
                            <a href="https://open.spotify.com/playlist/37i9dQZF1EIXUxXYvMa1Ob"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                            <i class="bi bi-file-fill"></i>
                        </div>
                        <h4>
                            XXXTENTACION MIX
                            <div>Trippie Redd, Kodak Black, Baby Keem and more</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="ryfu.jpg" alt="">
                            <h5>Anime Mix</h5>
                            <a href="https://open.spotify.com/playlist/5VXhDeNqPYBakBuJdKvb3b"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                            <i class="bi bi-file-fill"></i>
                        </div>
                        <h4>
                            Anime Phonk 2022
                            <div>By Ryfuツ</div>
                        </h4>
                    </li>
                    <li class="item">
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
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="phonk.jpg" alt="">
                            <h5>PHONK MUSIC 2022</h5>
                            <a href="https://open.spotify.com/playlist/6y5aV5dbZgHGehN3Rxglk0"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                            <i class="bi bi-file-fill"></i>
                        </div>
                        <h4>
                            Aggressive Drift PHONK
                            <div>Magic Records and Magic Trades</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="love.jpg" alt="">
                            <h5>love songs</h5>
                            <a href="https://open.spotify.com/playlist/02y1Lc4tbH2J0CrQ7uCa33"><i class="bi bi-play-fill"></i></a>
                            <i class="bi bi-spotify"></i>
                            <i class="bi bi-file-fill"></i>
                        </div>
                        <h4>
                            love... I guess?
                            <div>By celine</div>
                        </h4>
                    </li>
                </div>
            </div>
            <div class="artists">
                <div class="nameartist">
                    <h4>Popular Artists</h4>
                </div>
                <div class="list">
                    <li class="item">
                        <div class="imgplay">
                            <img src="eminem.jpg" alt="">
                            <a href="https://open.spotify.com/artist/7dGJo4pcD2V6oG8kP0tJRR"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <h4>Eminem
                            <div>Artist</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="justin.jpg" alt="">
                            <a href="https://open.spotify.com/artist/1uNFoZAHBGtllmzznpCI3s"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <h4>Justin Bieber
                            <div>Artist</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="edsh.jpg" alt="">
                            <a href="https://open.spotify.com/artist/6eUKZXaKkcviH0Ku9w2n3V"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <h4>Ed Sheeran
                            <div>Artist</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="travis.jpg" alt="">
                            <a href="https://open.spotify.com/artist/0Y5tJX1MQlPlqiwlOH1tJY"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <h4>Travis Scott
                            <div>Artist</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="harry.jpg" alt="">
                            <a href="https://open.spotify.com/artist/6KImCVD70vtIoJWnq6nGn3"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <h4>Harry Styles
                            <div>Artist</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="weeknd.jpg" alt="">
                            <a href="https://open.spotify.com/artist/1Xyo4u8uXC1ZmMpatF05PJ"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <h4>The Weeknd
                            <div>Artist</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="katy.jpg" alt="">
                            <a href="https://open.spotify.com/artist/6jJ0s89eD6GaHleKKya26X"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <h4>Katy Perry
                            <div>Artist</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="billie.jpg" alt="">
                            <a href="https://open.spotify.com/artist/6qqNVTkY8uBg9cP3Jd7DAH"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <h4>Billie Eilish
                            <div>Artist</div>
                        </h4>
                    </li>
                    <li class="item">
                        <div class="imgplay">
                            <img src="charlie.jpg" alt="">
                            <a href="https://open.spotify.com/artist/6VuMaDnrHyPL1p4EHjYLi7"><i class="bi bi-play-fill"></i></a>
                        </div>
                        <h4>Charlie Puth
                            <div>Artist</div>
                        </h4>
                    </li>
                </div>
            </div>
        </div>

        <div class="song" id="song2">
            <div class="main1">
                <div class="profile1">
                    <div class="tog">
                        <i class="bi bi-list"></i>
                    </div>
                    <div class="dropdown-content">
                        <a onclick="replace('song1')">Home</a>
                        <a>Search</a>
                        <a onclick="replace('song2')">Your Library</a>
                    </div>
                </div>
                <div class="profile">
                    <div class="tog">
                        <img src="maiedit.jpg">
                        <h5 title="mai"><?php echo $_SESSION['username']; ?></h5>
                        <i class="bi bi-caret-down-fill"></i>
                    </div>
                    <div class="dropdown-content">
                        <a href="https://www.spotify.com/by-ru/account/overview/?utm_source=spotify&utm_medium=menu&utm_campaign=your_account" target="_blank">Account<i class="bi bi-box-arrow-up-right"></i></a>
                        <a href="https://open.spotify.com/user/31ii5hmi3xtje7xogmglfbyzvzoa">Profile</a>
                        <a href="logout.php">Log Out</a>
                    </div>
                </div>
            </div>
            <div class="main2">
                <div class="namemix2">Liked Songs</div>
                <div class="list">
                    <li class="item" id="playlistcopy">
                        <div class="imgplay">
                            <img src="liked.jpg" alt="">
                        </div>
                        <h4 id="changetext">Liked Songs</h4>
                    </li>
                </div>
                <div class="namemix2">Playlists</div>
                <div class="list" id="appendparent"></div>
            </div>
        </div>

        <div class="master">
            <img class="curimg" id="curimg" src="vendetta.jpg" alt="">
            <h5>
                <div id="cursong">Vendetta!</div>
                <div id="curartis" class="subtitle">Singer</div>
            </h5>
            <div class="likebutton">
                <img id="likesong" onclick="like()" src="heart.png" alt="">
            </div>
            <div class="playcenter">
                <div class="icon">
                    <i id="prevbut" onclick="prev()" class="bi bi-skip-start-fill"></i>
                    <i id="playbut" onclick="pause()" class="bi bi-play-fill"></i>
                    <i id="nextbut" onclick="next()" class="bi bi-skip-end-fill"></i>
                </div>
                <div class="audio-player">
                    <div id="seekObjContainer">
                        <div id="timeline1">
                            <div id="seekObj1" class="playhead" style="margin-left: 0px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="volume">
                <img src="volume-up.png" style="margin-right: 3%;width: 5%;" alt="">
                <input type="range" min="0" max="100" value="30" id="volume-slider">
            </div>
        </div>
    </header>

    <script>
        isLiked = false;

        function like() {
            if (isLiked == false) {
                document.getElementById("likesong").src = "heart2.png";
                isLiked = true;
            } else {
                document.getElementById("likesong").src = "heart.png";
                isLiked = false;
            }
        }

        function changetext() {
            if (document.getElementById("demo").innerHTML == "Follow") {
                document.getElementById("demo").innerHTML = "Unfollow"
                document.getElementById("demo").style.color = "green";
            } else {
                document.getElementById("demo").innerHTML = "Follow";
                document.getElementById("demo").style.color = "white";
            }
        }
        isPlaying = false;
        var songs = ["vendetta.mp3", "under.mp3", "lml.mp3", "wasted.mp3", "losing.mp3"];
        var curimglist = ["vendetta.jpg", "under.jpg", "lovemelike.jpg", "wasted.jpg", "losing.jpg"];
        var cursonglist = ["Vendetta!", "Under The Influence", "Love Me Like You Do", "Wasted", "Losing Interest"];
        var ids = ["id1", "id2", "id3", "id4", "id5"];
        var cur = 0;
        var song = new Audio();

        function musicPlay(a) {
            document.getElementById(ids[cur]).src = "play.png";
            cur = a;
            song.src = songs[a];
            song.play();
            document.getElementById("playbut").className = "bi bi-pause-fill";
            document.getElementById("cursong").innerHTML = cursonglist[cur];
            document.getElementById("curimg").src = curimglist[cur];
            document.getElementById(ids[cur]).src = "pause.png";
            isPlaying = true;
        }

        function pause() {
            if (isPlaying == false) {
                song.src = songs[cur];
                song.play();
                document.getElementById("playbut").className = "bi bi-pause-fill";
                document.getElementById(ids[cur]).src = "pause.png";
                isPlaying = true;
            } else {
                song.pause();
                document.getElementById("playbut").className = "bi bi-play-fill";
                document.getElementById(ids[cur]).src = "play.png";
                isPlaying = false;
            }
        }

        function next() {
            if (cur == 4) {
                isPlaying = false;
                musicPlay(0);
            } else if (cur < 4) {
                isPlaying = false;
                musicPlay(cur+1);
            }
        }

        function prev() {
            if (cur > 0) {
                isPlaying = false;
                musicPlay(cur - 1);
            }
        }
        let volume = document.getElementById('volume-slider');
        volume.addEventListener("change", function(e) {
            song.volume = e.currentTarget.value / 100;
        });

        function createlist() {
            var element = document.createElement('div');
            if (localStorage.getItem('key') != null) {
                element.innerHTML = 'playlist #' + (parseInt(localStorage.getItem('key').slice(-1)) + 1);
                element.style.fontSize = "14px";
                element.style.color = "#aaa9a9";
                localStorage.setItem('key', localStorage.getItem('key') + '/' + element.innerHTML);
                document.getElementById('playlist').appendChild(element);
            } else {
                element.innerHTML = 'playlist #1';
                element.style.fontSize = "14px";
                element.style.color = "#aaa9a9";
                localStorage.setItem('key', element.innerHTML);
                document.getElementById('playlist').appendChild(element);
            }
        }

        function getlist() {
            if (localStorage.getItem('key') != null) {
                const myArray = localStorage.getItem('key').split('/');
                for (var i = 0; i < myArray.length; i++) {
                    var element = document.createElement('div');
                    element.innerHTML = myArray[i];
                    element.style.fontSize = "14px";
                    element.style.color = "#aaa9a9";
                    document.getElementById('playlist').appendChild(element);
                }
                for (var i = 0; i < myArray.length; i++) {
                    var pl = document.querySelector('#playlistcopy');
                    var clone = pl.cloneNode(true);
                    var element = document.createElement('h4');
                    element.innerHTML = myArray[i];
                    clone.replaceChild(element, clone.childNodes[3]);
                    var img = document.createElement('img');
                    img.src = 'newmusic.jpg';
                    img.style.width = '153px';
                    img.style.padding = '14px';
                    clone.replaceChild(img, clone.childNodes[1]);
                    document.getElementById('appendparent').appendChild(clone);
                }
            }
        }
        var curr = document.getElementById('song1');

        function replace(repid) {
            curr.style.display = 'none';
            curr = document.getElementById(repid);
            curr.style.display = 'block';
        }
        window.onload = getlist;
    </script>
</body>

</html>