<!DOCTYPE html>
<html>
    <head>
        <title>
            C.S.Diaries
        </title>
        <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=DM+Serif+Text&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/styles_about_me.css">
    </head>
    <body>
        <div class = "header">
            <div class = "inner_header">
                <div class = "web_title">
                    <a href = "index.php"><h1>C.S.<span>Diaries</span></h1></a>
                </div>
                <ul class = "navigation">
                    <a href = "index.php"><li>Home</li></a>
                    <a><li>Activities
                        <ul class = "inner_navigation">
                        <li>
                            Activity 2
                        </li>
                        <li>
                            Activity 3
                        </li>
                        <li>
                            Activity 4
                        </li>
                        </ul>
                    </li></a>
                    <a href="about_me.php"><li>About Me</li></a>
                </ul>
            </div>
        </div>
        <div class = "extra_space">
            <div class = "box">
            </div>
        </div>
        <div class = "body_text">
            <div class = "about_me_box">
                <h1>About Me</h1>
            </div>
            <div class = "extra_space">
                    <div class = "box2">
                    </div>
            </div>
            <div class = "description_box">
                <p>I am Andre Lagsac, and I am 20 years old. I was born in Quezon City but currently, I live in Barangay Tejeros in Makati City. I really love playing computer games and watching youtube videos during my past time. I love playing Mobile Legends or any other racing games. Though I am a techy guy, I love playing sport, I am into basketball and biking. This also serves a past time during my weekends. I am currently a member of the Elite Group of Innovators (EGI), which competes in different industry challenges.<br></p>
                <p>I didn't have the chance to enjoy my summer since we are currently doing a project in Accenture in the Program the Future competition. Even though there are no classes in school, I still go to school because we need to finish our project and it is very exhausting. Although the experience of being selected by Accenture was delighting, however the process of making a project is very hard. Accenture assigned two mentors for our group. And every week we need to meet them according to our preference. It is the last week of the making project in Accenture so we need to go on full force.<br></p>
                <p>Now it is the first day of school, and I really don't feel any excitement since I have been in school almost every day for the past month. Since before, I always feel excited on first day of class, but right now I just want to sleep. I am a very shy person, so I really don’t like interacting with people, especially to people I just recently met. I am the kind of person that likes to be approached first rather than being the one to approach that person. However, whenever I’m with my friends I already know I usually don’t get shy and I’m one of the noisiest persons you will ever know or see. But even though I am a two-sided person, I always remind them to do their best all the time and give them tips on how to study, since I am aiming for honors when I graduate in college.<br></p>
                <p>Overall, even though I am a reserved person, I have a clean and good heart and I am very approachable 24/7, I am not that stubborn as to compare to what I look like. I always love to smile and give smile to others. I may not be a perfect student or a classmate, but I can treat others with my upmost respect even though I may not be given one.</p>
                <hr size="3" width="100%" color="black">
                <div class = "accounts">
                <ul>
                    <a href = "https://facebook.com/andre.lagsac"><img src = "assests/facebook.png">Facebook</a>
                    <a href = "https://twitter.com/itsandrelagsac"><img src = "assests/twitter.png">Twitter</a>
                    <a href = "https://github.com/amlagsac"><img src = "assests/github-logo.png">Github</a>
                </ul>
                <ul class = "contact">
                    <li>Contact #: 09263495840</li>
                    <li>Telephone #: 895-65-65</li>
                </ul>
                </div>
            </div>
            <div class = "extra_space">
                    <div class = "box4">
                </div>
                </div>
                <div class = "pictures">
                    <h1>My Pictures</h1>
                    <hr size="3" width="100%" color="black">
                    <img src = "assests/IMG_-65wcbu[1].jpg" height="275px" width="350px">
                    <img src = "assests/66505777_858192507907770_6627278672535486464_n.jpg" height="275px" width="400px">
                    <img src = "assests/65531740_10213957112988672_8214746774670147584_n.jpg" height="275px" width="350px">
                </div>
            <div class = "extra_space">
                    <div class = "box3">
                    </div>
            </div>
            <div class = "extras">
                <h1>My Home Map</h1>
                <hr size="3" width="100%" color="black">
                <div id="map">
                </div>
            </div>
        </div>
        <script> 
            function initMap() { 
                var test= {lat: 14.574801, lng: 121.015117}; 
                var map = new google.maps.Map(document.getElementById('map'), { 
                zoom: 19, 
                center: test 
                }); 
                var marker = new google.maps.Marker({ 
                position: test, 
                map: map 
                }); 
            } 
            </script> 
            <script async defer 
            src= "https://maps.googleapis.com/maps/api/js?key=AIzaSyDOVby92-2B3sI-StScZZGRiI1XEO6cqow&callback=initMap"> 
        </script>
    </body>
</html>
