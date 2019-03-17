<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<!--CONTAINER START-->
<div class="container">
  <!--CAROUSEL-->
    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
          <li data-target="#demo" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
          <div class="img"></div>
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <div class="img"></div>
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <div class="img"></div>
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <div class="img"></div>
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
            </div>   
          </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
    </div> <!--CAROUSEL END-->
    <!--TABLE-->
    <table class="table table-light container">
        <thead class="table-light">
          <tr>
            <th scope="col"></th>
            <th scope="col">2 Laps</th>
            <th scope="col">4 Laps</th>
            <th scope="col">Extra Lap</th>
            <th scope="col">Exess</th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-active">
            <th scope="row">VW Golf GTI</th>
            <td>200 EUR</td>
            <td>400 EUR</td>
            <td>100 EUR</td>
            <td>9000 EUR</td>
          </tr>
          <tr>
            <th>VW Golf GTI</th>
            <td>200 EUR</td>
            <td>400 EUR</td>
            <td>100 EUR</td>
            <td>9000 EUR</td>
          </tr>
          <tr class="table-active">
            <th>VW Golf GTI</th>
            <td>200 EUR</td>
            <td>400 EUR</td>
            <td>100 EUR</td>
            <td>9000 EUR</td>
          </tr>
          <tr>
            <th scope="row">VW Golf GTI</th>
            <td>200 EUR</td>
            <td>400 EUR</td>
            <td>100 EUR</td>
            <td>9000 EUR</td>
          </tr>
        </tbody>
    </table><!--TABLE END-->
</div> <!--CONTAINER END-->
<?php include('footer.php'); ?>