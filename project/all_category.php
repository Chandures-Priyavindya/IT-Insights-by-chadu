<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/like_post.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>category</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->




<section class="categories">

   <h1 class="heading">post categories</h1>

   <div class="box-container">
      <div class="box"><span>01</span><a href="category.php?category=REAC">REACT</a></div>
      <div class="box"><span>02</span><a href="category.php?category=REACT NATIVE">REACT NATIVE</a></div>
      <div class="box"><span>03</span><a href="category.php?category=PHP">PHP</a></div>
      <div class="box"><span>04</span><a href="category.php?category=HTML">HTML</a></div>
      <div class="box"><span>05</span><a href="category.php?category=CSS">CSS</a></div>
      <div class="box"><span>06</span><a href="category.php?category=MYSQL">MYSQL</a></div>
      <div class="box"><span>07</span><a href="category.php?category=JAVA">JAVA</a></div>
      <div class="box"><span>08</span><a href="category.php?category=KOTLIN">KOTLIN</a></div>
      <div class="box"><span>09</span><a href="category.php?category=HOW TO">HOW TO</a></div>
      <div class="box"><span>10</span><a href="category.php?category=C">C</a></div>
      <div class="box"><span>11</span><a href="category.php?category=JAVASCRIPT">JAVASCRIPT</a></div>
      <div class="box"><span>12</span><a href="category.php?category=C++">C++</a></div>
      <div class="box"><span>13</span><a href="category.php?category=C#">C#</a></div>
      <div class="box"><span>14</span><a href="category.php?category=GAME DEVELOPMENT">GAME DEVELOPMENT</a></div>
      <div class="box"><span>15</span><a href="category.php?category=WEB DEVELOPMENT">WEB DEVELOPMENT</a></div>
      <div class="box"><span>16</span><a href="category.php?category=BOOTSTRAP">BOOTSTRAP</a></div>
      <div class="box"><span>17</span><a href="category.php?category=PYTHON">PYTHON</a></div>
      <div class="box"><span>18</span><a href="category.php?category=PROJECTS">PROJECTS</a></div>
      <div class="box"><span>19</span><a href="category.php?category=UI DESIGN">UI DESIGN</a></div>
      <div class="box"><span>20</span><a href="category.php?category=FIGMA">FIGMA</a></div>
   </div>

</section>










<?php include 'components/footer.php'; ?>







<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>