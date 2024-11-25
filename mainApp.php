<!--Aliyah Patrice Luntok | 3033 BIT222K-KTA | February 15, 2023-->
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: mainApp.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyHobbies</title>
    <link rel="stylesheet" type="text/css" href="/HobbiesCSS/mainApp.css">
    <link rel="stylesheet" href="/HobbiesCSS/settings.css">
    <link rel="stylesheet" href="/HobbiesCSS/highlightscard.css">
    <link rel="stylesheet" href="/HobbiesCSS/hobbies_cert.css">
    <link rel="stylesheet" href="/HobbiesCSS/footer.css">
  </head>

  <!-- Top part | setting BG IMAGE -->
  <body class="bg-image">
    <div class="siteMargin">
      <div>
        <!-- NAVBAR OPEN -->
        <br/>
        <br/>
        <nav class="nav-menu">
          <ul class="ul-menu">
            <li><a href="#AuthorDiv">Home</a></li>
            <li><a href="#highlights">Highlights</a></li>
            <li><a href="#timewreckers">Hobbies</a></li>
            <li><a href="#certBox">Works</a></li>
            <li><a href="/logout.php">Logout</a></li>
          </ul>
        </nav>
        <script src="/HobbiesWebsite/HobbiesScript/settings.js"></script>
      </div>
      <!-- NAVBAR CLOSE -->
      <br />
      <br />

      <!-- WEBSITE NAME -->
      <div class="TitleDiv" id="TitleDiv">
        <h1>
          MY<br />THREE<br />FAVORITE<br /><span class="pixelfont">HOBBIES</span>
        </h1>
      </div>

      <!-- AUTHOR SECTION -->
      <div class="AuthorDiv" id="AuthorDiv">
        <div class="flip-container">
          <div class="flipper">
            <div class="front">
              <img src="assets/aliyah.jpg" alt="Photo of Author" />
            </div>
            <div class="back">
              <img src="assets/aliyah2.JPG" alt="Photo of Author" />
            </div>
          </div>
        </div>
        <!-- FLIP-CONTAINER CLOSE -->
        <!-- HEART BUTTON -->
        <button class="btn">
          <svg
            viewBox="0 0 17.503 15.625"
            height="20.625"
            width="20.503"
            xmlns="http://www.w3.org/2000/svg"
            class="icon"
          >
            <path
              transform="translate(0 0)"
              d="M8.752,15.625h0L1.383,8.162a4.824,4.824,0,0,1,0-6.762,4.679,4.679,0,0,1,6.674,0l.694.7.694-.7a4.678,4.678,0,0,1,6.675,0,4.825,4.825,0,0,1,0,6.762L8.752,15.624ZM4.72,1.25A3.442,3.442,0,0,0,2.277,2.275a3.562,3.562,0,0,0,0,5l6.475,6.556,6.475-6.556a3.563,3.563,0,0,0,0-5A3.443,3.443,0,0,0,12.786,1.25h-.01a3.415,3.415,0,0,0-2.443,1.038L8.752,3.9,7.164,2.275A3.442,3.442,0,0,0,4.72,1.25Z"
              id="Fill"
            ></path>
          </svg>
        </button>
        <!-- AUTHOR INFO-->
        <h2>ali's digital haven</h2>
        <p>
          Welcome to my digital haven! Step into a world of numbers and
          technology, where words and literature reign supreme. Welcome to my
          personal oasis, where a love for words and communication is at the
          forefront. From crafting poetry, delving into an array of books, to
          indulging in movies, documentaries, podcasts, and video essays, join
          me on a journey where technicality meets creativity and a passion for
          the written and spoken word.
        </p>
      </div>
      <!-- AUTHORDIV CLOSE -->

      <!-- HIGHLIGHTS SECTION -->
      <div class="highlights" id="highlights">
        <h2>highlights..</h2>
        <div class="highlights-options">
          <nav class="highlights-menu">
            <ul>
              <li><a href="#">CS-DAYS</a></li>
              <li><a href="#">INTRAMURALS</a></li>
              <li><a href="#">FOUNDATIONS DAY</a></li>
              <li><a href="#">MANILA TRIP</a></li>
            </ul>
          </nav>
          <!--csdays-->
          <div class="maincards">
            <div class="cards">
              <div class="card one">
                <img src="assets/csday (3).jpg" alt="Card Image" />
              </div>
              <div class="card two">
                <img src="assets/csday (2).jpg" alt="Card Image" />
              </div>
              <div class="card three">
                <img src="assets/csday (1).jpg" alt="Card Image" />
              </div>
            </div> <!-- CARDS CLOSE -->

            <!--intrams-->
            <div class="cards">
              <div class="card one">
                <img src="assets/intrams1.jpg" alt="Card Image" />
              </div>
              <div class="card two">
                <img src="assets/intrams2.jpg" alt="Card Image" />
              </div>
              <div class="card three">
                <img src="assets/intrams3.jpg" alt="Card Image" />
              </div>
            </div>
            <!-- CARDS CLOSE -->

            <!--foundations day-->
            <div class="cards">
              <div class="card one">
                <img src="assets/found1.jpg" alt="Card Image" />
              </div>
              <div class="card two">
                <img src="assets/found2.jpg" alt="Card Image" />
              </div>
              <div class="card three">
                <img src="assets/found3.jpg" alt="Card Image" />
              </div>
            </div>
            <!-- CARDS CLOSE -->

            <!--manila trip day-->
            <div class="cards">
              <div class="card one">
                <img src="assets/manila1 (1).jpg" alt="Card Image" />
              </div>
              <div class="card two">
                <img src="assets/manila2.jpg" alt="Card Image" />
              </div>
              <div class="card three">
                <img src="assets/manila3.jpg" alt="Card Image" />
              </div>
            </div>
            <!-- CARDS CLOSE -->
          </div>
          <!-- MAINCARDS CLOSE -->
        </div>
        <!-- HIGHLIGHTS OPTIONS CLOSE -->
      </div>
      <!-- HIGHLIGHTS CLOSE -->
      <img src="assets/computer.png" alt="computer" class="computerpng" />

      <!-- HOBBIES SECTION -->
      <div class="timewreckers" id="timewreckers">
        <br />
        <br />
        <br />
        <br />
        <h1>my time-wreckers</h1>
        <div class="maincover">
          <!--DIV HOBBY1-->
          <div class="hobby">
            <!--spotify playlist-->
            <div class="main">
              <div class="currentplaying">
                <svg
                  height="50px"
                  width="50px"
                  viewBox="0 0 64 64"
                  xmlns="http://www.w3.org/2000/svg"
                  class="spotify"
                >
                  <radialGradient
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="translate(0 -534)"
                    r="43.888"
                    cy="572.064"
                    cx="33.34"
                    id="ipdIa4~cOclR8yt_ClW93a"
                  >
                    <stop stop-color="#f4e9c3" offset="0"></stop>
                    <stop stop-color="#f8eecd" offset=".219"></stop>
                    <stop stop-color="#fdf4dc" offset=".644"></stop>
                    <stop stop-color="#fff6e1" offset="1"></stop>
                  </radialGradient>
                  <path
                    d="M51.03,37.34c0.16,0.98,1.08,1.66,2.08,1.66h5.39c2.63,0,4.75,2.28,4.48,4.96	C62.74,46.3,60.64,48,58.29,48H49c-1.22,0-2.18,1.08-1.97,2.34c0.16,0.98,1.08,1.66,2.08,1.66h8.39c1.24,0,2.37,0.5,3.18,1.32	C61.5,54.13,62,55.26,62,56.5c0,2.49-2.01,4.5-4.5,4.5h-49c-1.52,0-2.9-0.62-3.89-1.61C3.62,58.4,3,57.02,3,55.5	C3,52.46,5.46,50,8.5,50H14c1.22,0,2.18-1.08,1.97-2.34C15.81,46.68,14.89,44,13.89,44H5.5c-2.63,0-4.75-2.28-4.48-4.96	C1.26,36.7,3.36,35,5.71,35H8c1.71,0,3.09-1.43,3-3.16C10.91,30.22,9.45,29,7.83,29H4.5c-2.63,0-4.75-2.28-4.48-4.96	C0.26,21.7,2.37,20,4.71,20H20c0.83,0,1.58-0.34,2.12-0.88C22.66,18.58,23,17.83,23,17c0-1.66-1.34-3-3-3h-1.18	c-0.62-0.09-1.43,0-2.32,0h-9c-1.52,0-2.9-0.62-3.89-1.61S2,10.02,2,8.5C2,5.46,4.46,3,7.5,3h49c3.21,0,5.8,2.79,5.47,6.06	C61.68,11.92,60.11,14,57.24,14H52c-2.76,0-5,2.24-5,5c0,1.38,0.56,2.63,1.46,3.54C49.37,23.44,50.62,24,52,24h6.5	c3.21,0,5.8,2.79,5.47,6.06C63.68,32.92,61.11,35,58.24,35H53C51.78,35,50.82,36.08,51.03,37.34z"
                    fill="url(#ipdIa4~cOclR8yt_ClW93a)"
                  ></path>
                  <linearGradient
                    gradientUnits="userSpaceOnUse"
                    gradientTransform="translate(0 -534)"
                    y2="590.253"
                    y1="530.096"
                    x2="32"
                    x1="32"
                    id="ipdIa4~cOclR8yt_ClW93b"
                  >
                    <stop stop-color="#42d778" offset="0"></stop>
                    <stop stop-color="#3dca76" offset=".428"></stop>
                    <stop stop-color="#34b171" offset="1"></stop>
                  </linearGradient>
                  <path
                    d="M57,32c0,12.837-9.663,23.404-22.115,24.837C33.942,56.942,32.971,57,32,57	c-1.644,0-3.25-0.163-4.808-0.471C15.683,54.298,7,44.163,7,32C7,18.192,18.192,7,32,7S57,18.192,57,32z"
                    fill="url(#ipdIa4~cOclR8yt_ClW93b)"
                  ></path>
                  <path
                    d="M41.683,44.394c-0.365,0-0.731-0.181-1.096-0.365c-3.471-2.009-7.674-3.105-12.24-3.105	c-2.559,0-5.116,0.364-7.491,0.912c-0.365,0-0.914,0.183-1.096,0.183c-0.914,0-1.461-0.732-1.461-1.462	c0-0.913,0.547-1.463,1.279-1.643c2.923-0.732,5.846-1.096,8.951-1.096c5.116,0,9.866,1.276,13.885,3.655	c0.548,0.364,0.914,0.73,0.914,1.642C43.145,43.847,42.414,44.394,41.683,44.394z M44.241,38.181c-0.547,0-0.912-0.18-1.279-0.364	c-3.835-2.375-9.135-3.839-15.163-3.839c-2.924,0-5.664,0.366-7.674,0.916c-0.549,0.18-0.731,0.18-1.096,0.18	c-1.096,0-1.827-0.912-1.827-1.826c0-1.096,0.549-1.645,1.461-2.009c2.74-0.73,5.481-1.279,9.317-1.279	c6.213,0,12.241,1.463,16.991,4.384c0.73,0.364,1.096,1.096,1.096,1.826C46.069,37.269,45.337,38.181,44.241,38.181z M47.165,30.876	c-0.548,0-0.731-0.182-1.279-0.364c-4.385-2.559-10.961-4.021-17.356-4.021c-3.289,0-6.577,0.366-9.5,1.096	c-0.366,0-0.731,0.182-1.279,0.182c-1.279,0.183-2.193-0.912-2.193-2.192c0-1.279,0.731-2.009,1.644-2.192	c3.471-1.096,7.125-1.462,11.327-1.462c6.943,0,14.25,1.462,19.731,4.567c0.73,0.366,1.278,1.096,1.278,2.193	C49.357,29.961,48.442,30.876,47.165,30.876z"
                    fill="#fff"
                  ></path>
                </svg>
                <p class="heading">Spotify Playlist</p>
              </div>
              <div class="loader">
                <div class="song">
                  <li>
                    <a
                      href="https://open.spotify.com/user/i17gkdmzl04yrz5slixx2ieu9?si=xR9ej9n9RgK6UYwiJeT_wg&utm_source=copy-link&fbclid=IwAR0CNO5nqdtI6p4UNoj_P0LhKD83VAmzJR4KYxrT6SS1lLCFAAUnj4am0E4&nd=1"
                      target="_blank">my playlist</a
                    >
                  </li>
                </div>
                <div class="albumcover">
                  <img src="assets/myplaylist.png" alt="playlist Image" />
                </div>
                <div class="loading">
                  <div class="load"></div>
                  <div class="load"></div>
                  <div class="load"></div>
                  <div class="load"></div>
                </div>
              </div>
              <div class="loader">
                <div class="song">
                  <li>
                    <a
                      href="https://open.spotify.com/playlist/6AjPJvxM5Wnk6qABo8CdWV?si=50a1cb5d160f4475"
                      target="_blank">literally leng</a>
                  </li>
                </div>
                <div class="albumcover">
                  <img src="assets/literallyleng.png" alt="playlist Image" />
                </div>
                <div class="play"></div>
              </div>
              <div class="loader">
                <div class="song">
                  <li>
                    <a
                      href="https://open.spotify.com/playlist/1HLUJ8HpNbi1GMxCrgjfnI?si=5dedf15d39684b00"
                      target="_blank">pieces for ali</a
                    >
                  </li>
                </div>
                <div class="albumcover">
                  <img src="assets/piecesforali.png" alt="playlist Image" />
                </div>
                <div class="play"></div>
              </div>
            </div>
            <div class="cover">
              <table>
                <tr>
                  <td><h3>spotify-racking</h3></td>
                </tr>
                <tr>
                  <td>
                    <img
                      class="hobbies"
                      src="assets/music.gif"
                      alt="musicgif"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      I spend a lot of my time creating playlists that cater to
                      my moods and emotions, such as my "Bathroom Therapy
                      Playlist", which consists of songs that help me reset my
                      thoughts and provide a sense of calm while I sort my
                      thoughts in the comfort room.
                    </p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- COVER CLOSE -->
          </div>
          <!-- HOBBY 1 CLOSE -->

          <!--DIV HOBBY2-->
          <div class="hobby">
            <!--VIDEO/FILM-->
            <div class="vidcontainer">
              <!-- MOVIE COLUMN -->
              <div class="vidcolumn">
                <div class="vidrow">
                  <div class="vidimage">
                    <img
                      src="assets/brooklynninennine.gif"
                      alt="Brooklyn Nine Nine"
                    />
                  </div>
                </div>
                <div class="vidrow">
                  <div class="vidtext">Brooklyn Nine Nine</div>
                </div>
                <div class="vidrow">
                  <div class="vidimage">
                    <img
                      src="assets/forrestgump.gif"
                      alt="Forrest Gump"
                    />
                  </div>
                </div>
                <div class="vidrow">
                  <div class="vidtext">Forrest Gump</div>
                </div>
              </div>
              <!-- VIDCOLUMN CLOSE -->

              <!-- MOVIE COLUMN -->
              <div class="vidcolumn">
                <div class="vidrow">
                  <div class="vidimage">
                    <img
                      src="assets/coraline.gif"
                      alt="Coraline"
                    />
                  </div>
                </div>
                <div class="vidrow">
                  <div class="vidtext">Coraline</div>
                </div>
                <div class="vidrow">
                  <div class="vidimage">
                    <img
                      src="assets/grave.gif"
                      alt="Grave movie"
                    />
                  </div>
                </div>
                <div class="vidrow">
                  <div class="vidtext">Grave of the Fireflies</div>
                </div>
              </div>
              <!-- VIDCOLUMN CLOSE -->
            </div>
            <!-- VIDCONTAINER CLOSE -->

            <div class="cover">
              <table>
                <tr>
                  <td><h3>Video/Movie-binging</h3></td>
                </tr>
                <tr>
                  <td>
                    <img
                      class="hobbies"
                      src="assets/movie.gif"
                      alt="moviegif"
                    />
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      I love nothing more than binging on videos, from Netflix
                      sit-coms to documentaries to video essays to vlogs to
                      random thought videos to indie films.
                    </p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- COVER CLOSE -->
          </div>
          <!-- HOBBY2 CLOSE -->

          <!--DIV HOBBY3-->
          <div class="hobby">
            <!--READING-->
            <div class="readcontainer">
              <div class="readcolumn">
                <div class="readrow">
                  <div class="readimage">
                    <img
                      src="assets/tuesdayswithmorrie.jpg"
                      alt="tuesdayswithmorrie"
                    />
                  </div>
                </div>
                <div class="readrow">
                  <div class="readtext">Tuesdays with Morrie</div>
                </div>
                <div class="readrow">
                  <div class="readimage">
                    <img
                      src="assets/imthinkingofendingthings.jpg"
                      alt="imthinkingofendingthings"
                    />
                  </div>
                </div>
                <div class="readrow">
                  <div class="readtext">Im thinking of ending things</div>
                </div>
              </div>
              <!-- READCOLUMN CLOSE -->

              <div class="readcolumn">
                <div class="readrow">
                  <div class="readimage">
                    <img
                      src="assets/The Statistical Improbability of Love at First Sight.jpg"
                      alt="The Statistical Improbability of Love at First Sight"
                    />
                  </div>
                </div>
                <div class="readrow">
                  <div class="readtext">
                    The Statistical Improbability of Love at First Sight
                  </div>
                </div>
                <div class="readrow">
                  <div class="readimage">
                    <img
                      src="assets/xenophobia.jpg"
                      alt="xenophobia"
                    />
                  </div>
                </div>
                <div class="readrow">
                  <div class="readtext">Xenophobia of the French</div>
                </div>
              </div>
              <!-- READCOLUMN CLOSE -->
            </div>
            <!-- READCONTAINER CLOSE -->

            <div class="cover">
              <table>
                <tr>
                  <td><h3>Reading</h3></td>
                </tr>
                <tr>
                  <td>
                    <img class="hobbies" src="assets/books.gif" alt="bookgif" />
                  </td>
                </tr>
                <tr>
                  <td>
                    <p>
                      I enjoy books with genres that range from slice of life,
                      drama, horror, and romance, but my interests are not
                      limited to just books and manga. I find poems, poetries,
                      and essays to be equally captivating, especially if they
                      tackle interesting topics such as inequality, women's
                      issues, and of course, romance.
                    </p>
                  </td>
                </tr>
              </table>
            </div>
            <!-- COVER CLOSE -->
          </div>
          <!-- HOBBY3 CLOSE -->
        </div>
        <!-- MAINCOVER CLOSE -->
      </div>

      <!--CERTIFICATES-->
      <div class="certBox" id="certBox">
        <div class="spinnerContainer">
          <div class="loaderCert">
            <p>Certificate in</p>
            <div class="wordsCert">
              <span class="wordCert">php</span>
              <span class="wordCert">html</span>
              <span class="wordCert">css</span>
              <span class="wordCert">javascript</span>
              <span class="wordCert">sql</span>
            </div>
          </div>
        </div>

        <div class="bodyCert">
          <div class="slider">
            <div class="sliderImages">
              <input type="radio" name="slide" id="img1" />
              <input type="radio" name="slide" id="img2" />
              <input type="radio" name="slide" id="img3" />
              <input type="radio" name="slide" id="img4" />
              <input type="radio" name="slide" id="img5" />
              <input type="radio" name="slide" id="img6" />
              <img
                src="assets/htmlcert.jpg"
                class="m1"
                alt="img1"
              />
              <img
                src="assets/csscert.png"
                class="m2"
                alt="img2"
              />
              <img
                src="assets/jscert.jpg"
                class="m3"
                alt="img3"
              />
              <img
                src="assets/phpcert.jpg"
                class="m4"
                alt="img4"
              />
              <img
                src="assets/sql1.jpg"
                class="m5"
                alt="img5"
              />
              <img
                src="assets/sql2.jpg"
                class="m6"
                alt="img6"
              />
            </div>
            <!-- SLIDERIMAGES CLOSE -->
            <div class="dots">
              <label for="img1"></label>
              <label for="img2"></label>
              <label for="img3"></label>
              <label for="img4"></label>
              <label for="img5"></label>
              <label for="img6"></label>
            </div>
            <!-- DOTS CLOSE -->
          </div>
          <!-- SLIDER CLOSE -->
        </div>
        <!-- BODYCERT CLOSE -->
      </div>
      <!-- CERTBOX CLOSE -->
      <br>

      <div class="works">
        <h2>my works</h2>
        <p>Below are websites I created using HTML, CSS, JavaScript, and PHP. <br>They include a music streaming site, a minesweeper game, an electric bill consumption calculator, and a mock-up of the BraVaa website.<br>Click the application to open the website.</p>
        <div class="wrapper">
          <i id="left" class="fa-solid fa-angle-left"></i>
          <ul class="carousel">
            <li class="Wcard">
              <div class="img"><img src="assets/WorkWebMusic.gif" alt="img" draggable="false"></div>
              <a href="creations/LengMusicApp/musicapp.html" target="_blank">Bathroom Therapy</h2></a> 
              <span>Bathroom Therapy provides serene music streaming, blending soothing melodies for a tranquil self-reflection and rejuvenation experience.</span>
            </li>
            <li class="Wcard">
              <div class="img"><img src="assets/WorkElecbill.gif" alt="img" draggable="false"></div>
              <a href="creations/Luntok_ElectricBill/main.html" target="_blank"<h2>Electric Bill</h2></a>
              <span>Monthly Electricity Bill site computes monthly power usage based on meter readings and kWh units.</span>
            </li>
            <li class="Wcard">
              <div class="img"><img src="assets/WorkBravaa.gif" alt="img" draggable="false"></div>
              <a href="creations/Luntok_BraVaa/bravaa.html" target="_blank"<h2>BraVaa Mock-up Website</h2></a>
              <span>It replicates the elements and content of the original BraVaa website, providing a visual representation of the brand's products, services, and information.</span>
            </li>
            <li class="Wcard">
              <div class="img"><img src="assets/WorkMinesweeper.gif" alt="img" draggable="false"></div>
              <a href="creations/Luntok_Minesweeper/minesweeper.html" target="_blank"><h2>Minesweeper</h2></a>
              <span>Minesweeper Website Game bootleg mimics gameplay but lacks official licensing, design, and quality.</span>
            </li>
          </ul>
          <i id="right" class="fa-solid fa-angle-right"></i>
        </div>
      </div>
      <script src="HobbiesScript/creations.js"></script>

      <h1 class="mainCon">socials</h1>
      <div class="mainContacts">
        <div id="c2" class="cardMContact">
          <div class="card-info">
            <div class="contact-title">Contacts</div>
            <div class="card-contact">
              <li class="icon-contact">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M280 0C408.1 0 512 103.9 512 232c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-101.6-82.4-184-184-184c-13.3 0-24-10.7-24-24s10.7-24 24-24zm8 192a32 32 0 1 1 0 64 32 32 0 1 1 0-64zm-32-72c0-13.3 10.7-24 24-24c75.1 0 136 60.9 136 136c0 13.3-10.7 24-24 24s-24-10.7-24-24c0-48.6-39.4-88-88-88c-13.3 0-24-10.7-24-24zM117.5 1.4c19.4-5.3 39.7 4.6 47.4 23.2l40 96c6.8 16.3 2.1 35.2-11.6 46.3L144 207.3c33.3 70.4 90.3 127.4 160.7 160.7L345 318.7c11.2-13.7 30-18.4 46.3-11.6l96 40c18.6 7.7 28.5 28 23.2 47.4l-24 88C481.8 499.9 466 512 448 512C200.6 512 0 311.4 0 64C0 46 12.1 30.2 29.5 25.4l88-24z"
                  ></path>
                </svg>
                Phone no.: 0981-541-5272
              </li>

              <li class="icon-contact">
                <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"
                  ></path>
                </svg>
                Email: aliyahpatrice.luntok@unc.edu.ph
              </li>
            </div>
            <!-- cardcontact CLOSE -->
          </div>
          <!-- CARD-INFO CLOSE -->
        </div>
        <!-- CARDMCONTACT CLOSE -->

        <div id="c3" class="cardMContact">
          <div class="card-info">
            <li class="address-icon">
              <svg viewBox="0 0 576 512" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z"
                ></path>
              </svg>
            </li>
            <li class="address-title">whereabouts:</li>
            <li class="address">Penafrancia Naga City</li>
          </div>
        </div>

        <div id="c1" class="cardMContact">
          <div class="card-info">
            <div class="card-avatar">
              <img
                src="assets/contactphoto.jpg"
                alt="Contact Photo"
              />
            </div>
            <div class="card-title">Aliyah Luntok</div>
            <div class="card-subtitle">"leng"</div>
            <div class="card-social">
              <li id="cs1" class="card-social-icon">
                <a href="https://www.facebook.com/aliyahpatrice.luntok" target="_blank">
                  <svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"
                    ></path>
                  </svg>
                  Facebook
                </a>
              </li>
              <li id="cs2" class="card-social-icon">
                <a href="https://www.instagram.com/newjeans_official/" target="_blank">
                  <svg viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"
                    ></path>
                  </svg>
                  Instagram
                </a>
              </li>
              <li id="cs3" class="card-social-icon">
                <a
                  href="https://open.spotify.com/user/i17gkdmzl04yrz5slixx2ieu9?si=d41d9479937e4d9a" target="_blank"
                >
                  <svg viewBox="0 0 496 512" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"
                    ></path>
                  </svg>
                  Spotify</a
                >
              </li>
            </div>
            <!--card-social close-->
          </div>
          <!--card-info close-->
        </div>
        <!--cardMContact close-->
      </div>
      <!--mainContacts close-->

      <hr />
      <!--breakline-->

      <div class="lastSection">
        <!--container for last section-->

        <!-- SLIDESHOW -->
        <div class="slideshowBox">
          <div class="image-containerL">
            <div class="image-wrapperL">
              <div>
                <img src="assets/ph1.jpg" />
              </div>
              <div>
                <img src="assets/ph2.jpg" />
              </div>
              <div>
                <img src="assets/ph3.jpg" />
              </div>
              <div>
                <img src="assets/ph4.jpg" />
              </div>
              <div>
                <img src="assets/ph5.jpg" />
              </div>
              <!--next-->
              <div>
                <img src="assets/ph6.jpg" />
              </div>
              <div>
                <img src="assets/ph7.jpg" />
              </div>
              <div>
                <img src="assets/ph8.jpg" />
              </div>
              <div>
                <img src="assets/ph9.jpg" />
              </div>
              <div>
                <img src="assets/ph10.jpg" />
              </div>
              <div>
                <img src="assets/ph11.jpg" />
              </div>
              <div>
                <img src="assets/ph12.jpg" />
              </div>
            </div>
            <!-- image-wrapperL close -->
          </div>
          <!-- image-containerL close -->
          <script src="HobbiesScript/slideshow.js"></script>
          <br />
          <div class="image-containerR">
            <div class="image-wrapperR">
              <div>
                <img src="assets/ph12.jpg" />
              </div>
              <div>
                <img src="assets/ph11.jpg" />
              </div>
              <div>
                <img src="assets/ph10.jpg" />
              </div>
              <div>
                <img src="assets/ph9.jpg" />
              </div>
              <div>
                <img src="assets/ph8.jpg" />
              </div>
              <!--next-->
              <div>
                <img src="assets/ph7.jpg" />
              </div>
              <div>
                <img src="assets/ph6.jpg" />
              </div>
              <div>
                <img src="assets/ph5.jpg" />
              </div>
              <div>
                <img src="assets/ph4.jpg" />
              </div>
              <div>
                <img src="assets/ph3.jpg" />
              </div>
              <div>
                <img src="assets/ph2.jpg" />
              </div>
              <div>
                <img src="assets/ph1.jpg" />
              </div>
            </div>
          </div>
          <script src="HobbiesScript/slideshow2.js"></script>
        </div>
        <!-- SLIDE SHOW BOX CLOSE -->

        <div class="messagecontainer">
          <form class="contact-form" id="contact-form">
            <a class="message">drop me a message <3 </a>
            <div class="inputBox1">
              <input type="text" id="name" name="name" required>
              <span class="user">Name</span>
            </div>
            <div class="inputBox">
              <input type="email" id="email" name="email" required>
              <span>Email</span>
            </div>
            <div class="inputBox inputBoxMessage">
              <input id="message" name="message" rows="5" required>
              <span>Message</span>
            </div>
            <button class="enter">Enter</button>
          </div>
          <!--messageCard close-->
        </div>
        <script src="HobbiesScript/script1.js"></script>
        <!--messagecontainer close-->
      </div>
      <!-- LAST SECTION CLOSE -->
    </div>
    <!-- SITEMARGIN CLOSE -->
  </body>
</html>
