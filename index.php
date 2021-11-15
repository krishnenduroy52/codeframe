<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css"
        integrity="sha256-46r060N2LrChLLb5zowXQ72/iKKNiw/lAmygmHExk/o=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>CodeHub</title>
</head>

<body>
    <section class="navbar background">
        <nav>
            <button class="toggleBtn" onclick="menutoggle()"><img src="img/menu.png" class="menu-icon"
                    style="width: 30px; position: absolute; left: 0; top: 20px; margin-left: 20px;"></button>
            <ul class="nav-list" id="MenuItems">
                <li><a href="index.php">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Blog">Blog</a></li>
            </ul>
        </nav>
        <div class="rightnav">
            <input type="text" name="search" id='search' placeholder="Search" onkeyup="search_filter()">
            <button class="btn btn-sm" onclick="search_filter()">Search</button>
        </div>
        <!-- <button onclick="myFunction()">Toggle dark mode</button> -->
        </nav>
    </section>
    <section class="box" id="down">
        <div class="box-main">
            <h1 class="center-big-text">CodeHub</h1>
            <div class="content">
                <span style="content: \2600; font-size: 40px;">&#9728;</span>
                &nbsp;
                <input type="checkbox" id="tooglenight" class="cbx hidden" />
                <label for="tooglenight" class="switch" onclick="myFunction()"></label>
                &nbsp;&nbsp;&nbsp;
                <span style="content: \1F319; font-size: 35px;">&#9790;</span>
            </div>
        </div>
        <div class="about-short">
            <div class="logo">
                <img src="img/profile.jpg" alt="Krishnendu roy">
                <h2>Hi! I'm
                    <div class="word">
                        <span>K</span>
                        <span>R</span>
                        <span>I</span>
                        <span>S</span>
                        <span>H</span>
                        <span>N</span>
                        <span>E</span>
                        <span>N</span>
                        <span>D</span>
                        <span>U</span>
                        <span>&nbsp;</span>
                        <span>R</span>
                        <span>O</span>
                        <span>Y</span>
                    </div>
                </h2>
            </div>
            </h2>
            <p class="w3-cursive">Welcome to <strong>CodeHub</strong>,
                Regularly we upload coding related metrials, problem and it's approach + code. For Video help you can
                folow my YouTube
                Channel <b><a href="https://www.youtube.com/channel/UCyJXQWe8mwX6EdKwIyHecAA">'Krishnendu Roy'</a></b>
            </p>
            <div class="all-img">
                <a href="https://www.facebook.com/krishnendu.roy.501598/" target="_blank"><img src="img/facebook.png"
                        alt="facebook link"></a>
                <a href="https://www.instagram.com/krishnendu_roy52/" target="_blank"><img src="img/instagram.png"
                        alt="instagram Link"></a>
                <a href="https://www.youtube.com/channel/UCyJXQWe8mwX6EdKwIyHecAA" target="_blank"><img
                        src="img/youtube.png" alt="Youtube Link"></a>
                <a href="https://github.com/CodeHereBro" target="_blank"><img src="img/github.png"
                        alt="github Link"></a>
            </div>
        </div>
    </section>

    <section class="box questions-section">
        <ul class="list-filter">
            <li class="list active" data-filter="all">All</li>
            <li class="list" data-filter="codechef">CodeChef</li>
            <li class="list" data-filter="leetcode">LeetCode</li>
            <li class="list full-text" data-filter="dsa">Data Structure & Algorithm</li>
            <li class="list short-text" data-filter="dsa">DSA</li>
        </ul>
        <div class="questions">

            <!-- codechef questions -->
            <div class="itembox codechef">
                <div class="all-q">
                    <a href="codechef/digit-removal-solution.php">
                        <h4 class="big-question-font">Digit Removal Solution - CodeChef</h4>
                        <p class="w3-cursive">
                            You are given an integer N and a digit D. Find the minimum non-negetive integer you should
                            add to N such that the final value of N does not contain the digit D...
                        </p>
                    </a>
                </div>
                <div class="all-q">
                    <a href="">
                        <h4 class="big-question-font">DIGIT REMOVAL SOLUTION - CODECHEF</h4>
                        <p class="w3-cursive">
                            You are given an integer N and a digit D. Find the minimum non-negetive integer you should
                            add to N such that the final value of N does not contain the digit D.
                        </p>
                    </a>
                </div>
                <div class="all-q">
                    <a href="">
                        <h4 class="big-question-font">DIGIT REMOVAL SOLUTION - CODECHEF</h4>
                        <p class="w3-cursive">
                            You are given an integer N and a digit D. Find the minimum non-negetive integer you should
                            add to N such that the final value of N does not contain the digit D.
                        </p>
                    </a>
                </div>
            </div>


            <!-- leetcode -->
            <div class="itembox leetcode">
                <div class="all-q">
                    <a href="leetcode/longest-substring-without-repeating-characters.php">
                        <h4 class="big-question-font">3. Longest Substring Without Repeating Characters</h4>
                        <p>Given a string s, find the length of the <strong>longest substring</strong> without repeating characters.</p>
                    </a>
                </div>
                <div class="all-q">
                    <h4 class="big-question-font">leetcode Q2</h4>
                </div>
                <div class="all-q">
                    <h4 class="big-question-font">leetcode Q3</h4>
                </div>
            </div>


            <!-- data structure & algorithm -->
            <div class="itembox dsa">
                <div class="all-q">
                    <h4>Data structure and algorithm Q1</h4>
                </div>
                <div class="all-q">
                    <h4>Data structure and algorithm Q2</h4>
                </div>
                <div class="all-q">
                    <h4>Data structure and algorithm Q3</h4>
                </div>
            </div>
        </div>
    </section>


<!-- -----------------Footer--------------- -->



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-2">
                    <img src="img/profile.jpg" alt="logo">
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <hr>
                    <ul>
                        <li><a href="https://www.youtube.com/watch?v=p6GI-co45IY&list=PL_rmipHSvQlyx2DCSOh6Yfh1WA8b22abM"
                                target="_blank">Python Video Tutorial</a></li>
                        <li><a href="https://www.youtube.com/watch?v=9qqQjuspmPI&list=PL_rmipHSvQlyRn_lxIQRyYOWnHj4aY8rY"
                                target="_blank">DSA Video Tutorial</a></li>
                        <li><a href="https://www.youtube.com/watch?v=EOpvZlGCmz0&list=PL_rmipHSvQlyg54Jhr-MjXWlHgNKgS51e"
                                target="_blank">DSA Problem Sheet</a></li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow Us</h3>
                    <hr>
                    <ul>
                        <li><a href="https://www.facebook.com/krishnendu.roy.501598/" target="_blank">Facebook</a></li>
                        <li><a href="https://github.com/CodeHereBro" target="_blank">github</a></li>
                        <li><a href="https://www.instagram.com/krishnendu_roy52/" target="_blank">Instagram</a></li>
                        <li><a href="https://www.youtube.com/channel/UCyJXQWe8mwX6EdKwIyHecAA"
                                target="_blank">YouTube</a></li>
                    </ul>
                </div>
            </div>
            <hr>
            <p class="copyright">Copyright &copy; By krishnendu Roy</p>
        </div>
    </div>

    <script>
        const spans = document.querySelectorAll('.word span');

        spans.forEach((span, idx) => {
            span.addEventListener('click', (e) => {
                e.target.classList.add('active');
            });
            span.addEventListener('animationend', (e) => {
                e.target.classList.remove('active');
            });

            setTimeout(() => {
                span.classList.add('active');
            }, 750 * (idx + 1))
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $('.list').click(function () {
                const value = $(this).attr('data-filter');
                if (value == 'all') {
                    $('.itembox').show('1000');
                }
                else {
                    $('.itembox').not('.' + value).hide('1000');
                    $('.itembox').filter('.' + value).show('1000');
                }
            })
        })

        $('.list').click(function () {
            $(this).addClass('active').siblings().removeClass('active');
        })
    </script>

    <script>
        function search_filter() {
            let input = document.getElementById('search').value
            input = input.toLowerCase();
            let x = document.getElementsByClassName('all-q');

            for (i = 0; i < x.length; i++) {
                if (!x[i].innerHTML.toLowerCase().includes(input)) {
                    x[i].style.display = "none";
                }
                else {
                    x[i].style.display = "list-item";
                }
            }
        }
    </script>
    <script src="js/script.js"></script>
</body>

</html>