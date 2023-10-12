<?php


/**
 creare una web-app che permetta di leggere una lista di dischi presente nel nostro server.
 Stack Html, CSS, VueJS (importato tramite CDN), axios, PHP
 */
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Spotify</title>
</head>
<body>
<div id="app">

<header> 
    <nav class="navbar navbar-expand navbar-light bg-dark">
        <div class="nav navbar-nav">
            <img src="./assets/img/spotify-logo-png-7053.png" class="w-25 p-3" alt="" srcset="">g
        </div>
    </nav>
</header>

<main>
            <div class="container mt-5">

                <div class="row g-5">
                    <div v-for="song in songs" class="col-4">
                        <div class="card d-flex flex-column justify-content-center align-items-center py-3">
                            <div class="d-flex ">
                                <img class="img-fluid" :src="song.poster" alt="">
                            </div>

                            <h4 class="text-center">{{song.title}}</h4>
                            <p>{{song.author}}</p>
                            <h4>{{song.year}}</h4>

                        </div>
                    </div>
                </div>

            </div>
        </main>

</div>
        
    </div>






<script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.5.1/axios.min.js" integrity="sha512-emSwuKiMyYedRwflbZB2ghzX8Cw8fmNVgZ6yQNNXXagFzFOaQmbvQ1vmDkddHjm5AITcBIZfC7k4ShQSjgPAmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src='./main.js'></script>
</body>
</html>