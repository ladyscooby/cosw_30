<!DOCTYPE html>
<html>
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <head>
        
        <title>Labwork 1: Hello World</title>
        <style>
            body{
                background:  black;
                margin:0;
                color: yellow;
                
                }
            h1{
                font-size: 2.8em;
                text-align: center;
            }
            
            header{
                text-align: center;
            }
            img{
                margin: 2px;
            }
            main{
                font-family: 'Rancho', cursive;
                font-size: 1.2em;
                background-color:yellow;
                text-align:center;
                margin:5%;
                padding:15px;
                border:5px solid white;
                color:black;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Hello World</h1>
           <img src="https://cdn.pixabay.com/photo/2012/04/14/17/07/smiley-34625__340.png">
        </header>
       
        <?php
            /* lab1.php Dominiqa Johnson 08/28/2019 */?>
        <main>
            
        <h2>Who I Am</h2>
        <p>I'm Dominquea in school for Web Development. This is my secound year studying web development in college. In High School I learned how to build a web page by using Dreamweaver when it was a new software, there wasn't much coding you had to type yourself. On my free time I like relaxing at home with a good show to binge watch. I also enjoy hanging out with friends and family. I'm an aunt to 7 nephews Geesh yes, all boys who I love very much, hoping to teach them coding as they grow older. My hobbies would be taking my nephews places, playing Pokémon go, going to the beach enjoying the view, love spontaneous adventures with friends, playing ps4 when I have time, and relaxing at home watching Hulu or Netflix. Also, I have a turtle name French-fry.</p>
        <p>Things I like:</p> 
        <ul>
            <l>Gaming</l><br>
            <l>Coding</l><br>
            <l>Binging</l><br>
            <l>Socializing</l><br>
        </ul>    
            

            
<?php echo            
    
print "<p>Usually I'm not on the web a lot. When I am, I like to go <a href='https://www.google.com'>Google</a>, <a href='https://www.youtube.com'>YouTube</a>, <a href='https://www.hulu.com'>Hulu</a>, <a href='https://www.netflix.com'>Netflix</a> and <a href='https://www.instagram.com'>Instagram</a> the most. I'm always searching for new shows or movies to watch, there’s something different every week. Some of my recommendations are What About Monday a movie on Netflix and Good Girls a show on Hulu.</p>   
   <p>After doing this assignment I feel PHP is a little challanging but easy to figure out once you play around with the code. Still trying to figure out how to get rid of the last three symbols once its uploaded. It was tricky trying to do the AWS Cloud9 command prompt, the Git commands are kinda hard at the moment. </p>";?>
 
       
        
      </main>  
    </body>
</html>