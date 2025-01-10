# YZU-1131-Web-Final-Project

## v0.1.6 feat: Finish Restaurant Gallery in Index Page

* Features
    1. Update Gallery Data
        * Template
            ```html
            <div class="col-lg-4 col-md-6">
                <div class="property-item rounded overflow-hidden">
                    <div class="position-relative overflow-hidden">
                        <a href="[Restaurant Google Map Link]"><img class="img-fluid" src="[Restaurant Photo Path]" alt=""></a>
                        <div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">[Reataurant Category]</div>
                        <div class="bg-white rounded-top  position-absolute start-0 bottom-0 mx-4 pt-1 px-3">[Restaurant Type]</div>
                    </div>
                    <div class="p-4 pb-0">
                    <a class="d-block h5 mb-2 text-primary" href="[Restaurant Google Map Link]">[Restaurant Engilsh Name]</a>
                    <h6 class="mb-3">[Vaild Payment]</h6>
                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>[Restaurant Address]</p>
                    </div>
                    <div class="d-flex border-top">
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-comment text-primary me-2"></i>[Restaurant TEL]</small>
                    <small class="flex-fill text-center border-end py-2"><i class="fa fa-star text-primary me-2"></i>[Restaurant Rate]</small>
                    </div>
                </div>
            </div>
            ```
    2. Resize img 
        * Size : 579 px * 434 px
        * Resized img in `C:\xampp\htdocs\final\YZU-1131-Web-Final-Project\img\index\restaurant gallery`

## feat: Update Yuan Ze University Gallery、Modify Team Intro Section、Modify Professor Section、Delete About Section

* Features
    1. Update Yuan Ze University Gallery
        * Template
            ```html
            <!-- [Seciotn Name] -->
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <a class="cat-item d-block bg-light text-center rounded p-3" href="[Seciotn Link]">
                    <div class="rounded p-4">
                        <div class="icon mb-3">
                            <img class="img-fluid" src="./img/index/yz gallery/about.jpg" alt="Icon">
                        </div>
                        <h6> [Seciotn Name]</h6>
                        <span> [Seciotn Remark]</span>
                    </div>
                </a>
            </div>
            ```
    2. Modify Team Intro Section
        * Change `Bella Yu` into `Yupi Yu`
    3. Modify Professor Section
        * Modify Introduction、Name、TEL、Email
        * Make sure that TEL and MAIL button is available
    4. Delete About Section
        * DELETED Code
            ```html
            <!-- About Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="about-img position-relative overflow-hidden p-5 pe-0">
                                <img class="img-fluid w-100" src="img/about.jpg">
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="mb-4">#1 Place To Find The Perfect Property</h1>
                            <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Tempor erat elitr rebum at clita</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Aliqu diam amet diam et eos</p>
                            <p><i class="fa fa-check text-primary me-3"></i>Clita duo justo magna dolore erat amet</p>
                            <a class="btn btn-primary py-3 px-5 mt-3" href="">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->
            ```

## feat: Update Website Production Team Info

* Features
    * Aslan
        * Upload Pictures
        * Update Social Media Link
    * Ann : Update Name
    * Bella : Update Name
    * Lica : Update Name

## feat: Update Website Icon、Modify Team Intro Section、Add About Us、Adjust img Classification

* Features
    1. Update Website Icon
        * Affected：Favicon、Navbar
    2. Modify Team Intro Section
        * Modify New Pofessional Title、Change the title to `Website Production Team`
    3. Add About Us
        * To Navbar
        * Create `about.php`
    4. Adjust img Classification
        * Add `restaurant gallery` and `team` folders to the `img/index`
        * Change `yzu-logo.png` into `icon.jpg`
        * Move the website icon - `icon.jpg` out of the `img/index` folder

## github: Merge `moyu` Branch and `addPic` Branch、Update `main` Position

## feat: ReDesign Restaurant Gallery

* Features
    1. Change `For Rent`、`For Sell`、`Features` Into `NTD$ 0 ~ NTD$ 200`、`NTD$ 200 ~ NTD$ 400`、`NTD$ 400 Up`
    2. Set `NTD$ 0 ~ NTD$ 200` Part Into Default Value
    3. Make Sure The Degree Button is Valid

## feat: Add Index Pictures

* Features
    1. Restaurant Gallery
        * smiling-fish-1.jpg
        * smiling-fish-2.jpg
        * smiling-fish-3.jpg
        * xingren-canteen-1.jpg
        * xingren-canteen-2.jpg
        * xingren-canteen-3.jpg
        * muti-italian-kitchen-1.jpg
        * muti-italian-kitchen-2.jpg
        * muti-italian-kitchen-3.jpg
        * yixin-cold-noodles-1.jpg
        * yixin-cold-noodles-2.jpg
        * yixin-cold-noodles-3.jpg
        * cross-run-1.jpg
        * cross-run-2.jpg
        * cross-run-3.jpg
        * Sauce-roasted-pork-and-egg-toast-1.jpg
        * Sauce-roasted-pork-and-egg-toast-2.jpg
        * Sauce-roasted-pork-and-egg-toast-3.jpg
        * Sauce-roasted-pork-and-egg-toast-4.jpg
        * yzu-logo.png

## feat: Modify Footer Info

* Features
    1. Change the Info of Get In Touch
        <details>
        <summary>Code</summary>

        ```html
        <h5 class="text-white mb-4">Get In Touch</h5>
            <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>No.135 Yuan-Tung Road, Chung-Li</p>
            <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+886 03 463 8800</p>
            <p class="mb-2"><i class="fa fa-envelope me-3"></i>yzusaworking@gmail.com</p>
            <div class="d-flex pt-2">
        ```
        </details>

    2. Change CopyRights Name
        <details>
        <summary>Code</summary>
            
        ```html
        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Explore YZU</a>, All Right Reserved. 
        ```
        </details>

## feat: Modify Index Header Carousel Pic、Adjust Version Code

* Features
    1. Modify Index Header Carousel Pic
        * Add a folder called `index` in `img`
            * Add new carousel pictures into `img/index`
    2. Adjust Version Code
        * New Code：v`[Big Version]`.`[Pages]`.`[Working Progress]`

## style: Adjust README Layout

## feat: Finish Modify Navbar、Change .html Files To .php、Delete Unused Files

* Features
    * Finish Modify Navbar
        1. Add `Explore YZU` Word
            <details>
            <summary>Code</summary>
               
            ```html
            <h1 class="m-0 text-primary">
                <span style="color:#272727;">Explore</span>
                <span style="color:#FF2D2D;">Y</span><span style="color:#46A3FF;">Z</span><span style="color:#FFDC35;">U</span>
            </h1>
            ```
            </details>
        2. Change Links to `Home` `EAT` `PLAY` `TRAFFIC` `CONTACT` `SIGN IN`
    * Change .html Files To .php
        * Affected Files
            1. `index.html` -> `index.php`
            2. `about.html` -> `eat.html` -> `est.php`
            3. `contact.html` -> `contact.php`
            4. `404.html` -> `404.php`
            5. `property-agent.html` -> `property-agent.php`
            6. `property-list.html` -> `property-list.php`
            7. `property-type.html` -> `property-type.php`
            8. `testimonial.html` -> `testimonial.php`
    * Delete Unused Files
        * Affected Files
            1. `LICENSE.txt`
            2. `real-estate-html-template.jpg`

## Initial ReadME File Message

1. Initialize Git Repo
    * Commands
        ```
        git inti
        git clone [Link to your Repo、Ex：https://......git]        -> For Https
        git clone [Link to your Repo、Ex：git@github.com......git]  -> For SSH
        ```
2. Github Command
    1. Initilize git repository
        ```
            git init
            git add .
            git commit -m "Initialize"
            git branch -M main
            git remote add origin [Link to your Repo、Ex：https://......git]
            git push -u origin main
        ```
    2. Pull Commit
        ```
            git pull
        ```
        or
        ```
            git pull origin main
        ```
    3. Push Code
        ```
            git add [Files you want to push]
            git commit -m "[Commit Message]"
            git push
        ```
        or
        ```
            git add [Files you want to push]
            git commit -m "[Commit Message]"
            git push origin main
        ```

## Initialize

* Features
    1. Download Website Templete From `Free CSS Templete`
        - Link：https://www.free-css.com/free-css-templates/page295/makaan
