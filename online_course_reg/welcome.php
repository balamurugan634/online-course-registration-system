<?php
    include 'connect.php';
    session_start();
    if(isset($_POST['submit'])){
        $course=$_POST['course-name'];
        $_SESSION['cname'] = $course;
        header('location:course_reg.php');

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./welcome.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="full-container">
        <div class="nav">
            <div class="logo"><h1>Online course registration system</h1></div>
            <div class="menu">
                <li><a href="">Home</a></li>
                <li><a href="./mycourse.php">My courses</a></li>
            </div>
            <div class="profile"><i class="fa fa-user"></i></div>
        </div>
        <div class="welcome-tag">
            <div class="welcome-quote">
            <h1>Welcome <span style="color:red;"> <?php echo $_SESSION['log_name']; ?></span>,</h1>
            <p>"Welcome to our online course registration! Explore our diverse range of courses tailored to your interests and goals. Get started today and embark on your journey of learning and growth."</p>
        </div>
        <div class="slider">
            <div class="slide-track">
                <div class="slide">
                    <img src="./assets/img1.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img3.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img4.webp" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img5.webp" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img6.webp" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img7.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img8.jpg" alt="">
                <div class="slide">
                        <img src="./assets/img9.jpg" alt="">
                </div>
                </div>
                <div class="slide">
                    <img src="./assets/img1.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img2.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img3.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img4.webp" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img5.webp" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img6.webp" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img7.png" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img8.jpg" alt="">
                </div>
                <div class="slide">
                    <img src="./assets/img9.jpg" alt="">
                </div>
            </div>

        </div>
        </div>
        <div class="courses">
            <div class="course-head">
                <h1>Our courses</h1>
                <p>Unlock Your Potential, Anytime, Anywhere, with Online Courses!</p>
            </div>
            <div class="course-grid">
                <div class="course-card">
                    <div class="card-img"> 
                         <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img2.jpg" class="d-block w-100" alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img1.png" class="d-block w-100"
                                    alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img3.png" class="d-block w-100"
                                    alt="First Image">
                               
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                      
                    </div></div>
                    <div class="card-head">
                        python beginners 2024
                    </div>
                    <div class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, labore.</div>
                    <div class="card-footer">
                        <div class="card-rate"><span><i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></div>
                    <div class="card-btn">
                        <form action="" method="post">
                            <input type="hidden" name="course-name" value="Python beginners 2024">
                        <input type="submit" value="Register" name="submit">
                    </form>
                    </div>
                </div>
                </div>
                <div class="course-card">
                    <div class="card-img"> 
                         <div id="myCarousel1" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#myCarousel1" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img2.jpg" class="d-block w-100" alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img1.png" class="d-block w-100"
                                    alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img3.png" class="d-block w-100"
                                    alt="First Image">
                               
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel1" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel1" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                      
                    </div></div>
                    <div class="card-head">
                        python beginners 2024
                    </div>
                    <div class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, labore.</div>
                    <div class="card-footer">
                        <div class="card-rate"><span><i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></div>
                    <div class="card-btn">
                        <form action="" method="post">
                            <input type="hidden" name="course-name" value="Java">
                        <input type="submit" value="Register" name="submit">
                    </form>
                    </div>
                </div>
                </div>
                <div class="course-card">
                    <div class="card-img"> 
                         <div id="myCarouse2" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarouse2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#myCarouse2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#myCarouse2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img2.jpg" class="d-block w-100" alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img1.png" class="d-block w-100"
                                    alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img3.png" class="d-block w-100"
                                    alt="First Image">
                               
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarouse2" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#myCarouse2" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                      
                    </div></div>
                    <div class="card-head">
                        python beginners 2024
                    </div>
                    <div class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, labore.</div>
                    <div class="card-footer">
                        <div class="card-rate"><span><i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></div>
                    <div class="card-btn">
                        <input type="submit" value="Register">
                    </div>
                </div>
                </div>
                <div class="course-card">
                    <div class="card-img"> 
                         <div id="myCarousel3" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#myCarousel3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img2.jpg" class="d-block w-100" alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img1.png" class="d-block w-100"
                                    alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img3.png" class="d-block w-100"
                                    alt="First Image">
                               
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel3" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel3" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                      
                    </div></div>
                    <div class="card-head">
                        python beginners 2024
                    </div>
                    <div class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, labore.</div>
                    <div class="card-footer">
                        <div class="card-rate"><span><i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></div>
                    <div class="card-btn">
                        <input type="submit" value="Register">
                    </div>
                </div>
                </div>
                <div class="course-card">
                    <div class="card-img"> 
                         <div id="myCarousel4" class="carousel slide carousel-fade" data-ride="carousel">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#myCarousel4" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img2.jpg" class="d-block w-100" alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img1.png" class="d-block w-100"
                                    alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img3.png" class="d-block w-100"
                                    alt="First Image">
                               
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel4" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel4" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                      
                    </div></div>
                    <div class="card-head">
                        python beginners 2024
                    </div>
                    <div class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, labore.</div>
                    <div class="card-footer">
                        <div class="card-rate"><span><i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></div>
                    <div class="card-btn">
                        <input type="submit" value="Register">
                    </div>
                </div>
                </div>
                <div class="course-card">
                    <div class="card-img"> 
                         <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel5">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#myCarousel5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#myCarousel5" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#myCarousel5" data-bs-slide-to="2" aria-label="Slide 3"></button>
                              </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./assets/img2.jpg" class="d-block w-100" alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img1.png" class="d-block w-100"
                                    alt="First Image">
                                
                            </div>
                            <div class="carousel-item">
                                <img src="./assets/img3.png" class="d-block w-100"
                                    alt="First Image">
                               
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel5" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#myCarousel5" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                              </button>
                        </div>
                      
                    </div></div>
                    <div class="card-head">
                        python beginners 2024
                    </div>
                    <div class="card-para">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, labore.</div>
                    <div class="card-footer">
                        <div class="card-rate"><span><i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span></div>
                    <div class="card-btn">
                        <input type="submit" value="Register">
                    </div>
                </div>
                </div>
                </div>
                <footer style="width:100%;display flex;align-items:center;justify-content:flex-end;margin: top 100px;position:fixed;">
        <h3 style="color:white; text-align:end;line-height:70px;padding-right:25px;">Designed and Developed by Bala murugan</h3>
    </footer>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>