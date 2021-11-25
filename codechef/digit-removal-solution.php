<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/style-question.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha512-9BwLAVqqt6oFdXohPLuNHxhx36BVj5uGSGmizkmGkgl3uMSgNalKc/smum+GJU/TTP0jy0+ruwC3xNAk3F759A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/script.js"></script>
    <title>Digit Removal Solution | Think-Code</title>
</head>

<body>
    <section class="navbar background">
        <nav>
            <!-- <button class="toggleBtn" onclick="menutoggle()"><img src="img/menu.png" class="menu-icon"
                    style="width: 30px; position: absolute; left: 0; top: 20px; margin-left: 20px;"></button> -->
            <ul class="nav-list" id="MenuItems">
                <li><a href="../index">Home</a></li>
                <li><a href="../about">About</a></li>
                <li><a href="../feedback">Feedback</a></li>
            </ul>
        </nav>
        <div class="menu-btn" onclick="menutoggle()">
            <div class="menu-burger"></div>
        </div>
        <div class="rightnav">
            <input type="text" name="search" id='search' placeholder="Search" onkeyup="search_filter()">
            <button class="btn btn-sm" onclick="search_filter()">Search</button>
        </div>
        <!-- <button onclick="myFunction()">Toggle dark mode</button> -->
        </nav>
    </section>

    <div class="content" id="down">
        <span style="content: \2600; font-size: 40px;">&#9728;</span>
        &nbsp;
        <input type="checkbox" id="tooglenight" class="cbx hidden" />
        <label for="tooglenight" class="switch" onclick="myFunction()"></label>
        &nbsp;&nbsp;&nbsp;
        <span style="content: \1F319; font-size: 35px;">&#9790;</span>
    </div>
    <section class="box">
        <hr>
        <h2>Digit Removal</h2>
        <p>You are given an integer N and a digit D. Find the minimum non-negetive integer you should add to N such that
            the final value of N does not contain the digit D.</p>
        <hr>
        <h2>Input Format</h2>
        <p>The first line contains T denoting the number of test cases. Then the test cases follow.
            Each test case contains two integers N and D on a single line denoting the original number and the digit you
            need to avoid.</p>
        <hr>
        <h2>Output Format</h2>
        <p>For each test case, output on a single line the minimum non-negetive integer you should add to N.</p>
        <hr>
        <h2>Constraints</h2>
        <pre>
1≤T≤105
1≤N≤109
0≤D≤9
    </pre>
        <hr>
        <h2>Subtasks</h2>
        Subtask 1 (100 points): Original constraints
        <hr>
        <h2>Sample Input 1</h2>
        <pre>
5
21 5
8 8
100 0
5925 9
434356 3
        </pre>
        <hr>
        <h2>Output 1</h2>
        <pre>
0
1
11
75
5644
    </pre>
        <hr>
        <h2>Explanation</h2>
        <br>
        <h3>Test case 1:</h3>
        <p> N=21 does not contain the digit D=5. Hence there is no need to add any integers to N.</p>

        <h3>Test case 2:</h3>
        <p>If 1 is added to N=8, it becomes equal to 9, which does not contain the digit D=8.</p>

        <h3>Test case 3:</h3>
        <p>The minimum integer you should add to N=100 such that the final value of N does not
            contain the
            digit D=0 is 11.</p>

        <h3>Test case 5:</h3>
        <p>The minimum integer which is greater than 434356 and does not contain the digit D=3 is 440000. So
            we should add 440000−434356=5644.</p>

        <hr>
        <h2>
            Answer
        </h2>
        <p class="code">
            #include &lt;bits/stdc++.h><br>
            using namespace std;<br>
            <br>
            int isMin(int n, int d){ <br>
            &emsp;int newN = n, rem , count =0, c = 0;<br>
            &emsp;while(newN>0){<br>
            &emsp;&emsp;rem = newN % 10;<br>
            &emsp;&emsp;newN = newN /10;<br>
            &emsp;&emsp;c++;<br>
            &emsp;&emsp;if(rem == d){<br>
            &emsp;&emsp;&emsp;newN = newN*pow(10,c)+(rem+1)*pow(10,<span>c-1);</span><br>
            &emsp;&emsp;&emsp;count = newN -n;<br>
            &emsp;&emsp;&emsp;c = 0;<br>
            &emsp;&emsp;}<br>
            &emsp;}<br>
            &emsp;return count; <br>
            }
            <br><br>
            int main() <br>
            { <br>
            &emsp;int t;<br>
            &emsp;cin>>t; <br>
            &emsp;while(t--){<br>
            &emsp;&emsp;int n, d;<br>
            &emsp;&emsp;cin>>n>>d;<br>
            &emsp;&emsp;cout&lt;&lt;isMin(n, d)&lt;&lt;endl; <br>
            &emsp;} <br>
            &emsp;return 0;<br>
            }
        </p>

        <!-- share -->

        <div class="share-btn-container">
            <h1 style="font-size: 15px; font-family: 'Poppins', sans-serif;">Share it&nbsp; &#8594;</h1>
            <a href="#" class="whatsapp-btn">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#" class="facebook-btn">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="#" class="twitter-btn">
                <i class="fab fa-twitter"></i>
            </a>
        </div>
    
        <!-- Next - Previous -->
        <div class="next-pre">
            <a href="#" class="previous">&laquo; Previous</a>
            <a href="#" class="next">Next &raquo;</a>
        </div>
        
    </section>

    
    
    
    
    <!-- -----------------Footer--------------- -->



    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col-2">
                    <img src="../img/profile.jpg" alt="logo">
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

    <!-- JScript -->
    <script>
        const facebookBtn = document.querySelector(".facebook-btn");
        const twitterBtn = document.querySelector(".twitter-btn");
        const pinterestBtn = document.querySelector(".pinterest-btn");
        const whatsappBtn = document.querySelector(".whatsapp-btn");

        function init() {
            let postUrl = encodeURI(document.location.href);
            let postTitle = encodeURI("Hi everyone, please check this out: ");
            whatsappBtn.setAttribute(
                "href",
                `https://wa.me/?text=${postTitle} ${postUrl}`
            );

            facebookBtn.setAttribute(
                "href", 
                `https://www.facebook.com/sharer.php?u=${postUrl}`
            );

            twitterBtn.setAttribute(
                "href",
                `https://twitter.com/share?url=${postUrl}&text=${postTitle}`
            );
        }

        init();
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="../js/question.js"></script>
</body>

</html>