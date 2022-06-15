<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Animelist</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav>
      <div class="layar-dalam">
        <div class="logo">
          <a href=""><img src="asset/Animelist.png" class="putih" /></a>
        </div>
        <div class="menu">
          <a href="#" class="tombol-menu">
            <span class="garis"></span>
            <span class="garis"></span>
            <span class="garis"></span>
          </a>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#Top_Rated">Top</a></li>
            <li><a href="#popular">Popular</a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#blog">Upcoming</a></li>
            <li><a href="logout.php">Logout</a></li>
            <li><?php echo "<li><p> Welcome " . $_SESSION['username'] . "<p></li>"; ?></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="layar-penuh">
      <header id="home">
        <div class="overlay"></div>
        <video autoplay muted loop>
          <source src="asset/anime.mp4" type="video/mp4" />
        </video>
        <div class="intro">
          <h3>Welcome to Animelist</h3>
          <p>
           Where all of the magic things happen
          </p>
          <p>
            <a href="" class="tombol">MORE INFO</a>
          </p>
        </div>
      </header>
      <main>
        <section id="about">
          <div class="layar-dalam">
            <h3>About</h3>
            <p class="ringkasan">
              About Animelist
            </p>
            <div class="konten-isi">
              <p>
                Animelist is a website that gives you updates about anime that is available nowdays and upcoming animes in there future
              </p>
              <p>Discover more about the world of anime and manga now!</p>
            </div>
          </div>
        </section>
        <section class="abuabu" id="Top_Rated">
          <div class="layar-dalam Top_Rated">
            <div>
              <img src="asset/Top1.jpg" />
              <h6>Full Metal Alchemist: Brotherhood</h6>
              <p>
                Two brothers search for a Philosopher's Stone after an attempt to revive their deceased mother goes awry and leaves them in damaged physical forms. Two brothers lose their mother to an incurable disease. With the power of "alchemy", they use taboo knowledge to resurrect her.
              </p>
            </div>
            <div>
              <img src="asset/Top2.jpg" />
              <h6>Gintama</h6>
              <p>
                Gintama is a story of a handyman named Gintoki, a samurai with no respect for rules set by the invaders, who's ready to take any job to survive. He and his gang, however, are also among the very few who have not forgotten the morale of a swordsman. Wherever they go, all they do is to create troubles.
              </p>
            </div>
            <div>
              <img src="asset/Top3.jpg" />
              <h6>Steins;Gate</h6>
              <p>
                Steins;Gate is an adaptation of the visual novel of the same name. It is set in 2010 in Akihabara, Tokyo, and follows Rintaro Okabe, a self-proclaimed "mad scientist", who runs the "Future Gadget Laboratory" in an apartment together with his friends Mayuri Shiina and Itaru "Daru" Hashida.
              </p>
            </div>
            <div>
                <img src="asset/Top4.jpg" />
                <h6>Shingeki no kyojin</h6>
                <p>
                    It is set in a world where humanity lives inside cities surrounded by three enormous walls that protect them from the gigantic man-eating humanoids referred to as Titans; the story follows Eren Yeager, who vows to exterminate the Titans after a Titan brings about the destruction of his hometown and the death of his mother.
                </p>
              </div>
          </div>
        </section>
        <section id="popular">
          <div><img src="asset/tate.jpg" /></div>
          <div><img src="asset/2.jpg" /></div>
          <div><img src="asset/3.jpg" /></div>
          <div><img src="asset/4.jpg" /></div>
          <div><img src="asset/5.jpg" /></div>
          <div><img src="asset/6.jpg" /></div>
          <div><img src="asset/7.jpg" /></div>
          <div><img src="asset/8.jpg" /></div>
        </section>
        <section class="quote">
          <div class="layar-dalam">
            <p>Anime is not just an animation. it is our source of happiness in this cruel world
                - Animelist Team
            </p>
          </div>
        </section>
        <section id="team">
          <div class="layar-dalam">
            <h3>Our Team</h3>
            <p class="ringkasan">
            </p>
            <div class="tim">
              <div>
                <img src="asset/aldy.jpg" />
                <h6>Feraldy Claudio Sumendap</h6>
                <span>20021106129</span>
              </div>
              <div>
                <img src="asset/kiel.jpg" />
                <h6>Ezekiel Tambahani</h6>
                <span>20021106111</span>
              </div>
              <div>
                <img src="asset/ando.jpg" />
                <h6>Brando Armando Paat</h6>
                <span>20021106050</span>
              </div>
              <div>
                <img src="asset/ken.jpeg" />
                <h6>Keneth Tongka</h6>
                <span>20021106092</span>
              </div>
            </div>
          </div>
          <p>Link Video Presentasi : </p>
          <a href="https://drive.google.com/file/d/1gIkxU2cnnhjLBcjzicSzrIoURCLyYtgZ/view?usp=sharing">Klik Disini</a></li>
        </section>
        <section class="abuabu" id="blog">
          <div class="layar-dalam">
            <h3>Upcoming Anime 2022</h3>
            <p class="ringkasan">
            </p>
            <div class="blog">
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/blog1.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Overlord IV</a></h4>
                    <p>
                      What will be the plot of Overlord Season 4? In the first episode of "Overlord," a human boy named Momonga is transported into the world of an MMORPG video game (think "RuneScape"). Instead of merely controlling his character, named Ainz Ooal Gown, Momonga in essence becomes Ainz.
                    </p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/blog2.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">Made In Abyss Season 2</a></h4>
                    <p>
                      Riko wants to become a legendary Cave-Raider, known as a "White Whistle," like her mom was, and one day she discovers a robot boy within the Abyss who she names Reg. Believing her mother is at the bottom of the Abyss, Riko embarks on a journey with Reg to descend into the Abyss and find her.
                    </p>
                  </article>
                </div>
              </div>
              <div class="area">
                <div
                  class="gambar"
                  style="background-image: url('asset/blog3.jpg')"
                ></div>
                <div class="text">
                  <article>
                    <h4><a href="#">kyokou suiri season 2</a></h4>
                    <p>
                      Kuro Sakuragawa met a girl named Kotoko Iwanaga. she is a sort of Goddess of Wisdom where she serves as the intermediary between the real world and the supernatural world. Kuro, of course, doubts her at first but after fighting a yōkai in a library and revealing to each other their true identities Kuro agrees to help Kotoko on her various adventures as the peace-keeping Goddess of Wisdom.
                    </p>
                  </article>
                </div>
              </div>
            </div>
          </div>
        </section>
      </main>
      <footer>
        <div class="layar-dalam">
          <div class="copyright">&copy; 2022 Animelist</div>
        </div>
      </footer>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
    <script src="javascript.js"></script>
  </body>
</html>
