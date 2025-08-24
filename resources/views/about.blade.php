<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



.card img {
  height: 100%; 
}

body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
  height: 400px; 
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}


</style>
</head>
<body>

<div class="about-section">
  <h1>About Us Page</h1>
  <p>"Efficiently manage your team with our comprehensive</p>
  <p>employee management platform."</p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="/image/download.jpg" style="width:100%">
      <div class="container">
        <h2>Sohin Ali</h2>
        <p class="title">PHP Developer</p>
        <p>"Sohin Ali, a skilled PHP developer, excels in crafting dynamic web solutions with precision and efficiency. Experienced in backend development and database management, Sohin delivers high-quality, scalable code."</p>
        <p>Sohinali786@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/image/photo.png" style="width:100%">
      <div class="container">
        <h2>Ayush</h2>
        <p class="title">Wordpress Developer</p>
        <p>"WordPress developer known for crafting sleek and efficient websites. With expertise in theme customization and plugin development, Sarah brings creativity and functionality to every project."</p>
        <p>Sunil@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/image/pic2.png" style="width:100%">
      <div class="container">
        <h2>Rahul Yadav</h2>
        <p class="title">Designer</p>
        <p>"Introducing Rahul yadav, a talented designer with a flair for creating captivating visuals. With a keen eye for aesthetics and a passion for innovation, John crafts designs that leave a lasting impression."</p>
        <p>rahul@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
