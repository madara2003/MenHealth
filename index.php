<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Men Health</title>

</head>
<body>

    <div id ="myModal" class="form__bg">
        <div class="form__container">
            <div class="form">
                <p class="form__hg">Congratulations!</p>

                <p class="form__description">You've won new program bears</p>

                
               <div class="about__item about__item-margin about__item-sizes">
                    <div class="about__inner">
                        <div class="price__container">
                            <p class="price">$0.77/GUMMY</p>
                        </div>
                    </div>
                </div>

              <p class="form__about">
                1. Click on "OK" and then continue with the delivery page
              </p>

              <p class="form__about">
               2. Fill in the form to receive one free botle you have 
                 <span class="container">
                    <span class="minutes" >
                        0
                    </span>   
                    <span id="el1" class="minutes" >
                        5
                     </span>  
                     <span id="el2" class="minutes minutes-margin" >
                        5
                     </span>  
                     <span id="el3" class="minutes" >
                        8
                     </span>  
                </span>
             minutes to do it
              </p>

              <form action="process.php" method="POST"  onsubmit="return validateForm()">
            <div class="input__container">
                <div class="input__inner">
                    <input class="input" id="input" name=email placeholder="Enter Mail" type="text" >
                </div> 
               
                <input type="submit" value="SEND" class="styled-button">

                
             
            </div>
            <p class="danger">Something went wrong</p>
            </form>
            </div>
      
            
        </div>
    </div>

    <header class="header">
        <div class="header__container">
            <div class="logo">
                <img src="images/logo.svg" alt="" class="logo__img">
            </div>

            <ul class="navigation">
                <li class="navigation__text">
                    <a href="#quiz" class="navigation__link">SIGN IN</a>
                </li>

                <li class="navigation__item">
                    <a href="#" class="navigation__link">
                        <img class="navigation__img" src="images/search.svg" alt="">
                    </a>
                </li>
                <li class="navigation__item navigation__item-sizes">
                    <a href="#" class="navigation__link">
                        <img class="navigation__img" src="images/corsina.svg" alt="">
                    </a>
                </li> 
            </ul>
        </div>
    </header>


    <div class="about">
        <p class="about__hg">
            New Online Pharmacy Program Allows California Residents 
            to Purchase Generic Viagra® and Generic Cialis® at $7 for 9 Gummys.
             (Limit of 18 Gummys Per Person, Per Month.)
         </p>

         <div class="about__container">

            <div class="about__item">
                <div class="about__img">
                    <img src="images/cvs.svg" alt="">
                </div>
                <div class="about__inner">
                    <div class="price__container price__container-sizes">
                        <p class="price">$4.67/Tablet</p>
                    </div>
                </div>
            </div>

            <div class="about__item">
                <p class="about__highlight">NEW PROGRAM</p>
                <div class="about__inner">
                    <div class="price__container">
                        <p class="price">$0.77/GUMMY</p>
                    </div>
                </div>
            </div>
    

         </div>

         <p class="about__description">
            In this program, you'll never pay extra for higher 
            doses of ED medication. It's simple: no hidden fees for increased dosages,
             and no prescription is required. 
         </p>
    </div>

    <div id="quiz" class="quiz">
        <div class="quiz__container item2 " >
            <div class="quiz__bg">
                <p class="quiz__hg">
                    Just answer a few 
                    quick health-related questions
                     in under two minutes, and you're good to go.
                </p>
            </div>

            <ul class="buttons">
                <li class="button__element"><a id="q1" class="button__link button__link-selected" href="#">1</a></li>
                <li class="button__element"><a id="q2" class="button__link" href="#">2</a></li>
                <li class="button__element"><a id="q3" class="button__link" href="#">3</a></li>
                <li class="button__element"><a id="q4" class="button__link" href="#">4</a></li>
                <li class="button__element"><a id="q5" class="button__link" href="#">5</a></li>
                <li class="button__element"><a id="q6" class="button__link" href="#">6</a></li>
                <li class="button__element"><a id="q7" class="button__link" href="#">7</a></li>
            </ul>

            <p class="quiz__question">Is the penis 8 inches or more in length?</p>
            <div class="buttongroup">
                <a href="#" id="button1"  class="btn">YES</a>
                <a href="#" id="button2" class="btn btn-style">NO</a>
            </div>
            
        </div>

        <div  class="quiz__img item1">
            <img id="quiz__img" src="images/docktor.png" alt="">
        </div>

    
    </div>

    <div class="info">
        <div class="info__hg">
            <p class="info__element">Revolutionary New Program   : </p>
            <p class="info__element">Natural Alternatives to Viagra at Unbeatable Prices</p>
        </div>

        <a href="#" class="info__btn btn">A Game-Changer in Men's Health</a>

        <p class="info__description">
            (Washington, D.C.) Exciting news for men in [Your Target Region]
            : A new program has been launched that offers natural
             alternatives to Viagra at a staggering 96% discount compared to retail prices at major pharmacies like CVS and Walgreens. This groundbreaking initiative is designed to provide safe, effective, and affordable options for men looking to enhance their sexual health without breaking the bank.
        </p>

        <div class="breakline"></div>
    </div>


    <div class="comment">
        <div class="comment__container">
            <div class="user">

                <div class="user__img">
                    <img src="images/PosterAvatar.png" alt="">
                </div>

               <div class="user__info">

                  <div class="user__top">
                     <p class="user__name">Michael J.</p>
                     <div class="user__icon">
                        <img src="images/RecommendIcon.svg" alt="">
                     </div>
                     <p class="user__priority">recommends</p>
                  </div>

                  <div class="user__bottom">
                     <p class="user__time">30m • </p>
                     <div class="user__world">
                        <img src="images/EarthIcon.svg" alt="">
                     </div>
                  </div>

               </div>

               <div class="user__setting">
                   <img src="images/MenuButton.svg" alt="">
               </div>

            </div>

            <p class="comment__text">
                I tried GroMax, and I have to say,
                 it's the best alternative to Viagra 
                 I've ever used. The effects kick in quickly, 
                 and I feel more confident than ever before. 
                 I highly recommend it to anyone looking for an effective solution!
            </p>

            <div class="likes">
              <div class="likes__container">
               <div class="likes__btn">
                    <div class="like__elemen">
                        <img src="images/like.svg" alt="">
                    </div>

                    <div class="like__elemen">
                        <img src="images/love.svg" alt="">
                    </div>
               </div>

               <p class="like__text">
                  You & 147 other
               </p>

               <p class="like__text like__text-right">
                  0 Comments
               </p>

            </div>
          </div>

          <div class="share">
            <div class="shere__container">
                <div class="item">
                  <div class="item__container">

                    <div class="item__img">
                        <img src="images/Frame 3.svg" alt="">
                    </div>
                    <p class="item__text item__text-color">Like</p>
                  </div>
                </div>

                <div class="item">
                    <div class="item__container">
  
                      <div class="item__img">
                          <img src="images/dare.svg" alt="">
                      </div>
                      <p class="item__text ">Comment</p>
                    </div>
                  </div>

                  <div class="item">
                    <div class="item__container">
  
                      <div class="item__img">
                          <img src="images/forward.svg" alt="">
                      </div>
                      <p class="item__text">Share</p>
                    </div>
                  </div>


            </div>
          </div>
        </div>

        <div class="comment__container comment__container-margin">
            <div class="user">

                <div class="user__img">
                    <img src="images/PosterAvatar.jpg" alt="">
                </div>

               <div class="user__info">

                  <div class="user__top">
                     <p class="user__name">James L.</p>
                     <div class="user__icon">
                        <img src="images/RecommendIcon.svg" alt="">
                     </div>
                     <p class="user__priority">recommends</p>
                  </div>

                  <div class="user__bottom">
                     <p class="user__time">1d • </p>
                     <div class="user__world">
                        <img src="images/EarthIcon.svg" alt="">
                     </div>
                  </div>

               </div>

               <div class="user__setting">
                   <img src="images/MenuButton.svg" alt="">
               </div>

            </div>

            <p class="comment__text">
                Does anyone know of a natural product that can help improve sexual health?
                 I've been searching for something effective and safe, but it's hard to find something I can trust.
                  Any recommendations?
            </p>

            <div class="likes">
              <div class="likes__container">
               <div class="likes__btn">
                    <div class="like__elemen">
                        <img src="images/like.svg" alt="">
                    </div>

                    <div class="like__elemen">
                        <img src="images/love.svg" alt="">
                    </div>
               </div>

               <p class="like__text">
                  You & 147 other
               </p>

               <p class="like__text like__text-right">
                  0 Comments
               </p>

            </div>
          </div>

          <div class="share">
            <div class="shere__container">
                <div class="item">
                  <div class="item__container">

                    <div class="item__img">
                        <img src="images/Frame 3.svg" alt="">
                    </div>
                    <p class="item__text item__text-color">Like</p>
                  </div>
                </div>

                <div class="item">
                    <div class="item__container">
  
                      <div class="item__img">
                          <img src="images/dare.svg" alt="">
                      </div>
                      <p class="item__text">Comment</p>
                    </div>
                  </div>

                  <div class="item">
                    <div class="item__container">
  
                      <div class="item__img">
                          <img src="images/forward.svg" alt="">
                      </div>
                      <p class="item__text">Share</p>
                    </div>
                  </div>

                  
            </div>
          </div>

          <div class="reply">
             <div class="reply__container">
                <div class="reply__img">
                    <img src="images/CommenterAvatar.jpg" alt="">
                </div>

                <div class="reply__inner">
                    <div class="reply__bg">
                        <p class="reply__name">David W.</p>
                        <p class="reply__comment">
                            I've always looked for a natural way to improve my health, and GroMax is
                             the perfect choice. These gummy bears are natural,
                             free of harmful additives, and work better than any other product I've tried. 
                             I recommend it to anyone who values natural ingredients and effectiveness!
                        </p>          
                    </div>

                    <div class="response">
                        <p class="response__text response__text-weight">Like</p>
                        <p class="response__text response__text-weight">Reply</p>
                        <p class="response__text">5m</p>
                    </div>
                </div>
             </div>
          </div>

        </div>

            <div class="comment__container comment__container-margin none">
            <div class="user">

                <div class="user__img">
                    <img src="images/rrrr.png" alt="">
                </div>

               <div class="user__info">

                  <div class="user__top">
                     <p class="user__name">Michael J.</p>
                     <div class="user__icon">
                        <img src="images/RecommendIcon.svg" alt="">
                     </div>
                     <p class="user__priority">recommends</p>
                  </div>

                  <div class="user__bottom">
                     <p class="user__time">30m • </p>
                     <div class="user__world">
                        <img src="images/EarthIcon.svg" alt="">
                     </div>
                  </div>

               </div>

               <div class="user__setting">
                   <img src="images/MenuButton.svg" alt="">
               </div>

            </div>

            <p class="comment__text">
            GroMax has truly changed my life for the better
            . I've noticed significant improvement
             without any side effects. It's a fantastic product that works exactly as promised!
            </p>

            <div class="likes">
              <div class="likes__container">
               <div class="likes__btn">
                    <div class="like__elemen">
                        <img src="images/like.svg" alt="">
                    </div>

                    <div class="like__elemen">
                        <img src="images/love.svg" alt="">
                    </div>
               </div>

               <p class="like__text">
                  You & 147 other
               </p>

               <p class="like__text like__text-right">
                  0 Comments
               </p>

            </div>
          </div>

          <div class="share">
            <div class="shere__container">
                <div class="item">
                  <div class="item__container">

                    <div class="item__img">
                        <img src="images/Frame 3.svg" alt="">
                    </div>
                    <p class="item__text item__text-color">Like</p>
                  </div>
                </div>

                <div class="item">
                    <div class="item__container">
  
                      <div class="item__img">
                          <img src="images/dare.svg" alt="">
                      </div>
                      <p class="item__text ">Comment</p>
                    </div>
                  </div>

                  <div class="item">
                    <div class="item__container">
  
                      <div class="item__img">
                          <img src="images/forward.svg" alt="">
                      </div>
                      <p class="item__text">Share</p>
                    </div>
                  </div>


            </div>
          </div>
        </div>
    </div>

    
 
    <footer class="footer">

        <div class="footer__container">
            <div class="footer__header">
                <div class="footer__logo">
                    <img src="images/footer__logo.svg" alt="">
                </div>
            </div>
             
            <div class="links__container">
                <ul class="links">
                    <li class="link__item">
                        <a href="#quiz" class="link__anca">About Men's Health</a>
                    </li>
                    <li class="link__item">
                        <a href="#quiz" class="link__anca">Advertise</a>
                    </li>
                    <li class="link__item link__item-width">
                        <a href="#quiz" class="link__anca">Other Hearst Subscriptions</a>
                    </li>
                </ul>
                
                <ul class="links">
                    <li class="link__item">
                        <a href="#quiz" class="link__anca">Newsletter</a>
                    </li>
                    <li class="link__item">
                        <a href="#quiz" class="link__anca">Subscribe</a>
                    </li>
                    <li class="link__item link__item-width">
                        <a href="#quiz" class="link__anca">Media Kit</a>
                    </li>
                </ul> 

                <ul class="links">
                    <li class="link__item">
                        <a href="#quiz" class="link__anca">Customer Care</a>
                    </li>
                    <li class="link__item link__item-width">
                        <a href="#quiz" class="link__anca">Give a Gift</a>
                    </li>
                
                </ul> 
                
                <ul class="links">
                    <li class="link__item">
                        <a href="#" class="link__anca">E-prints, Reprints</a>
                    </li>
                    <li class="link__item link__item-width">
                        <a href="#quiz" class="link__anca">Manage Email Preferences</a>
                    </li>
                
                </ul>  
            </div>

            <div class="footer__inner">
                <p class="footer__description footer__description-height1">A Part of Hearst Digital Media</p>
                <p class="footer__description footer__description-height2">We may earn commission from links on this page, but we only recommend products we back.</p>
                <p class="footer__description footer__description-height3">©2024 Hearst Magazines, Inc. All Rights Reserved.</p>

            

             
            </div>

            <ul class="data">
                <li class="data__item data__item-1">
                    <a href="#quiz" class="data__link">Privacy Notice</a>
                </li>

                <li class="data__item data__item-2">
                    <a href="#quiz" class="data__link">CA Notice at Collection</a>
                </li>

                <li class="data__item data__item-3">
                    <a href="#quiz" class="data__link">Your CA Privacy Rights/Shine the Light</a>
                </li>

                <li class="data__item data__item-4">
                    <a href="#quiz" class="data__link">DAA Industry Opt Out</a>
                </li>

                <li class="data__item data__item-5">
                    <a href="#quiz" class="data__link">Terms of Use</a>
                </li>

                <li class="data__item data__item-6">
                    <a href="#quiz" class="data__link">Site Map</a>
                </li>
            </ul>

            <div class="main-link__container">
                <a href="#quiz" class="main-link">YOUR PRIVACY CHOICES: OPT OUT OF SALE/TARGETED ADS</a>
            </div>
            
            
        

        </div>
        
    </footer>
   
   
  
    <script src="js/app.js"></script>

    <script>

const totalMinutes = 558;
        let remainingTime = totalMinutes * 60; // Convert minutes to seconds

       
        function updateCountdown() {
            const minutes = Math.floor(remainingTime / 60);
            const seconds = remainingTime % 60;


            const displaySeconds = String(seconds).padStart(2, '0');


            let arrayKeys = ["el1", "el2", "el3"]

            let char = minutes.toString();
            const charArray = char.split('');
            console.log(charArray)
            arrayKeys.forEach(element=> {
                if (element === "el1") {
                    document.getElementById(element).textContent  = charArray[0]
                }
                if (element === "el2") {
                    document.getElementById(element).textContent  = charArray[1]
                }
       
                if (element === "el3") {
                    document.getElementById(element).textContent  = charArray[2]
                }
       
       
            })
           
            if (remainingTime > 0) {
                remainingTime--; 
            } 

            
        }


        const timer = setInterval(updateCountdown, 1000);

        updateCountdown();

        function validateForm() {

            let email = document.getElementById("input").value;

            if (email === "") {
                document.querySelector(".danger").style.display = "block"
                return false; 
                
            }


            const emailPattern = /\S+@\S+\.\S+/;
            if (!emailPattern.test(email)) {
                document.querySelector(".danger").style.display = "block"
                return false;

            }

            document.querySelector(".danger").style.display = "none"

            return true;  
        }
    </script>
</body>
</html>