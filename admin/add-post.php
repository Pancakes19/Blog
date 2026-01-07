<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA_-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Website</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.2.0/css/line.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  </head>
  <body>
      <nav>
          <div class="container nav__container">
              <a href="index.html" class="nav__logo">Anime Blog</a>
              <ul class="nav__items">
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="services.html">Servies</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <!--<li><a href="signin.html">Signin</a></li>-->
                  <li class="nav__profile">
                      <div class="avatar">
                          <img src="./images/cat.jpg" alt="">
                      </div>
                      <ul>
                          <li><a href="dashboard.html">Dashboard</a></li>
                          <li><a href="logout.html">Logout</a></li>
                      </ul>
                  </li>

              </ul>
              <button id="open__nav-btn"><i class="uil uil-bars"></i></button>
              <button id="close__nav-btn"><i class="uil uil-multiply"></i></button>
          </div>
      </nav>
      <!--=======================End of Navbar=============================-->



<section class="form__section">
<div class="container form__section-container">
    <h2>Add Post</h2>
    <div class="alert__message error">
        <p>Sign In failed. Try again Broskii</p>
    </div>
    <form action="" enctype="multipart/form-data">
        <input type="text" placeholder="Title">
        <select>
            <option value="1">Anime</option>
            <option value="1">Marvel</option>
        </select>
        <textarea rows="10" placeholder="Body"></textarea>
        <div class="form__control inline">
            <input type="checkbox" id="is_featured" checked>
            <label for="is_featured" >Featured</label>
        </div>
        <div class="form__control">
            <label for="thumbnail">Add thumbnail</label>
            <input type="file" id="thumbnail">
        </div>
        <button type="submit" class="btn">Add post</button>
    </form>
</div>
</section>

<footer>
  <div class="footer__socials">
    <a href="insta" target="_blank"><i class="uil uil-instagram"></i></a>
    <a href="https://www.linkedin.com/in/quinton-khuwiseb-b85b432a2/" target="_blank"><i class="uil uil-linkedin-alt"></i></a>
    <a href="https://github.com/Pancakes19" target="_blank"><i class="uil uil-github-alt"></i></a>
    <a href="mailto:khuwisebquinton@gmail.com"><i class="uil uil-envelope"></i></a>
  </div>
  <div class="container footer__container">
  <div class="footer__header"><h4>Links</h4></div>
  <div class="footer__links">
    <article>
      <ul>
        <li><a href="">Instagram</a></li>
        <li><a href="">Linkedin</a></li>
      </ul>
    </article>
    <article>
      <ul>
        <li><a href="">Github</a></li>
        <li><a href="">My Portfolio</a></li>
      </ul>
    </article>
    <article>
      <ul>
        <li><a href="">Email</a></li>
        <li><a href="">WhatsApp me</a></li>
      </ul>
    </article>
  </div>
</div>

  <div class="footer__copyright">
    <small>Copyright &copy; QUINTON KHUWISEB</small>
  </div>


</footer>


<script src="./main.js"></script>
</body>
</html>

</body>
</html>