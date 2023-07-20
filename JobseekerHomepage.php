<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Piedra&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Fugaz One' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href = "css/Home.scss">
    <link href="https://fonts.googleapis.com/css2?family=Yeon+Sung&display=swap" rel="stylesheet">
    <!--#0ED926-->

    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
.mainHeading{
  margin: 0;
  padding: 2;
  text-align: center;
    font-size: 100px;
    font-weight: bolder;
    font-family: 'yeon sung';
    color: #0ED926;
}



    </style>
</head>
<body>

    <!--Header section-->
    <header>
        <h1 class="mainHeading">ALOE</h1>

        <ul>
  <li><a  href="index.php">Post Advert</a></li>
  <li><a  href="JProfile.php">Profile</a></li>
  <li><a  href="Jobseeker-login.php">Log Out</a></li>
 
</ul>
    </header>


    <div id="app">
  <div class="app__phone">
    <div class="phone-header">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/Instagram_logo.png" />
      <p class="cancel-cta" v-if="step === 2 || step === 3" @click="goToHome">Cancel</p>
      <p class="next-cta" v-if="step === 2" @click="step++">Next</p>
      <p class="next-cta" v-if="step === 3" @click="sharePost">Share</p>
    </div>
    <transition name="fade">
      <div class="feed" v-if="step === 1" v-dragscroll.y="true">
        <instagram-post v-for="post in posts"
                        :post="post"
                        :key="posts.indexOf(post)">
        </instagram-post>
      </div>
    </transition>
    <div v-if="step === 2">
      <div class="selected-image"
           :class="filterType"
           :style="{ backgroundImage: 'url(' + image + ')' }"></div>
      <div class="filter-container" v-dragscroll.x="true">
        <filter-type v-for="filter in filters"
                     :filter="filter"
                     :image="image"
                     :key="filter.name">
        </filter-type>
      </div>
    </div>
    <div v-if="step === 3">
      <div class="selected-image"
           :class="filterType"
           :style="{ backgroundImage: 'url(' + image + ')' }"></div>
      <div class="caption-container">
        <textarea class="caption-input"
                  placeholder="Write a caption..."
                  type="text"
                  v-model="caption">
        </textarea>
      </div>
    </div>
    <div class="phone-footer">
      <div class="home-cta" @click="goToHome">
        <i class="fas fa-home fa-lg"></i>
      </div>
      <div class="upload-cta">
        <input type="file"
               name="file"
               id="file"
               class="inputfile"
               @change="fileUpload"
               v-model="fileInput"
               :disabled="step !== 1"/>
        <label for="file">
          <i class="far fa-plus-square fa-lg"></i>
        </label>
        <p v-if="step === 1">
          Click <a @click="uploadRandomImage">here for a random image!</a> or upload your own! <i class="fas fa-chevron-right"></i>
        </p>
      </div>
    </div>
  </div>
  <div class="details">
    <a class="button is-primary is-small is-info" v-if="!showDetails" @click="showDetails = !showDetails">Details</a>
    <ul v-else>
      <li>Navigate the feed by <span>dragging (or scrolling)</span></li>
      <li>Upload an image with <span><i class="far fa-plus-square fa-lg"></i></span></li>
      <li>Like a post with <span><i class="far fa-heart fa-lg"></i></span> or <span>double clicking an image</span></li>
    </ul>
  </div>
  <a href="https://twitter.com/djirdehh" target="_blank" class="twitter-section">
    <i class="fab fa-twitter" aria-hidden="true"></i>
  <a>
</div>

<!--  Prefetch random images -->
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/tropical_beach.jpg" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/downtown.jpg" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/cat.jpg" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/sushi.jpg" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/pug_personal.jpg" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/pineapple.jpg" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/tropical_ocean.jpg" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/velvet_monkey.jpg" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/codepen_logo.png" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/me2.png" />
<link rel="prefetch" href="https://s3-us-west-2.amazonaws.com/s.cdpn.io/1211695/me_3.jpg" />






    
</body>
</html>