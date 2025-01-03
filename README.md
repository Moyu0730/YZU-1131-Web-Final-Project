# YZU-1131-Web-Final-Project

## v0.1.4 feat: ReDesign Restaurant Gallery

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
    2. Footer Photo Gallery
        * 

## v0.1.3 feat: Modify Footer Info

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

## v0.1.2 feat: Modify Index Header Carousel Pic、Adjust Version Code

* Features
    1. Modify Index Header Carousel Pic
        * Add a folder called `index` in `img`
            * Add new carousel pictures into `img/index`
    2. Adjust Version Code
        * New Code：v`[Big Version]`.`[Pages]`.`[Working Progress]`

## v0.1.1 style: Adjust README Layout

## v0.1.0 feat: Finish Modify Navbar、Change .html Files To .php、Delete Unused Files

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

## v0.0.1 Initial ReadME File Message

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

## v0.0.0 Initialize

* Features
    1. Download Website Templete From `Free CSS Templete`
        - Link：https://www.free-css.com/free-css-templates/page295/makaan
